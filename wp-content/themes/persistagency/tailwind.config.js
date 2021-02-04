module.exports = {
  purge: {
    content: [
      'index.php',
      './resources/scripts/**/*.js',
      './resources/views/**/*.php',
    ],
    options: { safelist: [/^custom/, /^mt-/, /^mb-/] },
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
    screens: {
      sm: '640px',
      // => @media (min-width: 640px) { ... }

      md: '768px',
      // => @media (min-width: 768px) { ... }

      lg: '1024px',
      // => @media (min-width: 1024px) { ... }

      xl: '1280px',
      // => @media (min-width: 1280px) { ... }
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
        gray2: '#F0F0F2',
        yellow: '#FFCA17',
        facebook: '#3977f2',
        twitter: '#40a1f2',
        whatsapp: '#43e676',
      },
      rotate: {
        270: '270deg',
      },
      fontSize: {
        '6xl': '4.375rem',
        '7xl': '5.06rem',
        '8xl': '6.25rem',
        '9xl': '7rem',
        '12xl': '12.5rem',
      },
      rotate: {
        '-8': '-8deg',
      },
    },
  },
  variants: {},
  plugins: [
    require('@tailwindcss/typography')({
      modifiers: ['xl'],
    }),
    require('@tailwindcss/custom-forms'),
  ],
};
