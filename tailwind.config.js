/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./views/**/*.{html,php}"],
  theme: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/forms')
  ],
}

