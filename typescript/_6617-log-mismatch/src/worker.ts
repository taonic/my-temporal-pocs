import { Context } from '@temporalio/activity';
import {
  DefaultLogger,
  LogLevel,
  makeTelemetryFilterString,
  NativeConnection,
  Runtime,
  Worker,
} from '@temporalio/worker';
import winston from 'winston';
import * as activities from './activities';

function getLogger(param: { ddSource: string; prettyPrint: boolean; logLevel: string; service: string; env: string }) {
  return winston.createLogger({
    level: param.logLevel,
    format: winston.format.json(),
    defaultMeta: { service: param.service },

    transports: [new winston.transports.Console(), new winston.transports.File({ filename: 'combined_.log' })],
  });
}

const logger = getLogger({
  logLevel: 'info',
  env: 'PROD',
  prettyPrint: false,
  ddSource: 'nodejs',
  service: 'temporal',
});

const winstonLogger = new DefaultLogger('INFO' as LogLevel, (entry) => {
  let additionalFields = {};
  // This is a hack we put in to let us process errors
  if (entry?.meta?.error && entry.meta.error instanceof Error) {
    additionalFields = {
      message: `${entry.message}: ${entry.meta.error.message}`,
      stack: entry.meta.error.stack,
    };
  }
  logger.log({
    level: entry.level.toLowerCase(),
    message: entry.message,
    timestamp: new Date(Number(entry.timestampNanos / 1_000_000n)).toISOString(),
    ...additionalFields,
    ...entry.meta,
  });
});

// Activities are not sandboxed, so the `console` global variable is the same for all activities, as well as other
// components executing in the same process (i.e. pretty much anything except workflow code). Consequently, binding
// `console` to a specfic activity would be wrong and cause leaks and mismatch of logs.
//
// Instead, replace the global `console` object with one that smartly forwards logs to the _current activity_'s
// logger, when applicable, or to the original `console.xxx` function otherwise.
const originalConsole = { ...globalThis.console };
globalThis.console = {
  log: (message: string, ...args: any[]) => {
    try {
      Context.current().log.info(message, ...args);
    } catch (e) {
      originalConsole.log(message, ...args);
    }
  },
  error: (message: string, ...args: any[]) => {
    try {
      Context.current().log.error(message, ...args);
    } catch (e) {
      originalConsole.error(message, ...args);
    }
  },
  warn: (message: string, ...args: any[]) => {
    try {
      Context.current().log.warn(message, ...args);
    } catch (e) {
      originalConsole.warn(message, ...args);
    }
  },
  info: (message: string, ...args: any[]) => {
    try {
      Context.current().log.info(message, ...args);
    } catch (e) {
      originalConsole.info(message, ...args);
    }
  },
  debug: (message: string, ...args: any[]) => {
    try {
      Context.current().log.debug(message, ...args);
    } catch (e) {
      originalConsole.debug(message, ...args);
    }
  },
  trace: (message: string, ...args: any[]) => {
    try {
      Context.current().log.debug(message, ...args);
    } catch (e) {
      originalConsole.debug(message, ...args);
    }
  },
} as typeof globalThis.console;

async function run() {
  Runtime.install({
    logger: winstonLogger,
    telemetryOptions: {
      logging: {
        filter: makeTelemetryFilterString({
          core: 'INFO' as LogLevel,
          other: 'INFO' as LogLevel,
        }),
        forward: {},
      },
    },
  });

  const connection = await NativeConnection.connect({
    address: 'localhost:7233',
  });
  const worker = await Worker.create({
    connection,
    namespace: 'default',
    taskQueue: 'hello-world',
    // Workflows are registered using a path as they run in a separate JS context.
    workflowsPath: require.resolve('./workflows'),
    activities,
  });

  console.log('Test from worker - before run');
  await worker.run();
  console.log('Test from worker - after run');
}

run().catch((err) => {
  console.error(err);
  process.exit(1);
});
