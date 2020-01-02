module.exports = {
  theme: {
    fontFamily: {
      'sans': 'Poppins, -apple-system, BlinkMacSystemFont',
    },
    colors: {
      gray: {
        500: '#333333',
        400: '#4D4D4D',
        300: '#6B6B6B',
        200: '#808080',
        100: '#E6E6E6',
        50: '#F6F6F6'
      },
      blue: {
        400: '#D3E1FD',
        500: '#2653E3'
      },
      black: '#000',
      white: '#fff',
      transparent: 'transparent'
    },
    extend: {}
  },
  variants: {
    margin: ['responsive', 'last']
  },
  corePlugins: {
    container: false,
  },
  plugins: [
    require('tailwind-bootstrap-grid')({
      gridGutterWidth: '32px',
    })
  ]
}
