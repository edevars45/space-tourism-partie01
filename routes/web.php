<?php

use Illuminate\Support\Facades\Route; // J'utilise le routeur de Laravel

/*
|--------------------------------------------------------------------------
| Partie 01 — Pages publiques (maquette statique)
|--------------------------------------------------------------------------
| Objectif : n'exposer que des pages Blade statiques (pas de BDD, pas d'auth).
| Chaque route renvoie directement une vue dans resources/views/pages/.
*/

/**
 * Page d’accueil
 * Vue attendue : resources/views/pages/home.blade.php
 * Nom de route : home
 */
Route::view('/', 'pages.home')->name('home');


/**
 * Destinations — redirection « index » -> onglet Moon
 * /destinations doit ouvrir l’onglet Lune pour coller à la maquette.
 * Nom de route : destinations
 */
Route::redirect('/destinations', '/destinations/moon')->name('destinations');

/**
 * Destinations — affichage d’une des 4 planètes (Moon/Mars/Europa/Titan)
 * Vue attendue : resources/views/pages/destinations.blade.php
 * Nom de route : destinations.show
 *
 * Paramètre {planet} facultatif :
 * - si absent ou invalide -> fallback sur "moon"
 * - je normalise en minuscule pour éviter les erreurs de casse
 */
Route::get('/destinations/{planet?}', function (?string $planet = 'moon') {
    $planet = strtolower($planet ?? 'moon');
    $supported = ['moon', 'mars', 'europa', 'titan'];

    if (! in_array($planet, $supported, true)) {
        $planet = 'moon';
    }

    // Je transmets la planète active à la vue (onglets + contenu)
    return view('pages.destinations', ['planet' => $planet]);
})->name('destinations.show');


/**
 * Crew (Équipage)
 * Vue attendue : resources/views/pages/crew.blade.php
 * Nom de route : crew
 */
Route::view('/crew', 'pages.crew')->name('crew');


/**
 * Technology
 * Vue attendue : resources/views/pages/technology.blade.php
 * Nom de route : technology
 */
Route::view('/technology', 'pages.technology')->name('technology');
