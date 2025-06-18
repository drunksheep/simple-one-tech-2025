// tailwind.config.js
export default {
  content: [
    './src/**/*.{ts,js,css}',
    '../**/*.php', // ← include PHP outside root
  ],
}

console.log("Tailwind config loaded")