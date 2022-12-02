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
                'slate-primary': '#333333',
            },
            screens: {
                'sm-360': '360px',
                'sm-350': '350px',
                'sm-375': '375px',
                'sm-400': '400px',
                'sm-440': '440px',
                'sm-500': '500px',
                'sm-601': '601px',
                'sm-640': '640px',
                'sm-645': '645px',
                'sm-740': '740px',
                'md-768': '768px',
                'md-830': '830px',
                'md-880': '880px',
                'md-890': '890px',
                'md-930': '930px',
                'md-950': '950px',
                'md-1000': '1000px',
                'lg-1100': '1100px',
                'lg-1130': '1130px',
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
