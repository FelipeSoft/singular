export const attendanceRegistry = {
  body: {
    type: 'object',
    required: ['attendance'],
    properties: {
      attendance: { type: 'string' },
    },
  },
};

export const justifyAbsence = {
  body: {
    type: 'object',
    required: ['attendance'],
    properties: {
      attendance: { type: 'string' },
    },
  },
};