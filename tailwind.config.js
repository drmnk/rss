/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
    },
    fontFamily: {
      'sans': ['Noto Sans', 'ui-sans-serif', 'system-ui']
    }
  },
  plugins: [],
}
