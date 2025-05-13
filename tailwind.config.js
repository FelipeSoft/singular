module.exports = {
    content: [
        './src/**/*.{html,js,ejs}',
        './node_modules/flyonui/dist/js/*.js'
    ],
    plugins: [
        require('flyonui'),
        require('flyonui/plugin')
    ]
};
