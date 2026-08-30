@php
    $title = 'Dokumentasi & Perizinan Kapal';
    $description = 'Informasi Dokumentasi Kapal, Perizinan Kapal, Administrasi Kapal, Maritime Documentation, Ship Documentation, dan Maritime Compliance Karya Fortuna Shipping.';
    $breadcrumbs = [
        ['label' => 'Layanan & Armada'],
        ['label' => 'Dokumentasi & Perizinan Kapal'],
    ];
    $fallbackImage = asset('images/hero/gambar2.jpg');
    $images = [
        'compliance' => 'https://commons.wikimedia.org/wiki/Special:Redirect/file/US_Navy_110714-N-OY799-134_Culinary_Specialist_1st_Class_Audie_Anderson_and_Chief_Quartermaster_Gregory_King_inspect_a_ship%27s_log.jpg?width=1400',
    ];
    $documentCards = [
        ['VESSEL REGISTRATION', 'Status: Complete'],
        ['SAFETY DOCUMENT', 'Status: Valid'],
        ['OPERATIONAL DOCUMENT', 'Status: Active'],
    ];
    $services = [
        ['01', 'bi-file-earmark-text', 'Dokumentasi Kapal', 'Pengelolaan dan penataan dokumen administratif kapal.'],
        ['02', 'bi-patch-check', 'Perizinan Kapal', 'Dukungan administrasi untuk kebutuhan perizinan kapal.'],
        ['03', 'bi-shield-check', 'Dokumen Keselamatan', 'Pengelolaan dokumen yang berkaitan dengan aspek keselamatan dan kelayakan operasional.'],
        ['04', 'bi-clipboard-data', 'Registrasi & Administrasi', 'Dukungan dalam penataan informasi registrasi dan administrasi kapal.'],
        ['05', 'bi-calendar-check', 'Monitoring Masa Berlaku', 'Pemantauan masa berlaku dokumen agar kebutuhan pembaruan dapat dipersiapkan lebih awal.'],
        ['06', 'bi-check2-square', 'Compliance Support', 'Dukungan administratif untuk membantu kebutuhan compliance operasional maritim.'],
    ];
    $checklist = [
        ['01', 'VESSEL REGISTRATION', 'READY'],
        ['02', 'SAFETY DOCUMENT', 'VALID'],
        ['03', 'OPERATIONAL DOCUMENT', 'ACTIVE'],
        ['04', 'TECHNICAL DOCUMENT', 'REVIEW'],
        ['05', 'CREW DOCUMENTATION', 'READY'],
        ['06', 'INSURANCE', 'MONITOR'],
    ];
    $processSteps = [
        ['01', 'Konsultasi', 'Memahami kebutuhan dokumentasi dan perizinan kapal.'],
        ['02', 'Document Review', 'Melakukan pengecekan kebutuhan dokumen.'],
        ['03', 'Processing', 'Dokumen diproses sesuai kebutuhan.'],
        ['04', 'Monitoring', 'Memantau status dan masa berlaku dokumen.'],
    ];
    $features = ['Structured Documentation', 'Document Monitoring', 'Operational Support'];
    $metrics = [
        ['DOCUMENT CONTROL', 'Structured'],
        ['STATUS MONITORING', 'Continuous'],
        ['OPERATIONAL SUPPORT', 'Reliable'],
    ];
@endphp

@extends('layouts.app', ['title' => 'Dokumentasi & Perizinan Kapal | Karya Fortuna Shipping', 'description' => $description])

