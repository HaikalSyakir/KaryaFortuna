<?php

use Illuminate\Support\Facades\Route;

$pages = [
    ['uri' => '/', 'name' => 'home', 'view' => 'pages.home'],
    ['uri' => '/tentang/profil-perusahaan', 'name' => 'about.profile', 'view' => 'pages.about.profil-perusahaan'],
    ['uri' => '/tentang/visi-misi', 'name' => 'about.vision-mission', 'view' => 'pages.about.visi-misi'],
    ['uri' => '/tentang/struktur-organisasi', 'name' => 'about.organization-structure', 'view' => 'pages.about.struktur-organisasi'],
    ['uri' => '/tentang/legalitas', 'name' => 'about.legality', 'view' => 'pages.about.legalitas'],
    ['uri' => '/layanan/transportasi-cargo-curah', 'name' => 'services.bulk-cargo-transport', 'view' => 'pages.services.transportasi-cargo-curah'],
    ['uri' => '/layanan/sewa-tongkang-barge', 'name' => 'services.barge-rental', 'view' => 'pages.services.sewa-tongkang-barge'],
    ['uri' => '/layanan/transportasi-crew', 'name' => 'services.crew-transport', 'view' => 'pages.services.transportasi-crew'],
    ['uri' => '/layanan/perawatan-perbaikan-kapal', 'name' => 'services.ship-maintenance-repair', 'view' => 'pages.services.perawatan-perbaikan-kapal'],
    ['uri' => '/layanan/dokumentasi-perizinan-kapal', 'name' => 'services.ship-documentation-permits', 'view' => 'pages.services.dokumentasi-perizinan-kapal'],
    ['uri' => '/armada/tugboat-barge', 'name' => 'fleets.tugboat-barge', 'view' => 'pages.services.tugboat-barge'],
    ['uri' => '/armada/seatruck', 'name' => 'fleets.seatruck', 'view' => 'pages.services.seatruck'],
    ['uri' => '/aplikasi/gbf', 'name' => 'applications.gbf', 'view' => 'pages.applications.gbf'],
    ['uri' => '/aplikasi/ftg', 'name' => 'applications.ftg', 'view' => 'pages.applications.ftg'],
    ['uri' => '/aplikasi/gemilang', 'name' => 'applications.gemilang', 'view' => 'pages.applications.gemilang'],
    ['uri' => '/kontak', 'name' => 'contact', 'view' => 'pages.contact.index'],
];

foreach ($pages as $page) {
    Route::view($page['uri'], $page['view'])->name($page['name']);
}
