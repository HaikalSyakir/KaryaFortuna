@php
    $description = 'Karya Fortuna Shipping membantu kebutuhan dokumentasi, administrasi, dan perizinan kapal secara profesional dan terstruktur. Konsultasikan kebutuhan Anda.';
    $breadcrumbs = [
        ['label' => 'Layanan & Armada'],
        ['label' => 'Dokumentasi & Perizinan Kapal'],
    ];

    $problemCards = [
        ['01', 'bi-files', 'DOKUMEN TERLALU BANYAK', 'Berbagai dokumen dan persyaratan membutuhkan pengelolaan yang terstruktur.'],
        ['02', 'bi-calendar-event', 'MASA BERLAKU', 'Dokumen tertentu perlu dipantau agar tidak melewati masa berlaku.'],
        ['03', 'bi-clipboard-check', 'PROSES ADMINISTRASI', 'Pengurusan dokumen membutuhkan ketelitian dan koordinasi yang baik.'],
        ['04', 'bi-clock-history', 'RISIKO KETERLAMBATAN', 'Dokumen yang belum siap dapat memengaruhi kesiapan operasional kapal.'],
    ];

    $serviceCards = [
        ['01', 'bi-file-earmark-text', 'Dokumentasi Kapal', 'Pengelolaan dan penyiapan berbagai dokumen yang dibutuhkan dalam kegiatan operasional kapal.', true],
        ['02', 'bi-journal-text', 'Registrasi & Administrasi', 'Membantu proses administrasi dan kebutuhan registrasi kapal.', false],
        ['03', 'bi-file-earmark-check', 'Perizinan Kapal', 'Pendampingan dalam kebutuhan perizinan yang berkaitan dengan operasional kapal.', false],
        ['04', 'bi-shield-check', 'Dokumen Keselamatan', 'Membantu memastikan kebutuhan dokumentasi terkait keselamatan dan kepatuhan kapal tertangani dengan baik.', false],
        ['05', 'bi-calendar2-check', 'Monitoring Dokumen', 'Membantu memantau kelengkapan dan masa berlaku dokumen yang diperlukan.', false],
        ['06', 'bi-chat-square-text', 'Konsultasi Dokumentasi', 'Konsultasi mengenai kebutuhan dokumen dan perizinan sesuai jenis kapal dan aktivitas operasional.', false],
    ];

    $processSteps = [
        ['01', 'KONSULTASI', 'Sampaikan kebutuhan dokumentasi dan perizinan kapal Anda kepada tim kami.'],
        ['02', 'PEMERIKSAAN', 'Kami membantu mengidentifikasi dokumen dan kebutuhan administrasi yang diperlukan.'],
        ['03', 'PENGURUSAN', 'Proses dokumentasi dan administrasi ditangani secara terstruktur.'],
        ['04', 'MONITORING', 'Kebutuhan dokumen dapat dipantau agar operasional tetap berjalan dengan baik.'],
    ];

    $targetUsers = [
        ['bi-person-badge', 'PEMILIK KAPAL', 'Membantu menangani kebutuhan administratif dan dokumentasi kapal.'],
        ['bi-compass', 'OPERATOR KAPAL', 'Mendukung kebutuhan dokumentasi yang berkaitan dengan kegiatan operasional.'],
        ['bi-building', 'PERUSAHAAN PELAYARAN', 'Membantu pengelolaan kebutuhan administrasi dan dokumentasi kapal.'],
        ['bi-box-seam', 'PERUSAHAAN LOGISTIK MARITIM', 'Mendukung kebutuhan dokumentasi dalam aktivitas logistik dan transportasi laut.'],
        ['bi-diagram-3', 'MITRA OPERASIONAL', 'Solusi pendampingan dokumentasi untuk mendukung kebutuhan operasional maritim.'],
    ];

    $advantages = [
        ['01', 'PROFESIONAL', 'Kebutuhan dokumentasi ditangani dengan pendekatan yang profesional dan terstruktur.'],
        ['02', 'TERORGANISIR', 'Informasi dan kebutuhan dokumen dikelola secara sistematis.'],
        ['03', 'EFISIEN', 'Membantu pelanggan menghemat waktu dalam menangani kebutuhan administratif.'],
        ['04', 'BERORIENTASI OPERASIONAL', 'Dokumentasi diposisikan sebagai bagian penting dalam mendukung kesiapan operasional kapal.'],
    ];
