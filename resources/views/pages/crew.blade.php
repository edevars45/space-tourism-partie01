@extends('layouts.guest')

@section('title', 'Crew — Space Tourism')
@section('meta_description', "Rencontrez l'équipage : commandant, spécialiste, pilote, ingénieur.")
@section('og_title', 'Crew — Space Tourism')
@section('og_description', "Rencontrez l'équipage : commandant, spécialiste, pilote, ingénieur.")

@section('content')

@php
    // Dossier d’images (selon ton arborescence)
    $imgBase = 'assets/images/crew';

    // Données statiques maquette (Partie 01)
    $crew = [
        'commander' => [
            'role'  => 'Commander',
            'name'  => 'Douglas Hurley',
            'file'  => 'commander.png',
            'blurb' => "Ancien astronaute et pilote d’essai. Il dirige les opérations avec calme et précision,
                        assurant la sécurité de l’équipage et le succès de la mission."
        ],
        'specialist' => [
            'role'  => 'Mission Specialist',
            'name'  => 'Mark Shuttleworth',
            'file'  => 'specialist.png',
            'blurb' => "Entrepreneur et spécialiste mission. Il coordonne les expériences à bord et les procédures scientifiques."
        ],
        'pilot' => [
            'role'  => 'Pilot',
            'name'  => 'Victor Glover',
            'file'  => 'pilot.png',
            'blurb' => "Pilote d’essai chevronné, responsable de la navigation et des manœuvres complexes."
        ],
        'engineer' => [
            'role'  => 'Flight Engineer',
            'name'  => 'Anousheh Ansari',
            'file'  => 'engineer.png',
            'blurb' => "Ingénieure de vol, garante des systèmes de bord et de la maintenance critique."
        ],
    ];

    // Membre actif par défaut
    $activeKey = 'commander';
@endphp

<div class="container py-3 py-md-4">
    <h1 class="mb-4 mb-md-5 h2">Crew</h1>

    <div class="row g-4 align-items-start">
        {{-- Colonne image --}}
        <div class="col-12 col-lg-6 order-1">
            <div class="tab-content">
                @foreach($crew as $key => $c)
                    @php $active = $key === $activeKey ? 'show active' : ''; @endphp
                    <div class="tab-pane fade {{ $active }}" id="img-{{ $key }}">
                        <figure class="text-center">
                            <img
                                class="img-fluid"
                                src="{{ asset($imgBase . '/' . $c['file']) }}"
                                alt="{{ $c['role'] }} — {{ $c['name'] }}"
                                width="480" height="480"
                                loading="eager"
                            >
                            <figcaption class="visually-hidden">{{ $c['role'] }} — {{ $c['name'] }}</figcaption>
                        </figure>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Colonne texte + “pagination” par puces (style onboarding) --}}
        <div class="col-12 col-lg-6 order-2">
            {{-- Petits ronds de sélection (accessibles) --}}
            <div class="d-flex gap-2 mb-3" role="tablist" aria-label="Choix du membre d’équipage">
                @foreach($crew as $key => $c)
                    @php $isActive = $key === $activeKey; @endphp
                    <button
                        class="btn {{ $isActive ? 'btn-dark' : 'btn-outline-secondary' }} rounded-circle p-0"
                        style="width: 14px; height: 14px;"
                        id="dot-{{ $key }}"
                        data-bs-toggle="tab"
                        data-bs-target="#pane-{{ $key }}"
                        type="button"
                        role="tab"
                        aria-controls="pane-{{ $key }}"
                        aria-selected="{{ $isActive ? 'true' : 'false' }}"
                        title="{{ $c['role'] }} — {{ $c['name'] }}"
                    ></button>
                @endforeach
            </div>

            {{-- Panneaux de contenu --}}
            <div class="tab-content">
                @foreach($crew as $key => $c)
                    @php $active = $key === $activeKey ? 'show active' : ''; @endphp
                    <div
                        class="tab-pane fade {{ $active }}"
                        id="pane-{{ $key }}"
                        role="tabpanel"
                        aria-labelledby="dot-{{ $key }}"
                        tabindex="0"
                    >
                        <p class="text-uppercase text-muted small mb-1">{{ $c['role'] }}</p>
                        <h2 class="h3 mb-2">{{ $c['name'] }}</h2>
                        <p class="mb-0">{{ $c['blurb'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    const dots = document.querySelectorAll('[id^="dot-"][data-bs-toggle="tab"]');
    dots.forEach(btn => {
        btn.addEventListener('shown.bs.tab', (ev) => {
            const id = ev.target.id;               // ex: dot-commander
            const slug = id.replace('dot-', '');   // -> commander

            // je synchronise l’image
            document.querySelectorAll('[id^="img-"]').forEach(p => p.classList.remove('show','active'));
            const imgPane = document.getElementById('img-' + slug);
            if (imgPane) imgPane.classList.add('show','active');
        });
    });
});
</script>
@endpush

@endsection
