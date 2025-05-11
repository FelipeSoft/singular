
//Precisa de mudanças
export const attendanceRegistry = {
  body: {
      type: 'object',
      required: ['attendance'],
      properties: {
          attendance: { type: 'string' },
      },
  },
};

//Precisa de mudanças
export const justifyAbsence = {
  body: {
      type: 'object',
      required: ['attendance'],
      properties: {
          attendance: { type: 'string' },
      },
  },
};