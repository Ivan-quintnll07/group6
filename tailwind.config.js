/** @type {import('tailwindcss').Config} */
const defaultTheme = require('tailwindcss/defaultTheme')

export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                click: {
                    'primaryYellow': '#EDDE58',
                    'blue1': '#18314F',
                    'blue2': '#38477',
                    'blue3': '#0051F5',
                    'blue4': '#12B6F5',
                    'greenlime': '#E6F9AF',

                }
            },
            fontFamily: {
                'poppins': ['Poppins', ...defaultTheme.fontFamily.sans],

            }
        },
        plugins: [],
    }
}
