module.exports = {
  extends: [
    'eslint:recommended',
    'plugin:tailwindcss/recommended', // Enable Tailwind CSS recommended rules
  ],
  plugins: [
    'tailwindcss',
  ],
  rules: {
    'tailwindcss/classnames-order': 'error',  // Enforce consistent class ordering
    'tailwindcss/no-custom-classname': 'error',  // Disallow custom class names
    // Add any additional rules you want to enforce
  },
};

