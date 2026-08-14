@php
    $title = 'Struktur Organisasi | Karya Fortuna Shipping';
    $description = 'Lihat struktur organisasi Karya Fortuna Shipping dan pembagian peran dalam mendukung operasional serta layanan perusahaan.';
    $heroImage = asset('images/hero/gambar3.jpg');

    $organization = [
        'director' => [
            'label' => 'Director',
            'title' => 'Direktur',
        ],
        'generalManager' => [
            'label' => 'General Management',
            'title' => 'General Manager',
        ],
        'departments' => [
            [
                'label' => 'Department Level',
                'title' => 'Manager Operasional',
                'children' => [
                    'Supervisor Marine Operations',
                    'Supervisor Logistics Operations',
                ],
            ],
            [
                'label' => 'Department Level',
                'title' => 'Manager Finance',
                'children' => [
                    'Finance Officer',
                    'Accounting Officer',
                ],
            ],
            [
                'label' => 'Department Level',
                'title' => 'Manager HR & GA',
                'children' => [
                    'HR Officer',
                    'GA Officer',
                ],
            ],
            [
                'label' => 'Department Level',
                'title' => 'Manager Commercial',
                'children' => [
                    'Business Development Officer',
                    'Marketing Officer',
                ],
            ],
        ],
    ];

    $workflows = [
        [
            'number' => '01',
            'title' => 'Coordination',
            'description' => 'Koordinasi antar departemen untuk menjaga kelancaran operasional.',
        ],
        [
            'number' => '02',
            'title' => 'Efficiency',
            'description' => 'Pembagian tanggung jawab yang jelas untuk mendukung efisiensi.',
        ],
        [
            'number' => '03',
            'title' => 'Professionalism',
            'description' => 'Setiap bagian menjalankan peran dengan standar profesional.',
        ],
    ];
@endphp

@extends('layouts.app', ['title' => $title, 'description' => $description])

