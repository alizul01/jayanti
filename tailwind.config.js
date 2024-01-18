/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./node_modules/flowbite/**/*.js",
  ],
  theme: {
    fontFamily: {
      sans: ["Inter", "sans-serif"],
    },
    extend: {},
  },
  plugins: [
    require("flowbite/plugin"),
    require("tailwindcss-plugins/pagination"),
  ],
};
