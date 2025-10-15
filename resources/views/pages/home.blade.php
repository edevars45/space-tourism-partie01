@extends('layouts.guest')

@section('title','Accueil — Space Tourism')
@section('meta_description',"Programme de tourisme spatial : destinations mythiques, équipage d’élite, technologies de pointe.")
@section('og_title','Accueil — Space Tourism')
@section('og_description',"Découvrez nos destinations et partez dans l’Espace en toute sécurité.")

@section('content')
<div class="container py-5">
  <div class="row align-items-center gy-5">
    <div class="col-12 col-lg-6">
      <p class="kicker mb-3">Alors, vous voulez voyager dans</p>
      <h1 class="hero-title mb-3">L’ESPACE</h1>
      <p class="mb-4">
        Laissez-vous emporter par l’aventure ultime. Notre programme de tourisme spatial
        vous emmène au-delà de l’imagination — destinations mythiques, équipage d’élite,
        technologies de pointe.
      </p>
    </div>
    <div class="col-12 col-lg-6 d-flex justify-content-lg-end justify-content-center">
      <a href="{{ route('destinations') }}" class="btn btn-explore d-inline-flex align-items-center justify-content-center" aria-label="Explorer les destinations">
        Explorer
      </a>
    </div>
  </div>
</div>
@endsection
