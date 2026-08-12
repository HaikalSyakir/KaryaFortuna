@php
    $title = 'PT GBF | Afiliasi Karya Fortuna Shipping';
    $description = 'Profil PT GBF sebagai perusahaan afiliasi dan mitra strategis dalam jaringan Karya Fortuna Shipping.';
    $heroImage = asset('images/hero/gambar3.jpg');
    $companyImageUrl = 'https://images.unsplash.com/photo-1725100609222-86a51bee3c3a?auto=format&fit=crop&fm=jpg&q=80&w=1600';
    // Ganti URL ini saat website resmi PT GBF sudah tersedia.
    $officialWebsiteUrl = 'https://example.com';

    $companyInfo = [
        ['label' => 'Bidang Usaha', 'value' => 'Maritime & Logistics'],
        ['label' => 'Fokus Layanan', 'value' => 'Operational Support'],
        ['label' => 'Wilayah Operasional', 'value' => 'Indonesia'],
        ['label' => 'Status Kemitraan', 'value' => 'Afiliasi Strategis'],
    ];

    $businessRoles = [
        [
            'title' => 'Dukungan Operasional',
            'description' => 'Mendukung kebutuhan koordinasi dan aktivitas operasional yang berkaitan dengan layanan maritim.',
            'icon' => 'operations',
        ],
        [
            'title' => 'Kolaborasi Maritim',
            'description' => 'Berperan dalam memperkuat kerja sama bisnis di lingkungan pelayaran dan jasa pendukungnya.',
            'icon' => 'ship',
        ],
        [
            'title' => 'Solusi Logistik',
            'description' => 'Membantu pengembangan pendekatan layanan yang lebih terintegrasi untuk kebutuhan logistik.',
            'icon' => 'route',
        ],
        [
            'title' => 'Pengembangan Jaringan',
            'description' => 'Menjadi bagian dari jejaring afiliasi yang mendorong pertumbuhan dan kesinambungan layanan.',
            'icon' => 'network',
        ],
    ];
@endphp

@extends('layouts.app', ['title' => $title, 'description' => $description])