@endphp

@extends('layouts.app', ['title' => 'Dokumentasi & Perizinan Kapal | Karya Fortuna Shipping', 'description' => $description])

@section('content')
    <style>
        @keyframes documentationFloat {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-8px); }
        }

        @keyframes documentationCurrent {
            0%, 100% { transform: translateX(0); opacity: .45; }
            50% { transform: translateX(10px); opacity: .8; }
        }

        .documentation-float { animation: documentationFloat 5.5s ease-in-out infinite; }
        .documentation-current { animation: documentationCurrent 6.5s ease-in-out infinite; }

        @media (prefers-reduced-motion: reduce) {
            .documentation-float,
            .documentation-current { animation: none; }
        }
    </style>

    <section class="relative overflow-hidden bg-white pt-16" aria-labelledby="documentation-hero-title">
        <div class="pointer-events-none absolute inset-x-0 top-16 h-px bg-[#0F2D52]/10"></div>
        <div class="pointer-events-none absolute left-0 top-32 hidden h-px w-[34%] bg-[#C62828]/30 lg:block"></div>
        <div class="pointer-events-none absolute bottom-16 right-0 hidden h-px w-[28%] bg-[#0F2D52]/18 lg:block"></div>
        <div class="pointer-events-none absolute right-10 top-28 hidden h-28 w-28 border-r border-t border-[#0F2D52]/12 lg:block"></div>
        <div class="documentation-current pointer-events-none absolute bottom-28 left-8 hidden items-center gap-2 text-[#0F2D52]/20 lg:flex" aria-hidden="true">
            <span class="h-px w-16 bg-current"></span>
            <i class="bi bi-water text-2xl"></i>
            <span class="h-px w-10 bg-[#C62828]/40"></span>
        </div>

        <div class="relative mx-auto grid min-h-[calc(100vh-4rem)] max-w-7xl gap-12 px-5 py-10 sm:px-6 sm:py-12 lg:grid-cols-[0.94fr_1.06fr] lg:items-center lg:px-8 lg:py-14 xl:gap-16">
            <div data-reveal class="max-w-2xl">
                <div class="inline-flex items-center gap-3 rounded-md border border-[#0F2D52]/10 bg-[#F8FAFC] px-4 py-2">
                    <span class="h-px w-8 bg-[#0F2D52]/70"></span>
                    <span class="size-1.5 rounded-full bg-[#C62828]"></span>
                    <span class="text-xs font-extrabold uppercase tracking-[0.18em] text-[#0F2D52]">MARITIME DOCUMENTATION &amp; PERMIT</span>
                </div>
                <h1 id="documentation-hero-title" class="mt-6 text-4xl font-extrabold leading-tight text-[#081F3A] sm:text-5xl lg:text-6xl">Urus Dokumen &amp; Perizinan Kapal Tanpa Ribet</h1>
                <p class="mt-6 max-w-xl text-base leading-8 text-slate-600 sm:text-lg">Karya Fortuna Shipping membantu mengelola kebutuhan dokumentasi dan perizinan kapal secara profesional, sehingga Anda dapat lebih fokus pada operasional dan bisnis maritim.</p>
                <div class="mt-8 flex flex-col gap-3 sm:flex-row">
                    <x-link-button href="{{ route('contact') }}">Konsultasikan Kebutuhan Anda <span aria-hidden="true">-&gt;</span></x-link-button>
                    <x-link-button href="#layanan-dokumentasi" variant="secondary">Lihat Layanan</x-link-button>
                </div>
            </div>

            <div data-reveal class="relative mx-auto w-full max-w-xl lg:max-w-none" aria-label="Visual layanan dokumentasi dan perizinan kapal">
                <div class="pointer-events-none absolute -left-4 top-8 hidden h-24 w-24 border-l border-t border-[#C62828]/35 lg:block"></div>
                <div class="pointer-events-none absolute -right-3 bottom-10 hidden h-28 w-28 border-b border-r border-[#0F2D52]/20 lg:block"></div>

                <div class="relative mx-auto max-w-[38rem] overflow-hidden rounded-lg border border-[#0F2D52]/10 bg-[#F8FAFC] p-4 shadow-2xl shadow-[#0F2D52]/14 sm:p-6">
                    <div class="pointer-events-none absolute inset-x-0 top-0 h-1 bg-[#C62828]"></div>
                    <div class="pointer-events-none absolute right-6 top-6 text-[#0F2D52]/8 documentation-float">
                        <i class="bi bi-anchor text-6xl" aria-hidden="true"></i>
                    </div>
                    <div class="pointer-events-none absolute bottom-5 left-5 flex gap-1 opacity-50" aria-hidden="true">
                        <span class="h-1 w-8 rounded-full bg-[#0F2D52]/25"></span>
                        <span class="h-1 w-5 rounded-full bg-[#C62828]/35"></span>
                        <span class="h-1 w-10 rounded-full bg-[#0F2D52]/18"></span>
                    </div>

                    <div class="relative grid gap-4 sm:grid-cols-2">
                        <article data-reveal class="group relative overflow-hidden rounded-lg border border-[#0F2D52]/10 bg-white p-6 shadow-xl shadow-slate-950/8 transition duration-300 hover:-translate-y-1 hover:border-[#C62828]/35 sm:col-span-2">
                            <div class="absolute -right-10 -top-10 size-32 rounded-full border border-[#0F2D52]/10"></div>
                            <div class="relative flex flex-col gap-6 sm:flex-row sm:items-start sm:justify-between">
                                <div class="max-w-sm">
                                    <p class="text-[0.68rem] font-extrabold uppercase tracking-[0.18em] text-[#C62828]">MARITIME DOCUMENTATION</p>
                                    <h3 class="mt-3 text-2xl font-extrabold leading-tight text-[#081F3A] sm:text-3xl">Dokumen Kapal</h3>
                                    <p class="mt-4 text-sm leading-7 text-slate-600">Pengelolaan dokumen kapal secara terstruktur untuk mendukung kebutuhan operasional.</p>
                                </div>
                                <div class="relative flex size-20 shrink-0 items-center justify-center rounded-lg bg-[#081F3A] text-white shadow-lg shadow-[#0F2D52]/18">
                                    <i class="bi bi-file-earmark-text text-3xl" aria-hidden="true"></i>
                                    <span class="absolute -bottom-2 -right-2 inline-flex size-9 items-center justify-center rounded-md bg-[#C62828] text-white shadow-md shadow-[#C62828]/25">
                                        <i class="bi bi-ship" aria-hidden="true"></i>
                                    </span>
                                </div>
                            </div>

                            <div class="relative mt-6 rounded-md border border-[#0F2D52]/10 bg-[#F8FAFC] px-4 py-3">
                                <div class="flex items-center gap-3 text-[#0F2D52]">
                                    <span class="h-px w-8 bg-[#C62828]"></span>
                                    <i class="bi bi-water" aria-hidden="true"></i>
                                    <span class="h-px flex-1 bg-[#0F2D52]/12"></span>
                                    <span class="text-[0.68rem] font-extrabold uppercase tracking-[0.16em] text-slate-500">Documentation Service</span>
                                </div>
                            </div>
                        </article>

                        <article data-reveal class="group rounded-lg border border-[#0F2D52]/10 bg-white p-5 shadow-sm shadow-slate-950/5 transition duration-300 hover:-translate-y-1 hover:border-[#C62828]/35 hover:shadow-lg hover:shadow-[#0F2D52]/10">
                            <div class="flex items-start justify-between gap-4">
                                <div><h3 class="text-sm font-extrabold uppercase tracking-[0.12em] text-[#081F3A]">REGISTRASI KAPAL</h3><p class="mt-2 text-sm leading-6 text-slate-500">Dokumen Registrasi</p></div>
                                <span class="inline-flex size-10 shrink-0 items-center justify-center rounded-md bg-[#0F2D52]/8 text-[#0F2D52] transition duration-300 group-hover:bg-[#C62828] group-hover:text-white"><i class="bi bi-journal-text" aria-hidden="true"></i></span>
                            </div>
                        </article>
                        <article data-reveal class="group rounded-lg border border-[#0F2D52]/10 bg-white p-5 shadow-sm shadow-slate-950/5 transition duration-300 hover:-translate-y-1 hover:border-[#C62828]/35 hover:shadow-lg hover:shadow-[#0F2D52]/10 sm:translate-y-4">
                            <div class="flex items-start justify-between gap-4">
                                <div><h3 class="text-sm font-extrabold uppercase tracking-[0.12em] text-[#081F3A]">KESELAMATAN</h3><p class="mt-2 text-sm leading-6 text-slate-500">Dokumen Keselamatan</p></div>
                                <span class="inline-flex size-10 shrink-0 items-center justify-center rounded-md bg-[#0F2D52]/8 text-[#0F2D52] transition duration-300 group-hover:bg-[#C62828] group-hover:text-white"><i class="bi bi-shield-check" aria-hidden="true"></i></span>
                            </div>
                        </article>
                        <article data-reveal class="group rounded-lg border border-[#0F2D52]/10 bg-white p-5 shadow-sm shadow-slate-950/5 transition duration-300 hover:-translate-y-1 hover:border-[#C62828]/35 hover:shadow-lg hover:shadow-[#0F2D52]/10">
                            <div class="flex items-start justify-between gap-4">
                                <div><h3 class="text-sm font-extrabold uppercase tracking-[0.12em] text-[#081F3A]">PERIZINAN</h3><p class="mt-2 text-sm leading-6 text-slate-500">Izin Operasional</p></div>
                                <span class="inline-flex size-10 shrink-0 items-center justify-center rounded-md bg-[#0F2D52]/8 text-[#0F2D52] transition duration-300 group-hover:bg-[#C62828] group-hover:text-white"><i class="bi bi-file-earmark-check" aria-hidden="true"></i></span>
                            </div>
                        </article>
                        <article data-reveal class="group rounded-lg border border-[#0F2D52]/10 bg-white p-5 shadow-sm shadow-slate-950/5 transition duration-300 hover:-translate-y-1 hover:border-[#C62828]/35 hover:shadow-lg hover:shadow-[#0F2D52]/10 sm:translate-y-4">
                            <div class="flex items-start justify-between gap-4">
                                <div><h3 class="text-sm font-extrabold uppercase tracking-[0.12em] text-[#081F3A]">MONITORING</h3><p class="mt-2 text-sm leading-6 text-slate-500">Masa Berlaku Dokumen</p></div>
                                <span class="inline-flex size-10 shrink-0 items-center justify-center rounded-md bg-[#0F2D52]/8 text-[#0F2D52] transition duration-300 group-hover:bg-[#C62828] group-hover:text-white"><i class="bi bi-calendar2-check" aria-hidden="true"></i></span>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white" aria-label="Breadcrumb Dokumentasi dan Perizinan Kapal">
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

    <section class="relative overflow-hidden bg-[#F4F7FB] py-16 sm:py-20" aria-labelledby="documentation-problem-title">
        <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">
            <div data-reveal class="max-w-3xl">
                <p class="text-xs font-bold uppercase tracking-[0.18em] text-[#C62828]">Administrasi Kapal</p>
                <h2 id="documentation-problem-title" class="mt-3 text-3xl font-extrabold leading-tight text-[#081F3A] sm:text-4xl">Dokumen Kapal Terlambat? Jangan Biarkan Menghambat Operasional.</h2>
                <p class="mt-4 text-base leading-8 text-slate-600">Pengelolaan dokumen dan perizinan kapal membutuhkan ketelitian, pemahaman administratif, serta pemantauan yang konsisten. Kesalahan atau keterlambatan dapat mengganggu kesiapan operasional kapal.</p>
            </div>

            <div class="mt-10 grid gap-5 md:grid-cols-2 xl:grid-cols-4">
                @foreach ($problemCards as $card)
                    <article data-reveal class="group relative min-h-[238px] overflow-hidden rounded-lg border border-[#0F2D52]/10 bg-white p-6 shadow-sm shadow-slate-950/5 transition duration-300 hover:-translate-y-1.5 hover:border-[#C62828]/40 hover:shadow-xl hover:shadow-[#0F2D52]/12">
                        <span class="absolute -right-3 -top-6 text-7xl font-extrabold leading-none text-[#0F2D52]/6 transition duration-300 group-hover:text-[#C62828]/10">{{ $card[0] }}</span>
                        <div class="relative flex items-center justify-between gap-4">
                            <span class="text-sm font-extrabold text-[#C62828]">{{ $card[0] }}</span>
                            <span class="inline-flex size-11 items-center justify-center rounded-md bg-[#0F2D52]/8 text-[#0F2D52] transition duration-300 group-hover:bg-[#081F3A] group-hover:text-white"><i class="bi {{ $card[1] }}" aria-hidden="true"></i></span>
                        </div>
                        <h3 class="relative mt-8 text-base font-extrabold uppercase leading-6 tracking-[0.08em] text-[#081F3A]">{{ $card[2] }}</h3>
                        <p class="relative mt-4 text-sm leading-7 text-slate-600">{{ $card[3] }}</p>
                        <span class="relative mt-6 block h-px w-14 bg-[#0F2D52]/16 transition duration-300 group-hover:w-24 group-hover:bg-[#C62828]"></span>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section id="layanan-dokumentasi" class="relative overflow-hidden bg-white py-16 sm:py-20" aria-labelledby="documentation-services-title">
        <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">
            <div data-reveal class="grid gap-6 lg:grid-cols-[0.78fr_1.22fr] lg:items-end">
                <div>
                    <p class="text-xs font-bold uppercase tracking-[0.18em] text-[#C62828]">Jasa Dokumentasi Kapal</p>
                    <h2 id="documentation-services-title" class="mt-3 text-3xl font-extrabold leading-tight text-[#081F3A] sm:text-4xl">Kami Membantu Mengelola Kebutuhan Dokumentasi Kapal Anda.</h2>
                </div>
                <p class="text-base leading-8 text-slate-600">Dengan pendekatan yang terstruktur dan profesional, Karya Fortuna Shipping membantu pelanggan menangani kebutuhan dokumentasi dan perizinan kapal sesuai kebutuhan operasional.</p>
            </div>

            <div class="mt-10 grid gap-5 lg:grid-cols-3">
                @foreach ($serviceCards as $service)
                    <article data-reveal @class([
                        'group relative overflow-hidden rounded-lg border border-[#0F2D52]/10 bg-white p-6 shadow-sm shadow-slate-950/5 transition duration-300 hover:-translate-y-1.5 hover:border-[#C62828]/40 hover:shadow-xl hover:shadow-[#0F2D52]/12',
                        'lg:col-span-2 lg:min-h-[318px] bg-[#F8FAFC]' => $service[4],
                        'min-h-[250px]' => ! $service[4],
                    ])>
                        <span class="absolute inset-x-0 top-0 h-1 bg-[#C62828] opacity-0 transition duration-300 group-hover:opacity-100"></span>
                        <div class="flex items-start justify-between gap-5">
                            <span @class([
                                'font-extrabold leading-none text-[#0F2D52]/10 transition duration-300 group-hover:text-[#C62828]/18',
                                'text-6xl sm:text-7xl' => $service[4],
                                'text-5xl' => ! $service[4],
                            ])>{{ $service[0] }}</span>
                            <span @class([
                                'inline-flex shrink-0 items-center justify-center rounded-md border border-[#0F2D52]/10 text-[#0F2D52] transition duration-300 group-hover:border-[#C62828] group-hover:bg-[#C62828] group-hover:text-white',
                                'size-16 text-2xl' => $service[4],
                                'size-11' => ! $service[4],
                            ])><i class="bi {{ $service[1] }}" aria-hidden="true"></i></span>
                        </div>
                        <h3 @class([
                            'font-extrabold text-[#081F3A]',
                            'mt-10 max-w-xl text-2xl sm:text-3xl' => $service[4],
                            'mt-8 text-xl' => ! $service[4],
                        ])>{{ $service[2] }}</h3>
                        <p @class([
                            'text-slate-600',
                            'mt-4 max-w-2xl text-base leading-8' => $service[4],
                            'mt-3 text-sm leading-7' => ! $service[4],
                        ])>{{ $service[3] }}</p>
                        <span class="mt-6 block h-px w-14 bg-[#0F2D52]/16 transition duration-300 group-hover:w-24 group-hover:bg-[#C62828]"></span>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="relative overflow-hidden bg-[#F8FAFC] py-16 sm:py-20" aria-labelledby="documentation-process-title">
        <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">
            <div data-reveal class="max-w-3xl">
                <p class="text-xs font-bold uppercase tracking-[0.18em] text-[#C62828]">Alur Layanan</p>
                <h2 id="documentation-process-title" class="mt-3 text-3xl font-extrabold leading-tight text-[#081F3A] sm:text-4xl">Proses yang Lebih Terstruktur</h2>
                <p class="mt-4 text-base leading-8 text-slate-600">Kami membantu Anda melalui proses yang terarah, mulai dari memahami kebutuhan hingga memastikan dokumentasi siap digunakan sesuai kebutuhan.</p>
            </div>

            <div class="relative mt-12 grid gap-5 lg:grid-cols-4">
                <div class="absolute left-0 right-0 top-12 hidden h-px bg-[#0F2D52]/18 lg:block"></div>
                @foreach ($processSteps as $step)
                    <article data-reveal class="relative rounded-lg border border-[#0F2D52]/10 bg-white p-6 shadow-sm shadow-slate-950/5 transition duration-300 hover:-translate-y-1 hover:border-[#C62828]/35 hover:shadow-lg hover:shadow-[#0F2D52]/10">
                        <div class="relative z-10 flex items-center gap-4 lg:block">
                            <span class="inline-flex size-16 shrink-0 items-center justify-center rounded-full border-4 border-white bg-[#0F2D52] text-sm font-extrabold text-white shadow-lg shadow-[#0F2D52]/16">{{ $step[0] }}</span>
                            <div class="lg:mt-6">
                                <p class="text-[0.68rem] font-bold uppercase tracking-[0.16em] text-[#C62828]">{{ $step[0] }}</p>
                                <h3 class="mt-1 text-lg font-extrabold text-[#081F3A]">{{ $step[1] }}</h3>
                            </div>
                        </div>
                        <p class="mt-4 text-sm leading-7 text-slate-600">{{ $step[2] }}</p>
                        @if (! $loop->last)
                            <span class="absolute -bottom-5 left-8 z-10 flex size-8 items-center justify-center rounded-full bg-[#C62828] text-white shadow-md shadow-[#C62828]/20 lg:-right-4 lg:bottom-auto lg:left-auto lg:top-8"><i class="bi bi-arrow-down-short lg:rotate-[-90deg]" aria-hidden="true"></i></span>
                        @endif
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="relative overflow-hidden bg-white py-16 sm:py-20" aria-labelledby="documentation-users-title">
        <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">
            <div data-reveal class="max-w-3xl">
                <p class="text-xs font-bold uppercase tracking-[0.18em] text-[#C62828]">Kebutuhan Maritim</p>
                <h2 id="documentation-users-title" class="mt-3 text-3xl font-extrabold leading-tight text-[#081F3A] sm:text-4xl">Solusi Dokumentasi untuk Berbagai Kebutuhan Maritim</h2>
                <p class="mt-4 text-base leading-8 text-slate-600">Layanan dokumentasi dan perizinan dapat disesuaikan dengan kebutuhan berbagai aktivitas dan operasional maritim.</p>
            </div>

            <div class="mt-10 grid gap-5 md:grid-cols-2 xl:grid-cols-5">
                @foreach ($targetUsers as $user)
                    <article data-reveal class="group relative overflow-hidden rounded-lg border border-[#0F2D52]/10 bg-[#F8FAFC] p-6 transition duration-300 hover:-translate-y-1 hover:border-[#C62828]/35 hover:bg-white hover:shadow-xl hover:shadow-[#0F2D52]/10">
                        <span class="inline-flex size-12 items-center justify-center rounded-md bg-white text-[#0F2D52] shadow-sm shadow-slate-950/5 transition duration-300 group-hover:bg-[#081F3A] group-hover:text-white"><i class="bi {{ $user[0] }}" aria-hidden="true"></i></span>
                        <h3 class="mt-6 min-h-12 text-sm font-extrabold uppercase leading-6 tracking-[0.08em] text-[#081F3A]">{{ $user[1] }}</h3>
                        <p class="mt-4 text-sm leading-7 text-slate-600">{{ $user[2] }}</p>
                        <span class="mt-6 block h-px w-12 bg-[#C62828]/70"></span>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="relative overflow-hidden bg-[#081F3A] py-16 sm:py-20" aria-labelledby="documentation-why-title">
        <div class="pointer-events-none absolute -right-12 top-12 size-44 border border-white/10"></div>
        <div class="pointer-events-none absolute bottom-0 left-0 h-px w-1/2 bg-[#C62828]/45"></div>
        <div class="mx-auto grid max-w-7xl gap-10 px-5 sm:px-6 lg:grid-cols-[0.9fr_1.1fr] lg:items-start lg:px-8">
            <div data-reveal class="max-w-xl">
                <p class="text-xs font-bold uppercase tracking-[0.18em] text-[#F04444]">Karya Fortuna Shipping</p>
                <h2 id="documentation-why-title" class="mt-3 text-3xl font-extrabold leading-tight text-white sm:text-4xl">Mengapa Memilih Karya Fortuna Shipping?</h2>
                <p class="mt-5 text-base leading-8 text-slate-200">Kami memahami bahwa dokumentasi bukan sekadar administrasi, tetapi bagian penting dalam mendukung kelancaran operasional maritim.</p>
                <div class="mt-8 flex items-center gap-3 text-white/35" aria-hidden="true">
                    <span class="h-px w-16 bg-[#C62828]"></span>
                    <i class="bi bi-compass text-2xl"></i>
                    <span class="h-px w-24 bg-white/20"></span>
                </div>
            </div>

            <div class="grid gap-4 sm:grid-cols-2">
                @foreach ($advantages as $advantage)
                    <article data-reveal class="group relative overflow-hidden rounded-lg border border-white/10 bg-white/6 p-6 transition duration-300 hover:-translate-y-1 hover:border-[#C62828]/45 hover:bg-white/10">
                        <div class="flex items-start justify-between gap-5">
                            <span class="text-4xl font-extrabold text-white/18 transition duration-300 group-hover:text-[#F04444]/50">{{ $advantage[0] }}</span>
                            <span class="mt-2 h-px w-12 bg-[#C62828]"></span>
                        </div>
                        <h3 class="mt-7 text-lg font-extrabold uppercase tracking-[0.08em] text-white">{{ $advantage[1] }}</h3>
                        <p class="mt-4 text-sm leading-7 text-slate-200">{{ $advantage[2] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="bg-white py-16 sm:py-20" aria-labelledby="documentation-cta-title">
        <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">
            <div data-reveal class="relative overflow-hidden rounded-lg bg-[#081F3A] px-6 py-12 shadow-2xl shadow-[#0F2D52]/18 sm:px-10 lg:px-12">
                <div class="pointer-events-none absolute inset-x-0 top-0 h-1 bg-[#C62828]"></div>
                <div class="pointer-events-none absolute -right-12 -top-12 size-40 border border-white/10"></div>
                <div class="pointer-events-none absolute bottom-8 right-8 hidden text-white/8 lg:block"><i class="bi bi-anchor text-7xl" aria-hidden="true"></i></div>
                <div class="relative grid gap-7 lg:grid-cols-[1fr_auto] lg:items-center">
                    <div>
                        <p class="text-xs font-bold uppercase tracking-[0.18em] text-[#F04444]">Dokumentasi • Perizinan • Administrasi Maritim</p>
                        <h2 id="documentation-cta-title" class="mt-3 text-3xl font-extrabold leading-tight text-white sm:text-4xl">Siap Mengurus Kebutuhan Dokumen Kapal Anda?</h2>
                        <p class="mt-4 max-w-2xl text-base leading-8 text-slate-200">Diskusikan kebutuhan dokumentasi dan perizinan kapal Anda bersama Karya Fortuna Shipping. Tim kami siap membantu menemukan solusi yang sesuai dengan kebutuhan operasional Anda.</p>
                    </div>
                    <x-link-button href="{{ route('contact') }}" class="w-full sm:w-auto">Konsultasikan Sekarang <span aria-hidden="true">-&gt;</span></x-link-button>
                </div>
            </div>
        </div>
    </section>
@endsection
