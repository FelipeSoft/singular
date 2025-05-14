import { FastifyReply, FastifyRequest } from 'fastify';
import { EnrollmentCancel, EnrollmentEdit, EnrollmentLock, EnrollmentRecord } from '../../../../shared/types/EnrollmentTypes';
import path from "path";
import fs from "fs";
import ejs from 'ejs';
import { ActiveSubTab, ActiveTab } from '../../../../shared/types/ui/ActiveTab';

export const renderEnrollmentRecords = async (request: FastifyRequest, reply: FastifyReply) => {
    const filePath = path.join(process.env.VIEWS_ROOT_PATH ?? "", "/enrollment/records.ejs");
    const pageContent = fs.readFileSync(filePath, 'utf-8');
    const renderedContent = ejs.render(pageContent);

    const data: { tab: ActiveTab, subtab?: ActiveSubTab } = {
        tab: "enrollment",
        subtab: "enrollment-records"
    }

    return reply.view("layout.ejs", {
        title: "Singular | Matrículas - Registro de Matrículas",
        body: renderedContent,
        tab: data.tab,
        subtab: data.subtab
    })
};

export const renderEnrollStudent = async (request: FastifyRequest, reply: FastifyReply) => {
    const filePath = path.join(process.env.VIEWS_ROOT_PATH ?? "", "/enrollment/enroll-student.ejs");
    const pageContent = fs.readFileSync(filePath, 'utf-8');
    const renderedContent = ejs.render(pageContent);

    const data: { tab: ActiveTab, subtab?: ActiveSubTab } = {
        tab: "enrollment",
        subtab: "enroll-student"
    }

    return reply.view("layout.ejs", {
        title: "Singular | Matrículas - Matricular Aluno",
        body: renderedContent,
        tab: data.tab,
        subtab: data.subtab
    })
};

export const enrollmentRecord = async (request: FastifyRequest<{ Body: EnrollmentRecord }>, reply: FastifyReply) => {
    reply.code(200).send({ message: "hello!" })
};

export const enrollmentEdit = async (request: FastifyRequest<{ Body: EnrollmentEdit }>, reply: FastifyReply) => {
    reply.code(200).send({ message: "hello!" })
};

export const enrollmentCancel = async (request: FastifyRequest<{ Body: EnrollmentCancel }>, reply: FastifyReply) => {
    reply.code(200).send({ message: "hello!" })
};

export const enrollmentLock = async (request: FastifyRequest<{ Body: EnrollmentLock }>, reply: FastifyReply) => {
    reply.code(200).send({ message: "hello!" })
};

export const enrollmentSearch = async (request: FastifyRequest, reply: FastifyReply) => {
    reply.code(200).send({ message: "hello!" })
};

