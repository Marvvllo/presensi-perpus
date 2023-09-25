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
        primary: '#E42313',
        white: '#FFFFFF',
        black: '#1D1D1B',
        gray: '#706F6F',
      },
    },
  },
  plugins: [],
}

