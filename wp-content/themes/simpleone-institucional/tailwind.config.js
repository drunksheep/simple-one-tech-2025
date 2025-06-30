// tailwind.config.js
export default {
  content: [
    './src/**/*.{ts,js,css}',
    '../**/*.php',
  ],
  theme: {
    extend: {
      container: {
        center: true,
        screens: {
          sm: "320px",
          md: "320px",
          lg: "1280px",
          xl: "1280px",
          "2xl": "1280px"
        },
      },
      screens: {
        xs: '310px',
        sm: '640px',
        md: '768px',
        lg: '1024px',
        xl: '1600px',
      },
      colors: {
        purple: {
          300: '#EE5CEE',
          400: '#451AE2',
          500: '#3715b5'
        },
      },
    },
  },
  plugins: [],
}