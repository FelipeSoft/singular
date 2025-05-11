import { FastifyPluginAsync } from "fastify";
import { enrollmentRegistry } from "../controllers/EnrollmentController";
import { EnrollmentRegistry } from "../../../shared/types/EnrollmentTypes";

const enrollmentRoutes: FastifyPluginAsync = async (fastify) => {
    fastify.post<{ Body: EnrollmentRegistry }>('/enrollment/registry', { handler: enrollmentRegistry })
};


export default enrollmentRoutes