export const homeSchema = {
    body: {
        type: 'object',
        required: ['text'],
        properties: {
            text: { type: 'string' },
        },
    },
};