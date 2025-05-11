export const homeSchema = {
    body: {
        type: 'object',
        required: ['text'],
        properties: {
            text: { type: 'string' },
        },
    },
    response: {
        200: {
            type: 'object',
            required: ['received'],
            properties: {
                received: { type: 'string' },
            },
        },
    },
};