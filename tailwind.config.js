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
            colors: {
                'custom-blue-light': '#abddf1',
                'custom-blue-dark': '#b7e2f3',
                'custom-blue-lighter': '#c3e7f5',
                'custom-blue-darkest': '#cfebf7',
              },
        },
    },

    plugins: [forms],
};
