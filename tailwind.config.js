/** @type {import('tailwindcss').Config} */
module.exports = {
  mode: 'jit', // JIT mode for faster builds
  content: [
    './src/**/*.{js,jsx,ts,tsx}',
    './*.php',
    './templates/*.php'
  ],
  theme: {
    container: {
      center: true, 
      padding: '10rem', // Large padding for container
    },
    extend: {
      spacing: {
        '10xl': '2.5rem', // Custom spacing instead of margin in container
      },
    },
  },
  plugins: [],
}

