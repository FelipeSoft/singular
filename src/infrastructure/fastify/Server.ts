import { configDotenv } from 'dotenv';
import Fastify, { FastifyInstance } from 'fastify';
import homeRoute from './routes/HomeRoute';

const app: FastifyInstance = Fastify();
configDotenv()

app.register(homeRoute)

const start = async () => {
  try {
    await app.listen({ port: Number(process.env.PORT) ?? 3000 });
    console.log(`🚀 Server running at http://localhost:${process.env.PORT ?? 3000}`);
  } catch (err) {
    app.log.error(err);
    process.exit(1);
  }
};

start();

