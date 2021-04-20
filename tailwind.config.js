const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors');

module.exports = {
  purge: [
     './resources/**/*.blade.php',
     './resources/**/*.js',
     './resources/**/*.vue',
   ],
  
  darkMode: false, // or 'media' or 'class'
  
  theme: {

    container: {
      center: true,
    },

    extend: {
      fontFamily: {
        'mont': ['Montserrat'],
      },
      colors: {
        transparent: 'transparent',
        current: 'currentColor',
        orange: colors.orange,
      },
    },
  },
  
  variants: {
    extend: {},
  },
  
  plugins: [],
}
