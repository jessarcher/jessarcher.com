const colors = require('tailwindcss/colors')

module.exports = {
  theme: {
    extend: {
      fontFamily: {
        sans:
          'Proxima Nova, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"',
      },
      screens: { print: { raw: 'print' } },
      colors: {
        gray: colors.blueGray,
        orange: colors.orange,
        yellow: colors.yellow,
        green: colors.green,
        teal: colors.teal,
        blue: colors.lightBlue,
        purple: colors.purple,
      },
    },
  },
  variants: { width: ['responsive', 'focus'], borderColor: ['responsive', 'hover', 'focus', 'group-hover'] },
  plugins: [
    require('@tailwindcss/forms'),
    function ({ addUtilities }) {
      const newUtilities = {
        '.transition-fast': {
          transition: 'all .2s ease-out',
        },

        '.transition': {
          transition: 'all .5s ease-out',
        },
      }

      addUtilities(newUtilities)
    },
  ],
}
