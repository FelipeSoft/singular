module.exports = {
    content: [
        './src/**/*.{html,js,php}',
        './node_modules/flyonui/dist/js/*.js'
    ],
    plugins: [
        require('flyonui'),
        require('flyonui/plugin')
    ]
};
