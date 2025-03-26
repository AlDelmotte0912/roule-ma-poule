// tailwind.config.js
module.exports = {
  content: [
    // Chemins vers tes fichiers Blade, JS, etc., où tu utilises des classes Tailwind/Flowbite
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
    // Permet de scanner les classes utilisées par Flowbite
    './node_modules/flowbite/**/*.js',
  ],
  theme: {
    extend: {
      // Tu peux y ajouter tes couleurs, tes fontes, etc. si besoin
    },
  },
  plugins: [
    require('flowbite/plugin'), // Plugin Flowbite pour Tailwind
  ],
};
