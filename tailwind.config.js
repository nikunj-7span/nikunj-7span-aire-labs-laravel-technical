/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './src/*.{html,js}',
    './resources/views/**/*.blade.php',
  ],
  theme: {
    extend: {
        backgroundImage: {
            "desktop-bg": "url('/svg/desktop_view.svg')",
            "mobile-bg": "url('/svg/mobile_view.svg')",
          },
    },
  },
  plugins: [],
}

