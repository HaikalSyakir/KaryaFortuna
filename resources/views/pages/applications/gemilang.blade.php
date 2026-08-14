@php
    $title = 'PT Gemilang | Afiliasi Karya Fortuna Shipping';
    $description = 'Profil PT Gemilang sebagai perusahaan afiliasi dalam jaringan Karya Fortuna Shipping di bidang maritim dan logistik.';
    $heroImage = 'https://images.unsplash.com/photo-1700777685830-f501e67260e6?auto=format&fit=crop&fm=jpg&q=80&w=2200';
    $companyImageUrl = 'https://images.unsplash.com/photo-1700777685830-f501e67260e6?auto=format&fit=crop&fm=jpg&q=80&w=1500';
    $visualImageUrl = 'https://images.pexels.com/photos/13766343/pexels-photo-13766343.jpeg?auto=compress&cs=tinysrgb&w=1500';
    // Ganti URL ini dengan website resmi PT Gemilang ketika sudah tersedia.
    $officialWebsiteUrl = 'https://example.com';

    $mainInfo = [
        [
            'title' => 'Bidang Usaha',
            'description' => 'Mendukung aktivitas yang berkaitan dengan layanan maritim, cargo handling, dan kebutuhan logistik pendukung.',
            'icon' => 'ship',
        ],
        [
            'title' => 'Fokus Layanan',
            'description' => 'Berorientasi pada koordinasi layanan, kelancaran operasional, dan penguatan proses kerja lintas mitra.',
            'icon' => 'operations',
        ],
        [
            'title' => 'Wilayah Operasional',
            'description' => 'Memiliki ruang kerja yang diarahkan untuk mendukung kebutuhan layanan di wilayah operasional Indonesia.',
            'icon' => 'map',
        ],
        [
            'title' => 'Peran Afiliasi',
            'description' => 'Menjadi bagian dari jejaring bisnis yang memperkuat kolaborasi Karya Fortuna Shipping dengan mitra terkait.',
            'icon' => 'network',
        ],
    ];

    $roles = [
        [
            'title' => 'Kolaborasi Maritim',
            'description' => 'Membantu membangun kerja sama yang relevan dengan kebutuhan sektor pelayaran dan pelabuhan.',
        ],
        [
            'title' => 'Dukungan Operasional',
            'description' => 'Mendukung penyelarasan proses kerja agar aktivitas layanan berjalan lebih tertata.',
        ],
        [
            'title' => 'Integrasi Logistik',
            'description' => 'Berperan dalam menghubungkan kebutuhan logistik dengan koordinasi bisnis yang lebih efisien.',
        ],
        [
            'title' => 'Pengembangan Jaringan',
            'description' => 'Memperkuat jejaring afiliasi untuk mendorong hubungan kemitraan yang berkelanjutan.',
        ],
    ];
@endphp

@extends('layouts.app', ['title' => $title, 'description' => $description])

