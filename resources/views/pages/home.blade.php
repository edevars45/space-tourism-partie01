@extends('layouts.guest')

@section('title','Accueil — Space Tourism')
@section('meta_description',"Découvrez notre programme de tourisme spatial.")
@section('og_title','Accueil — Space Tourism')
@section('og_description',"Destinations mythiques, équipage d’élite, technologies de pointe.")

@section('content')
<div class="container">
  <div class="row align-items-center gy-4">
    <div class="col-12 col-lg-7">
      <p class="kicker mb-2">Alors, prêt·e à voyager dans</p>
      <h1 class="hero-title mb-3">L’ESPACE</h1>
      <p class="mb-4">
        Laissez-vous emporter par l’aventure ultime. Notre programme de tourisme spatial
        vous emmène au-delà de l’imagination — destinations mythiques, équipage d’élite,
        technologies de pointe.
      </p>

      <a href="{{ route('destinations') }}" class="btn btn-explore d-inline-flex align-items-center justify-content-center">
        Explorer
      </a>
    </div>

    <div class="col-12 col-lg-5 text-center">
      {{-- Ici tu peux mettre une image d’illustration si tu en as une --}}
    </div>
  </div>
</div>
@endsection
