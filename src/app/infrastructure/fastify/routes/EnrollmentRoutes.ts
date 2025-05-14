import { FastifyPluginAsync } from "fastify";
import { enrollmentCancel, enrollmentEdit, enrollmentLock, enrollmentRecord, enrollmentSearch, renderEnrollmentRecords, renderEnrollStudent } from "../controllers/EnrollmentController";
import { EnrollmentCancel, EnrollmentEdit, EnrollmentLock, EnrollmentRecord } from "../../../../shared/types/EnrollmentTypes";

const enrollmentRoutes: FastifyPluginAsync = async (fastify) => {
    fastify.get('/enrollment/records', { handler: renderEnrollmentRecords })
    fastify.get('/enrollment/enroll-student', { handler: renderEnrollStudent })
    fastify.post<{ Body: EnrollmentRecord }>('/enrollment/record', { handler: enrollmentRecord })
    fastify.put<{ Body: EnrollmentEdit }>('/enrollment/edit', { handler: enrollmentEdit })
    fastify.put<{ Body: EnrollmentCancel }>('/enrollment/cancel', { handler: enrollmentCancel })
    fastify.put<{ Body: EnrollmentLock }>('/enrollment/lock', { handler: enrollmentLock })
    fastify.get('/enrollment/:id', { handler: enrollmentSearch })
};

export default enrollmentRoutes