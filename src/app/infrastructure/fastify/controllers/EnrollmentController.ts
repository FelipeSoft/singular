import { FastifyReply, FastifyRequest } from 'fastify';
import { EnrollmentCancel, EnrollmentEdit, EnrollmentLock, EnrollmentRegistry } from '../../../../shared/types/EnrollmentTypes';

export const enrollmentRegistry = async (request: FastifyRequest<{ Body: EnrollmentRegistry }>, reply: FastifyReply) => {
    reply.code(200).send({ message: "hello!" })
};

export const enrollmentEdit = async (request: FastifyRequest<{ Body: EnrollmentEdit }>, reply: FastifyReply) => {
    reply.code(200).send({ message: "hello!" })
};

export const enrollmentCancel = async (request: FastifyRequest<{ Body: EnrollmentCancel }>, reply: FastifyReply) => {
    reply.code(200).send({ message: "hello!" })
};

export const enrollmentLock = async (request: FastifyRequest<{ Body: EnrollmentLock }>, reply: FastifyReply) => {
    reply.code(200).send({ message: "hello!" })
};

export const enrollmentSearch = async (request: FastifyRequest, reply: FastifyReply) => {
    reply.code(200).send({ message: "hello!" })
};

