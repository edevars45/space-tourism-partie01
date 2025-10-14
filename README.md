time: 01:00
chapter: TP - Space Tourism Project - User Stories
type: TP
---

# TP - Space Tourism - User Stories - Partie 1

Voici un lot de **user stories** pour la **Partie 1 - Intégration de la maquette & mise en place du front**, regroupées par _épics_ avec **critères d’acceptation** (_Given_/_When_/_Then_).

## Epic A - Routage & structure

### US1 - Navigation principale
En tant que **visiteur**, je veux accéder aux pages depuis un **menu global** afin de naviguer facilement.

- _Given_ le site chargé, _When_ je clique sur un lien du menu, _Then_ la **page ciblée s’affiche** et le lien actif est **visuellement distingué**.

- Les URLs sont **lisibles** et cohérentes avec les intitulés (ex. `/destinations`, `/equipage`, `/technologies`).


### US2 - Pages publiques (maquette)
En tant que **visiteur**, je veux retrouver **toutes les pages de la maquette** (ex. Accueil, Destinations, Équipage, Technologies) pour bénéficier du contenu prévu.

- _Then_ chaque page est servie par **Laravel + Blade** avec un **layout commun** (header, footer, navigation).

- Le contenu et la **hiérarchie visuelle** respectent la maquette.


### US3 - Page 404 personnalisée
En tant que **visiteur**, je veux une page **404** claire si je tape une URL inconnue.

- _Given_ une URL inexistante, _Then_ une **404 dédiée** s’affiche avec un lien de **retour à l’accueil**.


## Epic B - Rendu Blade & composants

### US4 - Layout & sections
En tant que **développeur**, je veux un **layout Blade** (ex. `layouts/app.blade.php`) pour factoriser l’en-tête, le pied de page et les **sections** (`@section`, `@yield`).

- _Then_ toutes les pages héritent du layout ; aucune duplication majeure de code.


### US5 - Composants réutilisables
En tant que **développeur**, je veux des **composants Blade** (ex. navigation, carte, bouton) pour uniformiser l’UI.

- _Then_ les composants sont **documentés** (nom, props) et utilisés sur plusieurs pages.


## Epic C - Responsive & fidélité à la maquette

### US6 - Points de rupture
En tant que **visiteur mobile/tablette/desktop**, je veux une mise en page **responsive**.

- _Given_ des largeurs représentatives (ex. mobile ~375px, tablette ~768px, desktop ≥1024px), _Then_ la disposition **s’adapte** sans chevauchements ni scroll horizontal.

- Entre deux breakpoints, les éléments ont un comportement **fluide** (grilles, images, typographies).


### US7 - Fidélité visuelle
En tant que **responsable produit**, je veux que l’interface **reflète fidèlement** la maquette.

- _Then_ espaces, tailles, couleurs et états (hover/focus/active) sont **conformes** ou **justifiés** lorsqu’adaptés au responsive.


## Epic D - Accessibilité (WCAG/RGAA)

### US8 - Structure sémantique & repères
En tant qu’**utilisateur de lecteur d’écran**, je veux une **structure sémantique** correcte pour comprendre la page.

- _Then_ utilisation de **landmarks** (`header`, `nav`, `main`, `footer`), titres hiérarchisés (`h1…h6`), listes et liens **pertinents**.


### US9 - Navigation clavier & focus
En tant qu’**utilisateur clavier**, je veux pouvoir **tout parcourir** sans souris.

- _Given_ la page, _When_ j’utilise Tab/Shift+Tab, _Then_ l’ordre de tabulation est **logique** et le **focus est visible**.

- Les éléments non interactifs **ne reçoivent pas** le focus.


### US10 - ARIA & alternatives
En tant qu’**utilisateur de technologies d’assistance**, je veux des **libellés accessibles**.

- _Then_ images **porteuses d’info** ont `alt` pertinent ; décoratives ont `alt=""`.

- **ARIA** est utilisé **à bon escient** (pas pour remplacer la sémantique native).


### US11 - Contrastes & lisibilité
En tant que **visiteur**, je veux un **contraste suffisant** pour lire confortablement.

- _Then_ contrastes texte/fond **≥ WCAG AA** ; tailles de police et hauteurs de ligne **confortables**.


## Epic E - SEO & partage social

### US12 - Titres & meta description
En tant que **visiteur provenant d’un moteur de recherche**, je veux des **snippets** pertinents.

- _Then_ chaque page a un `<title>` **unique** et une **meta description** descriptive (≈ 140–160 caractères).


### US13 - Sémantique & liens
En tant que **moteur de recherche**, je veux une **sémantique claire**.

- _Then_ balises sémantiques, liens internes **cohérents**, ancres descriptives (éviter “cliquez ici”).


### US14 - Open Graph / Twitter Cards
En tant qu’**utilisateur qui partage une page**, je veux un **aperçu riche** sur les réseaux.

- _Then_ présence de `og:title`, `og:description`, `og:image`, `og:type`, `og:url` et équivalents Twitter Card **par page**.


## Epic F - Assets & styles

### US15 - Choix du stack CSS
En tant que **développeur**, je veux choisir **Bootstrap**, **Tailwind** ou **CSS natif**, et intégrer les assets proprement.

- _Then_ la compilation/chargement se fait via l’outillage Laravel (ex. **Vite**), avec **minification** en prod.

- Les feuilles de style et scripts sont **versionnés** et **scopés** pour éviter les fuites de styles.


## Epic G - Dépôt & démarrage

### US16 - Dépôt GitHub & README
En tant que **mainteneur**, je veux un **dépôt GitHub** propre pour cloner et lancer le projet rapidement.

- _Then_ le dépôt contient un **README** avec : prérequis, installation, commandes de lancement, build des assets, variables d’environnement.

- Commits **petits et explicites** (convention de message conseillée).


---

### Definition of Done (Partie 1)

- Toutes les pages de la maquette sont **intégrées** via **Blade** et accessibles via des **routes Laravel**.

- **Responsive** validé aux largeurs clés + comportement **fluide** entre breakpoints.

- **Accessibilité de base** conforme (landmarks, titres, focus, `alt`, contrastes AA).

- **SEO/OG** configurés page par page (title, meta description, Open Graph/Twitter).

- **404** personnalisée en place.

- Dépôt **GitHub** créé, README à jour, projet **installable et exécutable** sans surprise.

<!-- <p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT). -->
