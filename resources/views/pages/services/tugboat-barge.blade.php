@php
    $title = 'Tugboat & Barge';
    $description = 'Karya Fortuna Shipping menyediakan armada tugboat dan barge untuk mendukung kebutuhan towing, transportasi muatan, dan operasional logistik laut secara profesional dan terpercaya.';
    $breadcrumbs = [
        ['label' => 'Layanan & Armada'],
        ['label' => 'Tugboat & Barge']
    ];

    $heroImages = [
        'main' => [
            'src' => 'https://commons.wikimedia.org/wiki/Special:Redirect/file/Tugboat_towing_a_Barge_off_Lummi_Island.jpg?width=1600',
            'alt' => 'Tugboat Karya Fortuna Shipping',
        ],
        'barge' => [
            'src' => 'https://commons.wikimedia.org/wiki/Special:Redirect/file/Alaska_tugboat_moves_a_barge.jpg?width=1000',
            'alt' => 'Barge Karya Fortuna Shipping',
        ],
        'operation' => [
            'src' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/A_tug_boat_pushing_a_barge_in_Delaware_-a.jpg/960px-A_tug_boat_pushing_a_barge_in_Delaware_-a.jpg',
            'alt' => 'Tugboat towing barge untuk operasional maritim',
        ],
    ];

    $bentoImages = [
        [
            'label' => 'Tugboat',
            'title' => 'Marine Towing & Support',
            'description' => 'Dukungan kapal kerja untuk towing, assisting, dan aktivitas operasional maritim.',
            'image' => 'https://commons.wikimedia.org/wiki/Special:Redirect/file/Tugboat_towing_a_Barge_off_Lummi_Island.jpg?width=1600',
            'alt' => 'Tugboat Karya Fortuna Shipping melakukan towing barge',
            'class' => 'lg:col-span-7 lg:row-span-2',
            'imageClass' => 'aspect-[16/11] lg:h-full lg:aspect-auto',
        ],
        [
            'label' => 'Barge',
            'title' => 'Cargo Transportation',
            'description' => 'Barge untuk mendukung pergerakan cargo dan material antar titik operasional laut.',
            'image' => 'https://commons.wikimedia.org/wiki/Special:Redirect/file/Alaska_tugboat_moves_a_barge.jpg?width=1200',
            'alt' => 'Barge Karya Fortuna Shipping untuk transportasi cargo laut',
            'class' => 'lg:col-span-5',
            'imageClass' => 'aspect-[16/10]',
        ],
        [
            'label' => 'Tugboat',
            'title' => 'Towing & Assist',
            'description' => 'Konfigurasi armada untuk membantu pekerjaan towing dan marine support.',
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/A_tug_boat_pushing_a_barge_in_Delaware_-a.jpg/1280px-A_tug_boat_pushing_a_barge_in_Delaware_-a.jpg',
            'alt' => 'Tugboat pushing barge dalam operasi marine transportation',
            'class' => 'lg:col-span-5',
            'imageClass' => 'aspect-[16/10]',
        ],
        [
            'label' => 'Barge',
            'title' => 'Marine Logistics',
            'description' => 'Dukungan visual armada untuk kebutuhan logistik laut dan pekerjaan pelabuhan.',
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/80/Tugboat_pushing_barge.jpg/1280px-Tugboat_pushing_barge.jpg',
            'alt' => 'Marine transportation vessel mendorong barge',
            'class' => 'lg:col-span-4',
            'imageClass' => 'aspect-[4/3]',
        ],
        [
            'label' => 'Port Operation',
            'title' => 'Work Boat Coordination',
            'description' => 'Armada tugboat dan barge mendukung koordinasi pekerjaan laut yang efisien.',
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/60/Tugboat_with_work_barge_in_Tokyo_20110812_2.jpg/960px-Tugboat_with_work_barge_in_Tokyo_20110812_2.jpg',
            'alt' => 'Work boat dan barge untuk operasi pelabuhan',
            'class' => 'lg:col-span-8',
            'imageClass' => 'aspect-[4/3] lg:aspect-[21/9]',
        ],
    ];

    $fleetDetails = [
        [
            'label' => 'Tugboat',
            'function' => 'Towing dan assisting',
            'operation' => 'Transportasi dan aktivitas maritim',
            'description' => 'Tugboat disiapkan sebagai armada pendukung untuk membantu manuver, towing, dan kebutuhan operasional laut dengan koordinasi kerja yang rapi.',
        ],
        [
            'label' => 'Barge',
            'function' => 'Pengangkutan cargo/muatan',
            'operation' => 'Transportasi laut',
            'description' => 'Barge mendukung pemindahan muatan dan material melalui jalur laut dengan pendekatan operasional yang efisien, profesional, dan terpercaya.',
        ],
    ];
