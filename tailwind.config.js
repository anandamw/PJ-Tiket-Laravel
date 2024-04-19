/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    container:{
      center: true,
      padding: {
        DEFAULT: '1rem',
        // sm: '2rem',
        // lg: '4rem',
        xl: '5rem',
        '2xl': '30rem',
        '3xl': '8rem',
        '4xl': '10rem',
        '5xl': '12rem',
        '6xl': '14rem',
        '7xl': '16rem',
        '8xl': '18rem',
        '9xl': '20rem',
        '10xl': '24rem',
      },
      


    },
    extend: {
      colors: {
        'purple': '#4B092F'
      }
    },
  },
  plugins: [
    require('flowbite/plugin')
],
}