import { FastifyPluginAsync } from "fastify";
import { enrollmentLock, enrollmentRegistry } from "../controllers/EnrollmentController";
import { EnrollmentLock, EnrollmentRegistry } from "../../../shared/types/EnrollmentTypes";

const enrollmentRoutes: FastifyPluginAsync = async (fastify) => {
    fastify.post<{ Body: EnrollmentRegistry }>('/enrollment/registry', { handler: enrollmentRegistry })
    fastify.put<{ Body: EnrollmentLock}>('/enrollment/lock', {handler : enrollmentLock})
};

/*
1. Passo
Criar o endpoint nas routes

2. Passo
Se necessário, criar um schema (fastify/schemas) para o body

3. Passo
Se necessário, criar um type (shared/types) para o body
*/

/*
método: POST 
endpoint: /enrollment/registry

url da request: https://singular.com.br/api/enrollment/registry?cpf=12345678910

body:   
{
    "cpf": "12345678910"
}
*/

/*
método: PUT
endpoint: /enrollment/update

body:
{
    "cpf": "1234568910",
    "discipline": [
        {id: 1, name: "Física"},
        {id: 2, name: "Geografia"},
    ] 
}
*/

/*
método: PUT
endpoint: /enrollment/lock

body: 
{
    "student_id": "12345678910",
}
*/

export default enrollmentRoutes