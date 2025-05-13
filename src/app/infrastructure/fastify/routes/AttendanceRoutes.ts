import { FastifyPluginAsync } from "fastify";
import { AttendanceRegistry, JustifyAbsence } from "../../../../shared/types/AttendanceTypes";
import { attendanceRegistry, checkStudentAttendance, justifyAbsence } from "../controllers/AttendanceController";

const attendanceRoutes: FastifyPluginAsync = async (fastify) => {
  fastify.post<{ Body: AttendanceRegistry }>('/attendance/registry', { handler: attendanceRegistry });
  fastify.post<{ Body: JustifyAbsence }>('/attendance/absence/justify', { handler: justifyAbsence });
  fastify.get('/attendance/student/check/:id', { handler: checkStudentAttendance });
};


export default attendanceRoutes