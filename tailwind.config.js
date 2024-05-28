import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
        './node_modules/flowbite/**/*.js',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                'inter': 'Inter, sans-serif',
            },
            colors:{
                'blueish': '#457B9D',
                'white-broke': '#F7F9FC',
                'blue-old': '#1D3557',
            },
            backgroundImage:{
                'login-image': "url('/public/assets/motor-background.jpg')",
            },
            inset:{
                '4/5': '90%',
            },
            spacing:{
                '9/10': '90%',
            },
        },
    },

    plugins: [
        forms,
        require('flowbite/plugin'),
    ],
};
