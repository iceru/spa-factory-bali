const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors');

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
                '2xl': '1200px',
            },
        },
        extend: {
            fontFamily: {
                sans: ['Source Sans Pro', ...defaultTheme.fontFamily.sans],
                serif: ['Philosopher', ...defaultTheme.fontFamily.serif]
            },
            colors: {
                transparent: 'transparent',
                body: '#515151',
                black: colors.black,
                blue: colors.blue,
                cyan: colors.cyan,
                emerald: colors.emerald,
                fuchsia: colors.fuchsia,
                green: colors.green,
                indigo: colors.indigo,
                lime: colors.lime,
                orange: colors.orange,
                pink: colors.pink,
                purple: colors.purple,
                red: colors.red,
                rose: colors.rose,
                sky: colors.sky,//warn - As of Tailwind CSS v2.2, `lightBlue` has been renamed to `sky`.
                teal: colors.teal,
                violet: colors.violet,
                yellow: colors.amber,
                white: colors.white,
                'primary': '#588157',
                'secondary': '#3A5A40',
                'light': '#E6EEE6',
            },
            backgroundImage: {
                'header': "url('../../public/images/bg-header.jpg')",
                'quote': "url('../../public/images/bg-quote-2.png')",
                'about': "url('../../public/images/bg-about.png')",
                'radial': "radial-gradient(78.57% 1211.34% at 35.59% 68.86%, #3A5A40 0%, #588157 96.37%)",
                'diamond': "radial-gradient(277.9% 1549.5% at 35.59% 68.86%, #3A5A40 0%, #588157 96.37%)",
                'linear': "linear-gradient(205.13deg, #3A5A40 32.36%, #588157 93.15%)"
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
