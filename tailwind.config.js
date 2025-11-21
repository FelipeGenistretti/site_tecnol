/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
     "./resources/views/emails/**/*.blade.php",
  ],
  theme: {
    extend: {
      colors:{
        textPrimary:"#333333",
        textSecondary:"#666666",
        bgPrimary:"#004A65",
        bgSecondary:"#F2F2F2",
        bgButtonPrimary:"#F15A29"
      }   
    },

    fontFamily:{
      ibm:['"IBM Plex Sans"', 'sans-serif'],
    },
  }, 
  plugins: [],
}
