import { FastifyPluginAsync } from "fastify";
import { enrollmentLock, enrollmentRegistry } from "../controllers/EnrollmentController";
import { EnrollmentLock, EnrollmentRegistry } from "../../../shared/types/EnrollmentTypes";

const enrollmentRoutes: FastifyPluginAsync = async (fastify) => {
    fastify.post<{ Body: EnrollmentRegistry }>('/enrollment/registry', { handler: enrollmentRegistry })
    fastify.put<{ Body: EnrollmentLock}>('/enrollment/lock', {handler : enrollmentLock})
};


export default enrollmentRoutes