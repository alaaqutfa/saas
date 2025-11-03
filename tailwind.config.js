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
            colors: {
                primary: '#222',
                secondary: '#222',
            },
            backgroundImage: {
                'section': 'linear-gradient(113deg, rgba(255, 255, 255, 0.82) 0%, rgba(255, 255, 255, 0.80) 110.84%)',
            },
            boxShadow: {
                'section': '0px 2px 5.5px 0px rgba(0, 0, 0, 0.02)',
            },
            screens: {
                'sm': '640px',
                'md': '768px',
                'lg': '1024px',
                'xl': '1280px',
                '2xl': '1440px',
            },
            container: {
                padding: '1rem',
                center: true,
            },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                tajawal: ['Tajawal', 'sans-serif'],
                roboto: ['Roboto', 'sans-serif'],
            },
        },
    },

    plugins: [forms],
};
