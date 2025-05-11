export const enrollmentRegistry = {
    body: {
        type: 'object',
        required: ['cpf'],
        properties: {
            cpf: { type: 'string' },
        },
    },
};