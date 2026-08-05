@php
    $title = 'Visi & Misi | Karya Fortuna Shipping';
    $description = 'Kenali visi, misi, dan prinsip Karya Fortuna Shipping dalam membangun layanan maritim yang profesional, terpercaya, dan berkelanjutan.';
    $heroImage = asset('images/hero/gambar2.jpg');

    $vision = [
        'title' => 'Visi Kami',
        'description' => 'Menjadi perusahaan pelayaran dan jasa maritim yang terpercaya, profesional, dan berkelanjutan dengan memberikan nilai terbaik bagi pelanggan, mitra, dan seluruh pemangku kepentingan.',
    ];

    $missions = [
        [
            'number' => '01',
            'title' => 'Layanan Andal',
            'description' => 'Memberikan layanan maritim yang aman, profesional, dan dapat diandalkan.',
        ],
        [
            'number' => '02',
            'title' => 'Fokus Pelanggan',
            'description' => 'Mengutamakan kepuasan pelanggan melalui pelayanan yang responsif dan berkualitas.',
        ],
        [
            'number' => '03',
            'title' => 'Efisiensi Operasional',
            'description' => 'Meningkatkan efisiensi operasional melalui pengembangan sumber daya manusia, teknologi, dan proses kerja.',
        ],
        [
            'number' => '04',
            'title' => 'Kemitraan Jangka Panjang',
            'description' => 'Membangun hubungan jangka panjang yang saling menguntungkan dengan pelanggan dan mitra bisnis.',
        ],
        [
            'number' => '05',
            'title' => 'Keberlanjutan Usaha',
            'description' => 'Menjalankan kegiatan usaha dengan memperhatikan keselamatan, integritas, dan keberlanjutan.',
        ],
    ];

    $principles = [
        [
            'title' => 'Safety',
            'description' => 'Mengutamakan keselamatan dalam setiap aktivitas operasional.',
            'icon' => 'shield',
        ],
        [
            'title' => 'Integrity',
            'description' => 'Menjalankan bisnis dengan kejujuran dan tanggung jawab.',
            'icon' => 'check',
        ],
        [
            'title' => 'Reliability',
            'description' => 'Memberikan layanan yang konsisten dan dapat dipercaya.',
            'icon' => 'anchor',
        ],
        [
            'title' => 'Professionalism',
            'description' => 'Menjaga standar profesional dalam setiap pekerjaan.',
            'icon' => 'briefcase',
        ],
    ];
@endphp

@extends('layouts.app', ['title' => $title, 'description' => $description])

