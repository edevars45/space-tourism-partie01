@extends('layouts.guest')

@section('title', 'Technology — Space Tourism')
@section('meta_description', 'Découvrez les technologies qui rendent le tourisme spatial possible.')
@section('og_title', 'Technology — Space Tourism')
@section('og_description', 'Découvrez les technologies qui rendent le tourisme spatial possible.')

@section('content')
<div class="container">
    <div class="row gy-4 align-items-center">
        {{-- Image --}}
        <div class="col-12 col-lg-6 text-center order-lg-2">
            <img class="tech-img" src="{{ asset('images/technology/launch-vehicle.jpg') }}" alt="Launch vehicle">
        </div>

        {{-- Texte --}}
        <div class="col-12 col-lg-6 order-lg-1">
            <p class="hero-kicker mb-1">Space launch 101</p>
            <h2 class="hero-title h1 mb-2">Launch Vehicle</h2>
            <p class="mb-4">
                Des lanceurs de nouvelle génération, réutilisables et optimisés pour des vols plus fréquents.
                Performances, fiabilité et confort — la triade au cœur de nos innovations.
            </p>

            <div class="row row-cols-2 g-3">
                <div><small>Hauteur</small><div class="h5 text-white">70 m</div></div>
                <div><small>Poussée</small><div class="h5 text-white">7 600 kN</div></div>
            </div>
        </div>
    </div>
</div>
@endsection
