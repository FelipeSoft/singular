import { FastifyReply, FastifyRequest } from 'fastify';
import { EnrollmentLock, EnrollmentRegistry } from '../../../shared/types/EnrollmentTypes';

export const enrollmentRegistry = async (request: FastifyRequest<{ Body: EnrollmentRegistry }>, reply: FastifyReply) => {
    reply.code(200).send({ message: "hello!" })
};

export const enrollmentLock = async (request: FastifyRequest<{ Body: EnrollmentLock }>, reply: FastifyReply) => {
    reply.code(200).send({ message: "hello!" })
};
