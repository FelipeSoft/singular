import { FastifyReply, FastifyRequest } from 'fastify';
import { ClassAdd, ClassRemove, ClassUpdate } from '../../../../shared/types/ClassTypes';
import path from 'path';
import fs from "fs";
import ejs from 'ejs';
import { ActiveSubTab, ActiveTab } from '../../../../shared/types/ui/ActiveTab';

export const renderClassPlanning = async (request: FastifyRequest, reply: FastifyReply) => {
    const filePath = path.join(process.env.VIEWS_ROOT_PATH ?? "", "/class/planning.ejs");
    const pageContent = fs.readFileSync(filePath, 'utf-8');
    const renderedContent = ejs.render(pageContent);

    const data: { tab: ActiveTab, subtab?: ActiveSubTab } = {
        tab: "class",
        subtab: "class-planning"
    }

    return reply.view("layout.ejs", {
        title: "Singular | Aulas - Planejamento de Aulas",
        body: renderedContent,
        tab: data.tab,
        subtab: data.subtab
    })
}

export const renderClassExecution = async (request: FastifyRequest, reply: FastifyReply) => {
    const filePath = path.join(process.env.VIEWS_ROOT_PATH ?? "", "/class/execution.ejs");
    const pageContent = fs.readFileSync(filePath, 'utf-8');
    const renderedContent = ejs.render(pageContent);

    const data: { tab: ActiveTab, subtab?: ActiveSubTab } = {
        tab: "class",
        subtab: "class-execution"
    }

    return reply.view("layout.ejs", {
        title: "Singular | Aulas - Execução de Aulas",
        body: renderedContent,
        tab: data.tab,
        subtab: data.subtab
    })
}

export const renderAcademicStructure = async (request: FastifyRequest, reply: FastifyReply) => {
    const filePath = path.join(process.env.VIEWS_ROOT_PATH ?? "", "/class/academic-structure.ejs");
    const pageContent = fs.readFileSync(filePath, 'utf-8');
    const renderedContent = ejs.render(pageContent);

    const data: { tab: ActiveTab, subtab?: ActiveSubTab } = {
        tab: "class",
        subtab: "academic-structure"
    }

    return reply.view("layout.ejs", {
        title: "Singular | Aulas - Estrutura Acadêmica",
        body: renderedContent,
        tab: data.tab,
        subtab: data.subtab
    })
}

export const classCancel = async (request: FastifyRequest, reply: FastifyReply) => {
    reply.code(200).send({ message: "The class was successfull canceled" })
};

export const classAdminister = async (request: FastifyRequest, reply: FastifyReply) => {
    reply.code(200).send({ message: "The class was successfull administered" })
};

export const classAdd = async (request: FastifyRequest<{ Body: ClassAdd }>, reply: FastifyReply) => {
    reply.code(200).send({ message: "The class was successfull scheduled" })
};

export const classUpdate = async (request: FastifyRequest<{ Body: ClassUpdate }>, reply: FastifyReply) => {
    reply.code(200).send({ message: "The class was updated successfully" })
};

export const classRemove = async (request: FastifyRequest<{ Body: ClassRemove }>, reply: FastifyReply) => {
    reply.code(200).send({ message: "The class was removed successfully" })
};
