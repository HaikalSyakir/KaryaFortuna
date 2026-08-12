@php
    $title = 'PT FTG | Afiliasi Karya Fortuna Shipping';
    $description = 'Profil PT FTG sebagai bagian dari jaringan afiliasi Karya Fortuna Shipping di sektor maritim dan logistik.';
    $heroImage = 'https://images.unsplash.com/photo-1632517306067-b54ab4d1f98d?auto=format&fit=crop&fm=jpg&q=80&w=2200';
    $companyImageUrl = 'https://images.unsplash.com/photo-1632517306067-b54ab4d1f98d?auto=format&fit=crop&fm=jpg&q=80&w=1600';
    // Ganti URL ini dengan website resmi PT FTG ketika sudah tersedia.
    $officialWebsiteUrl = 'https://example.com';

    $companyInfo = [
        [
            'label' => 'Bidang Usaha',
            'value' => 'Marine Transportation',
            'icon' => 'ship',
        ],
        [
            'label' => 'Fokus Layanan',
            'value' => 'Logistics Coordination',
            'icon' => 'route',
        ],
        [
            'label' => 'Wilayah Operasional',
            'value' => 'Indonesia',
            'icon' => 'map',
        ],
        [
            'label' => 'Peran dalam Afiliasi',
            'value' => 'Strategic Support',
            'icon' => 'network',
        ],
    ];

    $strengths = [
        [
            'title' => 'Kolaborasi Operasional',
            'description' => 'Mendukung koordinasi aktivitas kerja agar proses layanan maritim berjalan lebih tertata.',
            'icon' => 'operations',
        ],
        [
            'title' => 'Dukungan Logistik',
            'description' => 'Berperan dalam penguatan alur pendukung untuk kebutuhan pengiriman dan distribusi.',
            'icon' => 'cargo',
        ],
        [
            'title' => 'Jaringan Maritim',
            'description' => 'Memperluas hubungan kerja dalam lingkungan pelayaran, pelabuhan, dan jasa pendukung.',
            'icon' => 'network',
        ],
        [
            'title' => 'Solusi Terintegrasi',
            'description' => 'Mendorong pendekatan layanan yang saling terhubung antara operasional dan kebutuhan bisnis.',
            'icon' => 'integrated',
        ],
    ];
@endphp

@extends('layouts.app', ['title' => $title, 'description' => $description])

