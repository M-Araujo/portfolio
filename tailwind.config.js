/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'charcoal': '#36454f',
        'soft-white': '#f8f9fa',
        'soft-pink': '#f7cac9',
        'very-dark-gray': '#2f2f2f',
      },
    },
  },
  plugins: [],
}