/** @type {import('tailwindcss').Config} */
module.exports = {
  mode: 'jit', // for linting/debuging
  content: [
    './src/**/*.{js,jsx,ts,tsx,js}',
    './*.php',
    './templates/*.php'
  ],
  theme: {
    container: {
      center: true, 
      padding: '10rem',
      margin: '2.5rem',
    },
    extend: {},
  },
  plugins: [],
}

