@extends('layouts.guest')

@section('title', 'Destinations — Space Tourism')
@section('meta_description', 'Choisissez votre destination : Lune, Mars, Europa, Titan.')
@section('og_title', 'Destinations — Space Tourism')
@section('og_description', 'Explorez Lune, Mars, Europa et Titan avec notre équipage.')

@section('content')

@php
    $imgBase = 'assets/images/destinations';

    // Normalisation reçu depuis la route (fallback moon géré côté route)
    $requested = strtolower($planet ?? 'moon');

    $destinations = [
        'moon' => [
            'name' => 'Moon',
            'file' => 'moon.png',
            'intro'=> "Voyagez vers notre satellite naturel et découvrez ses paysages lunaires.",
            'desc' => "La Lune est la destination la plus proche de la Terre, idéale pour un premier vol spatial.
                       Profitez d’un panorama unique sur les mers lunaires et les cratères emblématiques.",
            'distance' => '384 400 km',
            'travel'   => '3 jours',
        ],
        'mars' => [
            'name' => 'Mars',
            'file' => 'mars.png',
            'intro'=> "Cap sur la planète rouge, terre d’exploration et de découvertes.",
            'desc' => "Mars fascine par ses vallées, ses calottes polaires et ses tempêtes.
                       Préparez-vous pour un séjour ambitieux au cœur de l’exploration humaine.",
            'distance' => '225 M km (moy.)',
            'travel'   => '7 mois',
        ],
        'europa' => [
            'name' => 'Europa',
            'file' => 'europa.png',
            'intro'=> "La lune glacée de Jupiter, célèbre pour son océan souterrain.",
            'desc' => "Sous sa croûte de glace, Europa recèlerait un vaste océan.
                       Une destination rêvée pour les passionnés de science et d’astrobiologie.",
            'distance' => '628 M km (moy.)',
            'travel'   => '6–8 ans',
        ],
        'titan' => [
            'name' => 'Titan',
            'file' => 'titan.png',
            'intro'=> "La plus grande lune de Saturne, brumeuse et mystérieuse.",
            'desc' => "Titan possède une atmosphère dense et des lacs d’hydrocarbures.
                       Un paysage étrange, à la beauté singulière, pour une aventure hors du commun.",
            'distance' => '1,4 Md km (moy.)',
            'travel'   => '7–8 ans',
        ],
    ];

    $activeKey = array_key_exists($requested, $destinations) ? $requested : 'moon';
@endphp

<div class="container py-3 py-md-4">
    <h1 class="mb-4 mb-md-5 h2">Destinations</h1>

    <div class="row g-4 align-items-start">
        {{-- Image --}}
        <div class="col-12 col-lg-6 order-1">
            <div class="tab-content">
                @foreach($destinations as $key => $d)
                    @php $active = $key === $activeKey ? 'show active' : ''; @endphp
                    <div class="tab-pane fade {{ $active }}" id="img-{{ $key }}">
                        <figure class="text-center">
                            <img
                                class="img-fluid"
                                src="{{ asset($imgBase . '/' . $d['file']) }}"
                                alt="{{ $d['name'] }}"
                                width="480" height="480"
                                loading="eager"
                            >
                            <figcaption class="visually-hidden">{{ $d['name'] }}</figcaption>
                        </figure>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Onglets + contenu --}}
        <div class="col-12 col-lg-6 order-2">
            <ul class="nav nav-tabs mb-3" id="destTabs" role="tablist" aria-label="Choix de la destination">
                @foreach($destinations as $key => $d)
                    @php $isActive = $key === $activeKey; @endphp
                    <li class="nav-item" role="presentation">
                        <button
                            class="nav-link {{ $isActive ? 'active' : '' }}"
                            id="tab-{{ $key }}"
                            data-bs-toggle="tab"
                            data-bs-target="#pane-{{ $key }}"
                            type="button"
                            role="tab"
                            aria-controls="pane-{{ $key }}"
                            aria-selected="{{ $isActive ? 'true' : 'false' }}"
                        >
                            {{ $d['name'] }}
                        </button>
                    </li>
                @endforeach
            </ul>

            <div class="tab-content" id="destTabsContent">
                @foreach($destinations as $key => $d)
                    @php $active = $key === $activeKey ? 'show active' : ''; @endphp
                    <div
                        class="tab-pane fade {{ $active }}"
                        id="pane-{{ $key }}"
                        role="tabpanel"
                        aria-labelledby="tab-{{ $key }}"
                        tabindex="0"
                    >
                        <p class="text-muted mb-2">{{ $d['intro'] }}</p>
                        <h2 class="h3 mb-3">{{ $d['name'] }}</h2>
                        <p class="mb-4">{{ $d['desc'] }}</p>

                        <div class="row g-3">
                            <div class="col-6">
                                <div class="border rounded p-3 h-100">
                                    <p class="text-uppercase small text-muted mb-1">Distance</p>
                                    <strong>{{ $d['distance'] }}</strong>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="border rounded p-3 h-100">
                                    <p class="text-uppercase small text-muted mb-1">Durée du voyage</p>
                                    <strong>{{ $d['travel'] }}</strong>
                                </div>
                            </div>
                        </div>

                        <div class="mt-3">
                            <a class="link-secondary small" href="{{ route('destinations.show', $key) }}">
                                Lien direct&nbsp;: /destinations/{{ $key }}
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    const tabButtons = document.querySelectorAll('#destTabs button[data-bs-toggle="tab"]');
    tabButtons.forEach(btn => {
        btn.addEventListener('shown.bs.tab', (ev) => {
            const id = ev.target.id;               // ex: tab-moon
            const slug = id.replace('tab-', '');   // -> moon

            // je bascule l’image affichée
            document.querySelectorAll('[id^="img-"]').forEach(p => p.classList.remove('show','active'));
            const imgPane = document.getElementById('img-' + slug);
            if (imgPane) imgPane.classList.add('show','active');
        });
    });
});
</script>
@endpush

@endsection
