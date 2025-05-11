import { FastifyReply, FastifyRequest } from 'fastify';
import { HomeBody } from '../../../shared/types/HomeTypes';
import { HomeUseCase } from '../../../application/usecases/HomeUseCase';
import { HomeRepositoryMySQL } from '../../mysql/HomeRepositoryMySQL';

const homeRepositoryMySQL = new HomeRepositoryMySQL()
const homeUseCase = new HomeUseCase(homeRepositoryMySQL)

export const homeController = async (request: FastifyRequest<{ Body: HomeBody }>, reply: FastifyReply) => {
    const { text } = request.body;
    

    if (homeUseCase.test()) {
        return reply.code(200).send({ received: text });
    }
    if (!homeUseCase.test()) {
        return reply.code(200).send({ message: "ajsakjska" });
    }
};
