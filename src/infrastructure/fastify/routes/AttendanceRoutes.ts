import { FastifyPluginAsync } from "fastify";
import { AttendanceRegistry, JustifyAbsence } from "../../../shared/types/AttendanceTypes";
import { attendanceRegistry, justifyAbsence } from "../controllers/AttendanceControler";

//Precisa atualizar e importar posteriormente 
const attendanceRoute: FastifyPluginAsync = async (fastify) => {
  fastify.post<{ Body: AttendanceRegistry }>('/attendance/registry', { handler: attendanceRegistry });
  fastify.post<{ Body: JustifyAbsence }>('/attendance/absence/justify', { handler: justifyAbsence });
};


export default attendanceRoute