import { FastifyReply, FastifyRequest } from 'fastify';
import { ClassAdd, ClassRemove, ClassUpdate } from '../../../../shared/types/ClassTypes';

export const classCancel = async (request: FastifyRequest, reply: FastifyReply) => {
    reply.code(200).send({ message: "The class was successfull canceled" })
};

export const classAdminister = async (request: FastifyRequest, reply: FastifyReply) => {
    reply.code(200).send({ message: "The class was successfull administered" })
};

export const classAdd = async (request: FastifyRequest<{ Body: ClassAdd }>, reply: FastifyReply) => {
    reply.code(200).send({ message: "The class was successfull scheduled" })
};

export const classUpdate = async (request: FastifyRequest<{ Body: ClassUpdate }>, reply: FastifyReply) => {
    reply.code(200).send({ message: "The class was updated successfully" })
};

export const classRemove = async (request: FastifyRequest<{ Body: ClassRemove }>, reply: FastifyReply) => {
    reply.code(200).send({ message: "The class was removed successfully" })
};
