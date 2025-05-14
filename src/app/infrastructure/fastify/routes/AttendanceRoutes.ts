import { FastifyPluginAsync } from "fastify";
import { AttendanceRegistry, JustifyAbsence } from "../../../../shared/types/AttendanceTypes";
import { attendanceRegistry, checkStudentAttendance, justifyAbsence, renderAttendanceTracking, renderTakeAttendance } from "../controllers/AttendanceController";

const attendanceRoutes: FastifyPluginAsync = async (fastify) => {
  fastify.get('/attendance/take', { handler: renderTakeAttendance })
  fastify.get('/attendance/tracking', { handler: renderAttendanceTracking })
  fastify.post<{ Body: AttendanceRegistry }>('/attendance/registry', { handler: attendanceRegistry });
  fastify.post<{ Body: JustifyAbsence }>('/attendance/absence/justify', { handler: justifyAbsence });
  fastify.get('/attendance/student/check/:id', { handler: checkStudentAttendance });
};


export default attendanceRoutes