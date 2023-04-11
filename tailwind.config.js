const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./node_modules/flowbite/**/*.js"
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            backgroundImage: {
                'hero-image': "url('/assets/images/equipe-mains.jpeg')",
            },
            colors: {
                primary: '#2ACF03',
                greenLight: '#E7FBC7',
                secondary: '#FB0A38',
                blueLight: '#0AB0FB',
                redLight: '#FB550A',
                indigoLight: '#CD0AFB',
            }
        },
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('flowbite/plugin'),
    ],
};
