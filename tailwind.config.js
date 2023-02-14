const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        container: {
            center: true,
            screens: {
                sm: '567px',
                md: '768px',
                lg: '992px',
                xl: '1200px',
                '2xl': '1400px',
            },
        },
        extend: {
            fontFamily: {
                sans: ['Source Sans Pro', ...defaultTheme.fontFamily.sans],
                serif: ['Arima Madurai', ...defaultTheme.fontFamily.serif]
            },
            colors: {
                'primary': '#588157',
                white: '#FFF',
                black: '#000',
                transparent: 'transparent',
            },
            backgroundImage: {
                'header': "url('../../public/images/bg-header.jpg')",
            }
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
