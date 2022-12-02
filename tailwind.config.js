const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './public/js/script.js',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                roboto: ['Roboto', 'sans-serif'],
                playfair: ['Playfair Display', 'serif'],
            },
            colors: {
                'black-primary': '#1E1E1E',
                'yellow-primary': '#DF9903',
                'black-hover': '#373737',
            },
            screens: {
                'sm-360': '360px',
                'md-768': '768px',
                'md-880': '880px',
                'md-950': '950px',
                'lg-1100': '1100px',
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