@endphp

@extends('layouts.app', ['title' => 'Tugboat & Barge | Karya Fortuna Shipping', 'description' => $description])

@section('content')
    <section class="relative overflow-hidden bg-white pt-16" aria-labelledby="tugboat-barge-title">
        <style>
            @keyframes fleetHeroFloat {
                0%, 100% { transform: translateY(0); }
                50% { transform: translateY(-7px); }
            }
        </style>
        <div class="pointer-events-none absolute inset-x-0 top-16 h-px bg-[#0F2D52]/10"></div>
        <div class="pointer-events-none absolute left-0 top-24 hidden h-px w-1/3 bg-gradient-to-r from-[#C62828]/35 to-transparent lg:block"></div>
        <div class="pointer-events-none absolute bottom-0 right-0 hidden h-px w-1/4 bg-gradient-to-l from-[#0F2D52]/18 to-transparent lg:block"></div>

        <div class="relative mx-auto grid min-h-[calc(100vh-4rem)] max-w-7xl gap-10 px-5 py-10 sm:px-6 sm:py-12 lg:grid-cols-[0.9fr_1.1fr] lg:items-center lg:px-8 lg:py-14 xl:gap-14">
            <div data-reveal class="max-w-2xl">
                <div class="flex items-center gap-3">
                    <span class="h-px w-10 bg-[#0F2D52]/70"></span>
                    <span class="h-1.5 w-1.5 rounded-full bg-[#C62828]"></span>
                </div>
                <p class="mt-5 text-xs font-bold uppercase tracking-[0.2em] text-[#C62828]">Armada Kami</p>
                <h1 id="tugboat-barge-title" class="mt-4 text-4xl font-extrabold leading-tight text-[#081F3A] sm:text-5xl lg:text-6xl">
                    Tugboat &amp; Barge
                </h1>
                <p class="mt-6 max-w-xl text-base leading-8 text-slate-600 sm:text-lg">
                    Armada tugboat dan barge kami dirancang untuk mendukung kebutuhan transportasi dan logistik laut dengan mengutamakan keandalan, keselamatan, dan efisiensi operasional.
                </p>

                <div class="mt-8 flex flex-col gap-3 sm:flex-row">
                    <a href="#fleet-intro-title" class="inline-flex min-h-12 items-center justify-center rounded-md bg-[#C62828] px-6 py-3 text-sm font-bold text-white shadow-lg shadow-[#C62828]/20 transition duration-200 hover:bg-[#A61E1E] hover:shadow-[#C62828]/30 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#C62828]">
                        Lihat Armada
                    </a>
                    <a href="{{ route('contact') }}" class="inline-flex min-h-12 items-center justify-center rounded-md border border-[#0F2D52]/15 bg-white px-6 py-3 text-sm font-bold text-[#0F2D52] shadow-sm shadow-slate-950/5 transition duration-200 hover:border-[#0F2D52]/35 hover:bg-slate-50 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#0F2D52]">
                        Hubungi Kami
                    </a>
                </div>
            </div>

            <div data-reveal class="relative mx-auto w-full max-w-2xl pb-2 sm:pb-10 sm:pt-4 lg:max-w-none lg:pb-6" aria-label="Komposisi gambar armada Tugboat dan Barge">
                <div class="pointer-events-none absolute -left-5 top-6 hidden h-24 w-24 rounded-full border border-[#0F2D52]/10 lg:block"></div>
                <div class="pointer-events-none absolute -right-3 bottom-12 hidden h-16 w-16 rounded-full border border-[#C62828]/20 lg:block"></div>

                <figure class="group relative overflow-hidden rounded-lg border border-[#0F2D52]/10 bg-[#081F3A] shadow-2xl shadow-[#0F2D52]/16">
                    <img
                        src="{{ $heroImages['main']['src'] }}"
                        alt="{{ $heroImages['main']['alt'] }}"
                        width="1600"
                        height="1000"
                        fetchpriority="high"
                        decoding="async"
                        class="aspect-[16/10] w-full object-cover transition duration-700 group-hover:scale-[1.04]"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-[#06182D]/64 via-transparent to-transparent"></div>
                    <figcaption class="absolute bottom-5 left-5 rounded-full border border-white/18 bg-white/12 px-4 py-2 text-xs font-bold uppercase tracking-[0.16em] text-white backdrop-blur-md">
                        Main Tugboat
                    </figcaption>
                </figure>

                <figure class="group relative mt-4 overflow-hidden rounded-lg border border-white bg-[#081F3A] shadow-xl shadow-[#0F2D52]/14 sm:absolute sm:-right-3 sm:-top-3 sm:mt-0 sm:w-[40%] sm:[animation:fleetHeroFloat_7s_ease-in-out_infinite] lg:-right-6">
                    <img
                        src="{{ $heroImages['barge']['src'] }}"
                        alt="{{ $heroImages['barge']['alt'] }}"
                        width="1000"
                        height="700"
                        loading="eager"
                        decoding="async"
                        class="aspect-[4/3] w-full object-cover transition duration-700 group-hover:scale-[1.05]"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-[#06182D]/60 to-transparent"></div>
                    <figcaption class="absolute bottom-3 left-3 text-xs font-bold uppercase tracking-[0.14em] text-white">
                        Barge
                    </figcaption>
                </figure>

                <figure class="group relative mt-4 overflow-hidden rounded-lg border border-white bg-[#081F3A] shadow-xl shadow-[#0F2D52]/14 sm:absolute sm:-bottom-4 sm:left-8 sm:mt-0 sm:w-[36%] sm:[animation:fleetHeroFloat_8s_ease-in-out_infinite]">
                    <img
                        src="{{ $heroImages['operation']['src'] }}"
                        alt="{{ $heroImages['operation']['alt'] }}"
                        width="960"
                        height="640"
                        loading="eager"
                        decoding="async"
                        class="aspect-[4/3] w-full object-cover transition duration-700 group-hover:scale-[1.05]"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-[#06182D]/60 to-transparent"></div>
                    <figcaption class="absolute bottom-3 left-3 text-xs font-bold uppercase tracking-[0.14em] text-white">
                        Towing Operation
                    </figcaption>
                </figure>
            </div>
        </div>
    </section>

    <section class="bg-white" aria-label="Breadcrumb Tugboat dan Barge">
        <div class="mx-auto max-w-7xl px-5 py-6 sm:px-6 lg:px-8">
            <nav class="flex flex-wrap items-center gap-2 text-sm text-slate-500" aria-label="Breadcrumb">
                <a href="{{ route('home') }}" class="font-medium text-slate-700 transition-colors hover:text-[#C62828]">Beranda</a>
                @foreach ($breadcrumbs as $breadcrumb)
                    <span aria-hidden="true">/</span>
                    @if (! empty($breadcrumb['route']))
                        <a href="{{ route($breadcrumb['route']) }}" class="font-medium text-slate-700 transition-colors hover:text-[#C62828]">
                            {{ $breadcrumb['label'] }}
                        </a>
                    @else
                        <span class="font-medium text-[#081F3A]" aria-current="page">{{ $breadcrumb['label'] }}</span>
                    @endif
                @endforeach
            </nav>
        </div>
    </section>

    <section class="relative overflow-hidden bg-white pb-16 sm:pb-20" aria-labelledby="fleet-intro-title">
        <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">
            <div class="grid gap-8 border-t border-[#0F2D52]/10 pt-10 lg:grid-cols-[0.75fr_1fr] lg:items-end">
                <div data-reveal>
                    <div class="flex items-center gap-3">
                        <span class="h-px w-10 bg-[#0F2D52]/70"></span>
                        <span class="h-1.5 w-1.5 rounded-full bg-[#C62828]"></span>
                    </div>
                    <p class="mt-4 text-xs font-bold uppercase tracking-[0.18em] text-[#C62828]">Armada</p>
                    <h2 id="fleet-intro-title" class="mt-3 text-3xl font-extrabold leading-tight text-[#081F3A] sm:text-4xl">
                        Armada maritim untuk towing dan transportasi laut.
                    </h2>
                </div>

                <p data-reveal class="max-w-2xl text-base leading-8 text-slate-600 lg:justify-self-end">
                    Fokus halaman ini adalah menampilkan armada Tugboat dan Barge sebagai dukungan operasional shipping, marine logistics, dan transportasi muatan melalui jalur laut.
                </p>
            </div>

            <div class="mt-10 grid gap-4 md:grid-cols-2 lg:grid-cols-12 lg:auto-rows-[minmax(220px,auto)]" aria-label="Bento gallery armada tugboat dan barge">
                @foreach ($bentoImages as $image)
                    <article data-reveal class="group relative min-h-[270px] overflow-hidden rounded-lg border border-[#0F2D52]/10 bg-[#081F3A] shadow-sm shadow-slate-950/10 transition duration-300 hover:-translate-y-1 hover:shadow-xl hover:shadow-[#0F2D52]/15 {{ $image['class'] }}">
                        <img
                            src="{{ $image['image'] }}"
                            alt="{{ $image['alt'] }}"
                            width="1600"
                            height="1000"
                            loading="lazy"
                            decoding="async"
                            class="h-full w-full object-cover transition duration-700 group-hover:scale-[1.04] {{ $image['imageClass'] }}"
                        >
                        <div class="absolute inset-0 bg-gradient-to-t from-[#06182D]/90 via-[#081F3A]/24 to-transparent transition duration-300 group-hover:via-[#081F3A]/48"></div>
                        <div class="absolute inset-x-0 top-0 h-1 bg-gradient-to-r from-[#C62828] via-white/60 to-transparent opacity-90"></div>

                        <div class="absolute inset-0 flex flex-col justify-end p-6 sm:p-7">
                            <span class="mb-4 inline-flex w-fit items-center rounded-full border border-white/20 bg-white/12 px-3 py-1 text-[0.68rem] font-bold uppercase tracking-[0.18em] text-white backdrop-blur-sm">
                                {{ $image['label'] }}
                            </span>
                            <h3 class="max-w-xl text-2xl font-extrabold leading-tight text-white sm:text-3xl">
                                {{ $image['title'] }}
                            </h3>
                            <p class="mt-3 max-w-xl text-sm leading-7 text-slate-100 transition duration-300 lg:translate-y-1 lg:opacity-90 lg:group-hover:translate-y-0 lg:group-hover:opacity-100">
                                {{ $image['description'] }}
                            </p>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="relative overflow-hidden bg-[#F4F7FB] py-16 sm:py-20" aria-labelledby="fleet-detail-title">
        <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">
            <div data-reveal class="max-w-3xl">
                <div class="flex items-center gap-3">
                    <span class="h-px w-10 bg-[#0F2D52]/70"></span>
                    <span class="h-1.5 w-1.5 rounded-full bg-[#C62828]"></span>
                </div>
                <p class="mt-4 text-xs font-bold uppercase tracking-[0.18em] text-[#C62828]">Detail Armada</p>
                <h2 id="fleet-detail-title" class="mt-3 text-3xl font-extrabold leading-tight text-[#081F3A] sm:text-4xl">
                    Tugboat &amp; Barge
                </h2>
            </div>

            <div class="mt-10 grid gap-5 lg:grid-cols-2">
                @foreach ($fleetDetails as $detail)
                    <article data-reveal class="rounded-lg border border-[#0F2D52]/10 bg-white p-6 shadow-sm shadow-slate-950/5 sm:p-7">
                        <p class="text-sm font-bold uppercase tracking-[0.16em] text-[#C62828]">{{ $detail['label'] }}</p>
                        <dl class="mt-5 grid gap-3 sm:grid-cols-2">
                            <div class="rounded-md bg-[#0F2D52]/5 p-4">
                                <dt class="text-xs font-bold uppercase tracking-[0.14em] text-slate-500">Fungsi</dt>
                                <dd class="mt-1 font-bold text-[#081F3A]">{{ $detail['function'] }}</dd>
                            </div>
                            <div class="rounded-md bg-[#0F2D52]/5 p-4">
                                <dt class="text-xs font-bold uppercase tracking-[0.14em] text-slate-500">Operasional</dt>
                                <dd class="mt-1 font-bold text-[#081F3A]">{{ $detail['operation'] }}</dd>
                            </div>
                        </dl>
                        <p class="mt-5 text-sm leading-7 text-slate-600 sm:text-base">
                            {{ $detail['description'] }}
                        </p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
@endsection
