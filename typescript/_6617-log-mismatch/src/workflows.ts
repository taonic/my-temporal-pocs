import { log, proxyActivities } from '@temporalio/workflow';
import type * as activities from './activities';

const { greet } = proxyActivities<typeof activities>({
  startToCloseTimeout: '1 minute',
});

export function initWorkflowLogger() {
  // The original `console` object is frozen. We need to create a new object to modify it.
  console = { ...console };
  console.log = (...args) => log.info(...args);
  console.info = (...args) => log.info(...args);
  console.warn = (...args) => log.warn(...args);
  console.error = (...args) => log.error(...args);
  console.debug = (...args) => log.debug(...args);
  console.trace = (...args) => log.debug(...args);
}

export async function example(name: string): Promise<string> {
  initWorkflowLogger();
  console.log(name);
  const s = await greet(name);
  console.log(name);
  return s;
}
