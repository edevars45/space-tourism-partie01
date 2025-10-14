<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>@yield('title','Space Tourism')</title>
  <meta name="description" content="@yield('meta_description','Site Space Tourism')" />
  <meta property="og:title" content="@yield('og_title','Space Tourism')" />
  <meta property="og:description" content="@yield('og_description','Site Space Tourism')" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body{background:#0b0d17;color:#d0d6f9}
    header{border-bottom:1px solid rgba(255,255,255,.08)}
    a, .nav-link{color:#d0d6f9}
    .nav-link.active{color:#fff}
    .brand{letter-spacing:.15em}
    .hero-title{font-size:clamp(2.2rem,5vw,5rem);font-weight:800;color:#fff}
    .kicker{letter-spacing:.35em;text-transform:uppercase;color:#d0d6f9}
    .btn-explore{width:200px;height:200px;border-radius:50%;background:#fff;color:#0b0d17;font-weight:600}
    footer{border-top:1px solid rgba(255,255,255,.08)}
  </style>
</head>
<body>
<header class="py-3">
  <div class="container d-flex align-items-center justify-content-between">
    <strong class="brand">SPACE TOURISM</strong>
    <nav class="nav gap-3">
      <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">
        00 Accueil
      </a>
      <a class="nav-link {{ request()->routeIs('destinations*') ? 'active' : '' }}" href="{{ route('destinations') }}">
        01 Destinations
      </a>
      <a class="nav-link {{ request()->routeIs('crew') ? 'active' : '' }}" href="{{ route('crew') }}">
        02 Équipage
      </a>
      <a class="nav-link {{ request()->routeIs('technology') ? 'active' : '' }}" href="{{ route('technology') }}">
        03 Technologies
      </a>
    </nav>
  </div>
</header>

<main class="py-4">
  @yield('content')
</main>

<footer class="py-3">
  <div class="container small">© {{ date('Y') }} Space Tourism. Tous droits réservés.</div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@stack('scripts')
</body>
</html>
