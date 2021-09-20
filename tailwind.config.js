module.exports = {
  purge: [
      './resources/**/*.blade.php',
      './resources/**/*.js',
      './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
        backgroundImage:{
            'hero-pattern': "url(https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.liberty.edu%2F&psig=AOvVaw3DjaEtFgR86ptiK6AMuxFa&ust=1632085710278000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCJC04Zu3ifMCFQAAAAAdAAAAABAD)",
        }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [require('daisyui')],
}
