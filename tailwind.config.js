/** @type {import('tailwindcss').Config} */
export default {
  //  Dossiers à scanner pour garder uniquement les classes utilisées
  content: [
    "./resources/views/**/*.blade.php", // toutes mes vues Blade (pages + layouts)
    "./resources/js/**/*.js",           // tes scripts JS si tu utilises Tailwind dedans
  ],
  theme: {
    extend: {
      //  Police par défaut (tu l’as déjà chargée dans <head>)
      fontFamily: {
        sans: ['Instrument Sans', 'ui-sans-serif', 'system-ui', 'sans-serif'],
      },

      // Images d’arrière-plan (fichiers dans public/images/**)
      //    -> tu obtiens des classes utilitaires comme bg-home, bg-crew, bg-stars
      backgroundImage: {
        'home': "url('/images/background-home.jpg')",
        'crew': "url('/images/background-crew.jpg')",
        'stars': "url('/images/background-stars.jpg')",
        // (optionnel) si tu veux un fond spécifique pour Technology :
        // 'technology': "url('/images/technology/background-technology.jpg')",
      },
    },
  },
  plugins: [],
}
