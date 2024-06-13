/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./views/**/*.{html,php}"],
  theme: {
    extend: {
      "backgroundColor": {
        "primary": "#ef4444"
      }
    },
  },
  plugins: [
    require('@tailwindcss/forms')
  ],
}

