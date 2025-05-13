import { FastifyPluginAsync } from "fastify";
import { AttendanceRegistry, JustifyAbsence } from "../../../shared/types/AttendanceTypes";
import { attendanceRegistry, justifyAbsence, studentAttendance } from "../controllers/AttendanceControler";

const attendanceRoutes: FastifyPluginAsync = async (fastify) => {
  fastify.post<{ Body: AttendanceRegistry }>('/attendance/registry', { handler: attendanceRegistry });
  fastify.post<{ Body: JustifyAbsence }>('/attendance/absence/justify', { handler: justifyAbsence });
  fastify.get('/attendance/student/:id', { handler: studentAttendance });
};


export default attendanceRoutes