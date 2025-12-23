/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    safelist: [
        // Primary colors (Green - Madrasah theme)
        'bg-primary-50', 'bg-primary-100', 'bg-primary-500', 'bg-primary-600', 'bg-primary-700', 'bg-primary-900',
        'border-primary-200', 'border-primary-600', 'text-primary-600', 'text-primary-700', 'text-primary-800', 'text-primary-900',
        'from-primary-50', 'from-primary-500', 'from-primary-600', 'from-primary-700', 'to-primary-600', 'to-primary-700', 'to-primary-800',
        'hover:bg-primary-50', 'hover:from-primary-700', 'hover:to-primary-800',
        
        // Secondary colors (Teal - Accent)
        'bg-secondary-50', 'bg-secondary-100', 'bg-secondary-600', 'text-secondary-600',
        'border-secondary-200', 'from-secondary-50', 'to-secondary-600',
        
        // Status colors
        'bg-green-50', 'bg-green-100', 'border-green-200', 'text-green-600', 'text-green-700', 'text-green-800', 'bg-green-600',
        'bg-red-50', 'border-red-200', 'text-red-600', 'text-red-700', 'text-red-800', 'bg-red-600',
        'bg-yellow-50', 'border-yellow-200', 'text-yellow-600', 'text-yellow-700', 'text-yellow-800', 'bg-yellow-600',
        'from-green-500', 'to-emerald-600', 'to-rose-600', 'to-orange-600',
        
        // Amber for highlights
        'bg-amber-50', 'bg-amber-100', 'text-amber-600', 'text-amber-700', 'border-amber-200',
    ],
    theme: {
        extend: {
            colors: {
                primary: {
                    50: '#f0fdf4',
                    100: '#dcfce7',
                    200: '#bbf7d0',
                    300: '#86efac',
                    400: '#4ade80',
                    500: '#22c55e',
                    600: '#16a34a',
                    700: '#15803d',
                    800: '#166534',
                    900: '#065f46',
                },
                secondary: {
                    50: '#f0fdfa',
                    100: '#ccfbf1',
                    200: '#99f6e4',
                    300: '#5eead4',
                    400: '#2dd4bf',
                    500: '#14b8a6',
                    600: '#0d9488',
                    700: '#0f766e',
                    800: '#155e75',
                    900: '#134e4a',
                },
            },
            fontFamily: {
                'sans': ['Poppins', 'ui-sans-serif', 'system-ui'],
                'display': ['Montserrat', 'ui-sans-serif', 'system-ui'],
            },
            animation: {
                'fade-in': 'fadeIn 0.6s ease-in-out',
                'slide-up': 'slideUp 0.6s ease-out',
                'slide-down': 'slideDown 0.6s ease-out',
                'scale-in': 'scaleIn 0.4s ease-out',
                'float': 'float 3s ease-in-out infinite',
            },
            keyframes: {
                fadeIn: {
                    '0%': { opacity: '0' },
                    '100%': { opacity: '1' },
                },
                slideUp: {
                    '0%': { transform: 'translateY(30px)', opacity: '0' },
                    '100%': { transform: 'translateY(0)', opacity: '1' },
                },
                slideDown: {
                    '0%': { transform: 'translateY(-30px)', opacity: '0' },
                    '100%': { transform: 'translateY(0)', opacity: '1' },
                },
                scaleIn: {
                    '0%': { transform: 'scale(0.9)', opacity: '0' },
                    '100%': { transform: 'scale(1)', opacity: '1' },
                },
                float: {
                    '0%, 100%': { transform: 'translateY(0px)' },
                    '50%': { transform: 'translateY(-20px)' },
                },
            },
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
    ],
}