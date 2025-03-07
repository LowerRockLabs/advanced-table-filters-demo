/** @type {import('tailwindcss').Config} */

const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors')

module.exports = {
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
        require('@tailwindcss/aspect-ratio'),
        require('@tailwindcss/line-clamp')
    ],
    purge: {
        content: [
            './vendor/laravel/jetstream/**/*.blade.php',
            './vendor/lowerrocklabs/laravel-livewire-tables-advanced-filters/resources/views/**/*.blade.php',
            './vendor/lowerrocklabs/LaravelLivewireTablesAdvancedFilters/resources/views/**/*.blade.php',
            './vendor/rappasoft/laravel-livewire-tables/resources/views/tailwind/**/*.blade.php',
            './vendor/rappasoft/laravel-livewire-tables/resources/views/**/*.blade.php',
            './storage/framework/views/*.php',
            './resources/views/**/*.blade.php',
            './app/Http/Livewire/UsersTable.php',
        ],
        safelist: [
            'w-80',
            'md:w-80'
        ],
    },

    darkMode: 'class',
    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter var', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    variants: {
        extend: {
            backgroundColor: ['responsive', 'dark', 'checked', 'disabled', 'hover', 'focus', 'active', 'even', 'odd'],
            textColor: ['disabled'],
            opacity: ['dark'],
            overflow: ['hover'],
        }
    },
};
