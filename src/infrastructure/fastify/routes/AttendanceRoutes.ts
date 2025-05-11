import { FastifyPluginAsync } from "fastify";

//Precisa atualizar e importar posteriormente 
const attendanceRoute: FastifyPluginAsync = async (fastify) => {
  fastify.post<{ Body: AttendanceRegistry }>('/attendance/registry', { handler: attendanceRegistry });
  fastify.post<{ Body: JustifyAbsence }>('/attendance/absence/justify', { handler: justifyAbsence });
};


export default attendanceRoute