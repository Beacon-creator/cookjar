/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],

  theme: {
    extend: {
      colors: {
        brand: {
          primary: "#9FDC26",   // green
          secondary: "#F29C33", // orange
          accent: "#EE6352",    // red/yellow
          other: "#C4E5FC",     // blue
        },

        surface: {
          light: "#F0EBE1", // off-white
          muted: "#f9fafb", // very light gray
          dark: "#262522",  // near black
        },

        text: {
          primary: "#FFFBF2",  // off-white
          muted: "#6b7280",    // gray
          inverted: "#ffffff", // white
        },

        border: {
          subtle: "#F0EBE1",
        },
      },

      fontSize: {
        hero: ['3.5rem', { lineHeight: '1.1' }],
        section: ['2.25rem', { lineHeight: '1.2' }],
        cardTitle: ['1.25rem', { lineHeight: '1.4' }],
        body: ['1rem', { lineHeight: '1.7' }],
        small: ['0.875rem', { lineHeight: '1.6' }],
      },

      borderRadius: {
        xl: '1rem',
        '2xl': '1.25rem',
        '3xl': '1.75rem',
      },

      spacing: {
        section: '6rem',
        card: '1.5rem',
        gutter: '1.25rem',
      },
    },
  },

  plugins: [],
}
