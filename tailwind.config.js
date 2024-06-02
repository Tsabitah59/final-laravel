import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
<<<<<<< HEAD
            backgroundImage: {
                'login': 'url(../public/assets/bg-login.jpg)',
              }
=======

            colors:{
                satu: "#1B3764",
                dua: "#FFCA42"
            }
>>>>>>> a278c7536a5d866953b03a75c3e13d301b9ab33f
        },
    },

    plugins: [forms],
};
