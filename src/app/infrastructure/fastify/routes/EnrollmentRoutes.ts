import { FastifyPluginAsync } from "fastify";
import { enrollmentCancel, enrollmentEdit, enrollmentLock, enrollmentRegistry, enrollmentSearch } from "../controllers/EnrollmentController";
import { EnrollmentCancel, EnrollmentEdit, EnrollmentLock, EnrollmentRegistry } from "../../../../shared/types/EnrollmentTypes";

const enrollmentRoutes: FastifyPluginAsync = async (fastify) => {
    fastify.post<{ Body: EnrollmentRegistry }>('/enrollment/registry', { handler: enrollmentRegistry })
    fastify.put<{ Body: EnrollmentEdit }>('/enrollment/edit', { handler: enrollmentEdit })
    fastify.put<{ Body: EnrollmentCancel }>('/enrollment/cancel', { handler: enrollmentCancel })
    fastify.put<{ Body: EnrollmentLock }>('/enrollment/lock', { handler: enrollmentLock })
    fastify.get('/enrollment/:id', { handler: enrollmentSearch })
};


export default enrollmentRoutes