import { FastifyReply, FastifyRequest } from "fastify";
import path from "path";
import fs from "fs";
import ejs from "ejs";
import { ActiveSubTab, ActiveTab } from "../../../../shared/types/ui/ActiveTab";

export const renderUsersManagement = async (request: FastifyRequest, reply: FastifyReply) => {
    const filePath = path.join(process.env.VIEWS_ROOT_PATH ?? "", "/users/management.ejs");
    const pageContent = fs.readFileSync(filePath, 'utf-8');
    const renderedContent = ejs.render(pageContent);

    const data: { tab: ActiveTab, subtab?: ActiveSubTab } = {
        tab: "users",
        subtab: "users-management"
    }

    return reply.view("layout.ejs", {
        title: "Singular | Usuários - Gestão de Usuários",
        body: renderedContent,
        tab: data.tab,
        subtab: data.subtab
    })
}

export const createUser = async (request: FastifyRequest, reply: FastifyReply) => {
}

export const updateUser = async (request: FastifyRequest, reply: FastifyReply) => {
}

export const deleteUser = async (request: FastifyRequest, reply: FastifyReply) => {
}

export const getUsers = async (request: FastifyRequest, reply: FastifyReply) => {
}