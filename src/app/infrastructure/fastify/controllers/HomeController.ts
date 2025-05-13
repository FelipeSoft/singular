import { FastifyReply, FastifyRequest } from 'fastify';
import { HomeBody } from '../../../../shared/types/HomeTypes';
import fs from "fs";
import ejs from "ejs";
import path from 'path';

export const homeController = async (request: FastifyRequest<{ Body: HomeBody }>, reply: FastifyReply) => {
    const filePath = path.join(process.env.VIEWS_ROOT_PATH ?? "", "home.ejs");
    const pageContent = fs.readFileSync(filePath, 'utf-8');
    const renderedContent = ejs.render(pageContent);

    return reply.view("layout.ejs", {
        title: "Singular",
        body: renderedContent
    })
};
