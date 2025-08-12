/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./**/*.php",        // detects all PHP files
    "./src/**/*.js",     // optional if you have JS files
  ],
  theme: {
    extend: {
      colors: {
        primary: 'var(--primary-color)',
        secondary: 'var(--secondary-color)',
        // Add more custom colors if needed
      },
    },
  },
  plugins: [],
  // darkMode: 'class', // যদি ডার্ক মোড লাগলে uncomment করো
};
