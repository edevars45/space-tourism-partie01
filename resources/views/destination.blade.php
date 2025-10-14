{{-- resources/views/destination.blade.php --}}
@extends('layouts.app')

@section('title', 'Destinations — Space Tourism')

@section('content')
  <section class="text-center">
    <h1 class="uppercase tracking-widest text-gray-400 text-lg mb-10">
      01 Choisis ta destination
    </h1>

    <div class="flex flex-col md:flex-row items-center justify-center gap-16">
      <!-- Image planète -->
      <div class="flex-1 flex justify-center">
        <img src="{{ asset('images/destinations/moon.png') }}" alt="Lune" class="h-96 object-contain">
      </div>

      <!-- Texte -->
      <div class="flex-1 text-left">
        <div class="flex gap-6 mb-6">
          <a href="#" class="uppercase tracking-widest text-white border-b-2 border-white pb-2">Moon</a>
          <a href="#" class="uppercase tracking-widest text-gray-400 hover:text-white pb-2">Mars</a>
          <a href="#" class="uppercase tracking-widest text-gray-400 hover:text-white pb-2">Europa</a>
          <a href="#" class="uppercase tracking-widest text-gray-400 hover:text-white pb-2">Titan</a>
        </div>

        <h2 class="text-6xl font-bold uppercase">Moon</h2>
        <p class="mt-6 text-lg text-gray-300 max-w-md">
          Voyez notre satellite naturel de plus près. Une destination parfaite pour un premier voyage
          au-delà de la Terre. Profitez d’un séjour inoubliable à seulement quelques jours de voyage.
        </p>

        <div class="flex gap-16 mt-10 border-t border-gray-700 pt-6 uppercase">
          <div>
            <span class="block text-gray-400 text-sm">Distance</span>
            <span class="block text-2xl">384,400 km</span>
          </div>
          <div>
            <span class="block text-gray-400 text-sm">Durée</span>
            <span class="block text-2xl">3 jours</span>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
