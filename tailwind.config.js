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
                sans: ['Quicksand', ...defaultTheme.fontFamily.sans],
            },
            backgroundImage: {
                'login': 'url(../public/assets/bg-login.jpg)',
              },
            button: {
                'btnDanger': "#DAD3BE",
              },
            colors:{
                satu: "#1B3764",
                dua: "#FFCA42"
            }
      },
    },

    plugins: [
        require('tailwind-scrollbar-hide'),
    ],
};
