const defaultConfig = require('tailwindcss/defaultConfig');
const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors')

module.exports = {
    important: true,
    purge: [
        'resources/views/**/*.blade.php',
        'resources/js/**/*.js',
    ],
    theme: {
        extend: {
        colors: {
            teal: colors.teal,
            cyan: colors.cyan,
        }
        }
    },
    variants: {
        extend: {
          opacity: ['disabled'],
        }
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/aspect-ratio'),
    ]
}