@section('content')
    <x-page-hero
        id="organization-hero-title"
        eyebrow="Corporate Structure"
        title="Struktur Organisasi Karya Fortuna Shipping"
        variant="corporate"
        visual-caption="Structured coordination for maritime operations"
        description="Struktur organisasi Karya Fortuna Shipping dibangun untuk mendukung koordinasi, efisiensi operasional, dan pencapaian tujuan perusahaan."
        :background="$heroImage"
        alt="Kapal dan aktivitas maritim sebagai latar struktur organisasi"
    />

    <section class="relative overflow-hidden bg-white py-16 sm:py-20" aria-labelledby="organization-intro-title">
        <div class="pointer-events-none absolute right-0 top-16 hidden h-px w-1/3 bg-gradient-to-l from-[#0F2D52]/16 to-transparent lg:block"></div>
        <div class="mx-auto grid max-w-7xl gap-8 px-5 sm:px-6 lg:grid-cols-[0.8fr_1.2fr] lg:items-end lg:px-8">
            <div data-reveal>
                <div class="mb-4 flex items-center gap-3">
                    <span class="h-px w-12 bg-[#0F2D52]/65"></span>
                    <span class="h-1.5 w-8 rounded-full bg-[#C62828]"></span>
                </div>
                <p class="text-xs font-bold uppercase tracking-[0.18em] text-[#C62828]">Organizational Framework</p>
                <h2 id="organization-intro-title" class="mt-3 text-3xl font-extrabold leading-tight text-[#081F3A] sm:text-4xl">
                    Struktur Organisasi Karya Fortuna Shipping
                </h2>
            </div>
            <p data-reveal class="max-w-3xl text-base leading-8 text-slate-600 sm:text-lg">
                Setiap bagian dalam organisasi memiliki peran dan tanggung jawab yang saling terhubung untuk memastikan kegiatan perusahaan berjalan secara efektif dan profesional.
            </p>
        </div>
    </section>

    <section class="relative overflow-hidden bg-[#F4F7FB] py-18 sm:py-24" aria-labelledby="organization-chart-title">
        <div class="pointer-events-none absolute inset-x-0 top-0 h-px bg-[#0F2D52]/10"></div>
        <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">
            <div data-reveal>
                <x-section-heading
                    eyebrow="Hierarchy"
                    title="Struktur Organisasi"
                    description="Visualisasi jabatan berikut memperlihatkan alur kepemimpinan dari director level hingga operational level."
                    align="center"
                />
            </div>

            <div data-reveal class="mt-14 hidden lg:block">
                <div class="relative mx-auto max-w-6xl overflow-hidden rounded-lg border border-[#0F2D52]/10 bg-white px-8 py-12 shadow-xl shadow-[#0F2D52]/8">
                    <div class="pointer-events-none absolute inset-x-0 top-0 h-1 bg-gradient-to-r from-[#0F2D52] via-[#C62828] to-[#0F2D52]"></div>
                    <div class="pointer-events-none absolute left-8 top-16 h-px w-44 bg-gradient-to-r from-[#C62828]/35 to-transparent"></div>
                    <div class="pointer-events-none absolute bottom-12 right-8 h-px w-52 bg-gradient-to-l from-[#0F2D52]/18 to-transparent"></div>

                    <div class="flex justify-center">
                        <article data-reveal class="group w-80 rounded-lg bg-[#081F3A] p-6 text-center text-white shadow-xl shadow-[#081F3A]/22 transition duration-300 hover:-translate-y-1 hover:shadow-2xl hover:shadow-[#081F3A]/25">
                            <p class="text-xs font-bold uppercase tracking-[0.2em] text-red-100">{{ $organization['director']['label'] }}</p>
                            <h3 class="mt-3 text-2xl font-extrabold">{{ $organization['director']['title'] }}</h3>
                            <span class="mx-auto mt-5 block h-1 w-14 rounded-full bg-[#C62828]"></span>
                        </article>
                    </div>

                    <div class="mx-auto h-12 w-px bg-[#0F2D52]/28"></div>

                    <div class="flex justify-center">
                        <article data-reveal class="group w-72 rounded-lg border border-[#0F2D52]/18 bg-white p-5 text-center shadow-lg shadow-slate-950/7 transition duration-300 hover:-translate-y-1 hover:border-[#0F2D52]/35 hover:shadow-xl hover:shadow-[#0F2D52]/10">
                            <p class="text-xs font-bold uppercase tracking-[0.18em] text-[#C62828]">{{ $organization['generalManager']['label'] }}</p>
                            <h3 class="mt-3 text-xl font-extrabold text-[#081F3A]">{{ $organization['generalManager']['title'] }}</h3>
                            <span class="mx-auto mt-5 block h-1 w-12 rounded-full bg-[#0F2D52]"></span>
                        </article>
                    </div>

                    <div class="mx-auto h-12 w-px bg-[#0F2D52]/28"></div>
                    <div class="mx-auto h-px w-[78%] bg-[#0F2D52]/24"></div>

                    <div class="grid grid-cols-4 gap-5">
                        @foreach ($organization['departments'] as $department)
                            <div class="relative pt-12">
                                <span class="absolute left-1/2 top-0 h-12 w-px -translate-x-1/2 bg-[#0F2D52]/24"></span>
                                <article data-reveal class="group min-h-42 rounded-lg border border-[#0F2D52]/14 bg-white p-5 text-center shadow-sm shadow-slate-950/5 transition duration-300 hover:-translate-y-1 hover:border-[#0F2D52]/35 hover:shadow-xl hover:shadow-[#0F2D52]/9">
                                    <p class="text-[11px] font-bold uppercase tracking-[0.16em] text-[#C62828]">{{ $department['label'] }}</p>
                                    <h3 class="mt-3 text-lg font-extrabold leading-snug text-[#081F3A]">{{ $department['title'] }}</h3>
                                    <span class="mx-auto mt-5 block h-1 w-10 rounded-full bg-[#0F2D52] transition-all duration-300 group-hover:w-14 group-hover:bg-[#C62828]"></span>
                                </article>

                                <div class="mx-auto h-10 w-px bg-[#0F2D52]/22"></div>
                                <div class="mx-auto h-px w-[72%] bg-[#0F2D52]/18"></div>
                                <div class="grid grid-cols-2 gap-3">
                                    @foreach ($department['children'] as $child)
                                        <div class="relative pt-8">
                                            <span class="absolute left-1/2 top-0 h-8 w-px -translate-x-1/2 bg-[#0F2D52]/18"></span>
                                            <article data-reveal class="group flex min-h-28 items-center justify-center rounded-lg border border-[#0F2D52]/10 bg-[#F8FAFC] p-4 text-center shadow-sm shadow-slate-950/4 transition duration-300 hover:-translate-y-1 hover:border-[#C62828]/35 hover:bg-white hover:shadow-lg hover:shadow-[#0F2D52]/7">
                                                <div>
                                                    <span class="mx-auto mb-3 block h-1 w-8 rounded-full bg-[#C62828]/85"></span>
                                                    <h4 class="text-sm font-extrabold leading-snug text-[#111827]">{{ $child }}</h4>
                                                </div>
                                            </article>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div data-reveal class="mt-12 lg:hidden">
                <div class="rounded-lg border border-[#0F2D52]/10 bg-white p-5 shadow-lg shadow-[#0F2D52]/8">
                    <article class="rounded-lg bg-[#081F3A] p-5 text-center text-white shadow-lg shadow-[#081F3A]/18">
                        <p class="text-xs font-bold uppercase tracking-[0.18em] text-red-100">{{ $organization['director']['label'] }}</p>
                        <h3 class="mt-2 text-2xl font-extrabold">{{ $organization['director']['title'] }}</h3>
                    </article>

                    <div class="mx-auto h-8 w-px bg-[#0F2D52]/28"></div>

                    <article class="rounded-lg border border-[#0F2D52]/18 bg-white p-5 text-center shadow-sm shadow-slate-950/5">
                        <p class="text-xs font-bold uppercase tracking-[0.16em] text-[#C62828]">{{ $organization['generalManager']['label'] }}</p>
                        <h3 class="mt-2 text-xl font-extrabold text-[#081F3A]">{{ $organization['generalManager']['title'] }}</h3>
                    </article>

                    <div class="mt-8 space-y-6">
                        @foreach ($organization['departments'] as $department)
                            <section class="relative border-l border-[#0F2D52]/18 pl-5">
                                <span class="absolute -left-1.5 top-0 size-3 rounded-full bg-[#C62828] ring-4 ring-white"></span>
                                <article class="rounded-lg border border-[#0F2D52]/14 bg-[#F8FAFC] p-5 shadow-sm shadow-slate-950/5">
                                    <p class="text-[11px] font-bold uppercase tracking-[0.16em] text-[#C62828]">Department Level</p>
                                    <h3 class="mt-2 text-lg font-extrabold text-[#081F3A]">{{ $department['title'] }}</h3>
                                </article>

                                <div class="mt-3 grid gap-3 sm:grid-cols-2">
                                    @foreach ($department['children'] as $child)
                                        <article class="rounded-lg border border-[#0F2D52]/10 bg-white p-4 shadow-sm shadow-slate-950/4">
                                            <span class="mb-3 block h-1 w-8 rounded-full bg-[#C62828]"></span>
                                            <h4 class="text-sm font-extrabold leading-snug text-[#111827]">{{ $child }}</h4>
                                        </article>
                                    @endforeach
                                </div>
                            </section>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="relative overflow-hidden bg-white py-18 sm:py-24" aria-labelledby="workflow-title">
        <div class="pointer-events-none absolute right-0 top-16 hidden h-px w-1/3 bg-gradient-to-l from-[#0F2D52]/16 to-transparent lg:block"></div>
        <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">
            <div data-reveal>
                <x-section-heading
                    eyebrow="How We Work"
                    title="Kolaborasi untuk Satu Tujuan"
                    description="Setiap fungsi organisasi bekerja dalam alur yang saling mendukung untuk menjaga kualitas operasional dan pelayanan."
                />
            </div>

            <div class="mt-12 grid gap-5 md:grid-cols-3">
                @foreach ($workflows as $workflow)
                    <article data-reveal class="group rounded-lg border border-[#0F2D52]/12 bg-white p-6 shadow-sm shadow-slate-950/5 transition duration-300 hover:-translate-y-1 hover:border-[#0F2D52]/30 hover:shadow-xl hover:shadow-[#0F2D52]/8">
                        <div class="flex items-center gap-4">
                            <span class="text-4xl font-extrabold leading-none text-[#C62828]">{{ $workflow['number'] }}</span>
                            <span class="h-px flex-1 bg-[#0F2D52]/18"></span>
                        </div>
                        <h3 class="mt-6 text-xl font-extrabold text-[#081F3A]">{{ $workflow['title'] }}</h3>
                        <p class="mt-4 text-sm leading-7 text-slate-600">{{ $workflow['description'] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="relative overflow-hidden bg-[#081F3A] py-16 text-white sm:py-20" aria-labelledby="organization-cta-title">
        <div class="pointer-events-none absolute inset-x-0 top-0 h-px bg-white/15"></div>
        <div class="pointer-events-none absolute right-0 top-1/2 h-px w-1/3 bg-gradient-to-l from-[#C62828]/45 to-transparent"></div>
        <div data-reveal class="mx-auto flex max-w-7xl flex-col items-start justify-between gap-8 px-5 sm:px-6 lg:flex-row lg:items-center lg:px-8">
            <div class="max-w-2xl">
                <p class="text-xs font-bold uppercase tracking-[0.18em] text-red-100">Hubungi Kami</p>
                <h2 id="organization-cta-title" class="mt-3 text-3xl font-extrabold leading-tight text-white sm:text-4xl">
                    Bergerak Bersama, Tumbuh Bersama
                </h2>
                <p class="mt-4 text-base leading-8 text-slate-200">
                    Struktur organisasi kami dibangun untuk mendukung kolaborasi dan memberikan layanan terbaik kepada pelanggan dan mitra.
                </p>
            </div>

            <x-link-button :href="route('contact')">
                Hubungi Kami
            </x-link-button>
        </div>
    </section>
@endsection
