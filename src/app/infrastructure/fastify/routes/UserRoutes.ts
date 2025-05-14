import { FastifyPluginAsync } from "fastify";
import { renderUsersManagement } from "../controllers/UserController";

const userRoutes: FastifyPluginAsync = async (fastify) => {
    fastify.get('/users/management', { handler: renderUsersManagement })
};

export default userRoutes