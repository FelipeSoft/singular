import { FastifyPluginAsync } from "fastify";
import { homeController } from "../controllers/HomeController";
import { HomeBody } from "../../../../shared/types/HomeTypes";

const homeRoutes: FastifyPluginAsync = async (fastify) => {
  fastify.get<{ Body: HomeBody }>('/home', { handler: homeController });
};

export default homeRoutes;