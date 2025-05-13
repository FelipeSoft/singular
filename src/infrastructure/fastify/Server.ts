import { configDotenv } from 'dotenv';
import Fastify, { FastifyInstance } from 'fastify';
import homeRoute from './routes/HomeRoutes';
import enrollmentRoutes from './routes/EnrollmentRoutes';
import classRoutes from './routes/ClassRoutes';
import attendanceRoutes from './routes/AttendanceRoutes';

const app: FastifyInstance = Fastify();
configDotenv()

app.register(homeRoute)
app.register(enrollmentRoutes)
app.register(classRoutes)
app.register(attendanceRoutes)

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

