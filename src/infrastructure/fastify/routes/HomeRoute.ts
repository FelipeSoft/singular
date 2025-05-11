import { FastifyPluginAsync } from "fastify";
import { homeSchema } from "../schemas/HomeSchema";
import { homeController } from "../controllers/HomeController";
import { HomeBody } from "../../../shared/types/HomeTypes";

const homeRoute: FastifyPluginAsync = async (fastify) => {
  fastify.post<{ Body: HomeBody }>('/home', { schema: homeSchema, handler: homeController });
};

export default homeRoute

//asdasddasd