
import { Connection, Client } from '@temporalio/client';
import { example } from './workflows';
import { nanoid } from 'nanoid';

async function run() {
  const connection = await Connection.connect({ address: 'localhost:7233' });
  const client = new Client({
    connection,
  });

  const promises = []
  for (let i = 0; i < 10; i++) {
    for (let j = 0; j < 10; j++) {
      promises.push(
        client.workflow.start(example, {
          taskQueue: 'hello-world',
          args: [`workflow-${j}`],
          workflowId: `workflow-${j}-` + nanoid(),
        })
      );
    }
  }

  await Promise.all(promises)
}

run().catch((err) => {
  console.error(err);
  process.exit(1);
});
