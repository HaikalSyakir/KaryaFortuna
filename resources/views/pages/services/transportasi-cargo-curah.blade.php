@php
    $title = 'Transportasi Cargo Curah';
    $description = 'Karya Fortuna Shipping menyediakan solusi Transportasi Cargo Curah, Bulk Cargo, Cargo Barge, Transportasi Laut, dan Maritime Logistics untuk mendukung kebutuhan operasional industri.';
    $breadcrumbs = [
        ['label' => 'Layanan'],
        ['label' => 'Transportasi Cargo Curah'],
    ];

    $images = [
        'hero' => 'https://commons.wikimedia.org/wiki/Special:Redirect/file/Memuat%20batubara.jpg?width=1600',
        'solution' => 'https://commons.wikimedia.org/wiki/Special:Redirect/file/Charging%20of%20coal%20into%20barges.jpg?width=1400',
        'barge' => 'https://commons.wikimedia.org/wiki/Special:Redirect/file/Coal%20hopper%20with%20barge%20Rob%20Loftis.jpeg?width=1200',
        'tugboat' => 'https://commons.wikimedia.org/wiki/Special:Redirect/file/Tugboat_towing_a_Barge_off_Lummi_Island.jpg?width=1200',
        'landingCraft' => 'https://commons.wikimedia.org/wiki/Special:Redirect/file/Alaska%20tugboat%20moves%20a%20barge.jpg?width=1200',
    ];

    $fallbackImage = asset('images/hero/gambar2.jpg');

    $introStats = [
        ['number' => '01', 'title' => 'Bulk Cargo', 'description' => 'Placeholder kategori muatan curah untuk kebutuhan industri.'],
        ['number' => '02', 'title' => 'Marine Logistics', 'description' => 'Dukungan alur transportasi laut yang terkoordinasi.'],
        ['number' => '03', 'title' => 'Operational Efficiency', 'description' => 'Pendekatan kerja untuk proses yang lebih terstruktur.'],
    ];

    $cargoTypes = [
        ['icon' => 'bi-gem', 'title' => 'Coal & Mineral', 'description' => 'Transportasi muatan mineral dan material curah untuk kebutuhan industri.'],
        ['icon' => 'bi-bricks', 'title' => 'Construction Material', 'description' => 'Pengangkutan material konstruksi dan material curah melalui jalur laut.'],
        ['icon' => 'bi-buildings', 'title' => 'Industrial Cargo', 'description' => 'Solusi transportasi untuk kebutuhan cargo industri dalam skala besar.'],
        ['icon' => 'bi-boxes', 'title' => 'Bulk Material', 'description' => 'Transportasi material curah sesuai kebutuhan operasional dan tujuan pengiriman.'],
    ];

    $solutionFeatures = [
        ['number' => '01', 'icon' => 'bi-arrow-down-square', 'title' => 'Cargo Loading'],
        ['number' => '02', 'icon' => 'bi-water', 'title' => 'Marine Transportation'],
        ['number' => '03', 'icon' => 'bi-anchor', 'title' => 'Towing & Barge Operation'],
        ['number' => '04', 'icon' => 'bi-arrow-up-square', 'title' => 'Cargo Unloading'],
    ];

    $processSteps = [
        ['number' => '01', 'title' => 'Planning', 'description' => 'Perencanaan kebutuhan transportasi dan karakteristik cargo.'],
        ['number' => '02', 'title' => 'Loading', 'description' => 'Proses pemuatan cargo ke dalam unit transportasi.'],
        ['number' => '03', 'title' => 'Transportation', 'description' => 'Pengangkutan cargo melalui jalur laut.'],
        ['number' => '04', 'title' => 'Unloading', 'description' => 'Proses pembongkaran cargo di lokasi tujuan.'],
    ];

    $supportFleets = [
        [
            'name' => 'Cargo Barge',
            'type' => 'Bulk Cargo Transportation',
            'description' => 'Unit barge sebagai placeholder armada pendukung untuk pengangkutan cargo curah.',
            'image' => $images['barge'],
            'route' => 'fleets.tugboat-barge',
        ],
        [
            'name' => 'Tugboat',
            'type' => 'Towing & Marine Support',
            'description' => 'Armada towing untuk mendukung pergerakan barge dan aktivitas marine logistics.',
            'image' => $images['tugboat'],
            'route' => 'fleets.tugboat-barge',
        ],
        [
            'name' => 'Landing Craft',
            'type' => 'Cargo Transportation Support',
            'description' => 'Placeholder armada pendukung untuk kebutuhan transportasi cargo dan operasional laut.',
            'image' => $images['landingCraft'],
            'route' => null,
        ],
    ];
