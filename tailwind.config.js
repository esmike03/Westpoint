import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: false,
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],

            },
            textShadow: {
                'default': '2px 2px 4px rgba(0, 0, 0, 0.3)',
                'lg': '4px 4px 6px rgba(0, 0, 0, 0.5)',
                'xl': '6px 6px 8px rgba(0, 0, 0, 0.7)',
            },
        },
    },

    plugins: [
        require('tailwindcss-textshadow'),
        require('@tailwindcss/line-clamp')
    ]

};
