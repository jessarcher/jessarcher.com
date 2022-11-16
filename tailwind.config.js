module.exports = {
  content: [
    './resources/**/*.antlers.html',
    './resources/**/*.blade.php',
    './resources/**/*.vue',
    './content/**/*.md'
  ],
  theme: {
    extend: {
      typography: (theme) => ({
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
    },
    fontFamily: {
      sans: ['Inter', 'sans-serif'],
    },
  },
  plugins: [
    require('@tailwindcss/typography'),
  ],
}
