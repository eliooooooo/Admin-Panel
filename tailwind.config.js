/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./public/*.{html,php,js}", "./public/**/*.{html,php,js}"],
  theme: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/forms')
  ],
}

