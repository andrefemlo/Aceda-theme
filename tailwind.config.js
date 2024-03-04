/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.{php,html,js}"],
  theme: {
    extend: {
      colors: {
        'green-600' : '#278F48',
        'lime'      : '#BED73B',
        'blue-600'  : '#2C4D97',
        'blue-300'  : '#2EF0FF',
        'yellow'    : '#FFE32D',
        
      },
      spacing: {
        screen: '100dvw',
      },
      fontFamily: {
        sans: ['Outfit', 'sans-serif']
      },
      animation: {
        'float': 'floating 3s linear infinite',
      },
      keyframes: {
        floating: {
          '0%, 100%': { transform: 'translateY(-10px)' },
          '50%': { transform: 'translateY(10px)' },
        }
      },
      container: {
        center: true,
        padding: '1rem',
        screens: {
          sm: '100%',
          md: '100%',
          lg: '100%',
          xl: '1180px',
        },
      },
    },
    screens: {
      '2xl' : {'max': '1400px'},
      'xl'  : {'max': '1279px'},
      'lg'  : {'max': '1080px'},
      'md'  : {'max': '880px'},
      'sm'  : {'max': '639px'},

      'min-2xl' : '1401px',
      'min-xl'  : '1280px',
      'min-lg'  : '1081px',
      'min-md'  : '881px',
      'min-sm'  : '640px'
      },
  },
  plugins: [
    require('@tailwindcss/typography'),
  ],
}

