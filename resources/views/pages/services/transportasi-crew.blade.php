@php
    $title = 'Transportasi Crew';
    $description = 'Karya Fortuna Shipping menyediakan layanan Transportasi Crew yang aman, nyaman, dan efisien untuk mendukung mobilitas personel dan operasional maritim.';
    $breadcrumbs = [
        ['label' => 'Layanan'],
        ['label' => 'Transportasi Crew'],
    ];

    $images = [
        'hero' => 'https://commons.wikimedia.org/wiki/Special:Redirect/file/Offshorecrewboat.jpg?width=1800',
        'alpha' => 'https://commons.wikimedia.org/wiki/Special:Redirect/file/Offshorecrewboat.jpg?width=1200',
        'bravo' => 'https://commons.wikimedia.org/wiki/Special:Redirect/file/Crew%20Transfer%20vessel%20Atlantic-Pioneer.jpg?width=1200',
        'charlie' => 'https://commons.wikimedia.org/wiki/Special:Redirect/file/Leaving%20The%20Prinos%20field%20on%20a%20Crew%20boat.%20%2816449580930%29.jpg?width=1200',
        'detail' => 'https://commons.wikimedia.org/wiki/Special:Redirect/file/McFarland%20hopper%20dredge%20crew%20boat%20-%20USACE-p15141coll5-10663.jpeg?width=1200',
    ];

    $fallbackImage = asset('images/hero/gambar1.jpg');

    $heroStats = [
        ['label' => 'Crew Transportation', 'value' => 'Marine Mobility'],
        ['label' => 'Safe & Reliable', 'value' => 'Operational Focus'],
        ['label' => 'Professional Crew', 'value' => 'Trained Support'],
        ['label' => 'Operational Support', 'value' => 'Flexible Route'],
    ];

    $fleets = [
        [
            'name' => 'Crew Boat Alpha',
            'type' => 'Crew Transfer',
            'capacity' => '20-30 Crew',
            'speed' => '+/-20 Knot',
            'operation' => 'Crew Transfer',
            'image' => $images['alpha'],
            'description' => 'Dummy armada untuk contoh layanan transportasi crew yang mendukung perpindahan personel secara aman dan efisien.',
        ],
        [
            'name' => 'Crew Boat Bravo',
            'type' => 'Offshore Support',
            'capacity' => '30-40 Crew',
            'speed' => '+/-22 Knot',
            'operation' => 'Offshore Support',
            'image' => $images['bravo'],
            'description' => 'Dummy armada untuk kebutuhan crew transfer menuju area operasional laut dengan dukungan perjalanan yang nyaman.',
        ],
        [
            'name' => 'Crew Boat Charlie',
            'type' => 'Marine Transportation',
            'capacity' => '40-50 Crew',
            'speed' => '+/-20 Knot',
            'operation' => 'Marine Transportation',
            'image' => $images['charlie'],
            'description' => 'Dummy armada untuk mendukung mobilitas personel dalam skala lebih besar pada aktivitas maritim terencana.',
        ],
    ];

    $benefits = [
        ['icon' => 'bi-shield-check', 'title' => 'Keselamatan Prioritas', 'description' => 'Operasional dirancang dengan memperhatikan keselamatan crew dan prosedur pelayaran.'],
        ['icon' => 'bi-life-preserver', 'title' => 'Armada Siap Operasi', 'description' => 'Armada mendukung kebutuhan transportasi personel di area operasional laut.'],
        ['icon' => 'bi-person-check', 'title' => 'Crew Profesional', 'description' => 'Didukung tenaga operasional yang memahami kebutuhan transportasi maritim.'],
        ['icon' => 'bi-clock-history', 'title' => 'Efisien & Tepat Waktu', 'description' => 'Mendukung mobilitas crew secara terencana dan efisien.'],
    ];

    $processSteps = [
        ['number' => '01', 'title' => 'Penjadwalan', 'description' => 'Koordinasi jadwal perjalanan sesuai kebutuhan operasional dan titik keberangkatan.'],
        ['number' => '02', 'title' => 'Persiapan Crew', 'description' => 'Persiapan personel, kebutuhan perjalanan, dan kesiapan armada sebelum keberangkatan.'],
        ['number' => '03', 'title' => 'Crew Transfer', 'description' => 'Perjalanan crew menuju kapal, offshore area, atau lokasi operasional laut.'],
        ['number' => '04', 'title' => 'Tiba di Lokasi', 'description' => 'Crew tiba di lokasi tujuan untuk melanjutkan aktivitas operasional secara terencana.'],
    ];
