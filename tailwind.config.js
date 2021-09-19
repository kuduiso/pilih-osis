const colors = require('tailwindcss/colors')

module.exports = {
  purge: [
      './resources/**/*.blade.php',
      './resources/**/*.js',
      './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
        colors: {
            transparent: 'transparent',
            current: 'currentColor',
            blue: {
                custom: {
                    a: '#4178d1'
                },
            },
            black: colors.black,
            white: colors.white,
            gray: colors.trueGray,
            indigo: colors.indigo,
            red: colors.rose,
            yellow: colors.amber,
        },
        fontFamily: {
            sans: ['Graphik', 'sans-serif'],
            serif: ['Merriweather', 'serif'],
        },
        maxWidth: {
            '125px' : '125px',
        },
        margin: {

        },
    }
  },
  variants: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/forms')({
        strategy: 'class',
    }),
  ],
}
