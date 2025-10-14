{{-- resources/views/layouts/guest.blade.php --}}
<!doctype html>
<html lang="fr">
<head>
  {{-- Encodage et viewport pour un rendu responsive côté mobile --}}
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  {{-- Titre + métadonnées SEO (valeurs par défaut surchargées depuis les vues enfant) --}}
  <title>@yield('title','Space Tourism')</title>
  <meta name="description" content="@yield('meta_description','Site Space Tourism')" />
  <meta property="og:title" content="@yield('og_title','Space Tourism')" />
  <meta property="og:description" content="@yield('og_description','Site Space Tourism')" />
  {{-- (Optionnel) Image OpenGraph : place un visuel dans public/images/og.jpg si tu veux --}}
  {{-- <meta property="og:image" content="{{ asset('images/og.jpg') }}"> --}}

  {{-- Bootstrap (CSS uniquement) pour la grille/typo ; pas d’outil front requis en P01 --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  {{-- Styles rapides (tonalité de la maquette + quelques utilitaires) --}}
  <style>
    :root {
      /* Couleurs de base de la maquette */
      --bg: #0b0d17;
      --text: #d0d6f9;
      --text-strong: #ffffff;
      --rule: rgba(255,255,255,.08);
    }
    html,body { height: 100%; }
    body{ background:var(--bg); color:var(--text); }
    a, .nav-link{ color:var(--text); text-decoration:none; }
    a:hover, .nav-link:hover{ color:var(--text-strong); }
    .nav-link.active{ color:var(--text-strong); }

    header{ border-bottom:1px solid var(--rule); }
    footer{ border-top:1px solid var(--rule); }

    /* Logo : évite les sauts de layout */
    .brand-logo{ width:48px; height:48px; display:block; }

    /* Marque typographique simple (si jamais le logo ne s’affiche pas) */
    .brand-text{ letter-spacing:.15em; font-weight:700; }

    /* Titres de “héros” + kicker de section */
    .hero-title{ font-size:clamp(2.2rem,5vw,5rem); font-weight:800; color:var(--text-strong); }
    .kicker{ letter-spacing:.35em; text-transform:uppercase; color:var(--text); }

    /* Bouton Explore rond (home) */
    .btn-explore{
      width:200px; height:200px; border-radius:50%;
      background:#fff; color:var(--bg); font-weight:600; display:inline-grid; place-items:center;
    }

    /* Lien “Aller au contenu” (accessibilité) : visible au focus clavier */
    .skip-link {
      position:absolute; left:-9999px; top:auto; width:1px; height:1px; overflow:hidden;
    }
    .skip-link:focus {
      position:static; width:auto; height:auto; padding:.5rem .75rem;
      background:#fff; color:#000; border-radius:.25rem;
    }
  </style>
</head>
<body>

{{-- Lien d’évitement pour lecteurs d’écran et navigation clavier --}}
<a href="#main" class="skip-link">Aller directement au contenu</a>

<header class="py-3" role="banner">
  <div class="container d-flex align-items-center justify-content-between">
    {{-- Zone marque : logo SVG dans public/images/logo.svg (ou PNG si tu préfères) --}}
    <a href="{{ route('home') }}" class="d-inline-flex align-items-center gap-2 text-decoration-none"
       aria-label="Accueil Space Tourism">
      <img
        src="{{ asset('images/logo.svg') }}" {{-- change en 'images/logo.png' si besoin --}}
        alt="Space Tourism"
        class="brand-logo"
        width="48" height="48"
      >
      {{-- Texte de secours si l’image ne charge pas / ou choix de le masquer si logo suffisant --}}
      <span class="brand-text visually-hidden">SPACE TOURISM</span>
    </a>

    {{-- Navigation principale ; aria-label pour préciser le rôle au lecteur d’écran --}}
    <nav class="nav gap-3" aria-label="Navigation principale">
      {{-- Accueil --}}
      <a
        class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
        href="{{ route('home') }}"
      >
        <span class="me-1">00</span> Accueil
      </a>

      {{-- Destinations : actif sur /destinations et /destinations/{planet} --}}
      <a
        class="nav-link {{ request()->routeIs('destinations') || request()->routeIs('destinations.show') ? 'active' : '' }}"
        href="{{ route('destinations') }}"
      >
        <span class="me-1">01</span> Destinations
      </a>

      {{-- Équipage --}}
      <a
        class="nav-link {{ request()->routeIs('crew') ? 'active' : '' }}"
        href="{{ route('crew') }}"
      >
        <span class="me-1">02</span> Équipage
      </a>

      {{-- Technologies --}}
      <a
        class="nav-link {{ request()->routeIs('technology') ? 'active' : '' }}"
        href="{{ route('technology') }}"
      >
        <span class="me-1">03</span> Technologies
      </a>
    </nav>
  </div>
</header>

{{-- Zone principale : @yield injecte le contenu de la page enfant --}}
<main id="main" class="py-4" role="main">
  @yield('content')
</main>

<footer class="py-3" role="contentinfo">
  <div class="container small">© {{ date('Y') }} Space Tourism. Tous droits réservés.</div>
</footer>

{{-- Bootstrap JS (pour onglets Destinations, etc.) --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

{{-- Pile de scripts additionnels poussés depuis les vues enfant via @push('scripts') --}}
@stack('scripts')

</body>
</html>
