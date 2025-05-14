export const enrollmentRecord = {
    body: {
        type: 'object',
        required: ['cpf'],
        properties: {
            cpf: { type: 'string' },
        },
    },
};

export const enrollmentLock = {
    body: {
        type: 'object',
        required: ['cpf'],
        properties: {
            cpf: { type: 'string' },
        },
    },
};