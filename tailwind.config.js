module.exports = {
    content: [
        './src/Presentation/Views/**/*.{html,js,php}',
        './node_modules/flyonui/dist/js/*.js'
    ],
    plugins: [
        require('flyonui'),
        require('flyonui/plugin'),
        require('flatpickr'),
        require('flatpickr/plugin')
    ],
    content: {
        
    }
};
