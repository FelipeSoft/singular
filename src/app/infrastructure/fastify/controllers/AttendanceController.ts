import { FastifyReply, FastifyRequest } from 'fastify';
import { AttendanceRegistry, JustifyAbsence } from '../../../../shared/types/AttendanceTypes';

export const attendanceRegistry = async (request: FastifyRequest<{ Body: AttendanceRegistry }>, reply: FastifyReply) => {
  reply.code(200).send({ message: "hello!" })
};

export const justifyAbsence = async (request: FastifyRequest<{ Body: JustifyAbsence }>, reply: FastifyReply) => {
  reply.code(200).send({ message: "hello!" })
};

export const checkStudentAttendance = async (request: FastifyRequest, reply: FastifyReply) => {
  reply.code(200).send({ message: "hello!" })
};

