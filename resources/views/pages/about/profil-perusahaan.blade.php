@php
    $title = 'Profil Perusahaan Karya Fortuna Shipping | Perusahaan Shipping & Maritim';
    $description = 'Kenali Karya Fortuna Shipping, perusahaan yang bergerak di bidang pelayaran dan solusi transportasi laut dengan fokus pada layanan maritim yang aman, efisien, dan terpercaya.';
    $heroImage = asset('images/hero/gambar2.jpg');
    $profileImage = asset('images/hero/gambar3.jpg');

    $profileStats = [
        ['label' => 'Tahun Berdiri', 'value' => '2015'],
        ['label' => 'Pengalaman', 'value' => '10+ Tahun'],
        ['label' => 'Area Operasional', 'value' => 'Indonesia'],
        ['label' => 'Fokus Layanan', 'value' => 'Maritime & Shipping'],
    ];

    $timelineItems = [
        [
            'year' => '2015',
            'title' => 'Awal Berdiri',
            'description' => 'Karya Fortuna Shipping memulai perjalanan dengan fokus pada layanan transportasi laut dan kebutuhan logistik maritim.',
        ],
        [
            'year' => '2017',
            'title' => 'Pengembangan Operasional',
            'description' => 'Perusahaan mulai memperluas jaringan operasional dan membangun kerja sama dengan berbagai mitra bisnis.',
        ],
        [
            'year' => '2020',
            'title' => 'Ekspansi Layanan',
            'description' => 'Karya Fortuna Shipping mengembangkan cakupan layanan untuk mendukung kebutuhan transportasi dan logistik laut yang lebih luas.',
        ],
        [
            'year' => '2023',
            'title' => 'Penguatan Armada & Infrastruktur',
            'description' => 'Perusahaan melakukan pengembangan armada, sumber daya, dan sistem operasional untuk meningkatkan kualitas layanan.',
        ],
        [
            'year' => '2025',
            'title' => 'Menuju Pertumbuhan Berkelanjutan',
            'description' => 'Perusahaan terus mengembangkan solusi maritim yang lebih efektif, aman, dan berorientasi pada kebutuhan pelanggan.',
        ],
    ];

    $highlights = [
        ['value' => '10', 'suffix' => '+', 'label' => 'Tahun Pengalaman'],
        ['value' => '50', 'suffix' => '+', 'label' => 'Proyek / Perjalanan'],
        ['value' => '20', 'suffix' => '+', 'label' => 'Mitra & Klien'],
        ['value' => '5', 'suffix' => '+', 'label' => 'Area Operasional'],
    ];
@endphp

@extends('layouts.app', ['title' => $title, 'description' => $description])

