import { FastifyPluginAsync } from "fastify";
import { homeController } from "../controllers/HomeController";

const homeRoutes: FastifyPluginAsync = async (fastify) => {
  fastify.get('/home', { handler: homeController });
};

export default homeRoutes;