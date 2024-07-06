import { Context } from "@temporalio/activity";

export function initActivityLogger() {
    const log = Context.current().log;

    console.log = (...args) => log.info(...args);
    console.info = (...args) => log.info(...args);
    console.warn = (...args) => log.warn(...args);
    console.error = (...args) => log.error(...args);
    console.debug = (...args) => log.debug(...args);
    console.trace = (...args) => log.debug(...args);
}

const delay = (ms: number) => {
    return new Promise( resolve => setTimeout(resolve, ms) );
}

export async function greet(name: string): Promise<string> {
    initActivityLogger();

    await delay(200);

    console.log(name);

    return "test";
}
