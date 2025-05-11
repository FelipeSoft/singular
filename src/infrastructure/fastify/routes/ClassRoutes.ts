import { FastifyPluginAsync } from "fastify";
import { classRegistry, classUpdate, classRemove } from "../controllers/ClassController";
import { ClassRegistry, ClassUpdate, ClassRemove  } from "../../../shared/types/ClassTypes";


const classRoutes: FastifyPluginAsync = async (fastify) => {
    fastify.post<{ Body: ClassRegistry }>('/class/registry', { handler: classRegistry })
    fastify.put<{ Body: ClassUpdate }>('/class/update', { handler: classUpdate })
    fastify.delete<{Body: ClassRemove}>('/class/remove', { handler: classRemove})
};

export default classRoutes