@section('content')
    <x-page-hero
        id="profile-hero-title"
        eyebrow="Tentang Kami"
        title="Profil Karya Fortuna Shipping"
        description="Membangun konektivitas maritim melalui layanan pelayaran dan solusi logistik yang terpercaya."
        :background="$heroImage"
        alt="Kapal dan aktivitas pelayaran di area maritim"
    />

    <section class="relative overflow-hidden bg-white py-20 sm:py-24">
        <div class="pointer-events-none absolute right-0 top-16 hidden h-px w-1/3 bg-gradient-to-l from-[#0F2D52]/16 to-transparent lg:block"></div>
        <div class="mx-auto grid max-w-7xl gap-12 px-5 sm:px-6 lg:grid-cols-[0.95fr_1.05fr] lg:items-center lg:px-8">
            <div data-reveal>
                <x-section-heading
                    eyebrow="Profil Perusahaan"
                    title="Profil Perusahaan"
                    description="Karya Fortuna Shipping merupakan perusahaan yang bergerak di bidang jasa pelayaran dan solusi transportasi laut. Perusahaan berkomitmen memberikan layanan maritim yang aman, efisien, dan terpercaya untuk mendukung kebutuhan pelanggan dan mitra bisnis."
                />

                <div class="mt-10 grid gap-4 sm:grid-cols-2">
                    @foreach ($profileStats as $stat)
                        <div class="rounded-lg border border-[#0F2D52]/12 bg-[#F8FAFC] p-5 transition duration-300 hover:border-[#0F2D52]/30 hover:bg-white hover:shadow-lg hover:shadow-[#0F2D52]/8">
                            <p class="text-xs font-bold uppercase tracking-[0.16em] text-[#C62828]">{{ $stat['label'] }}</p>
                            <p class="mt-3 text-xl font-extrabold text-[#081F3A]">{{ $stat['value'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>

            <figure data-reveal class="relative overflow-hidden rounded-lg border border-[#0F2D52]/12 bg-[#081F3A] shadow-xl shadow-[#0F2D52]/12">
                <img
                    src="{{ $profileImage }}"
                    alt="Visual industri maritim Karya Fortuna Shipping"
                    class="aspect-[4/3] w-full object-cover"
                    loading="lazy"
                >
                <figcaption class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-[#081F3A]/90 to-transparent px-6 pb-6 pt-16 text-sm font-semibold text-white">
                    Karya Fortuna Shipping - Maritime Company Profile
                </figcaption>
            </figure>
        </div>
    </section>

    <section class="relative overflow-hidden bg-[#F4F7FB] py-20 sm:py-24">
        <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">
            <div data-reveal>
                <x-section-heading
                    eyebrow="Sejarah Perusahaan"
                    title="Perjalanan Kami"
                    description="Perjalanan Karya Fortuna Shipping dibangun secara bertahap melalui penguatan operasional, kemitraan, dan komitmen pada layanan maritim yang terpercaya."
                />
            </div>

            <div class="mt-14 lg:hidden">
                <ol class="relative border-l border-[#0F2D52]/25 pl-7">
                    @foreach ($timelineItems as $item)
                        <li data-reveal class="relative pb-10 last:pb-0">
                            <span class="absolute -left-[2.15rem] top-1 size-4 rounded-full bg-[#C62828] ring-8 ring-[#F4F7FB]"></span>
                            <article class="rounded-lg border border-[#0F2D52]/10 bg-white p-6 shadow-sm shadow-slate-950/5">
                                <p class="text-sm font-extrabold uppercase tracking-[0.16em] text-[#C62828]">{{ $item['year'] }}</p>
                                <h3 class="mt-3 text-xl font-bold text-[#081F3A]">{{ $item['title'] }}</h3>
                                <p class="mt-3 text-sm leading-7 text-slate-600">{{ $item['description'] }}</p>
                            </article>
                        </li>
                    @endforeach
                </ol>
            </div>

            <div class="mt-16 hidden lg:block">
                <ol class="grid grid-cols-5 gap-0">
                    @foreach ($timelineItems as $item)
                        <li data-reveal class="relative px-4 pt-10">
                            <span class="absolute left-0 right-0 top-2 h-px bg-[#0F2D52]/25"></span>
                            <span class="absolute left-4 top-0 size-4 rounded-full bg-[#C62828] ring-8 ring-[#F4F7FB]"></span>
                            <article class="min-h-72 rounded-lg border border-[#0F2D52]/10 bg-white p-5 shadow-sm shadow-slate-950/5 transition duration-300 hover:-translate-y-1 hover:border-[#0F2D52]/25 hover:shadow-xl hover:shadow-[#0F2D52]/8">
                                <p class="text-sm font-extrabold uppercase tracking-[0.16em] text-[#C62828]">{{ $item['year'] }}</p>
                                <h3 class="mt-3 text-lg font-bold leading-snug text-[#081F3A]">{{ $item['title'] }}</h3>
                                <p class="mt-4 text-sm leading-7 text-slate-600">{{ $item['description'] }}</p>
                            </article>
                        </li>
                    @endforeach
                </ol>
            </div>
        </div>
    </section>

    <section class="relative overflow-hidden bg-[#081F3A] py-16 text-white sm:py-20" aria-labelledby="company-highlights-title">
        <div class="pointer-events-none absolute inset-x-0 top-0 h-px bg-white/15"></div>
        <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">
            <div data-reveal class="max-w-3xl">
                <p class="text-xs font-bold uppercase tracking-[0.18em] text-red-100">Company Highlights</p>
                <h2 id="company-highlights-title" class="mt-3 text-3xl font-extrabold text-white sm:text-4xl">Dukungan operasional yang terus berkembang.</h2>
            </div>

            <div class="mt-10 grid gap-5 sm:grid-cols-2 lg:grid-cols-4">
                @foreach ($highlights as $highlight)
                    <div data-reveal class="border-l-2 border-[#C62828] bg-white/7 p-6 backdrop-blur-sm transition duration-300 hover:bg-white/10">
                        <p class="text-4xl font-extrabold tracking-tight text-white sm:text-5xl">
                            <span data-count-up="{{ $highlight['value'] }}">{{ $highlight['value'] }}</span>{{ $highlight['suffix'] }}
                        </p>
                        <p class="mt-4 text-sm font-semibold leading-7 text-slate-200">{{ $highlight['label'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="relative overflow-hidden bg-white py-20 sm:py-24">
        <div class="mx-auto grid max-w-7xl gap-10 px-5 sm:px-6 lg:grid-cols-[0.9fr_1.1fr] lg:items-center lg:px-8">
            <div data-reveal>
                <x-section-heading
                    eyebrow="Lokasi Kami"
                    title="Lokasi Kami"
                    description="Kunjungi atau hubungi Karya Fortuna Shipping untuk kebutuhan informasi perusahaan dan kerja sama maritim."
                />

                <address class="mt-8 not-italic text-base leading-8 text-slate-600">
                    <p class="text-lg font-extrabold text-[#081F3A]">Karya Fortuna Shipping</p>
                    <p class="mt-3">Jl. Samudra Nusantara No. 88</p>
                    <p>Balikpapan, Kalimantan Timur</p>
                    <p>Indonesia</p>
                </address>

                <a
                    href="https://maps.google.com/?q=Karya+Fortuna+Shipping+Balikpapan"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="motion-scale mt-8 inline-flex min-h-12 items-center justify-center gap-2 rounded-md bg-[#C62828] px-6 py-3 text-sm font-bold text-white shadow-lg shadow-[#C62828]/20 transition-colors duration-200 hover:bg-[#A61E1E] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#C62828]"
                >
                    <svg class="size-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                    </svg>
                    Buka Google Maps
                </a>
            </div>

            <div data-reveal class="min-h-80 rounded-lg border border-[#0F2D52]/12 bg-[#F4F7FB] p-5 shadow-sm shadow-slate-950/5">
                <div class="flex h-full min-h-72 items-center justify-center rounded-md bg-[linear-gradient(135deg,#FFFFFF_0%,#EEF3F8_50%,#D9E2EC_100%)] p-6 text-center">
                    <div class="max-w-sm">
                        <span class="mx-auto flex size-14 items-center justify-center rounded-full bg-[#0F2D52] text-white shadow-lg shadow-[#0F2D52]/20">
                            <svg class="size-7" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 6.75V15m6-6v8.25m.503 3.498 4.875-2.437A1.125 1.125 0 0 0 21 17.304V4.781a1.125 1.125 0 0 0-1.628-1.006l-3.869 1.934a1.125 1.125 0 0 1-1.006 0L9.503 3.252a1.125 1.125 0 0 0-1.006 0L3.622 5.689A1.125 1.125 0 0 0 3 6.696v12.523c0 .836.88 1.38 1.628 1.006l3.869-1.934a1.125 1.125 0 0 1 1.006 0l4.994 2.457a1.125 1.125 0 0 0 1.006 0Z" />
                            </svg>
                        </span>
                        <p class="mt-5 text-sm font-extrabold uppercase tracking-[0.18em] text-[#0F2D52]">Map Placeholder</p>
                        <p class="mt-3 text-sm leading-7 text-slate-600">Area ini disiapkan untuk embed Google Maps atau koordinat lokasi perusahaan.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="relative overflow-hidden bg-[#081F3A] py-16 text-white sm:py-20" aria-labelledby="company-cta-title">
        <div class="pointer-events-none absolute inset-x-0 top-0 h-px bg-white/15"></div>
        <div data-reveal class="mx-auto flex max-w-7xl flex-col items-start justify-between gap-8 px-5 sm:px-6 lg:flex-row lg:items-center lg:px-8">
            <div class="max-w-2xl">
                <p class="text-xs font-bold uppercase tracking-[0.18em] text-red-100">Hubungi Kami</p>
                <h2 id="company-cta-title" class="mt-3 text-3xl font-extrabold text-white sm:text-4xl">Siap Berkolaborasi Bersama Kami?</h2>
                <p class="mt-4 text-base leading-8 text-slate-200">
                    Hubungi Karya Fortuna Shipping untuk mendiskusikan kebutuhan transportasi dan solusi maritim Anda.
                </p>
            </div>

            <x-link-button :href="route('contact')">
                Hubungi Kami
            </x-link-button>
        </div>
    </section>
@endsection