@section('content')
    <x-page-hero
        id="ftg-hero-title"
        eyebrow="Afiliasi Karya Fortuna Shipping"
        title="PT FTG"
        description="PT FTG merupakan bagian dari jaringan afiliasi Karya Fortuna Shipping yang berperan dalam mendukung kolaborasi bisnis, koordinasi operasional, dan kebutuhan layanan maritim."
        :background="$heroImage"
        alt="Kapal kargo di jalur pelayaran"
    />

    <section class="relative overflow-hidden bg-white py-20 sm:py-24" aria-labelledby="ftg-intro-title">
        <div class="pointer-events-none absolute right-0 top-16 hidden h-px w-1/3 bg-gradient-to-l from-[#0F2D52]/16 to-transparent lg:block"></div>
        <div class="mx-auto grid max-w-7xl gap-12 px-5 sm:px-6 lg:grid-cols-[0.88fr_1.12fr] lg:items-center lg:px-8">
            <div data-reveal>
                <x-section-heading
                    eyebrow="Profil Afiliasi"
                    title="Mengenal PT FTG"
                    description="PT FTG diposisikan sebagai mitra afiliasi yang mendukung pengembangan ekosistem layanan Karya Fortuna Shipping. Dengan pendekatan kerja yang profesional dan kolaboratif, PT FTG membantu memperkuat hubungan bisnis di sektor maritim, logistik, dan transportasi laut."
                />

                <div class="mt-8 border-l-2 border-[#C62828] bg-[#F8FAFC] px-5 py-4">
                    <p class="text-sm font-semibold leading-7 text-slate-600">
                        Fokus utama PT FTG diarahkan pada dukungan layanan yang rapi, komunikasi yang jelas, dan kerja sama yang dapat beradaptasi dengan kebutuhan operasional di lapangan.
                    </p>
                </div>
            </div>

            <figure data-reveal class="relative overflow-hidden rounded-lg border border-[#0F2D52]/12 bg-[#081F3A] shadow-xl shadow-[#0F2D52]/12">
                <img
                    src="{{ $companyImageUrl }}"
                    alt="Kapal kargo berlayar sebagai visual perusahaan maritim"
                    class="aspect-[16/11] w-full object-cover"
                    loading="lazy"
                >
                <figcaption class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-[#081F3A]/92 to-transparent px-6 pb-6 pt-20 text-sm font-semibold text-white">
                    Marine transportation and logistics support
                </figcaption>
            </figure>
        </div>
    </section>

    <section class="relative overflow-hidden bg-[#F4F7FB] py-20 sm:py-24" aria-labelledby="ftg-profile-title">
        <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">
            <div data-reveal>
                <x-section-heading
                    eyebrow="Tentang PT FTG"
                    title="Tentang PT FTG"
                    description="PT FTG merupakan perusahaan afiliasi yang berfokus pada dukungan kegiatan maritim dan logistik. Dalam jaringan Karya Fortuna Shipping, PT FTG berperan sebagai bagian dari ekosistem kolaborasi yang membantu menghubungkan kebutuhan bisnis, koordinasi lapangan, dan pengembangan layanan pendukung."
                    align="center"
                />
            </div>

            <div class="mt-12 grid gap-6 lg:grid-cols-[0.95fr_1.05fr] lg:items-stretch">
                <article data-reveal class="rounded-lg border border-[#0F2D52]/12 bg-white p-7 shadow-sm shadow-slate-950/5 sm:p-8">
                    <p class="text-xs font-bold uppercase tracking-[0.18em] text-[#C62828]">Profil Perusahaan</p>
                    <h3 class="mt-3 text-2xl font-extrabold leading-tight text-[#081F3A]">Mitra afiliasi untuk penguatan layanan maritim.</h3>
                    <div class="mt-5 space-y-4 text-base leading-8 text-slate-600">
                        <p>
                            PT FTG mendukung aktivitas yang berkaitan dengan transportasi laut, koordinasi logistik, serta hubungan kemitraan yang relevan dengan kebutuhan operasional maritim. Perusahaan ini menjadi bagian dari jaringan yang membantu Karya Fortuna Shipping menjaga kesinambungan kerja sama dan kualitas layanan.
                        </p>
                        <p>
                            Melalui prinsip profesionalisme, keteraturan proses, dan komunikasi yang responsif, PT FTG diarahkan untuk berkontribusi pada hubungan bisnis yang efisien dan berkelanjutan.
                        </p>
                    </div>
                </article>

                <div data-reveal class="grid gap-4 sm:grid-cols-2">
                    <div class="rounded-lg border border-[#0F2D52]/12 bg-[#081F3A] p-6 text-white shadow-lg shadow-[#0F2D52]/12">
                        <p class="text-xs font-bold uppercase tracking-[0.18em] text-red-100">Orientasi</p>
                        <p class="mt-3 text-xl font-extrabold">Operasional yang terhubung</p>
                    </div>
                    <div class="rounded-lg border border-[#0F2D52]/12 bg-white p-6 shadow-sm shadow-slate-950/5">
                        <p class="text-xs font-bold uppercase tracking-[0.18em] text-[#C62828]">Kolaborasi</p>
                        <p class="mt-3 text-xl font-extrabold text-[#081F3A]">Kemitraan maritim</p>
                    </div>
                    <div class="rounded-lg border border-[#0F2D52]/12 bg-white p-6 shadow-sm shadow-slate-950/5 sm:col-span-2">
                        <p class="text-xs font-bold uppercase tracking-[0.18em] text-[#C62828]">Nilai Kerja</p>
                        <p class="mt-3 text-xl font-extrabold text-[#081F3A]">Profesional, responsif, dan berorientasi pada kerja sama jangka panjang</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="relative overflow-hidden bg-white py-20 sm:py-24" aria-labelledby="ftg-info-title">
        <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">
            <div data-reveal class="max-w-3xl">
                <p class="text-xs font-bold uppercase tracking-[0.18em] text-[#C62828]">Informasi Utama</p>
                <h2 id="ftg-info-title" class="mt-3 text-3xl font-extrabold leading-tight text-[#081F3A] sm:text-4xl">
                    Ringkasan PT FTG
                </h2>
                <p class="mt-5 text-base leading-8 text-slate-600">
                    Ringkasan berikut menggambarkan ruang peran PT FTG sebagai perusahaan afiliasi dalam ekosistem layanan Karya Fortuna Shipping.
                </p>
            </div>

            <div class="mt-10 grid gap-5 sm:grid-cols-2 lg:grid-cols-4">
                @foreach ($companyInfo as $info)
                    <article data-reveal class="rounded-lg border border-[#0F2D52]/12 bg-white p-6 shadow-sm shadow-slate-950/5 transition duration-300 hover:-translate-y-1 hover:border-[#0F2D52]/28 hover:shadow-xl hover:shadow-[#0F2D52]/10">
                        <span class="flex size-11 items-center justify-center rounded-md bg-[#0F2D52] text-white">
                            @if ($info['icon'] === 'ship')
                                <svg class="size-5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 18.75h16.5M5.25 18.75 4.5 12h15l-.75 6.75M8.25 12V7.5h7.5V12M10.5 7.5V4.875c0-.621.504-1.125 1.125-1.125h.75c.621 0 1.125.504 1.125 1.125V7.5" />
                                </svg>
                            @elseif ($info['icon'] === 'route')
                                <svg class="size-5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3.75h-.375A2.625 2.625 0 0 0 3.75 6.375v.75A2.625 2.625 0 0 0 6.375 9.75h.75A2.625 2.625 0 0 1 9.75 12.375v.75A2.625 2.625 0 0 1 7.125 15.75h-.75A2.625 2.625 0 0 0 3.75 18.375v1.875m16.5-16.5v1.875a2.625 2.625 0 0 1-2.625 2.625h-.75a2.625 2.625 0 0 0-2.625 2.625v.75a2.625 2.625 0 0 0 2.625 2.625h.75a2.625 2.625 0 0 1 2.625 2.625v3.375" />
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
                        <p class="mt-5 text-xs font-bold uppercase tracking-[0.16em] text-slate-500">{{ $info['label'] }}</p>
                        <p class="mt-3 text-lg font-extrabold leading-snug text-[#081F3A]">{{ $info['value'] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="relative overflow-hidden bg-[#F4F7FB] py-20 sm:py-24" aria-labelledby="ftg-strength-title">
        <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">
            <div data-reveal>
                <x-section-heading
                    eyebrow="Peran dan Keunggulan"
                    title="Kontribusi PT FTG dalam Afiliasi"
                    description="PT FTG membantu memperkuat jaringan afiliasi melalui kolaborasi yang terarah, dukungan logistik, dan penyelarasan kebutuhan layanan maritim."
                    align="center"
                />
            </div>

            <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
                @foreach ($strengths as $strength)
                    <article data-reveal class="rounded-lg border border-[#0F2D52]/12 bg-white p-6 shadow-sm shadow-slate-950/5 transition duration-300 hover:-translate-y-1 hover:border-[#C62828]/30 hover:shadow-xl hover:shadow-[#0F2D52]/8">
                        <span class="block h-1 w-10 rounded-full bg-[#C62828]"></span>
                        <h3 class="mt-6 text-lg font-extrabold text-[#081F3A]">{{ $strength['title'] }}</h3>
                        <p class="mt-4 text-sm leading-7 text-slate-600">{{ $strength['description'] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="relative overflow-hidden bg-[#081F3A] py-16 text-white sm:py-20" aria-labelledby="ftg-cta-title">
        <div class="pointer-events-none absolute inset-x-0 top-0 h-px bg-white/15"></div>
        <div data-reveal class="mx-auto flex max-w-7xl flex-col items-start justify-between gap-8 px-5 sm:px-6 lg:flex-row lg:items-center lg:px-8">
            <div class="max-w-2xl">
                <p class="text-xs font-bold uppercase tracking-[0.18em] text-red-100">Website Resmi</p>
                <h2 id="ftg-cta-title" class="mt-3 text-3xl font-extrabold text-white sm:text-4xl">Kenali PT FTG Lebih Lanjut</h2>
                <p class="mt-4 text-base leading-8 text-slate-200">
                    Temukan informasi lebih lanjut mengenai PT FTG dan layanan yang ditawarkan.
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
