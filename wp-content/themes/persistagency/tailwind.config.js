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
      title: 'Klavika, serif',
      text: 'Klavika, sans-serif',
      brushup: 'BrushUp, sans-serif',
      brushuptoo: 'BrushUpToo, sans-serif',
    },
    typography: {
      default: {
        css: {
          color: '#111215',
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
        primary: '#FFCA17',
        secondary: '#EC1E45',
        red: '#EC1E45',
        red2: '#FF0434',
        blue: '#263076',
        black: '#111215',
        gray1: '#DDDDDF',
        yellow: '#FFCA17',
        facebook: '#3977f2',
        twitter: '#40a1f2',
        whatsapp: '#43e676',
      },
      rotate: {
        270: '270deg',
      },
      fontSize: {
        '7xl': '5.06rem',
        '8xl': '6.25rem',
      },
      rotate: {
        '-8': '-8deg',
      },
    },
  },
  variants: {},
  plugins: [
    require('@tailwindcss/typography')({
      modifiers: [],
    }),
    require('@tailwindcss/custom-forms'),
  ],
};