@section('content')
    <section class="relative overflow-hidden bg-white pt-16" aria-labelledby="documentation-hero-title">
        <div class="pointer-events-none absolute inset-x-0 top-16 h-px bg-[#0F2D52]/10"></div>
        <div class="pointer-events-none absolute left-0 top-32 hidden h-px w-[34%] bg-[#C62828]/30 lg:block"></div>
        <div class="pointer-events-none absolute bottom-14 right-0 hidden h-px w-[30%] bg-[#0F2D52]/16 lg:block"></div>
        <div class="pointer-events-none absolute right-8 top-32 hidden h-28 w-28 border-r border-t border-[#0F2D52]/12 lg:block"></div>

        <div class="relative mx-auto grid min-h-[calc(100vh-4rem)] max-w-7xl gap-12 px-5 py-10 sm:px-6 sm:py-12 lg:grid-cols-[0.92fr_1.08fr] lg:items-center lg:px-8 lg:py-14 xl:gap-16">
            <div data-reveal class="max-w-2xl">
                <div class="inline-flex items-center gap-3 rounded-md border border-[#0F2D52]/10 bg-[#F8FAFC] px-4 py-2">
                    <span class="h-px w-8 bg-[#0F2D52]/70"></span>
                    <span class="size-1.5 rounded-full bg-[#C62828]"></span>
                    <span class="text-xs font-extrabold uppercase tracking-[0.18em] text-[#0F2D52]">Maritime Documentation</span>
                </div>
                <h1 id="documentation-hero-title" class="mt-6 text-4xl font-extrabold leading-tight text-[#081F3A] sm:text-5xl lg:text-6xl">Dokumentasi &amp; Perizinan Kapal</h1>
                <p class="mt-6 max-w-xl text-base leading-8 text-slate-600 sm:text-lg">Solusi dokumentasi dan administrasi perizinan kapal untuk membantu memastikan kebutuhan operasional maritim dikelola secara tertib, terstruktur, dan tepat waktu.</p>
                <div class="mt-8 flex flex-col gap-3 sm:flex-row">
                    <x-link-button href="{{ route('contact') }}">Hubungi Kami <span aria-hidden="true">-&gt;</span></x-link-button>
                    <x-link-button href="#ruang-lingkup-layanan" variant="secondary">Lihat Layanan</x-link-button>
                </div>
            </div>

            <div data-reveal class="relative mx-auto w-full max-w-xl lg:max-w-none" aria-label="Visual layanan dokumentasi dan perizinan kapal">
                <div class="pointer-events-none absolute -left-4 top-8 hidden h-24 w-24 border-l border-t border-[#C62828]/35 lg:block"></div>
                <div class="pointer-events-none absolute -right-3 bottom-10 hidden h-28 w-28 border-b border-r border-[#0F2D52]/20 lg:block"></div>

                <div class="relative mx-auto max-w-[38rem] overflow-hidden rounded-lg border border-[#0F2D52]/10 bg-[#F8FAFC] p-4 shadow-2xl shadow-[#0F2D52]/14 sm:p-6">
                    <div class="pointer-events-none absolute inset-x-0 top-0 h-1 bg-[#C62828]"></div>
                    <div class="pointer-events-none absolute right-5 top-5 text-[#0F2D52]/8">
                        <i class="bi bi-anchor text-5xl" aria-hidden="true"></i>
                    </div>
                    <div class="pointer-events-none absolute bottom-5 left-5 flex gap-1 opacity-40" aria-hidden="true">
                        <span class="h-1 w-8 rounded-full bg-[#0F2D52]/25"></span>
                        <span class="h-1 w-5 rounded-full bg-[#C62828]/35"></span>
                        <span class="h-1 w-10 rounded-full bg-[#0F2D52]/18"></span>
                    </div>

                    <div class="relative grid gap-4 sm:grid-cols-2">
                        <article data-reveal class="group relative overflow-hidden rounded-lg border border-[#0F2D52]/10 bg-white p-6 shadow-xl shadow-slate-950/8 transition duration-300 hover:-translate-y-1 hover:border-[#C62828]/35 sm:col-span-2">
                            <div class="absolute -right-10 -top-10 size-32 rounded-full border border-[#0F2D52]/10"></div>
                            <div class="relative flex flex-col gap-6 sm:flex-row sm:items-start sm:justify-between">
                                <div class="max-w-sm">
                                    <p class="text-[0.68rem] font-extrabold uppercase tracking-[0.18em] text-[#C62828]">Maritime Documentation</p>
                                    <h2 class="mt-3 text-2xl font-extrabold leading-tight text-[#081F3A] sm:text-3xl">Dokumen Kapal</h2>
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
                                <div>
                                    <h3 class="text-sm font-extrabold uppercase tracking-[0.12em] text-[#081F3A]">Registrasi Kapal</h3>
                                    <p class="mt-2 text-sm leading-6 text-slate-500">Dokumen Registrasi</p>
                                </div>
                                <span class="inline-flex size-10 shrink-0 items-center justify-center rounded-md bg-[#0F2D52]/8 text-[#0F2D52] transition duration-300 group-hover:bg-[#C62828] group-hover:text-white">
                                    <i class="bi bi-file-earmark-richtext" aria-hidden="true"></i>
                                </span>
                            </div>
                        </article>

                        <article data-reveal class="group rounded-lg border border-[#0F2D52]/10 bg-white p-5 shadow-sm shadow-slate-950/5 transition duration-300 hover:-translate-y-1 hover:border-[#C62828]/35 hover:shadow-lg hover:shadow-[#0F2D52]/10 sm:translate-y-4">
                            <div class="flex items-start justify-between gap-4">
                                <div>
                                    <h3 class="text-sm font-extrabold uppercase tracking-[0.12em] text-[#081F3A]">Keselamatan</h3>
                                    <p class="mt-2 text-sm leading-6 text-slate-500">Dokumen Keselamatan</p>
                                </div>
                                <span class="inline-flex size-10 shrink-0 items-center justify-center rounded-md bg-[#0F2D52]/8 text-[#0F2D52] transition duration-300 group-hover:bg-[#C62828] group-hover:text-white">
                                    <i class="bi bi-shield-check" aria-hidden="true"></i>
                                </span>
                            </div>
                        </article>

                        <article data-reveal class="group rounded-lg border border-[#0F2D52]/10 bg-white p-5 shadow-sm shadow-slate-950/5 transition duration-300 hover:-translate-y-1 hover:border-[#C62828]/35 hover:shadow-lg hover:shadow-[#0F2D52]/10">
                            <div class="flex items-start justify-between gap-4">
                                <div>
                                    <h3 class="text-sm font-extrabold uppercase tracking-[0.12em] text-[#081F3A]">Perizinan</h3>
                                    <p class="mt-2 text-sm leading-6 text-slate-500">Izin Operasional</p>
                                </div>
                                <span class="inline-flex size-10 shrink-0 items-center justify-center rounded-md bg-[#0F2D52]/8 text-[#0F2D52] transition duration-300 group-hover:bg-[#C62828] group-hover:text-white">
                                    <i class="bi bi-file-earmark-check" aria-hidden="true"></i>
                                </span>
                            </div>
                        </article>

                        <article data-reveal class="group rounded-lg border border-[#0F2D52]/10 bg-white p-5 shadow-sm shadow-slate-950/5 transition duration-300 hover:-translate-y-1 hover:border-[#C62828]/35 hover:shadow-lg hover:shadow-[#0F2D52]/10 sm:translate-y-4">
                            <div class="flex items-start justify-between gap-4">
                                <div>
                                    <h3 class="text-sm font-extrabold uppercase tracking-[0.12em] text-[#081F3A]">Monitoring</h3>
                                    <p class="mt-2 text-sm leading-6 text-slate-500">Masa Berlaku Dokumen</p>
                                </div>
                                <span class="inline-flex size-10 shrink-0 items-center justify-center rounded-md bg-[#0F2D52]/8 text-[#0F2D52] transition duration-300 group-hover:bg-[#C62828] group-hover:text-white">
                                    <i class="bi bi-calendar2-check" aria-hidden="true"></i>
                                </span>
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

    <section class="relative overflow-hidden bg-white pb-16 sm:pb-20" aria-labelledby="documentation-intro-title">
        <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">
            <div class="grid gap-10 border-t border-[#0F2D52]/10 pt-10 lg:grid-cols-[0.92fr_1.08fr] lg:items-center">
                <div data-reveal>
                    <div class="flex items-center gap-3">
                        <span class="h-px w-10 bg-[#0F2D52]/70"></span>
                        <span class="size-1.5 rounded-full bg-[#C62828]"></span>
                    </div>
                    <p class="mt-4 text-xs font-bold uppercase tracking-[0.18em] text-[#C62828]">Dokumentasi Kapal</p>
                    <h2 id="documentation-intro-title" class="mt-3 text-3xl font-extrabold leading-tight text-[#081F3A] sm:text-4xl">Dokumen yang Tertata, Operasional yang Lebih Siap</h2>
                    <p class="mt-5 max-w-2xl text-base leading-8 text-slate-600">Dokumentasi kapal merupakan bagian penting dalam mendukung kelancaran operasional dan pemenuhan kebutuhan administratif. Kami membantu mengelola kebutuhan dokumentasi secara terstruktur agar informasi kapal lebih mudah dipantau.</p>
                </div>

                <div data-reveal class="relative">
                    <div class="pointer-events-none absolute -right-3 -top-3 h-20 w-20 border-r border-t border-[#C62828]/30"></div>
                    <div class="space-y-4">
                        @foreach ($documentCards as $card)
                            <article class="group relative overflow-hidden rounded-lg border border-[#0F2D52]/10 bg-white p-5 shadow-lg shadow-slate-950/6 transition duration-300 hover:-translate-y-1 hover:border-[#C62828]/35">
                                <span class="absolute inset-y-0 left-0 w-1 bg-[#C62828] opacity-70"></span>
                                <div class="flex items-center justify-between gap-5 pl-3">
                                    <div>
                                        <p class="text-xs font-extrabold uppercase tracking-[0.16em] text-[#081F3A]">{{ $card[0] }}</p>
                                        <p class="mt-2 text-sm font-semibold text-slate-500">{{ $card[1] }}</p>
                                    </div>
                                    <span class="inline-flex size-10 shrink-0 items-center justify-center rounded-md border border-[#0F2D52]/10 text-[#0F2D52] transition duration-300 group-hover:border-[#C62828] group-hover:text-[#C62828]">
                                        <i class="bi bi-file-earmark-text" aria-hidden="true"></i>
                                    </span>
                                </div>
                            </article>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="ruang-lingkup-layanan" class="relative overflow-hidden bg-[#F4F7FB] py-16 sm:py-20" aria-labelledby="service-scope-title">
        <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">
            <div data-reveal class="max-w-3xl">
                <p class="text-xs font-bold uppercase tracking-[0.18em] text-[#C62828]">Ship Documentation / Maritime Compliance</p>
                <h2 id="service-scope-title" class="mt-3 text-3xl font-extrabold leading-tight text-[#081F3A] sm:text-4xl">Ruang Lingkup Layanan</h2>
                <p class="mt-4 text-base leading-8 text-slate-600">Daftar berikut merupakan dummy content sementara dan dapat disesuaikan saat data layanan resmi Karya Fortuna Shipping tersedia.</p>
            </div>

            <div class="mt-10 grid gap-5 md:grid-cols-2 xl:grid-cols-3">
                @foreach ($services as $service)
                    <article data-reveal class="group relative min-h-[260px] overflow-hidden rounded-lg border border-[#0F2D52]/10 bg-white p-6 shadow-sm shadow-slate-950/5 transition duration-300 hover:-translate-y-1.5 hover:border-[#C62828]/40 hover:shadow-xl hover:shadow-[#0F2D52]/12">
                        <span class="absolute inset-x-0 top-0 h-1 bg-[#C62828] opacity-0 transition duration-300 group-hover:opacity-100"></span>
                        <div class="flex items-start justify-between gap-5">
                            <span class="text-5xl font-extrabold leading-none text-[#0F2D52]/10 transition duration-300 group-hover:text-[#C62828]/18">{{ $service[0] }}</span>
                            <span class="inline-flex size-11 shrink-0 items-center justify-center rounded-md border border-[#0F2D52]/10 text-[#0F2D52] transition duration-300 group-hover:border-[#C62828] group-hover:bg-[#C62828] group-hover:text-white">
                                <i class="bi {{ $service[1] }}" aria-hidden="true"></i>
                            </span>
                        </div>
                        <h3 class="mt-8 text-xl font-extrabold text-[#081F3A]">{{ $service[2] }}</h3>
                        <p class="mt-3 text-sm leading-7 text-slate-600">{{ $service[3] }}</p>
                        <span class="mt-6 inline-flex items-center gap-2 text-sm font-extrabold text-[#C62828]">
                            <span>Detail</span>
                            <i class="bi bi-arrow-right transition duration-300 group-hover:translate-x-1" aria-hidden="true"></i>
                        </span>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="bg-white py-16 sm:py-20" aria-labelledby="checklist-title">
        <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">
            <div data-reveal class="grid gap-6 lg:grid-cols-[0.72fr_1.28fr] lg:items-end">
                <div>
                    <p class="text-xs font-bold uppercase tracking-[0.18em] text-[#C62828]">Ship Documentation Checklist</p>
                    <h2 id="checklist-title" class="mt-3 text-3xl font-extrabold leading-tight text-[#081F3A] sm:text-4xl">Ship Documentation Checklist</h2>
                </div>
                <p class="text-base leading-8 text-slate-600">Contoh kategori dokumentasi - detail dokumen menyesuaikan jenis kapal dan kebutuhan operasional.</p>
            </div>

            <div class="mt-10 overflow-hidden rounded-lg border border-[#0F2D52]/10 bg-[#F8FAFC] shadow-lg shadow-slate-950/5">
                <div class="grid lg:grid-cols-6">
                    @foreach ($checklist as $item)
                        <article data-reveal class="group border-b border-[#0F2D52]/10 bg-white p-5 transition duration-300 hover:bg-[#081F3A] lg:border-b-0 lg:border-r last:border-b-0 lg:last:border-r-0">
                            <p class="text-sm font-extrabold text-[#C62828]">{{ $item[0] }}</p>
                            <h3 class="mt-7 min-h-12 text-sm font-extrabold uppercase leading-6 tracking-[0.06em] text-[#081F3A] transition duration-300 group-hover:text-white">{{ $item[1] }}</h3>
                            <span class="mt-5 inline-flex rounded-full border border-[#0F2D52]/10 bg-[#F8FAFC] px-3 py-1 text-[0.68rem] font-extrabold uppercase tracking-[0.14em] text-[#0F2D52] transition duration-300 group-hover:border-white/20 group-hover:bg-white/10 group-hover:text-white">{{ $item[2] }}</span>
                        </article>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="relative overflow-hidden bg-[#F8FAFC] py-16 sm:py-20" aria-labelledby="documentation-process-title">
        <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">
            <div data-reveal class="max-w-3xl">
                <p class="text-xs font-bold uppercase tracking-[0.18em] text-[#C62828]">Documentation Workflow</p>
                <h2 id="documentation-process-title" class="mt-3 text-3xl font-extrabold leading-tight text-[#081F3A] sm:text-4xl">Bagaimana Prosesnya?</h2>
            </div>
            <div class="relative mt-10 grid gap-5 lg:grid-cols-4">
                <div class="absolute left-0 right-0 top-12 hidden h-px bg-[#C62828]/40 lg:block"></div>
                @foreach ($processSteps as $step)
                    <article data-reveal class="relative rounded-lg border border-[#0F2D52]/10 bg-white p-6 shadow-sm shadow-slate-950/5 transition duration-300 hover:-translate-y-1 hover:border-[#C62828]/35 hover:shadow-lg hover:shadow-[#0F2D52]/10">
                        <div class="relative z-10 flex items-center gap-4 lg:block">
                            <span class="inline-flex size-16 shrink-0 items-center justify-center rounded-full border-4 border-white bg-[#0F2D52] text-sm font-extrabold text-white shadow-lg shadow-[#0F2D52]/16">{{ $step[0] }}</span>
                            <div class="lg:mt-6">
                                <p class="text-[0.68rem] font-bold uppercase tracking-[0.16em] text-[#C62828]">Step {{ $step[0] }}</p>
                                <h3 class="mt-1 text-lg font-extrabold text-[#081F3A]">{{ $step[1] }}</h3>
                            </div>
                        </div>
                        <p class="mt-4 text-sm leading-7 text-slate-600">{{ $step[2] }}</p>
                        @if (! $loop->last)
                            <span class="absolute -bottom-5 left-8 z-10 flex size-8 items-center justify-center rounded-full bg-[#C62828] text-white shadow-md shadow-[#C62828]/20 lg:-right-4 lg:bottom-auto lg:left-auto lg:top-8">
                                <i class="bi bi-arrow-down-short lg:rotate-[-90deg]" aria-hidden="true"></i>
                            </span>
                        @endif
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="relative overflow-hidden bg-white py-16 sm:py-20" aria-labelledby="compliance-structure-title">
        <div class="mx-auto grid max-w-7xl gap-10 px-5 sm:px-6 lg:grid-cols-[1.05fr_0.95fr] lg:items-center lg:px-8">
            <div data-reveal class="group relative overflow-hidden rounded-lg border border-[#0F2D52]/10 bg-[#081F3A] shadow-xl shadow-[#0F2D52]/14">
                <img src="{{ $images['compliance'] }}" alt="Petugas maritim memeriksa log kapal untuk kebutuhan administrasi dan dokumentasi" width="1400" height="930" loading="lazy" decoding="async" onerror="this.onerror=null;this.src='{{ $fallbackImage }}';" class="aspect-[16/11] w-full object-cover transition duration-700 group-hover:scale-[1.04]">
                <div class="absolute inset-0 bg-[#06182D]/20"></div>
                <div class="absolute inset-x-0 top-0 h-1 bg-[#C62828]"></div>
                <div class="absolute bottom-5 left-5 rounded-md border border-white/18 bg-white/12 px-4 py-2 text-xs font-bold uppercase tracking-[0.16em] text-white backdrop-blur-md">Port Administration</div>
            </div>

            <div data-reveal>
                <p class="text-xs font-bold uppercase tracking-[0.18em] text-[#C62828]">Maritime Compliance</p>
                <h2 id="compliance-structure-title" class="mt-3 text-3xl font-extrabold leading-tight text-[#081F3A] sm:text-4xl">Administrasi yang Lebih Terstruktur</h2>
                <p class="mt-5 text-base leading-8 text-slate-600">Pengelolaan dokumentasi yang baik membantu perusahaan memantau kebutuhan administratif kapal secara lebih teratur.</p>
                <div class="mt-7 space-y-3">
                    @foreach ($features as $feature)
                        <div class="flex items-center gap-3 rounded-md border border-[#0F2D52]/10 bg-[#F8FAFC] px-4 py-3 shadow-sm shadow-slate-950/5">
                            <span class="inline-flex size-8 shrink-0 items-center justify-center rounded-md bg-[#C62828] text-white">
                                <i class="bi bi-check-lg" aria-hidden="true"></i>
                            </span>
                            <span class="text-sm font-extrabold text-[#081F3A]">{{ $feature }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="bg-[#081F3A] py-16 sm:py-20" aria-labelledby="trust-title">
        <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">
            <div data-reveal class="max-w-3xl">
                <p class="text-xs font-bold uppercase tracking-[0.18em] text-[#F04444]">Maritime Documentation</p>
                <h2 id="trust-title" class="mt-3 text-3xl font-extrabold leading-tight text-white sm:text-4xl">Supporting Maritime Compliance</h2>
                <p class="mt-5 text-base leading-8 text-slate-200">Dokumentasi yang tertata membantu menciptakan proses administrasi yang lebih terukur dan mudah dipantau.</p>
            </div>
            <div class="mt-10 grid gap-5 md:grid-cols-3">
                @foreach ($metrics as $metric)
                    <article data-reveal class="rounded-lg border border-white/10 bg-white/6 p-6">
                        <span class="block h-1 w-10 bg-[#C62828]"></span>
                        <h3 class="mt-6 text-sm font-extrabold uppercase tracking-[0.16em] text-white">{{ $metric[0] }}</h3>
                        <p class="mt-3 text-2xl font-extrabold text-white">{{ $metric[1] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="bg-white py-16 sm:py-20" aria-labelledby="documentation-cta-title">
        <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">
            <div data-reveal class="relative overflow-hidden rounded-lg bg-[#081F3A] px-6 py-10 shadow-2xl shadow-[#0F2D52]/18 sm:px-10 lg:px-12">
                <div class="pointer-events-none absolute inset-x-0 top-0 h-1 bg-[#C62828]"></div>
                <div class="pointer-events-none absolute -right-12 -top-12 size-40 border border-white/10"></div>
                <div class="relative grid gap-7 lg:grid-cols-[1fr_auto] lg:items-center">
                    <div>
                        <p class="text-xs font-bold uppercase tracking-[0.18em] text-[#F04444]">Karya Fortuna Shipping</p>
                        <h2 id="documentation-cta-title" class="mt-3 text-3xl font-extrabold leading-tight text-white sm:text-4xl">Pastikan Dokumentasi Kapal Anda Tetap Terpantau</h2>
                        <p class="mt-4 max-w-2xl text-base leading-8 text-slate-200">Diskusikan kebutuhan dokumentasi dan perizinan kapal bersama Karya Fortuna Shipping.</p>
                    </div>
                    <x-link-button href="{{ route('contact') }}">Hubungi Kami <span aria-hidden="true">-&gt;</span></x-link-button>
                </div>
            </div>
        </div>
    </section>
@endsection
