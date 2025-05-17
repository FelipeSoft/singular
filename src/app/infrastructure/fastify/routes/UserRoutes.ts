import { FastifyPluginAsync } from "fastify";
import { createUser, deleteUser, getUsers, renderUsersManagement, updateUser } from "../controllers/UserController";

const userRoutes: FastifyPluginAsync = async (fastify) => {
    fastify.get('/users/management', { handler: renderUsersManagement })
    fastify.get('/users', { handler: getUsers })
    fastify.post('/users', { handler: createUser })
    fastify.put('/users/:userId', { handler: updateUser })
    fastify.delete('/users/:userId', { handler: deleteUser })
};

export default userRoutes