@section('content')
    <x-page-hero
        id="gbf-hero-title"
        eyebrow="Afiliasi"
        title="PT GBF"
        description="Informasi mengenai PT GBF sebagai bagian dari jaringan afiliasi dan mitra Karya Fortuna Shipping."
        :background="$heroImage"
        alt="Aktivitas pelayaran dan logistik maritim"
    />

    <section class="relative overflow-hidden bg-white py-20 sm:py-24" aria-labelledby="gbf-intro-title">
        <div class="pointer-events-none absolute right-0 top-16 hidden h-px w-1/3 bg-gradient-to-l from-[#0F2D52]/16 to-transparent lg:block"></div>
        <div class="mx-auto grid max-w-7xl gap-12 px-5 sm:px-6 lg:grid-cols-[0.92fr_1.08fr] lg:items-center lg:px-8">
            <div data-reveal>
                <x-section-heading
                    eyebrow="Profil Afiliasi"
                    title="Mengenal PT GBF"
                    description="PT GBF merupakan perusahaan afiliasi yang mendukung ekosistem bisnis Karya Fortuna Shipping melalui kerja sama di bidang maritim, logistik, dan pengembangan layanan pendukung. Kehadirannya memperkuat jaringan kemitraan yang berorientasi pada profesionalisme, keandalan, dan hubungan bisnis jangka panjang."
                />

                <div class="mt-8 grid gap-4 sm:grid-cols-2">
                    <div class="rounded-lg border border-[#0F2D52]/12 bg-[#F8FAFC] p-5">
                        <p class="text-xs font-bold uppercase tracking-[0.16em] text-[#C62828]">Karakter Layanan</p>
                        <p class="mt-3 text-base font-extrabold text-[#081F3A]">Terkoordinasi dan adaptif</p>
                    </div>
                    <div class="rounded-lg border border-[#0F2D52]/12 bg-[#F8FAFC] p-5">
                        <p class="text-xs font-bold uppercase tracking-[0.16em] text-[#C62828]">Orientasi Bisnis</p>
                        <p class="mt-3 text-base font-extrabold text-[#081F3A]">Kemitraan berkelanjutan</p>
                    </div>
                </div>
            </div>

            <figure data-reveal class="relative overflow-hidden rounded-lg border border-[#0F2D52]/12 bg-[#081F3A] shadow-xl shadow-[#0F2D52]/12">
                <img
                    src="{{ $companyImageUrl }}"
                    alt="Kapal kargo dan kontainer di area pelabuhan"
                    class="aspect-[4/3] w-full object-cover"
                    loading="lazy"
                >
                <figcaption class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-[#081F3A]/92 to-transparent px-6 pb-6 pt-20 text-sm font-semibold text-white">
                    Maritime, shipping, and logistics network
                </figcaption>
            </figure>
        </div>
    </section>

    <section class="relative overflow-hidden bg-[#F4F7FB] py-20 sm:py-24" aria-labelledby="gbf-profile-title">
        <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">
            <div data-reveal class="mx-auto max-w-3xl text-center">
                <x-section-heading
                    eyebrow="Profil Perusahaan"
                    title="Peran dalam Jaringan Karya Fortuna Shipping"
                    description="Sebagai bagian dari jaringan afiliasi, PT GBF diposisikan untuk mendukung kebutuhan kerja sama yang berkaitan dengan aktivitas maritim dan logistik. Fokus utamanya adalah membangun koordinasi yang rapi, memperkuat hubungan bisnis, serta mendukung layanan yang berjalan dengan standar kerja profesional."
                    align="center"
                />
            </div>

            <div class="mt-12 grid gap-6 lg:grid-cols-[1.05fr_0.95fr] lg:items-stretch">
                <article data-reveal class="rounded-lg border border-[#0F2D52]/12 bg-white p-7 shadow-sm shadow-slate-950/5 sm:p-8">
                    <p class="text-xs font-bold uppercase tracking-[0.18em] text-[#C62828]">Gambaran Umum</p>
                    <h3 class="mt-3 text-2xl font-extrabold leading-tight text-[#081F3A]">Afiliasi yang mendukung konektivitas layanan.</h3>
                    <div class="mt-5 space-y-4 text-base leading-8 text-slate-600">
                        <p>
                            PT GBF bergerak dalam lingkup kegiatan yang mendukung kebutuhan sektor maritim dan logistik. Dalam konteks afiliasi, perusahaan ini menjadi bagian dari jaringan yang membantu memperluas ruang kolaborasi dan memperkuat dukungan operasional.
                        </p>
                        <p>
                            Pendekatan kerja PT GBF diarahkan pada kemitraan yang responsif, tata kelola yang tertata, dan komunikasi bisnis yang jelas agar setiap kolaborasi dapat berjalan efektif.
                        </p>
                    </div>
                </article>

                <div data-reveal class="grid gap-4 sm:grid-cols-2 lg:grid-cols-1">
                    <div class="rounded-lg border border-[#0F2D52]/12 bg-[#081F3A] p-6 text-white shadow-lg shadow-[#0F2D52]/12">
                        <p class="text-xs font-bold uppercase tracking-[0.18em] text-red-100">Fokus</p>
                        <p class="mt-3 text-xl font-extrabold">Maritime business support</p>
                    </div>
                    <div class="rounded-lg border border-[#0F2D52]/12 bg-white p-6 shadow-sm shadow-slate-950/5">
                        <p class="text-xs font-bold uppercase tracking-[0.18em] text-[#C62828]">Nilai Kerja</p>
                        <p class="mt-3 text-xl font-extrabold text-[#081F3A]">Profesional, kolaboratif, dan terukur</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="relative overflow-hidden bg-white py-20 sm:py-24" aria-labelledby="gbf-info-title">
        <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">
            <div data-reveal class="max-w-3xl">
                <p class="text-xs font-bold uppercase tracking-[0.18em] text-[#C62828]">Informasi Utama</p>
                <h2 id="gbf-info-title" class="mt-3 text-3xl font-extrabold leading-tight text-[#081F3A] sm:text-4xl">
                    Ringkasan Perusahaan
                </h2>
                <p class="mt-5 text-base leading-8 text-slate-600">
                    Ringkasan berikut memberikan gambaran umum mengenai posisi dan fokus PT GBF dalam jaringan afiliasi Karya Fortuna Shipping.
                </p>
            </div>

            <div class="mt-10 grid gap-5 sm:grid-cols-2 lg:grid-cols-4">
                @foreach ($companyInfo as $info)
                    <article data-reveal class="rounded-lg border border-[#0F2D52]/12 bg-white p-6 shadow-sm shadow-slate-950/5 transition duration-300 hover:-translate-y-1 hover:border-[#0F2D52]/28 hover:shadow-xl hover:shadow-[#0F2D52]/10">
                        <span class="block h-1 w-10 rounded-full bg-[#C62828]"></span>
                        <p class="mt-5 text-xs font-bold uppercase tracking-[0.16em] text-slate-500">{{ $info['label'] }}</p>
                        <p class="mt-3 text-lg font-extrabold leading-snug text-[#081F3A]">{{ $info['value'] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="relative overflow-hidden bg-[#F4F7FB] py-20 sm:py-24" aria-labelledby="gbf-role-title">
        <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">
            <div data-reveal>
                <x-section-heading
                    eyebrow="Keunggulan / Peran"
                    title="Peran dalam Afiliasi"
                    description="PT GBF membantu memperkuat jaringan kerja melalui dukungan operasional, koordinasi layanan, dan kolaborasi bisnis yang relevan dengan kebutuhan maritim."
                    align="center"
                />
            </div>

            <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
                @foreach ($businessRoles as $role)
                    <article data-reveal class="rounded-lg border border-[#0F2D52]/12 bg-white p-6 shadow-sm shadow-slate-950/5 transition duration-300 hover:-translate-y-1 hover:border-[#C62828]/30 hover:shadow-xl hover:shadow-[#0F2D52]/8">
                        <span class="flex size-12 items-center justify-center rounded-md bg-[#0F2D52] text-white shadow-lg shadow-[#0F2D52]/18">
                            @if ($role['icon'] === 'operations')
                                <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6h9.75M10.5 12h9.75M10.5 18h9.75M3.75 6h.008v.008H3.75V6Zm0 6h.008v.008H3.75V12Zm0 6h.008v.008H3.75V18Z" />
                                </svg>
                            @elseif ($role['icon'] === 'ship')
                                <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 18.75h16.5M5.25 18.75 4.5 12h15l-.75 6.75M8.25 12V7.5h7.5V12M10.5 7.5V4.875c0-.621.504-1.125 1.125-1.125h.75c.621 0 1.125.504 1.125 1.125V7.5" />
                                </svg>
                            @elseif ($role['icon'] === 'route')
                                <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3.75h-.375A2.625 2.625 0 0 0 3.75 6.375v.75A2.625 2.625 0 0 0 6.375 9.75h.75A2.625 2.625 0 0 1 9.75 12.375v.75A2.625 2.625 0 0 1 7.125 15.75h-.75A2.625 2.625 0 0 0 3.75 18.375v1.875m16.5-16.5v1.875a2.625 2.625 0 0 1-2.625 2.625h-.75a2.625 2.625 0 0 0-2.625 2.625v.75a2.625 2.625 0 0 0 2.625 2.625h.75a2.625 2.625 0 0 1 2.625 2.625v3.375" />
                                </svg>
                            @else
                                <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 14.25 4.5 17.25m0 0 3 3m-3-3h10.5a4.5 4.5 0 0 0 0-9h-1.5m3-4.5 3 3m0 0-3 3m3-3H9a4.5 4.5 0 1 0 0 9h1.5" />
                                </svg>
                            @endif
                        </span>
                        <h3 class="mt-6 text-lg font-extrabold text-[#081F3A]">{{ $role['title'] }}</h3>
                        <p class="mt-4 text-sm leading-7 text-slate-600">{{ $role['description'] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="relative overflow-hidden bg-[#081F3A] py-16 text-white sm:py-20" aria-labelledby="gbf-cta-title">
        <div class="pointer-events-none absolute inset-x-0 top-0 h-px bg-white/15"></div>
        <div data-reveal class="mx-auto flex max-w-7xl flex-col items-start justify-between gap-8 px-5 sm:px-6 lg:flex-row lg:items-center lg:px-8">
            <div class="max-w-2xl">
                <p class="text-xs font-bold uppercase tracking-[0.18em] text-red-100">Website Resmi</p>
                <h2 id="gbf-cta-title" class="mt-3 text-3xl font-extrabold text-white sm:text-4xl">Kenali PT GBF Lebih Lanjut</h2>
                <p class="mt-4 text-base leading-8 text-slate-200">
                    Kunjungi kanal resmi PT GBF untuk mengenal profil, layanan, dan informasi perusahaan secara lebih lengkap.
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
