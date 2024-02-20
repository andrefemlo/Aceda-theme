/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.{php,html,js}"],
  theme: {
    extend: {
      colors: {
        
      },
      spacing: {
        container: '1240px',
        screen: '100dvw',
      },
      fontFamily: {
      },
      animation: {
        'float': 'floating 3s linear infinite',
      },
      keyframes: {
        floating: {
          '0%, 100%': { transform: 'translateY(-10px)' },
          '50%': { transform: 'translateY(10px)' },
        }
      }
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

