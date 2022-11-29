const colors = require('tailwindcss/colors')

module.exports = {
  content: [
    './resources/**/*.antlers.html',
    './resources/**/*.blade.php',
    './resources/**/*.vue',
    './content/**/*.md'
  ],
  darkMode: 'class',
  theme: {
    extend: {
      typography: (theme) => ({
        invert: {
          css: {
            '--tw-prose-pre-bg': theme('colors.gray.800'),
            code: {
              background: theme('colors.gray.900'),
              borderColor: theme('colors.gray.800'),
            },
          },
        },
        DEFAULT: {
          css: {
            'h1 a, h2 a, h3 a, h4 a, h5 a, h6 a': {
              fontWeight: 'inherit',
            },
            code: {
              background: theme('colors.gray.100'),
              borderWidth: '1px',
              borderColor: theme('colors.gray.200'),
              fontWeight: 'inherit',
              padding: theme('spacing.1'),
              borderRadius: theme('borderRadius.md'),
            },
            'code::before': {
              content: ''
            },
            'code::after': {
              content: ''
            },
          },
        },
      }),
      colors: {
        gray: colors.zinc,
      },
    },
    fontFamily: {
      sans: ['Inter', 'sans-serif'],
    },
  },
  plugins: [
    require('@tailwindcss/typography'),
  ],
}
