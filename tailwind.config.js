import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
      ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Poppins', ...defaultTheme.fontFamily.sans],
                petrona: ['Petrona', 'serif'],
                montserrat: ['Montserrat', 'sans-serif'],
                elmessiri: ['ElMessiri', 'serif'],
            },
            colors: {
                gradientStart: '#D58E31',
                gradientEnd: '#EBCB4D',
            }
        },
    },
    plugins: [],
};
