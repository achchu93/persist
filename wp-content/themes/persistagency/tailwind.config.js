module.exports = {
  purge: {
    content: [
      'index.php',
      './resources/scripts/**/*.js',
      './resources/views/**/*.php',
    ],
  },
  theme: {
    fontFamily: {
      title: 'Raleway, serif',
      text: 'Roboto, sans-serif',
    },
    typography: {
      default: {
        css: {
          a: {
            color: '#EC1E45',
            '&:hover': {
              color: '#EC1E45',
            },
          },
        },
      },
    },
    extend: {
      colors: {
        primary: '#EC1E45',
        red: '#EC1E45',
        yellow: '#FFCA17',
        facebook: '#3977f2',
        twitter: '#40a1f2',
        whatsapp: '#43e676',
      },
    },
  },
  variants: {},
  plugins: [
    require('@tailwindcss/typography')({
      modifiers: ['lg'],
    }),
    require('@tailwindcss/custom-forms'),
  ],
};
