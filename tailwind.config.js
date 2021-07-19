module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
  	extend: {},
    pagination: theme => ({
        // Customize the color only. (optional)
        color: theme('colors.green.600'),
        wrapper: 'inline-flex shadow rounded'
    
        // Customize styling using @apply. (optional)
    
        // Customize styling using CSS-in-JS. (optional)
 
    })
},
  variants: {
    extend: {},
  },
  plugins: [require('tailwindcss-plugins/pagination'),
  			require('@tailwindcss/line-clamp'),
  ],
}
