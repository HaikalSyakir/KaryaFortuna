@php
    $title = 'Seatruck (Transportasi Crew)';
    $description = 'Karya Fortuna Shipping menyediakan layanan Seatruck dan Crew Boat untuk Transportasi Crew yang aman, cepat, dan efisien dalam mendukung kebutuhan operasional Armada Maritim.';
    $breadcrumbs = [
        ['label' => 'Layanan & Armada'],
        ['label' => 'Seatruck (Transportasi Crew)'],
    ];

    $images = [
        'main' => 'https://commons.wikimedia.org/wiki/Special:Redirect/file/Offshorecrewboat.jpg?width=1400',
        'detail' => 'https://commons.wikimedia.org/wiki/Special:Redirect/file/Crew%20Transfer%20vessel%20Atlantic-Pioneer.jpg?width=1000',
        'a' => 'https://commons.wikimedia.org/wiki/Special:Redirect/file/Offshorecrewboat.jpg?width=900',
        'b' => 'https://commons.wikimedia.org/wiki/Special:Redirect/file/Crew%20Transfer%20vessel%20Atlantic-Pioneer.jpg?width=900',
        'c' => 'https://commons.wikimedia.org/wiki/Special:Redirect/file/Leaving%20The%20Prinos%20field%20on%20a%20Crew%20boat.%20%2816449580930%29.jpg?width=900',
        'd' => 'https://commons.wikimedia.org/wiki/Special:Redirect/file/McFarland%20hopper%20dredge%20crew%20boat%20-%20USACE-p15141coll5-10663.jpeg?width=900',
    ];

    $fallbackImage = asset('images/hero/gambar1.jpg');

    $features = [
        ['number' => '01', 'title' => 'Crew Transportation', 'icon' => 'bi-people-fill'],
        ['number' => '02', 'title' => 'Fast & Efficient', 'icon' => 'bi-speedometer2'],
        ['number' => '03', 'title' => 'Safety Focused', 'icon' => 'bi-shield-check'],
    ];

    $fleets = [
        ['name' => 'Seatruck KF-01', 'type' => 'Fast Crew Boat', 'image' => $images['a'], 'description' => 'Dummy content untuk contoh armada seatruck yang mendukung mobilitas personel secara cepat dan nyaman.'],
        ['name' => 'Seatruck KF-02', 'type' => 'Personnel Transfer Boat', 'image' => $images['b'], 'description' => 'Dummy content untuk kebutuhan personnel transfer antara fasilitas darat dan area operasional laut.'],
        ['name' => 'Seatruck KF-03', 'type' => 'Crew Transport Vessel', 'image' => $images['c'], 'description' => 'Dummy content untuk armada crew transport vessel dengan konfigurasi operasional yang fleksibel.'],
        ['name' => 'Seatruck KF-04', 'type' => 'Utility Crew Boat', 'image' => $images['d'], 'description' => 'Dummy content untuk dukungan transportasi crew dan kebutuhan utility dalam aktivitas maritim.'],
    ];

    $specs = [
        ['label' => 'Length', 'value' => '18 m'],
        ['label' => 'Capacity', 'value' => '12-20 Persons'],
        ['label' => 'Speed', 'value' => '25 Knots'],
        ['label' => 'Material', 'value' => 'Aluminium'],
    ];
@endphp

@extends('layouts.app', ['title' => 'Seatruck untuk Transportasi Crew | Karya Fortuna Shipping', 'description' => $description])