@section('content')
    <x-page-hero
        id="gemilang-hero-title"
        eyebrow="Afiliasi Karya Fortuna Shipping"
        title="PT Gemilang"
        variant="affiliate-visual"
        description="PT Gemilang merupakan salah satu perusahaan dalam jaringan afiliasi Karya Fortuna Shipping yang mendukung penguatan kerja sama bisnis, operasional maritim, dan layanan logistik pendukung."
        :background="$heroImage"
        alt="Aktivitas crane dan kontainer di area pelabuhan"
    />

    <section class="relative overflow-hidden bg-white py-20 sm:py-24" aria-labelledby="gemilang-intro-title">
        <div class="pointer-events-none absolute right-0 top-16 hidden h-px w-1/3 bg-gradient-to-l from-[#0F2D52]/16 to-transparent lg:block"></div>
        <div class="mx-auto grid max-w-7xl gap-12 px-5 sm:px-6 lg:grid-cols-[0.92fr_1.08fr] lg:items-center lg:px-8">
            <div data-reveal>
                <x-section-heading
                    eyebrow="Profil Afiliasi"
                    title="Mengenal PT Gemilang"
                    description="PT Gemilang hadir sebagai mitra afiliasi yang membantu memperluas kapasitas kolaborasi Karya Fortuna Shipping di lingkungan maritim dan logistik. Perannya diarahkan pada dukungan bisnis yang profesional, komunikasi yang jelas, dan kerja sama yang dapat disesuaikan dengan kebutuhan operasional."
                />

                <div class="mt-8 grid gap-4 sm:grid-cols-2">
                    <div class="rounded-lg border border-[#0F2D52]/12 bg-[#F8FAFC] p-5 shadow-sm shadow-slate-950/5">
                        <p class="text-xs font-bold uppercase tracking-[0.16em] text-[#C62828]">Orientasi</p>
                        <p class="mt-3 text-base font-extrabold text-[#081F3A]">Kemitraan maritim</p>
                    </div>
                    <div class="rounded-lg border border-[#0F2D52]/12 bg-[#F8FAFC] p-5 shadow-sm shadow-slate-950/5">
                        <p class="text-xs font-bold uppercase tracking-[0.16em] text-[#C62828]">Pendekatan</p>
                        <p class="mt-3 text-base font-extrabold text-[#081F3A]">Kolaboratif dan adaptif</p>
                    </div>
                </div>
            </div>

            <figure data-reveal class="relative overflow-hidden rounded-lg border border-[#0F2D52]/12 bg-[#081F3A] shadow-xl shadow-[#0F2D52]/12">
                <img
                    src="{{ $companyImageUrl }}"
                    alt="Crane pelabuhan dan kontainer sebagai visual PT Gemilang"
                    class="aspect-[4/3] w-full object-cover"
                    loading="lazy"
                >
                <figcaption class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-[#081F3A]/92 to-transparent px-6 pb-6 pt-20 text-sm font-semibold text-white">
                    Port operations and cargo coordination
                </figcaption>
            </figure>
        </div>
    </section>

    <section class="relative overflow-hidden bg-[#F4F7FB] py-20 sm:py-24" aria-labelledby="gemilang-profile-title">
        <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">
            <div data-reveal>
                <x-section-heading
                    eyebrow="Profil PT Gemilang"
                    title="Profil PT Gemilang"
                    description="PT Gemilang merupakan perusahaan afiliasi yang berperan dalam mendukung ekosistem bisnis Karya Fortuna Shipping melalui kolaborasi di bidang maritim, cargo, dan logistik. Perusahaan ini ditempatkan sebagai bagian dari jaringan yang membantu menghubungkan kebutuhan operasional dengan kerja sama bisnis yang lebih terarah."
                    align="center"
                />
            </div>

            <div class="mt-12 grid gap-6 lg:grid-cols-[1.05fr_0.95fr] lg:items-stretch">
                <article data-reveal class="rounded-lg border border-[#0F2D52]/12 bg-white p-7 shadow-sm shadow-slate-950/5 sm:p-8">
                    <p class="text-xs font-bold uppercase tracking-[0.18em] text-[#C62828]">Gambaran Umum</p>
                    <h3 class="mt-3 text-2xl font-extrabold leading-tight text-[#081F3A]">Afiliasi yang memperkuat konektivitas bisnis.</h3>
                    <div class="mt-5 space-y-4 text-base leading-8 text-slate-600">
                        <p>
                            Dalam jaringan Karya Fortuna Shipping, PT Gemilang mendukung kebutuhan koordinasi dan kerja sama yang berkaitan dengan aktivitas pelayaran, logistik, serta layanan pendukung di sekitar rantai bisnis maritim.
                        </p>
                        <p>
                            Perusahaan ini mengedepankan profesionalisme, kejelasan proses, dan hubungan kemitraan yang saling mendukung. Dengan pendekatan tersebut, PT Gemilang membantu memperkuat ekosistem layanan yang lebih responsif terhadap kebutuhan mitra dan pelanggan.
                        </p>
                    </div>
                </article>

                <div data-reveal class="grid gap-4 sm:grid-cols-2 lg:grid-cols-1">
                    <div class="rounded-lg border border-[#0F2D52]/12 bg-[#081F3A] p-6 text-white shadow-lg shadow-[#0F2D52]/12">
                        <p class="text-xs font-bold uppercase tracking-[0.18em] text-red-100">Fokus Kerja</p>
                        <p class="mt-3 text-xl font-extrabold">Maritime and logistics collaboration</p>
                    </div>
                    <div class="rounded-lg border border-[#0F2D52]/12 bg-white p-6 shadow-sm shadow-slate-950/5">
                        <p class="text-xs font-bold uppercase tracking-[0.18em] text-[#C62828]">Nilai Utama</p>
                        <p class="mt-3 text-xl font-extrabold text-[#081F3A]">Profesional, tanggap, dan berorientasi kerja sama</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="relative overflow-hidden bg-white py-20 sm:py-24" aria-labelledby="gemilang-info-title">
        <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">
            <div data-reveal class="max-w-3xl">
                <p class="text-xs font-bold uppercase tracking-[0.18em] text-[#C62828]">Informasi Utama</p>
                <h2 id="gemilang-info-title" class="mt-3 text-3xl font-extrabold leading-tight text-[#081F3A] sm:text-4xl">
                    Ringkasan Perusahaan
                </h2>
                <p class="mt-5 text-base leading-8 text-slate-600">
                    Informasi berikut menggambarkan ruang peran PT Gemilang dalam mendukung jaringan afiliasi Karya Fortuna Shipping.
                </p>
            </div>

            <div class="mt-10 grid gap-5 sm:grid-cols-2 lg:grid-cols-4">
                @foreach ($mainInfo as $info)
                    <article data-reveal class="rounded-lg border border-[#0F2D52]/12 bg-white p-6 shadow-sm shadow-slate-950/5 transition duration-300 hover:-translate-y-1 hover:border-[#0F2D52]/28 hover:shadow-xl hover:shadow-[#0F2D52]/10">
                        <span class="flex size-11 items-center justify-center rounded-md bg-[#0F2D52] text-white">
                            @if ($info['icon'] === 'ship')
                                <svg class="size-5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 18.75h16.5M5.25 18.75 4.5 12h15l-.75 6.75M8.25 12V7.5h7.5V12M10.5 7.5V4.875c0-.621.504-1.125 1.125-1.125h.75c.621 0 1.125.504 1.125 1.125V7.5" />
                                </svg>
                            @elseif ($info['icon'] === 'operations')
                                <svg class="size-5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6h9.75M10.5 12h9.75M10.5 18h9.75M3.75 6h.008v.008H3.75V6Zm0 6h.008v.008H3.75V12Zm0 6h.008v.008H3.75V18Z" />
                                </svg>
                            @elseif ($info['icon'] === 'map')
                                <svg class="size-5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 6.75V15m6-6v8.25m.503 3.498 4.875-2.437A1.125 1.125 0 0 0 21 17.304V4.781a1.125 1.125 0 0 0-1.628-1.006l-3.869 1.934a1.125 1.125 0 0 1-1.006 0L9.503 3.252a1.125 1.125 0 0 0-1.006 0L3.622 5.689A1.125 1.125 0 0 0 3 6.696v12.523c0 .836.88 1.38 1.628 1.006l3.869-1.934a1.125 1.125 0 0 1 1.006 0l4.994 2.457a1.125 1.125 0 0 0 1.006 0Z" />
                                </svg>
                            @else
                                <svg class="size-5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 14.25 4.5 17.25m0 0 3 3m-3-3h10.5a4.5 4.5 0 0 0 0-9h-1.5m3-4.5 3 3m0 0-3 3m3-3H9a4.5 4.5 0 1 0 0 9h1.5" />
                                </svg>
                            @endif
                        </span>
                        <h3 class="mt-5 text-lg font-extrabold text-[#081F3A]">{{ $info['title'] }}</h3>
                        <p class="mt-3 text-sm leading-7 text-slate-600">{{ $info['description'] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="relative overflow-hidden bg-[#F4F7FB] py-20 sm:py-24" aria-labelledby="gemilang-role-title">
        <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">
            <div data-reveal>
                <x-section-heading
                    eyebrow="Peran PT Gemilang"
                    title="Dukungan bagi Ekosistem Karya Fortuna Shipping"
                    description="PT Gemilang membantu memperkuat ekosistem afiliasi melalui dukungan kerja yang terkoordinasi, kolaboratif, dan selaras dengan kebutuhan bisnis maritim."
                    align="center"
                />
            </div>

            <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
                @foreach ($roles as $role)
                    <article data-reveal class="rounded-lg border border-[#0F2D52]/12 bg-white p-6 shadow-sm shadow-slate-950/5 transition duration-300 hover:-translate-y-1 hover:border-[#C62828]/30 hover:shadow-xl hover:shadow-[#0F2D52]/8">
                        <span class="block h-1 w-10 rounded-full bg-[#C62828]"></span>
                        <h3 class="mt-6 text-lg font-extrabold text-[#081F3A]">{{ $role['title'] }}</h3>
                        <p class="mt-4 text-sm leading-7 text-slate-600">{{ $role['description'] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="relative overflow-hidden bg-white py-20 sm:py-24" aria-labelledby="gemilang-visual-title">
        <div class="mx-auto grid max-w-7xl gap-10 px-5 sm:px-6 lg:grid-cols-[1.05fr_0.95fr] lg:items-center lg:px-8">
            <figure data-reveal class="relative overflow-hidden rounded-lg border border-[#0F2D52]/12 bg-[#081F3A] shadow-xl shadow-[#0F2D52]/12">
                <img
                    src="{{ $visualImageUrl }}"
                    alt="Area kontainer dan aktivitas logistik dari udara"
                    class="aspect-[16/10] w-full object-cover"
                    loading="lazy"
                >
            </figure>

            <div data-reveal>
                <p class="text-xs font-bold uppercase tracking-[0.18em] text-[#C62828]">Visual Operasional</p>
                <h2 id="gemilang-visual-title" class="mt-3 text-3xl font-extrabold leading-tight text-[#081F3A] sm:text-4xl">
                    Mendukung konektivitas rantai layanan.
                </h2>
                <p class="mt-5 text-base leading-8 text-slate-600">
                    PT Gemilang memperkuat peran afiliasi melalui koordinasi yang mendukung alur kerja maritim dan logistik. Pendekatan ini membantu menciptakan hubungan layanan yang lebih terhubung antara kebutuhan operasional, mitra, dan pengembangan jaringan bisnis.
                </p>
                <div class="mt-7 border-l-2 border-[#C62828] bg-[#F8FAFC] px-5 py-4">
                    <p class="text-sm font-semibold leading-7 text-slate-600">
                        Setiap elemen kerja diarahkan untuk menjaga kelancaran koordinasi, akurasi komunikasi, dan kesinambungan layanan.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="relative overflow-hidden bg-[#081F3A] py-16 text-white sm:py-20" aria-labelledby="gemilang-cta-title">
        <div class="pointer-events-none absolute inset-x-0 top-0 h-px bg-white/15"></div>
        <div data-reveal class="mx-auto flex max-w-7xl flex-col items-start justify-between gap-8 px-5 sm:px-6 lg:flex-row lg:items-center lg:px-8">
            <div class="max-w-2xl">
                <p class="text-xs font-bold uppercase tracking-[0.18em] text-red-100">Website Resmi</p>
                <h2 id="gemilang-cta-title" class="mt-3 text-3xl font-extrabold text-white sm:text-4xl">Kenali PT Gemilang Lebih Lanjut</h2>
                <p class="mt-4 text-base leading-8 text-slate-200">
                    Temukan informasi lebih lanjut mengenai PT Gemilang dan jaringan layanan yang dikembangkan bersama Karya Fortuna Shipping.
                </p>
            </div>

            <x-link-button :href="$officialWebsiteUrl" target="_blank" rel="noopener noreferrer">
                Visit Website
                <svg class="ml-2 size-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                </svg>
            </x-link-button>
        </div>
    </section>
@endsection
