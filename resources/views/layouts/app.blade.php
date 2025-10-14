<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>@yield('title', 'Space Tourism')</title>
  <meta name="description" content="@yield('meta_description', 'Découverte de l’espace')">
  @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
<header>
  <nav>
    <a href="{{ route('home') }}" aria-current="{{ request()->routeIs('home') ? 'page' : 'false' }}">Accueil</a>
    <a href="{{ route('destinations') }}" aria-current="{{ request()->routeIs('destinations') ? 'page' : 'false' }}">Destinations</a>
    <a href="{{ route('equipage') }}" aria-current="{{ request()->routeIs('equipage') ? 'page' : 'false' }}">Équipage</a>
    <a href="{{ route('technologies') }}" aria-current="{{ request()->routeIs('technologies') ? 'page' : 'false' }}">Technologies</a>
  </nav>
</header>

<main id="content" tabindex="-1">
  @yield('content')
</main>

<footer>
  <p>&copy; {{ date('Y') }} Space Tourism</p>
</footer>
</body>
</html>
