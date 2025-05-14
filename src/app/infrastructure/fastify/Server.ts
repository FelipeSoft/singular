import { configDotenv } from 'dotenv';
import Fastify, { FastifyInstance } from 'fastify';
import enrollmentRoutes from './routes/EnrollmentRoutes';
import classRoutes from './routes/ClassRoutes';
import attendanceRoutes from './routes/AttendanceRoutes';
import view from '@fastify/view';
import fastifyStatic from '@fastify/static';
import path from "path";
import homeRoutes from './routes/HomeRoutes';
import userRoutes from './routes/UserRoutes';

configDotenv()

const app: FastifyInstance = Fastify({
  logger: true
});
app.register(fastifyStatic, {
  root: path.join(__dirname, '..', '..', '..', '..', 'public'),
  prefix: '/public/',
});

console.log(process.env.VIEWS_ROOT_PATH,)

app.register(view, {
  engine: {
    ejs: require('ejs')
  },
  root: process.env.VIEWS_ROOT_PATH,
  viewExt: 'ejs',
});

app.register(homeRoutes);
app.register(enrollmentRoutes);
app.register(classRoutes);
app.register(attendanceRoutes);
app.register(userRoutes);

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

