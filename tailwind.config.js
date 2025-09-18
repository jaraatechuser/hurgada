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
                sans: ['Poppins', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                coral: {
                    50: '#fff4f2', 100: '#ffe6e1', 200: '#ffcfc6', 300: '#ffad9c', 400: '#ff7e63', 500: '#ff5a39', 600: '#ed3e20', 700: '#c2321b', 800: '#9a2b1b', 900: '#7c2619',
                },
                mint: {
                    50: '#ecfff8', 100: '#d3ffef', 200: '#a6ffe0', 300: '#6bfbcb', 400: '#3eeab8', 500: '#1ed0a1', 600: '#12a785', 700: '#13866e', 800: '#166b5a', 900: '#15584b',
                },
                rose: {
                    50: '#fff1f7', 100: '#ffe4f0', 200: '#fec7df', 300: '#fea0c7', 400: '#fd6ca8', 500: '#f63f8f', 600: '#dd2079', 700: '#b51663', 800: '#921651', 900: '#791545',
                },
            },
            boxShadow: {
                soft: '0 10px 30px -10px rgba(244,114,182,0.35)',
            },
            animation: {
                float: 'float 6s ease-in-out infinite',
            },
            keyframes: {
                float: {
                    '0%, 100%': { transform: 'translateY(0)' },
                    '50%': { transform: 'translateY(-8px)' },
                },
            },
        },
    },

    plugins: [forms],
};