@endphp

@extends('layouts.app', ['title' => 'Transportasi Cargo Curah | Karya Fortuna Shipping', 'description' => $description])

@section('content')
    <section class="relative overflow-hidden bg-white pt-16" aria-labelledby="bulk-cargo-title">
        <div class="pointer-events-none absolute inset-x-0 top-16 h-px bg-[#0F2D52]/10"></div>
        <div class="pointer-events-none absolute left-0 top-24 hidden h-px w-1/3 bg-gradient-to-r from-[#C62828]/35 to-transparent lg:block"></div>
        <div class="pointer-events-none absolute bottom-0 right-0 hidden h-px w-1/4 bg-gradient-to-l from-[#0F2D52]/18 to-transparent lg:block"></div>

        <div class="relative mx-auto grid min-h-[calc(100vh-4rem)] max-w-7xl gap-10 px-5 py-10 sm:px-6 sm:py-12 lg:grid-cols-[0.9fr_1.1fr] lg:items-center lg:px-8 lg:py-14 xl:gap-14">
            <div data-reveal class="max-w-2xl">
                <div class="flex items-center gap-3">
                    <span class="h-px w-10 bg-[#0F2D52]/70"></span>
                    <span class="h-1.5 w-1.5 rounded-full bg-[#C62828]"></span>
                    <span class="text-xs font-bold uppercase tracking-[0.18em] text-[#0F2D52]/70">Bulk Cargo Transportation</span>
                </div>
                <p class="mt-5 text-xs font-bold uppercase tracking-[0.2em] text-[#C62828]">Cargo Transportation</p>
                <h1 id="bulk-cargo-title" class="mt-4 text-4xl font-extrabold leading-tight text-[#081F3A] sm:text-5xl lg:text-6xl">Transportasi Cargo Curah yang Efisien dan Terpercaya</h1>
                <p class="mt-6 max-w-xl text-base leading-8 text-slate-600 sm:text-lg">Karya Fortuna Shipping menyediakan solusi transportasi cargo curah melalui armada dan layanan maritim yang mendukung kebutuhan logistik serta operasional industri.</p>

                <div class="mt-8 flex flex-col gap-3 sm:flex-row">
                    <a href="#armada-pendukung" class="inline-flex min-h-12 items-center justify-center rounded-md bg-[#C62828] px-6 py-3 text-sm font-bold text-white shadow-lg shadow-[#C62828]/20 transition duration-200 hover:bg-[#A61E1E] hover:shadow-[#C62828]/30 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#C62828]">Lihat Armada</a>
                    <a href="{{ route('contact') }}" class="inline-flex min-h-12 items-center justify-center rounded-md border border-[#0F2D52]/15 bg-white px-6 py-3 text-sm font-bold text-[#0F2D52] shadow-sm shadow-slate-950/5 transition duration-200 hover:border-[#0F2D52]/35 hover:bg-slate-50 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#0F2D52]">Hubungi Kami</a>
                </div>
            </div>

            <div data-reveal class="relative mx-auto w-full max-w-2xl lg:max-w-none" aria-label="Visual transportasi cargo curah">
                <div class="pointer-events-none absolute -left-4 top-8 hidden h-28 w-28 border-l border-t border-[#C62828]/35 lg:block"></div>
                <div class="pointer-events-none absolute -right-4 bottom-8 hidden h-20 w-20 border-b border-r border-[#0F2D52]/20 lg:block"></div>
                <figure class="group relative overflow-hidden rounded-lg border border-[#0F2D52]/10 bg-[#081F3A] shadow-2xl shadow-[#0F2D52]/16">
                    <img src="{{ $images['hero'] }}" alt="Loading bulk material ke cargo barge untuk Transportasi Cargo Curah" width="1600" height="1000" fetchpriority="high" decoding="async" onerror="this.onerror=null;this.src='{{ $fallbackImage }}';" class="aspect-[16/11] w-full object-cover transition duration-700 group-hover:scale-[1.035]">
                    <div class="absolute inset-0 bg-gradient-to-tr from-[#06182D]/70 via-[#0F2D52]/14 to-transparent"></div>
                    <div class="absolute inset-x-0 top-0 h-1 bg-gradient-to-r from-[#C62828] via-white/70 to-transparent"></div>
                    <figcaption class="absolute bottom-5 left-5 rounded-md border border-white/18 bg-white/12 px-4 py-2 text-xs font-bold uppercase tracking-[0.16em] text-white backdrop-blur-md">Bulk Cargo</figcaption>
                    <div class="absolute right-5 top-5 rounded-md bg-[#C62828] px-4 py-3 text-white shadow-lg shadow-slate-950/20">
                        <p class="text-[0.68rem] font-bold uppercase tracking-[0.16em] text-white/80">Maritime</p>
                        <p class="mt-1 text-sm font-extrabold">Safe - Efficient - Reliable</p>
                    </div>
                </figure>
            </div>
        </div>
    </section>

    <section class="bg-white" aria-label="Breadcrumb Transportasi Cargo Curah">
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

    <section class="relative overflow-hidden bg-white pb-16 sm:pb-20" aria-labelledby="bulk-intro-title">
        <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">
            <div class="grid gap-8 border-t border-[#0F2D52]/10 pt-10 lg:grid-cols-[0.9fr_1.1fr] lg:items-start">
                <div data-reveal>
                    <div class="flex items-center gap-3"><span class="h-px w-10 bg-[#0F2D52]/70"></span><span class="h-1.5 w-1.5 rounded-full bg-[#C62828]"></span></div>
                    <p class="mt-4 text-xs font-bold uppercase tracking-[0.18em] text-[#C62828]">Transportasi Cargo Curah</p>
                    <h2 id="bulk-intro-title" class="mt-3 text-3xl font-extrabold leading-tight text-[#081F3A] sm:text-4xl">Solusi Logistik untuk Pengangkutan Muatan Curah</h2>
                    <p class="mt-5 max-w-2xl text-base leading-8 text-slate-600">Transportasi cargo curah membutuhkan armada dan operasional yang mampu menangani muatan dalam jumlah besar secara aman dan efisien. Karya Fortuna Shipping mendukung kebutuhan tersebut melalui solusi transportasi laut yang disesuaikan dengan karakteristik cargo dan kebutuhan operasional.</p>
                </div>

                <div class="grid gap-4 sm:grid-cols-3 lg:grid-cols-1">
                    @foreach ($introStats as $stat)
                        <article data-reveal class="group rounded-lg border border-[#0F2D52]/10 bg-[#F8FAFC] p-5 transition duration-300 hover:-translate-y-1 hover:border-[#C62828]/35 hover:bg-white hover:shadow-lg hover:shadow-[#0F2D52]/8">
                            <div class="flex items-start gap-4">
                                <span class="text-sm font-extrabold text-[#C62828]">{{ $stat['number'] }}</span>
                                <div>
                                    <h3 class="text-lg font-extrabold text-[#081F3A]">{{ $stat['title'] }}</h3>
                                    <p class="mt-2 text-sm leading-7 text-slate-600">{{ $stat['description'] }}</p>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="relative overflow-hidden bg-[#F4F7FB] py-16 sm:py-20" aria-labelledby="jenis-cargo-title">
        <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">
            <div data-reveal class="mx-auto max-w-3xl text-center">
                <p class="text-xs font-bold uppercase tracking-[0.18em] text-[#C62828]">Cargo Curah</p>
                <h2 id="jenis-cargo-title" class="mt-3 text-3xl font-extrabold leading-tight text-[#081F3A] sm:text-4xl">Berbagai Kebutuhan Cargo Curah</h2>
                <p class="mt-4 text-base leading-8 text-slate-600">Kategori berikut merupakan dummy content sementara dan dapat disesuaikan saat data layanan resmi tersedia.</p>
            </div>

            <div class="mt-10 grid gap-5 md:grid-cols-2 xl:grid-cols-4">
                @foreach ($cargoTypes as $cargo)
                    <article data-reveal class="group rounded-lg border border-[#0F2D52]/10 bg-white p-6 shadow-sm shadow-slate-950/5 transition duration-300 hover:-translate-y-1.5 hover:shadow-xl hover:shadow-[#0F2D52]/12">
                        <span class="inline-flex size-11 items-center justify-center rounded-md bg-[#0F2D52]/8 text-xl text-[#C62828] transition duration-300 group-hover:bg-[#0F2D52] group-hover:text-white"><i class="bi {{ $cargo['icon'] }}" aria-hidden="true"></i></span>
                        <h3 class="mt-6 text-xl font-extrabold text-[#081F3A]">{{ $cargo['title'] }}</h3>
                        <p class="mt-3 text-sm leading-7 text-slate-600">{{ $cargo['description'] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="bg-white py-16 sm:py-20" aria-labelledby="solution-title">
        <div class="mx-auto grid max-w-7xl gap-10 px-5 sm:px-6 lg:grid-cols-2 lg:items-center lg:px-8">
            <div data-reveal class="group relative overflow-hidden rounded-lg border border-[#0F2D52]/10 bg-[#081F3A] shadow-xl shadow-[#0F2D52]/12">
                <img src="{{ $images['solution'] }}" alt="Cargo barge untuk solusi Transportasi Laut muatan curah" width="1400" height="950" loading="lazy" decoding="async" onerror="this.onerror=null;this.src='{{ $fallbackImage }}';" class="aspect-[16/11] w-full object-cover transition duration-700 group-hover:scale-[1.04]">
                <div class="absolute inset-0 bg-gradient-to-t from-[#06182D]/74 via-transparent to-transparent"></div>
                <div class="absolute bottom-5 left-5 rounded-md border border-white/18 bg-white/12 px-4 py-2 text-xs font-bold uppercase tracking-[0.16em] text-white backdrop-blur-md">Cargo Barge Operation</div>
            </div>

            <div data-reveal>
                <p class="text-xs font-bold uppercase tracking-[0.18em] text-[#C62828]">Maritime Cargo Solution</p>
                <h2 id="solution-title" class="mt-3 text-3xl font-extrabold leading-tight text-[#081F3A] sm:text-4xl">Didukung Armada untuk Kebutuhan Muatan Curah</h2>
                <p class="mt-5 text-base leading-8 text-slate-600">Pengangkutan cargo curah membutuhkan koordinasi antara armada, proses loading, perjalanan laut, hingga proses unloading. Sistem operasional dirancang untuk mendukung proses tersebut secara terstruktur dan efisien.</p>
                <div class="mt-7 grid gap-3 sm:grid-cols-2">
                    @foreach ($solutionFeatures as $feature)
                        <div class="flex items-center gap-3 rounded-md border border-[#0F2D52]/10 bg-white px-4 py-3 shadow-sm shadow-slate-950/5 transition duration-200 hover:border-[#C62828]/35">
                            <span class="inline-flex size-10 shrink-0 items-center justify-center rounded-md bg-[#0F2D52] text-white"><i class="bi {{ $feature['icon'] }}" aria-hidden="true"></i></span>
                            <div>
                                <p class="text-[0.68rem] font-bold uppercase tracking-[0.14em] text-[#C62828]">{{ $feature['number'] }}</p>
                                <p class="text-sm font-extrabold text-[#081F3A]">{{ $feature['title'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="relative overflow-hidden bg-[#F8FAFC] py-16 sm:py-20" aria-labelledby="process-title">
        <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">
            <div data-reveal class="max-w-3xl">
                <p class="text-xs font-bold uppercase tracking-[0.18em] text-[#C62828]">Alur Transportasi</p>
                <h2 id="process-title" class="mt-3 text-3xl font-extrabold leading-tight text-[#081F3A] sm:text-4xl">Bagaimana Cargo Curah Ditangani</h2>
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

    <section id="armada-pendukung" class="bg-white py-16 sm:py-20" aria-labelledby="armada-pendukung-title">
        <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">
            <div data-reveal class="max-w-3xl">
                <p class="text-xs font-bold uppercase tracking-[0.18em] text-[#C62828]">Cargo Barge & Support Fleet</p>
                <h2 id="armada-pendukung-title" class="mt-3 text-3xl font-extrabold leading-tight text-[#081F3A] sm:text-4xl">Armada Pendukung</h2>
                <p class="mt-4 text-base leading-8 text-slate-600">Contoh armada pendukung berikut menggunakan dummy content dan dapat disesuaikan dengan data operasional Karya Fortuna Shipping.</p>
            </div>

            <div class="mt-10 grid gap-5 md:grid-cols-2 xl:grid-cols-3">
                @foreach ($supportFleets as $fleet)
                    <article data-reveal class="group overflow-hidden rounded-lg border border-[#0F2D52]/10 bg-white shadow-sm shadow-slate-950/5 transition duration-300 hover:-translate-y-1.5 hover:border-[#C62828]/35 hover:shadow-xl hover:shadow-[#0F2D52]/12">
                        <div class="relative overflow-hidden bg-[#081F3A]">
                            <img src="{{ $fleet['image'] }}" alt="{{ $fleet['name'] }} untuk {{ $fleet['type'] }}" width="1200" height="780" loading="lazy" decoding="async" onerror="this.onerror=null;this.src='{{ $fallbackImage }}';" class="aspect-[16/10] w-full object-cover transition duration-700 group-hover:scale-[1.06]">
                            <div class="absolute inset-x-0 top-0 h-1 bg-[#C62828] opacity-0 transition duration-300 group-hover:opacity-100"></div>
                        </div>
                        <div class="p-6">
                            <p class="text-xs font-bold uppercase tracking-[0.16em] text-[#C62828]">{{ $fleet['type'] }}</p>
                            <h3 class="mt-2 text-xl font-extrabold text-[#081F3A]">{{ $fleet['name'] }}</h3>
                            <p class="mt-3 text-sm leading-7 text-slate-600">{{ $fleet['description'] }}</p>
                            <a href="{{ $fleet['route'] ? route($fleet['route']) : route('contact') }}" class="mt-5 inline-flex w-full items-center justify-center gap-2 rounded-md border border-[#0F2D52]/15 px-4 py-3 text-sm font-bold text-[#0F2D52] transition duration-200 hover:border-[#C62828] hover:bg-[#C62828] hover:text-white">Lihat Detail <i class="bi bi-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="bg-white pb-16 sm:pb-20" aria-labelledby="bulk-cargo-cta-title">
        <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">
            <div data-reveal class="relative overflow-hidden rounded-lg bg-[#081F3A] px-6 py-10 shadow-2xl shadow-[#0F2D52]/18 sm:px-10 lg:px-12">
                <div class="pointer-events-none absolute inset-x-0 top-0 h-1 bg-[#C62828]"></div>
                <div class="relative grid gap-7 lg:grid-cols-[1fr_auto] lg:items-center">
                    <div>
                        <p class="text-xs font-bold uppercase tracking-[0.18em] text-[#F04444]">Maritime Logistics</p>
                        <h2 id="bulk-cargo-cta-title" class="mt-3 text-3xl font-extrabold leading-tight text-white sm:text-4xl">Butuh Solusi Transportasi Cargo Curah?</h2>
                        <p class="mt-4 max-w-2xl text-base leading-8 text-slate-200">Diskusikan kebutuhan transportasi dan logistik maritim Anda bersama Karya Fortuna Shipping.</p>
                    </div>
                    <a href="{{ route('contact') }}" class="inline-flex min-h-12 items-center justify-center gap-2 rounded-md bg-[#C62828] px-6 py-3 text-sm font-bold text-white shadow-lg shadow-[#C62828]/20 transition duration-200 hover:bg-[#A61E1E] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">Hubungi Kami <i class="bi bi-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </section>
@endsection
