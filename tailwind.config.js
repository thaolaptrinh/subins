/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./app/views/home/*.{html,js,php}",
    "./app/views/pages/*.{html,js,php}",
    "./app/views/auth/*.{html,js,php}",
  ],
  theme: {
    screens: {
      sm: "576px",
      // => @media (min-width: media) { ... }

      md: "768px",
      // => @media (min-width: 768px) { ... }

      lg: "992px",
      // => @media (min-width: 992px) { ... }

      xl: "1200px",
      // => @media (min-width: 1200px) { ... }

      "2xl": "1440px",
      // => @media (min-width: 1440px) { ... }
    },
    extend: {},
  },
  plugins: [],
};
