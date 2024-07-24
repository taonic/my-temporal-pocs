const delay = (ms: number) => {
  return new Promise((resolve) => setTimeout(resolve, ms));
};

export async function greet(name: string): Promise<string> {
  await delay(200);

  console.log(name);

  return 'test';
}
