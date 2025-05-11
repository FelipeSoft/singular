import { FastifyReply, FastifyRequest } from 'fastify';

//Preciso importar quando atualizado
export const attendanceRegistry = async (request: FastifyRequest<{ Body: AttendanceRegistry }>, reply: FastifyReply) => {
    reply.code(200).send({ message: "hello!" })
};

//Preciso importar quando atualizado
export const justifyAbsence = async (request: FastifyRequest<{ Body: JustifyAbsence }>, reply: FastifyReply) => {
  reply.code(200).send({ message: "hello!" })
};

