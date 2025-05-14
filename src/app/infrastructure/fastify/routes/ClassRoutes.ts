import { FastifyPluginAsync } from "fastify";
import { classAdd, classUpdate, classRemove, classCancel, classAdminister, renderClassPlanning, renderClassExecution, renderAcademicStructure } from "../controllers/ClassController";
import { ClassAdd, ClassUpdate } from "../../../../shared/types/ClassTypes";

const classRoutes: FastifyPluginAsync = async (fastify) => {
    fastify.get('/class/planning', { handler: renderClassPlanning })
    fastify.get('/class/execution', { handler: renderClassExecution })
    fastify.get('/class/academic-structure', { handler: renderAcademicStructure })
    fastify.post<{ Body: ClassAdd }>('/class/add', { handler: classAdd })
    fastify.put<{ Body: ClassUpdate }>('/class/:classId/update', { handler: classUpdate })
    fastify.put('/class/:classId/cancel', { handler: classCancel })
    fastify.put<{ Body: ClassUpdate }>('/class/:classId/administer', { handler: classAdminister })
    fastify.delete('/class/:classId/remove', { handler: classRemove })
};

export default classRoutes