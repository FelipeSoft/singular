import { FastifyReply, FastifyRequest } from 'fastify';
import { AttendanceRegistry, JustifyAbsence } from '../../../../shared/types/AttendanceTypes';
import { ActiveSubTab, ActiveTab } from '../../../../shared/types/ui/ActiveTab';
import path from "path";
import fs from "fs";
import ejs from 'ejs';

export const renderTakeAttendance = async (request: FastifyRequest<{ Body: AttendanceRegistry }>, reply: FastifyReply) => {
  const filePath = path.join(process.env.VIEWS_ROOT_PATH ?? "", "/attendance/tracking.ejs");
  const pageContent = fs.readFileSync(filePath, 'utf-8');
  const renderedContent = ejs.render(pageContent);

  const data: { tab: ActiveTab, subtab?: ActiveSubTab } = {
    tab: "attendance",
    subtab: "take-attendance"
  }

  return reply.view("layout.ejs", {
    title: "Singular | Frequência - Realizar Chamada",
    body: renderedContent,
    tab: data.tab,
    subtab: data.subtab
  })
};

export const renderAttendanceTracking = async (request: FastifyRequest<{ Body: AttendanceRegistry }>, reply: FastifyReply) => {
  const filePath = path.join(process.env.VIEWS_ROOT_PATH ?? "", "/attendance/take.ejs");
  const pageContent = fs.readFileSync(filePath, 'utf-8');
  const renderedContent = ejs.render(pageContent);

  const data: { tab: ActiveTab, subtab?: ActiveSubTab } = {
    tab: "attendance",
    subtab: "attendance-tracking"
  }

  return reply.view("layout.ejs", {
    title: "Singular | Frequência - Acompanhamento de Frequência",
    body: renderedContent,
    tab: data.tab,
    subtab: data.subtab
  })
};

export const attendanceRegistry = async (request: FastifyRequest<{ Body: AttendanceRegistry }>, reply: FastifyReply) => {
  reply.code(200).send({ message: "hello!" })
};

export const justifyAbsence = async (request: FastifyRequest<{ Body: JustifyAbsence }>, reply: FastifyReply) => {
  reply.code(200).send({ message: "hello!" })
};

export const checkStudentAttendance = async (request: FastifyRequest, reply: FastifyReply) => {
  reply.code(200).send({ message: "hello!" })
};

