export const classRegistry = {
    body: { 
        type:'object',
        required:['teacher_id', 'subject_id', 'date_time' ],
        properties: {
            teacher_id: {type: 'string' },
            subject_id: {type: 'string'},
            date_time: {type: 'string'},

        },
        



    },
} ;

export const classUpdate = {
    body: { 
        type:'object',
        required:['teacher_id', 'subject_id', 'date_time' ],
        properties: {
            teacher_id: {type: 'string' },
            subject_id: {type: 'string'},
            date_time: {type: 'string'},

        },
        



    },
} ;

export const classRemove = {
    body: { 
        type:'object',
        required:['teacher_id', 'subject_id', 'date_time' ],
        properties: {
            teacher_id: {type: 'string' },
            subject_id: {type: 'string'},
            date_time: {type: 'string'},

        },
        



    },
} ;