@section('content')
    <section class="relative overflow-hidden bg-white pt-16" aria-labelledby="seatruck-title">
        <div class="pointer-events-none absolute inset-x-0 top-16 h-px bg-[#0F2D52]/10"></div>
        <div class="pointer-events-none absolute left-0 top-28 hidden h-px w-1/3 bg-gradient-to-r from-[#C62828]/40 to-transparent lg:block"></div>
        <div class="pointer-events-none absolute bottom-8 right-0 hidden h-px w-1/4 bg-gradient-to-l from-[#0F2D52]/20 to-transparent lg:block"></div>

        <div class="relative mx-auto grid min-h-[calc(100vh-4rem)] max-w-7xl gap-10 px-5 py-10 sm:px-6 sm:py-12 lg:grid-cols-[0.92fr_1.08fr] lg:items-center lg:px-8 lg:py-14 xl:gap-14">
            <div data-reveal class="max-w-2xl">
                <div class="flex items-center gap-3">
                    <span class="h-px w-10 bg-[#0F2D52]/70"></span>
                    <span class="h-1.5 w-1.5 rounded-full bg-[#C62828]"></span>
                    <span class="text-xs font-bold uppercase tracking-[0.18em] text-[#0F2D52]/70">Fast, Reliable Crew Transportation</span>
                </div>
                <p class="mt-5 text-xs font-bold uppercase tracking-[0.2em] text-[#C62828]">Crew Transportation</p>
                <h1 id="seatruck-title" class="mt-4 text-4xl font-extrabold leading-tight text-[#081F3A] sm:text-5xl lg:text-6xl">Seatruck untuk Transportasi Crew yang Aman dan Efisien</h1>
                <p class="mt-6 max-w-xl text-base leading-8 text-slate-600 sm:text-lg">Karya Fortuna Shipping menyediakan layanan transportasi crew melalui armada seatruck yang dirancang untuk mendukung mobilitas personel dan kebutuhan operasional maritim.</p>

                <div class="mt-8 flex flex-col gap-3 sm:flex-row">
                    <a href="#armada-seatruck" class="inline-flex min-h-12 items-center justify-center rounded-md bg-[#C62828] px-6 py-3 text-sm font-bold text-white shadow-lg shadow-[#C62828]/20 transition duration-200 hover:bg-[#A61E1E] hover:shadow-[#C62828]/30 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#C62828]">Lihat Armada</a>
                    <a href="{{ route('contact') }}" class="inline-flex min-h-12 items-center justify-center rounded-md border border-[#0F2D52]/15 bg-white px-6 py-3 text-sm font-bold text-[#0F2D52] shadow-sm shadow-slate-950/5 transition duration-200 hover:border-[#0F2D52]/35 hover:bg-slate-50 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#0F2D52]">Hubungi Kami</a>
                </div>

                <dl class="mt-9 grid max-w-xl grid-cols-3 gap-3">
                    @foreach ([['Focus', 'Crew'], ['Mode', 'Fast'], ['Support', 'Maritime']] as $stat)
                        <div class="border-l-2 border-[#C62828] bg-[#0F2D52]/5 px-4 py-3">
                            <dt class="text-[0.68rem] font-bold uppercase tracking-[0.14em] text-slate-500">{{ $stat[0] }}</dt>
                            <dd class="mt-1 text-sm font-extrabold text-[#081F3A]">{{ $stat[1] }}</dd>
                        </div>
                    @endforeach
                </dl>
            </div>

            <div data-reveal class="relative mx-auto w-full max-w-2xl lg:max-w-none" aria-label="Visual crew boat untuk transportasi crew">
                <div class="pointer-events-none absolute -left-4 top-8 hidden h-28 w-28 border-l border-t border-[#C62828]/35 lg:block"></div>
                <div class="pointer-events-none absolute -right-4 bottom-8 hidden h-20 w-20 border-b border-r border-[#0F2D52]/20 lg:block"></div>
                <figure class="group relative overflow-hidden rounded-lg border border-[#0F2D52]/10 bg-[#081F3A] shadow-2xl shadow-[#0F2D52]/16">
                    <img src="{{ $images['main'] }}" alt="Crew boat cepat untuk layanan Seatruck Karya Fortuna Shipping" width="1400" height="1050" fetchpriority="high" decoding="async" onerror="this.onerror=null;this.src='{{ $fallbackImage }}';" class="aspect-[16/11] w-full object-cover transition duration-700 group-hover:scale-[1.03]">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#06182D]/64 via-transparent to-transparent"></div>
                    <figcaption class="absolute bottom-5 left-5 rounded-md border border-white/18 bg-white/12 px-4 py-2 text-xs font-bold uppercase tracking-[0.16em] text-white backdrop-blur-md">Seatruck / Crew Boat</figcaption>
                    <div class="absolute right-5 top-5 rounded-md bg-[#C62828] px-4 py-3 text-white shadow-lg shadow-slate-950/20">
                        <p class="text-[0.68rem] font-bold uppercase tracking-[0.16em] text-white/80">Service</p>
                        <p class="mt-1 text-sm font-extrabold">Personnel Transfer</p>
                    </div>
                </figure>
            </div>
        </div>
    </section>

    <section class="bg-white" aria-label="Breadcrumb Seatruck">
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

    <section class="relative overflow-hidden bg-white pb-16 sm:pb-20" aria-labelledby="transportasi-crew-title">
        <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">
            <div class="grid gap-8 border-t border-[#0F2D52]/10 pt-10 lg:grid-cols-[0.78fr_1fr] lg:items-end">
                <div data-reveal>
                    <div class="flex items-center gap-3"><span class="h-px w-10 bg-[#0F2D52]/70"></span><span class="h-1.5 w-1.5 rounded-full bg-[#C62828]"></span></div>
                    <p class="mt-4 text-xs font-bold uppercase tracking-[0.18em] text-[#C62828]">Transportasi Crew</p>
                    <h2 id="transportasi-crew-title" class="mt-3 text-3xl font-extrabold leading-tight text-[#081F3A] sm:text-4xl">Mobilitas Crew yang Cepat, Aman, dan Terpercaya</h2>
                </div>
                <p data-reveal class="max-w-2xl text-base leading-8 text-slate-600 lg:justify-self-end">Seatruck Karya Fortuna Shipping dirancang untuk mendukung kebutuhan transportasi personel menuju area operasional laut. Armada crew boat memberikan fleksibilitas dalam mobilitas crew dengan mengutamakan keselamatan, kenyamanan, dan efisiensi operasional.</p>
            </div>

            <div class="mt-10 grid gap-4 md:grid-cols-3">
                @foreach ($features as $feature)
                    <article data-reveal class="rounded-lg border border-[#0F2D52]/10 bg-white p-6 shadow-sm shadow-slate-950/5">
                        <div class="flex items-start justify-between gap-4">
                            <span class="text-sm font-extrabold text-[#C62828]">{{ $feature['number'] }}</span>
                            <span class="inline-flex size-10 items-center justify-center rounded-md bg-[#0F2D52] text-white"><i class="bi {{ $feature['icon'] }}" aria-hidden="true"></i></span>
                        </div>
                        <h3 class="mt-6 text-lg font-extrabold text-[#081F3A]">{{ $feature['title'] }}</h3>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section id="armada-seatruck" class="relative overflow-hidden bg-[#F4F7FB] py-16 sm:py-20" aria-labelledby="armada-seatruck-title">
        <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">
            <div data-reveal class="max-w-3xl">
                <p class="text-xs font-bold uppercase tracking-[0.18em] text-[#C62828]">Armada Maritim</p>
                <h2 id="armada-seatruck-title" class="mt-3 text-3xl font-extrabold leading-tight text-[#081F3A] sm:text-4xl">Armada Seatruck</h2>
                <p class="mt-4 text-base leading-8 text-slate-600">Pilihan armada transportasi crew untuk mendukung berbagai kebutuhan operasional maritim.</p>
                <p class="mt-3 text-sm font-semibold text-slate-500">Spesifikasi di bawah adalah dummy content sementara dan dapat diganti saat data asli tersedia.</p>
            </div>

            <div class="mt-10 grid gap-5 md:grid-cols-2 xl:grid-cols-4">
                @foreach ($fleets as $fleet)
                    <article data-reveal class="group overflow-hidden rounded-lg border border-[#0F2D52]/10 bg-white shadow-sm shadow-slate-950/5 transition duration-300 hover:-translate-y-1.5 hover:border-[#C62828]/35 hover:shadow-xl hover:shadow-[#0F2D52]/12">
                        <div class="relative overflow-hidden bg-[#081F3A]">
                            <img src="{{ $fleet['image'] }}" alt="{{ $fleet['type'] }} untuk Transportasi Crew" width="900" height="620" loading="lazy" decoding="async" onerror="this.onerror=null;this.src='{{ $fallbackImage }}';" class="aspect-[16/11] w-full object-cover transition duration-700 group-hover:scale-[1.07]">
                            <div class="absolute inset-x-0 top-0 h-1 bg-[#C62828] opacity-0 transition duration-300 group-hover:opacity-100"></div>
                        </div>
                        <div class="p-5">
                            <p class="text-xs font-bold uppercase tracking-[0.16em] text-[#C62828]">{{ $fleet['type'] }}</p>
                            <h3 class="mt-2 text-xl font-extrabold text-[#081F3A]">{{ $fleet['name'] }}</h3>
                            <p class="mt-3 text-sm leading-7 text-slate-600">{{ $fleet['description'] }}</p>
                            <dl class="mt-5 grid grid-cols-2 gap-3">
                                @foreach ($specs as $spec)
                                    <div class="rounded-md bg-[#0F2D52]/5 p-3">
                                        <dt class="text-[0.68rem] font-bold uppercase tracking-[0.12em] text-slate-500">{{ $spec['label'] }}</dt>
                                        <dd class="mt-1 text-sm font-extrabold text-[#081F3A]">{{ $spec['value'] }}</dd>
                                    </div>
                                @endforeach
                            </dl>
                            <a href="{{ route('contact') }}" class="mt-5 inline-flex w-full items-center justify-center gap-2 rounded-md border border-[#0F2D52]/15 px-4 py-3 text-sm font-bold text-[#0F2D52] transition duration-200 hover:border-[#C62828] hover:bg-[#C62828] hover:text-white">Lihat Detail <i class="bi bi-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="bg-white py-16 sm:py-20" aria-labelledby="operasional-maritim-title">
        <div class="mx-auto grid max-w-7xl gap-10 px-5 sm:px-6 lg:grid-cols-2 lg:items-center lg:px-8">
            <div data-reveal class="relative overflow-hidden rounded-lg border border-[#0F2D52]/10 bg-[#081F3A] shadow-xl shadow-[#0F2D52]/12">
                <img src="{{ $images['detail'] }}" alt="Crew transfer boat untuk operasional laut" width="1000" height="700" loading="lazy" decoding="async" onerror="this.onerror=null;this.src='{{ $fallbackImage }}';" class="aspect-[16/11] w-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-[#06182D]/72 via-transparent to-transparent"></div>
                <div class="absolute bottom-5 left-5 rounded-md border border-white/18 bg-white/12 px-4 py-2 text-xs font-bold uppercase tracking-[0.16em] text-white backdrop-blur-md">Offshore Crew Support</div>
            </div>

            <div data-reveal>
                <p class="text-xs font-bold uppercase tracking-[0.18em] text-[#C62828]">Dirancang untuk Operasional Maritim</p>
                <h2 id="operasional-maritim-title" class="mt-3 text-3xl font-extrabold leading-tight text-[#081F3A] sm:text-4xl">Transportasi Crew yang Mendukung Operasional Laut</h2>
                <p class="mt-5 text-base leading-8 text-slate-600">Armada seatruck dirancang untuk membantu mobilitas personel antara fasilitas darat dan area operasional laut. Dengan karakteristik kapal yang cepat dan fleksibel, layanan ini dapat mendukung kebutuhan crew transfer dan personnel movement.</p>
                <div class="mt-7 grid gap-3 sm:grid-cols-2">
                    @foreach (['Crew Transfer', 'Personnel Movement', 'Offshore Support', 'Flexible Operation'] as $item)
                        <div class="flex items-center gap-3 rounded-md border border-[#0F2D52]/10 bg-white px-4 py-3 shadow-sm shadow-slate-950/5"><span class="inline-flex size-6 items-center justify-center rounded-full bg-[#C62828] text-xs text-white"><i class="bi bi-check-lg" aria-hidden="true"></i></span><span class="text-sm font-bold text-[#081F3A]">{{ $item }}</span></div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white pb-16 sm:pb-20" aria-labelledby="seatruck-cta-title">
        <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">
            <div data-reveal class="relative overflow-hidden rounded-lg bg-[#081F3A] px-6 py-10 shadow-2xl shadow-[#0F2D52]/18 sm:px-10 lg:px-12">
                <div class="pointer-events-none absolute inset-x-0 top-0 h-1 bg-[#C62828]"></div>
                <div class="relative grid gap-7 lg:grid-cols-[1fr_auto] lg:items-center">
                    <div>
                        <p class="text-xs font-bold uppercase tracking-[0.18em] text-[#F04444]">Crew Transportation</p>
                        <h2 id="seatruck-cta-title" class="mt-3 text-3xl font-extrabold leading-tight text-white sm:text-4xl">Butuh Armada untuk Transportasi Crew?</h2>
                        <p class="mt-4 max-w-2xl text-base leading-8 text-slate-200">Hubungi tim Karya Fortuna Shipping untuk mengetahui pilihan armada dan solusi transportasi crew yang sesuai dengan kebutuhan operasional Anda.</p>
                    </div>
                    <a href="{{ route('contact') }}" class="inline-flex min-h-12 items-center justify-center gap-2 rounded-md bg-[#C62828] px-6 py-3 text-sm font-bold text-white shadow-lg shadow-[#C62828]/20 transition duration-200 hover:bg-[#A61E1E] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">Hubungi Kami <i class="bi bi-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </section>
@endsection
