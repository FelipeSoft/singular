import { FastifyReply, FastifyRequest } from 'fastify';
import { ClassRegistry, ClassRemove, ClassUpdate } from '../../../shared/types/ClassTypes';


export const classRegistry = async (request: FastifyRequest<{ Body: ClassRegistry }>, reply: FastifyReply) => {
    reply.code(200).send({ message: "The class is sucessfull schelduled" })
};

export const classUpdate = async (request: FastifyRequest<{ Body: ClassUpdate }>, reply: FastifyReply) => {
    reply.code(200).send({ message: "The class is Updated Sucessfully" })
};

export const classRemove = async (request: FastifyRequest<{ Body: ClassRemove }>, reply: FastifyReply) => {
    reply.code(200).send({ message: "You Removed Your Class" })
};
