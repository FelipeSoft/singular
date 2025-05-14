import { FastifyReply, FastifyRequest } from 'fastify';
import fs from "fs";
import ejs from "ejs";
import path from 'path';
import { ActiveSubTab, ActiveTab } from '../../../../shared/types/ui/ActiveTab';

export const homeController = async (request: FastifyRequest, reply: FastifyReply) => {
    const filePath = path.join(process.env.VIEWS_ROOT_PATH ?? "", "/home.ejs");
    const pageContent = fs.readFileSync(filePath, 'utf-8');
    const renderedContent = ejs.render(pageContent);

    const data: { tab: ActiveTab, subtab?: ActiveSubTab } = {
        tab: "home"
    }

    return reply.view("layout.ejs", {
        title: "Singular",
        body: renderedContent,
        tab: data.tab
    })
};