@section('content')
    <section class="relative isolate flex min-h-[56vh] overflow-hidden bg-[#081F3A] pt-16 text-white sm:min-h-[60vh]" aria-labelledby="vision-mission-hero-title">
        <img
            src="{{ $heroImage }}"
            alt="Aktivitas pelayaran dan kapal di area maritim"
            class="absolute inset-0 -z-20 h-full w-full object-cover"
            loading="eager"
            fetchpriority="high"
        >
        <div class="absolute inset-0 -z-10 bg-[#081F3A]/70"></div>
        <div class="absolute inset-0 -z-10 bg-[linear-gradient(90deg,rgba(8,31,58,0.95)_0%,rgba(8,31,58,0.76)_55%,rgba(8,31,58,0.42)_100%)]"></div>

        <div class="mx-auto flex w-full max-w-7xl items-center px-5 py-16 sm:px-6 sm:py-20 lg:px-8">
            <div data-hero-text class="max-w-3xl">
                <p class="text-xs font-bold uppercase tracking-[0.2em] text-red-100">Tentang Kami</p>
                <h1 id="vision-mission-hero-title" class="mt-4 max-w-4xl text-4xl font-extrabold leading-tight tracking-tight text-white sm:text-5xl lg:text-6xl">
                    Visi &amp; Misi Karya Fortuna Shipping
                </h1>
                <p class="mt-6 max-w-2xl text-base leading-8 text-white/84 sm:text-lg">
                    Menjadi perusahaan maritim yang terus berkembang melalui layanan yang profesional, terpercaya, dan berorientasi pada kebutuhan pelanggan.
                </p>
            </div>
        </div>
    </section>

    <section class="relative overflow-hidden bg-white py-18 sm:py-24" aria-labelledby="vision-title">
        <div class="pointer-events-none absolute right-0 top-20 hidden h-px w-1/3 bg-gradient-to-l from-[#0F2D52]/16 to-transparent lg:block"></div>
        <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">
            <div data-reveal class="grid gap-10 lg:grid-cols-[0.75fr_1.25fr] lg:items-center">
                <div>
                    <x-section-heading
                        eyebrow="Arah Perusahaan"
                        :title="$vision['title']"
                        description="Visi ini menjadi arah pengembangan perusahaan dalam membangun layanan pelayaran dan jasa maritim yang terpercaya, profesional, dan berkelanjutan."
                    />
                </div>

                <figure class="relative overflow-hidden rounded-lg border border-[#0F2D52]/12 bg-[#F8FAFC] p-7 shadow-sm shadow-slate-950/5 sm:p-10 lg:p-12">
                    <span class="absolute left-0 top-0 h-full w-1.5 bg-[#C62828]"></span>
                    <span class="text-7xl font-extrabold leading-none text-[#0F2D52]/10 sm:text-8xl" aria-hidden="true">&ldquo;</span>
                    <blockquote id="vision-title" class="-mt-8 text-2xl font-extrabold leading-snug text-[#081F3A] sm:text-3xl lg:text-4xl">
                        {{ $vision['description'] }}
                    </blockquote>
                </figure>
            </div>
        </div>
    </section>

    <section class="relative overflow-hidden bg-[#F4F7FB] py-18 sm:py-24" aria-labelledby="mission-title">
        <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">
            <div data-reveal class="flex flex-col gap-6 lg:flex-row lg:items-end lg:justify-between">
                <x-section-heading
                    eyebrow="Langkah Kami"
                    title="Misi Kami"
                    description="Misi disusun sebagai prinsip kerja yang mengarahkan cara Karya Fortuna Shipping membangun layanan maritim yang dapat diandalkan."
                />
                <p class="max-w-sm text-sm leading-7 text-slate-600">
                    Setiap langkah diarahkan untuk menjaga kualitas layanan, memperkuat kepercayaan pelanggan, dan mendukung pertumbuhan yang berkelanjutan.
                </p>
            </div>

            <div class="mt-12 grid gap-5 md:grid-cols-2 xl:grid-cols-3">
                @foreach ($missions as $mission)
                    <article data-reveal class="group relative overflow-hidden rounded-lg border border-[#0F2D52]/12 bg-white p-6 shadow-sm shadow-slate-950/5 transition duration-300 hover:-translate-y-1 hover:border-[#0F2D52]/30 hover:shadow-xl hover:shadow-[#0F2D52]/8">
                        <div class="flex items-center justify-between gap-5">
                            <span class="text-4xl font-extrabold leading-none text-[#C62828]">{{ $mission['number'] }}</span>
                            <span class="h-px flex-1 bg-[#0F2D52]/18"></span>
                        </div>
                        <h3 class="mt-6 text-xl font-extrabold text-[#081F3A]">{{ $mission['title'] }}</h3>
                        <p class="mt-4 text-sm leading-7 text-slate-600">{{ $mission['description'] }}</p>
                        <span class="mt-6 block h-1 w-10 rounded-full bg-[#0F2D52] transition-all duration-300 group-hover:w-16 group-hover:bg-[#C62828]"></span>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="relative overflow-hidden bg-white py-18 sm:py-24" aria-labelledby="principles-title">
        <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">
            <div data-reveal>
                <x-section-heading
                    eyebrow="Nilai Kerja"
                    title="Prinsip Kami"
                    description="Prinsip kerja kami menjadi dasar dalam menjaga keselamatan, kepercayaan, konsistensi layanan, dan standar profesional di setiap aktivitas operasional."
                    align="center"
                />
            </div>

            <div class="mt-12 grid gap-5 sm:grid-cols-2 lg:grid-cols-4">
                @foreach ($principles as $principle)
                    <article data-reveal class="group rounded-lg border border-[#0F2D52]/12 bg-white p-6 shadow-sm shadow-slate-950/5 transition duration-300 hover:border-[#0F2D52]/30 hover:shadow-xl hover:shadow-[#0F2D52]/8">
                        <span class="flex size-12 items-center justify-center rounded-md bg-[#0F2D52] text-white transition-colors duration-300 group-hover:bg-[#C62828]" aria-hidden="true">
                            @if ($principle['icon'] === 'shield')
                                <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 3.75 5.25 6v5.25c0 4.15 2.71 7.94 6.75 9 4.04-1.06 6.75-4.85 6.75-9V6L12 3.75Z" />
                                </svg>
                            @elseif ($principle['icon'] === 'check')
                                <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                </svg>
                            @elseif ($principle['icon'] === 'anchor')
                                <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v12m0-12a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Zm-6.75 9A6.75 6.75 0 0 0 12 20.25a6.75 6.75 0 0 0 6.75-6.75M4.5 13.5h3m9 0h3" />
                                </svg>
                            @else
                                <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 6.75V6a3 3 0 0 1 6 0v.75M4.5 9.75h15v8.25A2.25 2.25 0 0 1 17.25 20.25H6.75A2.25 2.25 0 0 1 4.5 18V9.75Z" />
                                </svg>
                            @endif
                        </span>
                        <h3 class="mt-5 text-lg font-extrabold uppercase tracking-[0.08em] text-[#081F3A]">{{ $principle['title'] }}</h3>
                        <p class="mt-3 text-sm leading-7 text-slate-600">{{ $principle['description'] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="relative overflow-hidden bg-[#081F3A] py-14 text-white sm:py-16" aria-labelledby="brand-statement-title">
        <div class="pointer-events-none absolute left-0 top-0 h-px w-2/5 bg-gradient-to-r from-[#C62828]/60 to-transparent"></div>
        <div class="pointer-events-none absolute bottom-0 right-0 h-px w-1/3 bg-gradient-to-l from-white/20 to-transparent"></div>
        <div data-reveal class="mx-auto max-w-7xl px-5 text-center sm:px-6 lg:px-8">
            <h2 id="brand-statement-title" class="mx-auto max-w-4xl text-3xl font-extrabold leading-tight text-white sm:text-4xl">
                Bergerak bersama. Berkembang bersama.
            </h2>
            <p class="mx-auto mt-4 max-w-2xl text-base leading-8 text-slate-200">
                Memberikan nilai melalui layanan maritim yang terpercaya.
            </p>
        </div>
    </section>

    <section class="relative overflow-hidden bg-white py-16 sm:py-20" aria-labelledby="vision-mission-cta-title">
        <div class="mx-auto flex max-w-7xl flex-col items-start justify-between gap-8 px-5 sm:px-6 lg:flex-row lg:items-center lg:px-8">
            <div data-reveal class="max-w-2xl">
                <p class="text-xs font-bold uppercase tracking-[0.18em] text-[#C62828]">Hubungi Kami</p>
                <h2 id="vision-mission-cta-title" class="mt-3 text-3xl font-extrabold leading-tight text-[#081F3A] sm:text-4xl">
                    Mari Tumbuh Bersama Karya Fortuna Shipping
                </h2>
                <p class="mt-4 text-base leading-8 text-slate-600">
                    Hubungi kami untuk mengetahui lebih lanjut mengenai Karya Fortuna Shipping dan peluang kerja sama yang dapat dibangun bersama.
                </p>
            </div>

            <div data-reveal>
                <x-link-button :href="route('contact')">
                    Hubungi Kami
                </x-link-button>
            </div>
        </div>
    </section>
@endsection

