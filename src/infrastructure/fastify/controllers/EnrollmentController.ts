import { FastifyReply, FastifyRequest } from 'fastify';
import { EnrollmentRegistry } from '../../../shared/types/EnrollmentTypes';

export const enrollmentRegistry = async (request: FastifyRequest<{ Body: EnrollmentRegistry }>, reply: FastifyReply) => {
    reply.code(200).send({ message: "hello!" })
};