@endphp

@extends('layouts.app', ['title' => 'Transportasi Crew yang Aman dan Terpercaya | Karya Fortuna Shipping', 'description' => $description])

@section('content')
    <section class="relative overflow-hidden bg-[#081F3A] pt-16" aria-labelledby="crew-transport-title">
        <div class="absolute inset-0 top-16">
            <img src="{{ $images['hero'] }}" alt="Armada crew boat Karya Fortuna Shipping untuk transportasi crew" width="1800" height="1100" fetchpriority="high" decoding="async" onerror="this.onerror=null;this.src='{{ $fallbackImage }}';" class="h-full w-full object-cover">
            <div class="absolute inset-0 bg-[#081F3A]/72"></div>
            <div class="absolute inset-0 bg-gradient-to-r from-[#06182D]/95 via-[#0F2D52]/72 to-[#0F2D52]/18"></div>
            <div class="absolute inset-x-0 bottom-0 h-32 bg-gradient-to-t from-[#081F3A] to-transparent"></div>
        </div>

        <div class="relative mx-auto flex min-h-[calc(100vh-4rem)] max-w-7xl flex-col justify-center px-5 py-12 sm:px-6 sm:py-16 lg:px-8">
            <div data-reveal class="max-w-3xl">
                <div class="flex items-center gap-3">
                    <span class="h-px w-10 bg-white/70"></span>
                    <span class="h-1.5 w-1.5 rounded-full bg-[#C62828]"></span>
                    <span class="text-xs font-bold uppercase tracking-[0.18em] text-white/75">Marine Transportation</span>
                </div>
                <p class="mt-5 text-xs font-bold uppercase tracking-[0.2em] text-[#F04444]">Layanan Maritim</p>
                <h1 id="crew-transport-title" class="mt-4 text-4xl font-extrabold leading-tight text-white sm:text-5xl lg:text-6xl">Transportasi Crew yang Aman dan Terpercaya</h1>
                <p class="mt-6 max-w-2xl text-base leading-8 text-slate-100 sm:text-lg">Karya Fortuna Shipping menyediakan layanan transportasi crew yang mendukung mobilitas personel menuju dan dari area operasional laut secara aman, nyaman, dan efisien.</p>

                <div class="mt-8 flex flex-col gap-3 sm:flex-row">
                    <a href="#armada-transportasi-crew" class="inline-flex min-h-12 items-center justify-center rounded-md bg-[#C62828] px-6 py-3 text-sm font-bold text-white shadow-lg shadow-[#C62828]/25 transition duration-200 hover:bg-[#A61E1E] hover:shadow-[#C62828]/35 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">Lihat Armada</a>
                    <a href="{{ route('contact') }}" class="inline-flex min-h-12 items-center justify-center rounded-md border border-white/25 bg-white px-6 py-3 text-sm font-bold text-[#0F2D52] shadow-lg shadow-slate-950/10 transition duration-200 hover:bg-slate-50 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">Hubungi Kami</a>
                </div>
            </div>

            <div data-reveal class="mt-12 grid gap-3 sm:grid-cols-2 lg:grid-cols-4">
                @foreach ($heroStats as $stat)
                    <article class="border-l-2 border-[#C62828] bg-white/10 px-4 py-4 backdrop-blur-md">
                        <p class="text-[0.68rem] font-bold uppercase tracking-[0.16em] text-slate-200">{{ $stat['label'] }}</p>
                        <p class="mt-1 text-sm font-extrabold text-white">{{ $stat['value'] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="bg-white" aria-label="Breadcrumb Transportasi Crew">
        <div class="mx-auto max-w-7xl px-5 py-6 sm:px-6 lg:px-8">
            <nav class="flex flex-wrap items-center gap-2 text-sm text-slate-500" aria-label="Breadcrumb">
                <a href="{{ route('home') }}" class="font-medium text-slate-700 transition-colors hover:text-[#C62828]">Beranda</a>
                @foreach ($breadcrumbs as $breadcrumb)
                    <span aria-hidden="true">/</span>
                    <span class="font-medium text-[#081F3A]" aria-current="page">{{ $breadcrumb['label'] }}</span>
                @endforeach
            </nav>
        </div>
    </section>

    <section class="relative overflow-hidden bg-white pb-16 sm:pb-20" aria-labelledby="crew-intro-title">
        <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">
            <div class="grid gap-8 border-t border-[#0F2D52]/10 pt-10 lg:grid-cols-[0.78fr_1fr] lg:items-end">
                <div data-reveal>
                    <div class="flex items-center gap-3">
                        <span class="h-px w-10 bg-[#0F2D52]/70"></span>
                        <span class="h-1.5 w-1.5 rounded-full bg-[#C62828]"></span>
                    </div>
                    <p class="mt-4 text-xs font-bold uppercase tracking-[0.18em] text-[#C62828]">Transportasi Crew</p>
                    <h2 id="crew-intro-title" class="mt-3 text-3xl font-extrabold leading-tight text-[#081F3A] sm:text-4xl">Mobilitas Crew untuk Operasional Maritim</h2>
                </div>
                <p data-reveal class="max-w-2xl text-base leading-8 text-slate-600 lg:justify-self-end">Transportasi crew mendukung perpindahan personel dari titik keberangkatan menuju kapal, offshore area, maupun lokasi operasional laut. Layanan ini dirancang untuk membantu mobilitas crew tetap aman, nyaman, dan selaras dengan kebutuhan operasional.</p>
            </div>
        </div>
    </section>

    <section id="armada-transportasi-crew" class="relative overflow-hidden bg-[#F4F7FB] py-16 sm:py-20" aria-labelledby="crew-fleet-title">
        <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">
            <div data-reveal class="max-w-3xl">
                <p class="text-xs font-bold uppercase tracking-[0.18em] text-[#C62828]">Crew Boat</p>
                <h2 id="crew-fleet-title" class="mt-3 text-3xl font-extrabold leading-tight text-[#081F3A] sm:text-4xl">Armada Transportasi Crew</h2>
                <p class="mt-4 text-base leading-8 text-slate-600">Didukung armada yang dirancang untuk memberikan perjalanan crew yang aman, nyaman, dan efisien. Data armada berikut merupakan dummy content sementara.</p>
            </div>

            <div class="mt-10 grid gap-5 md:grid-cols-2 xl:grid-cols-3">
                @foreach ($fleets as $fleet)
                    <article data-reveal class="group overflow-hidden rounded-lg border border-[#0F2D52]/10 bg-white shadow-sm shadow-slate-950/5 transition duration-300 hover:-translate-y-1.5 hover:border-[#C62828]/35 hover:shadow-xl hover:shadow-[#0F2D52]/12">
                        <div class="relative overflow-hidden bg-[#081F3A]">
                            <img src="{{ $fleet['image'] }}" alt="{{ $fleet['name'] }} untuk transportasi crew operasional maritim" width="1200" height="820" loading="lazy" decoding="async" onerror="this.onerror=null;this.src='{{ $fallbackImage }}';" class="aspect-[16/10] w-full object-cover transition duration-700 group-hover:scale-[1.06]">
                            <div class="absolute inset-x-0 top-0 h-1 bg-[#C62828] opacity-0 transition duration-300 group-hover:opacity-100"></div>
                            <span class="absolute bottom-4 left-4 rounded-md border border-white/18 bg-white/12 px-3 py-1.5 text-[0.68rem] font-bold uppercase tracking-[0.14em] text-white backdrop-blur-md">{{ $fleet['type'] }}</span>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-extrabold text-[#081F3A]">{{ $fleet['name'] }}</h3>
                            <p class="mt-3 text-sm leading-7 text-slate-600">{{ $fleet['description'] }}</p>
                            <dl class="mt-5 grid gap-3">
                                <div class="flex items-center justify-between rounded-md bg-[#0F2D52]/5 px-4 py-3">
                                    <dt class="text-xs font-bold uppercase tracking-[0.12em] text-slate-500">Kapasitas</dt>
                                    <dd class="text-sm font-extrabold text-[#081F3A]">{{ $fleet['capacity'] }}</dd>
                                </div>
                                <div class="flex items-center justify-between rounded-md bg-[#0F2D52]/5 px-4 py-3">
                                    <dt class="text-xs font-bold uppercase tracking-[0.12em] text-slate-500">Kecepatan</dt>
                                    <dd class="text-sm font-extrabold text-[#081F3A]">{{ $fleet['speed'] }}</dd>
                                </div>
                                <div class="flex items-center justify-between rounded-md bg-[#0F2D52]/5 px-4 py-3">
                                    <dt class="text-xs font-bold uppercase tracking-[0.12em] text-slate-500">Operasional</dt>
                                    <dd class="text-sm font-extrabold text-[#081F3A]">{{ $fleet['operation'] }}</dd>
                                </div>
                            </dl>
                            <a href="{{ route('fleets.seatruck') }}" class="mt-5 inline-flex w-full items-center justify-center gap-2 rounded-md border border-[#0F2D52]/15 px-4 py-3 text-sm font-bold text-[#0F2D52] transition duration-200 hover:border-[#C62828] hover:bg-[#C62828] hover:text-white">Lihat Detail <i class="bi bi-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="bg-white py-16 sm:py-20" aria-labelledby="crew-benefits-title">
        <div class="mx-auto grid max-w-7xl gap-10 px-5 sm:px-6 lg:grid-cols-[0.9fr_1.1fr] lg:items-center lg:px-8">
            <div data-reveal class="group relative overflow-hidden rounded-lg border border-[#0F2D52]/10 bg-[#081F3A] shadow-xl shadow-[#0F2D52]/12">
                <img src="{{ $images['detail'] }}" alt="Transportasi crew untuk operasional maritim" width="1200" height="820" loading="lazy" decoding="async" onerror="this.onerror=null;this.src='{{ $fallbackImage }}';" class="aspect-[16/11] w-full object-cover transition duration-700 group-hover:scale-[1.04]">
                <div class="absolute inset-0 bg-gradient-to-t from-[#06182D]/76 via-transparent to-transparent"></div>
                <div class="absolute bottom-5 left-5 rounded-md border border-white/18 bg-white/12 px-4 py-2 text-xs font-bold uppercase tracking-[0.16em] text-white backdrop-blur-md">Professional Crew Transfer</div>
            </div>

            <div data-reveal>
                <p class="text-xs font-bold uppercase tracking-[0.18em] text-[#C62828]">Keunggulan Layanan</p>
                <h2 id="crew-benefits-title" class="mt-3 text-3xl font-extrabold leading-tight text-[#081F3A] sm:text-4xl">Mengapa Memilih Transportasi Crew Kami?</h2>
                <div class="mt-7 grid gap-4 sm:grid-cols-2">
                    @foreach ($benefits as $benefit)
                        <article class="group rounded-lg border border-[#0F2D52]/10 bg-white p-5 shadow-sm shadow-slate-950/5 transition duration-300 hover:-translate-y-1 hover:border-[#C62828]/35 hover:shadow-lg hover:shadow-[#0F2D52]/10">
                            <span class="inline-flex size-11 items-center justify-center rounded-md bg-[#0F2D52]/8 text-xl text-[#C62828] transition duration-300 group-hover:bg-[#0F2D52] group-hover:text-white"><i class="bi {{ $benefit['icon'] }}" aria-hidden="true"></i></span>
                            <h3 class="mt-5 text-lg font-extrabold text-[#081F3A]">{{ $benefit['title'] }}</h3>
                            <p class="mt-2 text-sm leading-7 text-slate-600">{{ $benefit['description'] }}</p>
                        </article>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="relative overflow-hidden bg-[#F8FAFC] py-16 sm:py-20" aria-labelledby="crew-process-title">
        <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">
            <div data-reveal class="mx-auto max-w-3xl text-center">
                <p class="text-xs font-bold uppercase tracking-[0.18em] text-[#C62828]">Alur Layanan</p>
                <h2 id="crew-process-title" class="mt-3 text-3xl font-extrabold leading-tight text-[#081F3A] sm:text-4xl">Bagaimana Layanan Kami Bekerja?</h2>
            </div>

            <div class="relative mt-10 grid gap-4 lg:grid-cols-4">
                <div class="absolute left-0 right-0 top-8 hidden h-px bg-[#0F2D52]/16 lg:block"></div>
                @foreach ($processSteps as $step)
                    <article data-reveal class="relative rounded-lg border border-[#0F2D52]/10 bg-white p-6 shadow-sm shadow-slate-950/5 transition duration-300 hover:-translate-y-1 hover:border-[#C62828]/35 hover:shadow-lg hover:shadow-[#0F2D52]/10">
                        <span class="relative z-10 inline-flex size-16 items-center justify-center rounded-full border-4 border-white bg-[#0F2D52] text-sm font-extrabold text-white shadow-lg shadow-[#0F2D52]/16">{{ $step['number'] }}</span>
                        <h3 class="mt-6 text-xl font-extrabold text-[#081F3A]">{{ $step['title'] }}</h3>
                        <p class="mt-3 text-sm leading-7 text-slate-600">{{ $step['description'] }}</p>
                        <span class="absolute left-6 top-6 h-16 w-16 rounded-full bg-[#C62828]/10"></span>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="bg-white pb-16 pt-4 sm:pb-20" aria-labelledby="crew-cta-title">
        <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">
            <div data-reveal class="relative overflow-hidden rounded-lg bg-[#081F3A] px-6 py-10 shadow-2xl shadow-[#0F2D52]/18 sm:px-10 lg:px-12">
                <div class="pointer-events-none absolute inset-x-0 top-0 h-1 bg-[#C62828]"></div>
                <div class="relative grid gap-7 lg:grid-cols-[1fr_auto] lg:items-center">
                    <div>
                        <p class="text-xs font-bold uppercase tracking-[0.18em] text-[#F04444]">Crew Transportation</p>
                        <h2 id="crew-cta-title" class="mt-3 text-3xl font-extrabold leading-tight text-white sm:text-4xl">Butuh Transportasi Crew untuk Operasional Anda?</h2>
                        <p class="mt-4 max-w-2xl text-base leading-8 text-slate-200">Diskusikan kebutuhan transportasi crew dan operasional maritim bersama tim Karya Fortuna Shipping.</p>
                    </div>
                    <a href="{{ route('contact') }}" class="inline-flex min-h-12 items-center justify-center gap-2 rounded-md bg-[#C62828] px-6 py-3 text-sm font-bold text-white shadow-lg shadow-[#C62828]/20 transition duration-200 hover:bg-[#A61E1E] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">Hubungi Kami <i class="bi bi-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </section>
@endsection
