@extends('layouts.guest')

@section('title','Technologies — Space Tourism')
@section('meta_description','Découvrez les technologies : Launch vehicle, Spaceport, Space capsule.')
@section('og_title','Technologies — Space Tourism')
@section('og_description','Notre flotte et nos infrastructures spatiales.')

@section('content')
@php
  $tech = [
    'launch' => [
      'title' => "Launch vehicle",
      'img'   => asset('images/technology/launch-vehicle.jpg'),
      'alt'   => "Fusée prête au décollage",
      'text'  => "Le lanceur assure votre mise en orbite en toute sécurité...",
    ],
    'spaceport' => [
      'title' => "Spaceport",
      'img'   => asset('images/technology/spaceport.jpg'),
      'alt'   => "Vue du spatioport",
      'text'  => "Nos spatioports garantissent des opérations efficaces et fiables...",
    ],
    'capsule' => [
      'title' => "Space capsule",
      'img'   => asset('images/technology/space-capsule.jpg'),
      'alt'   => "Capsule spatiale en orbite",
      'text'  => "La capsule est pressurisée et conçue pour un confort maximal...",
    ],
  ];
  $active = request('t', 'launch'); // onglet actif via ?t=launch|spaceport|capsule
  if (!array_key_exists($active, $tech)) $active = 'launch';
@endphp

<div class="container py-4">
  <h1 class="mb-4 h2">Technologies</h1>

  <ul class="nav nav-pills mb-3" role="tablist" aria-label="Choix de la technologie">
    @foreach($tech as $key => $item)
      <li class="nav-item" role="presentation">
        <a class="nav-link {{ $active === $key ? 'active' : '' }}"
           href="{{ route('technology', ['t' => $key]) }}"
           aria-current="{{ $active === $key ? 'page' : 'false' }}">
          {{ $item['title'] }}
        </a>
      </li>
    @endforeach
  </ul>

  <div class="row g-4 align-items-center">
    <div class="col-12 col-lg-6">
      <img class="img-fluid rounded" src="{{ $tech[$active]['img'] }}" alt="{{ $tech[$active]['alt'] }}">
    </div>
    <div class="col-12 col-lg-6">
      <h2 class="h3 text-white mb-2">{{ $tech[$active]['title'] }}</h2>
      <p>{{ $tech[$active]['text'] }}</p>
    </div>
  </div>
</div>
@endsection
