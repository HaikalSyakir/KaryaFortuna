@php
    $title = 'Perawatan & Perbaikan Kapal';
    $description = 'Informasi Perawatan Kapal, Perbaikan Kapal, Ship Maintenance, Ship Repair, Marine Maintenance, dan Marine Engineering Karya Fortuna Shipping.';
    $breadcrumbs = [['label' => 'Layanan'], ['label' => 'Perawatan & Perbaikan Kapal']];
    $images = [
        'hero' => 'https://commons.wikimedia.org/wiki/Special:Redirect/file/Tugboat_in_a_dry_dock_for_hull_painting_and_propeller_work_at_Caddell_Dry_Dock_%26_Repair_Co.jpg?width=1400',
        'support' => 'https://commons.wikimedia.org/wiki/Special:Redirect/file/Army_Sailors_Repair_Dry_Dock_Ship_DVIDS33646.jpg?width=1400',
    ];
    $fallbackImage = asset('images/hero/gambar2.jpg');
    $readinessItems = [['01','Inspection'], ['02','Maintenance'], ['03','Repair'], ['04','Support']];
    $services = [
        ['01','Routine Maintenance','Perawatan rutin untuk menjaga kondisi dan performa kapal.'],
        ['02','Mechanical Repair','Dukungan perbaikan komponen mekanikal kapal.'],
        ['03','Electrical Repair','Perawatan dan perbaikan sistem kelistrikan kapal.'],
        ['04','Hull Maintenance','Perawatan bagian lambung dan struktur kapal.'],
        ['05','Inspection & Troubleshooting','Pemeriksaan kondisi dan identifikasi masalah operasional.'],
        ['06','Emergency Repair','Dukungan perbaikan untuk kebutuhan tertentu yang bersifat mendesak.'],
    ];
    $processSteps = [
        ['01','Inspection','Pemeriksaan kondisi kapal.'],
        ['02','Assessment','Evaluasi kebutuhan perawatan/perbaikan.'],
        ['03','Maintenance','Pelaksanaan pekerjaan perawatan.'],
        ['04','Testing','Pemeriksaan dan pengujian.'],
        ['05','Ready for Operation','Kapal siap kembali mendukung operasional.'],
    ];
    $features = ['Planned Maintenance', 'Technical Support', 'Operational Readiness'];
    $matters = [
        ['Safety','Membantu menjaga aspek keselamatan operasional.'],
        ['Performance','Mendukung performa kapal agar tetap optimal.'],
        ['Reliability','Meningkatkan kesiapan kapal untuk kebutuhan operasional.'],
    ];
@endphp

@extends('layouts.app', ['title' => 'Perawatan & Perbaikan Kapal | Karya Fortuna Shipping', 'description' => $description])

@section('content')
    <section class="relative overflow-hidden bg-white pt-16" aria-labelledby="maintenance-hero-title">
        <div class="pointer-events-none absolute inset-x-0 top-16 h-px bg-[#0F2D52]/10"></div>
        <div class="pointer-events-none absolute left-0 top-28 hidden h-px w-[38%] bg-[#C62828]/30 lg:block"></div>
        <div class="pointer-events-none absolute bottom-10 right-0 hidden h-px w-[28%] bg-[#0F2D52]/18 lg:block"></div>
        <div class="pointer-events-none absolute left-5 top-40 hidden h-24 w-24 border-l border-t border-[#0F2D52]/12 lg:block"></div>

        <div class="relative mx-auto grid min-h-[calc(100vh-4rem)] max-w-7xl gap-10 px-5 py-10 sm:px-6 sm:py-12 lg:grid-cols-[0.88fr_1.12fr] lg:items-center lg:px-8 lg:py-14 xl:gap-16">
            <div data-reveal class="max-w-2xl">
                <div class="inline-flex items-center gap-3 rounded-md border border-[#0F2D52]/10 bg-[#F8FAFC] px-4 py-2">
                    <span class="h-px w-8 bg-[#0F2D52]/70"></span><span class="size-1.5 rounded-full bg-[#C62828]"></span>
                    <span class="text-xs font-extrabold uppercase tracking-[0.18em] text-[#0F2D52]">Marine Maintenance</span>
                </div>
                <h1 id="maintenance-hero-title" class="mt-6 text-4xl font-extrabold leading-tight text-[#081F3A] sm:text-5xl lg:text-6xl">Perawatan &amp; Perbaikan Kapal</h1>
                <p class="mt-6 max-w-xl text-base leading-8 text-slate-600 sm:text-lg">Menjaga performa, keselamatan, dan kesiapan armada melalui layanan perawatan dan perbaikan kapal yang terencana dan profesional.</p>
                <div class="mt-8 flex flex-col gap-3 sm:flex-row">
                    <x-link-button href="{{ route('contact') }}">Konsultasikan Kebutuhan</x-link-button>
                    <x-link-button href="#solusi-perawatan" variant="secondary">Lihat Layanan</x-link-button>
                </div>
                <div class="mt-10 grid max-w-md grid-cols-2 gap-3">
                    <div class="rounded-md border border-[#0F2D52]/10 bg-white p-4 shadow-sm shadow-slate-950/5"><p class="text-[0.68rem] font-bold uppercase tracking-[0.16em] text-slate-500">Vessel</p><p class="mt-1 text-lg font-extrabold uppercase text-[#081F3A]">Maintenance</p></div>
                    <div class="rounded-md border border-[#0F2D52]/10 bg-[#081F3A] p-4 shadow-sm shadow-[#0F2D52]/14"><p class="text-[0.68rem] font-bold uppercase tracking-[0.16em] text-white/65">Repair</p><p class="mt-1 text-lg font-extrabold uppercase text-white">&amp; Support</p></div>
                </div>
            </div>

            <div data-reveal class="relative mx-auto w-full max-w-2xl lg:max-w-none" aria-label="Marine maintenance service visual">
                <div class="pointer-events-none absolute -left-4 top-7 hidden h-28 w-28 border-l border-t border-[#C62828]/35 lg:block"></div>
                <div class="pointer-events-none absolute -right-4 bottom-7 hidden h-24 w-24 border-b border-r border-[#0F2D52]/20 lg:block"></div>
                <figure class="group relative overflow-hidden rounded-lg border border-[#0F2D52]/10 bg-[#081F3A] shadow-2xl shadow-[#0F2D52]/18">
                    <img src="{{ $images['hero'] }}" alt="Tugboat berada di dry dock untuk perawatan lambung dan propeller" width="1400" height="930" fetchpriority="high" decoding="async" onerror="this.onerror=null;this.src='{{ $fallbackImage }}';" class="aspect-[5/4] w-full object-cover transition duration-700 group-hover:scale-[1.035] sm:aspect-[16/11] lg:aspect-[6/5]">
                    <div class="absolute inset-0 bg-[#06182D]/20"></div><div class="absolute inset-x-0 top-0 h-1 bg-[#C62828]"></div>
                    <div class="absolute left-5 top-5 rounded-md border border-white/18 bg-white/12 px-4 py-3 text-white backdrop-blur-md"><p class="text-[0.68rem] font-bold uppercase tracking-[0.16em] text-white/75">Marine Engineering</p><p class="mt-1 text-sm font-extrabold">01 / 04</p></div>
                    <div class="absolute bottom-5 right-5 max-w-[13rem] rounded-md bg-white px-4 py-3 shadow-xl shadow-slate-950/18"><p class="text-[0.68rem] font-bold uppercase tracking-[0.16em] text-[#C62828]">Vessel Maintenance</p><div class="mt-2 flex items-center gap-3"><span class="text-2xl font-extrabold text-[#081F3A]">01</span><span class="h-px flex-1 bg-[#0F2D52]/20"></span><span class="text-xs font-bold uppercase tracking-[0.14em] text-[#081F3A]">Inspection</span></div></div>
                </figure>
            </div>
        </div>
    </section>

    <section class="bg-white" aria-label="Breadcrumb Perawatan dan Perbaikan Kapal">
        <div class="mx-auto max-w-7xl px-5 py-6 sm:px-6 lg:px-8"><nav class="flex flex-wrap items-center gap-2 text-sm text-slate-500" aria-label="Breadcrumb"><a href="{{ route('home') }}" class="font-medium text-slate-700 transition-colors hover:text-[#C62828]">Beranda</a>@foreach ($breadcrumbs as $breadcrumb)<span aria-hidden="true">/</span><span class="font-medium text-[#081F3A]" aria-current="page">{{ $breadcrumb['label'] }}</span>@endforeach</nav></div>
    </section>

    <section class="relative overflow-hidden bg-white pb-16 sm:pb-20" aria-labelledby="fleet-readiness-title">
        <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8"><div class="grid gap-10 border-t border-[#0F2D52]/10 pt-10 lg:grid-cols-[0.9fr_1.1fr] lg:items-center">
            <div data-reveal><div class="flex items-center gap-3"><span class="h-px w-10 bg-[#0F2D52]/70"></span><span class="size-1.5 rounded-full bg-[#C62828]"></span></div><p class="mt-4 text-xs font-bold uppercase tracking-[0.18em] text-[#C62828]">Marine Maintenance</p><h2 id="fleet-readiness-title" class="mt-3 text-3xl font-extrabold leading-tight text-[#081F3A] sm:text-4xl">Menjaga Armada Tetap Siap Beroperasi</h2><p class="mt-5 max-w-2xl text-base leading-8 text-slate-600">Perawatan kapal yang tepat membantu menjaga performa, keamanan, dan kesiapan armada dalam menghadapi kebutuhan operasional. Karya Fortuna Shipping menyediakan dukungan perawatan dan perbaikan untuk membantu menjaga kapal tetap dalam kondisi optimal.</p></div>
            <div class="grid gap-3 sm:grid-cols-2">@foreach ($readinessItems as $item)<article data-reveal class="group relative overflow-hidden rounded-lg border border-[#0F2D52]/10 bg-[#F8FAFC] p-6 transition duration-300 hover:-translate-y-1 hover:border-[#C62828]/35 hover:bg-white hover:shadow-xl hover:shadow-[#0F2D52]/10"><span class="absolute -right-2 -top-5 text-7xl font-extrabold leading-none text-[#0F2D52]/6 transition duration-300 group-hover:text-[#C62828]/10">{{ $item[0] }}</span><p class="relative text-xs font-bold uppercase tracking-[0.18em] text-[#C62828]">{{ $item[0] }}</p><h3 class="relative mt-5 text-xl font-extrabold uppercase text-[#081F3A]">{{ $item[1] }}</h3><span class="relative mt-5 block h-px w-16 bg-[#0F2D52]/18 transition duration-300 group-hover:w-24 group-hover:bg-[#C62828]"></span></article>@endforeach</div>
        </div></div>
    </section>

    <section id="solusi-perawatan" class="relative overflow-hidden bg-[#F4F7FB] py-16 sm:py-20" aria-labelledby="maintenance-services-title">
        <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8"><div data-reveal class="max-w-3xl"><p class="text-xs font-bold uppercase tracking-[0.18em] text-[#C62828]">Ship Maintenance / Ship Repair</p><h2 id="maintenance-services-title" class="mt-3 text-3xl font-extrabold leading-tight text-[#081F3A] sm:text-4xl">Solusi Perawatan &amp; Perbaikan Kapal</h2><p class="mt-4 text-base leading-8 text-slate-600">Daftar berikut merupakan dummy content sementara dan dapat disesuaikan saat data layanan resmi Karya Fortuna Shipping tersedia.</p></div>
            <div class="mt-10 grid gap-5 md:grid-cols-2 xl:grid-cols-3">@foreach ($services as $service)<article data-reveal class="group relative min-h-[250px] overflow-hidden rounded-lg border border-[#0F2D52]/10 bg-white p-6 shadow-sm shadow-slate-950/5 transition duration-300 hover:-translate-y-1.5 hover:border-[#C62828]/40 hover:shadow-xl hover:shadow-[#0F2D52]/12"><span class="absolute inset-x-0 top-0 h-1 bg-[#C62828] opacity-0 transition duration-300 group-hover:opacity-100"></span><div class="flex items-start justify-between gap-5"><span class="text-5xl font-extrabold leading-none text-[#0F2D52]/10 transition duration-300 group-hover:text-[#C62828]/18">{{ $service[0] }}</span><span class="inline-flex size-10 shrink-0 items-center justify-center rounded-md border border-[#0F2D52]/10 text-[#0F2D52] transition duration-300 group-hover:translate-x-1 group-hover:border-[#C62828] group-hover:bg-[#C62828] group-hover:text-white"><i class="bi bi-arrow-up-right" aria-hidden="true"></i></span></div><h3 class="mt-8 text-xl font-extrabold text-[#081F3A]">{{ $service[1] }}</h3><p class="mt-3 text-sm leading-7 text-slate-600">{{ $service[2] }}</p><span class="mt-6 block h-px w-14 bg-[#0F2D52]/16 transition duration-300 group-hover:w-24 group-hover:bg-[#C62828]"></span></article>@endforeach</div>
        </div>
    </section>

    <section class="bg-white py-16 sm:py-20" aria-labelledby="maintenance-process-title">
        <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8"><div data-reveal class="max-w-3xl"><p class="text-xs font-bold uppercase tracking-[0.18em] text-[#C62828]">Marine Maintenance Workflow</p><h2 id="maintenance-process-title" class="mt-3 text-3xl font-extrabold leading-tight text-[#081F3A] sm:text-4xl">Maintenance Process</h2></div>
            <div class="relative mt-10 grid gap-5 lg:grid-cols-5"><div class="absolute left-0 right-0 top-12 hidden h-px bg-[#0F2D52]/16 lg:block"></div>@foreach ($processSteps as $step)<article data-reveal class="relative rounded-lg border border-[#0F2D52]/10 bg-white p-6 shadow-sm shadow-slate-950/5 transition duration-300 hover:-translate-y-1 hover:border-[#C62828]/35 hover:shadow-lg hover:shadow-[#0F2D52]/10"><div class="relative z-10 flex items-center gap-4 lg:block"><span class="inline-flex size-16 shrink-0 items-center justify-center rounded-full border-4 border-white bg-[#0F2D52] text-sm font-extrabold text-white shadow-lg shadow-[#0F2D52]/16">{{ $step[0] }}</span><div class="lg:mt-6"><p class="text-[0.68rem] font-bold uppercase tracking-[0.16em] text-[#C62828]">Step {{ $step[0] }}</p><h3 class="mt-1 text-lg font-extrabold text-[#081F3A]">{{ $step[1] }}</h3></div></div><p class="mt-4 text-sm leading-7 text-slate-600">{{ $step[2] }}</p>@if (! $loop->last)<span class="absolute -bottom-5 left-8 z-10 flex size-8 items-center justify-center rounded-full bg-[#C62828] text-white shadow-md shadow-[#C62828]/20 lg:-right-4 lg:bottom-auto lg:left-auto lg:top-8"><i class="bi bi-arrow-down-short lg:rotate-[-90deg]" aria-hidden="true"></i></span>@endif</article>@endforeach</div>
        </div>
    </section>

    <section class="relative overflow-hidden bg-[#F8FAFC] py-16 sm:py-20" aria-labelledby="planned-maintenance-title">
        <div class="mx-auto grid max-w-7xl gap-10 px-5 sm:px-6 lg:grid-cols-[1.08fr_0.92fr] lg:items-center lg:px-8"><div data-reveal class="group relative overflow-hidden rounded-lg border border-[#0F2D52]/10 bg-[#081F3A] shadow-xl shadow-[#0F2D52]/14"><img src="{{ $images['support'] }}" alt="Marine engineer melakukan perbaikan kapal di area dry dock" width="1400" height="918" loading="lazy" decoding="async" onerror="this.onerror=null;this.src='{{ $fallbackImage }}';" class="aspect-[16/11] w-full object-cover transition duration-700 group-hover:scale-[1.04]"><div class="absolute inset-0 bg-[#06182D]/24"></div><div class="absolute bottom-5 left-5 rounded-md border border-white/18 bg-white/12 px-4 py-2 text-xs font-bold uppercase tracking-[0.16em] text-white backdrop-blur-md">Ship Repair Support</div></div>
            <div data-reveal><p class="text-xs font-bold uppercase tracking-[0.18em] text-[#C62828]">Marine Engineering</p><h2 id="planned-maintenance-title" class="mt-3 text-3xl font-extrabold leading-tight text-[#081F3A] sm:text-4xl">Perawatan yang Terencana, Operasional yang Lebih Siap</h2><p class="mt-5 text-base leading-8 text-slate-600">Pendekatan maintenance yang rapi membantu armada lebih siap menghadapi kebutuhan operasional harian, pemeriksaan teknis, dan dukungan perbaikan yang dibutuhkan.</p><div class="mt-7 space-y-3">@foreach ($features as $feature)<div class="flex items-center gap-3 rounded-md border border-[#0F2D52]/10 bg-white px-4 py-3 shadow-sm shadow-slate-950/5"><span class="inline-flex size-8 shrink-0 items-center justify-center rounded-md bg-[#C62828] text-white"><i class="bi bi-check-lg" aria-hidden="true"></i></span><span class="text-sm font-extrabold text-[#081F3A]">{{ $feature }}</span></div>@endforeach</div></div>
        </div>
    </section>

    <section class="bg-[#081F3A] py-16 sm:py-20" aria-labelledby="maintenance-matters-title">
        <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8"><div data-reveal class="max-w-3xl"><p class="text-xs font-bold uppercase tracking-[0.18em] text-[#F04444]">Why Maintenance Matters</p><h2 id="maintenance-matters-title" class="mt-3 text-3xl font-extrabold leading-tight text-white sm:text-4xl">Fleet Readiness Starts with Proper Maintenance</h2></div><div class="mt-10 grid gap-5 md:grid-cols-3">@foreach ($matters as $matter)<article data-reveal class="rounded-lg border border-white/10 bg-white/6 p-6"><span class="block h-1 w-10 bg-[#C62828]"></span><h3 class="mt-6 text-xl font-extrabold uppercase text-white">{{ $matter[0] }}</h3><p class="mt-3 text-sm leading-7 text-slate-200">{{ $matter[1] }}</p></article>@endforeach</div></div>
    </section>

    <section class="bg-white py-16 sm:py-20" aria-labelledby="maintenance-cta-title">
        <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8"><div data-reveal class="relative overflow-hidden rounded-lg bg-[#081F3A] px-6 py-10 shadow-2xl shadow-[#0F2D52]/18 sm:px-10 lg:px-12"><div class="pointer-events-none absolute inset-x-0 top-0 h-1 bg-[#C62828]"></div><div class="pointer-events-none absolute -right-12 -top-12 size-40 border border-white/10"></div><div class="relative grid gap-7 lg:grid-cols-[1fr_auto] lg:items-center"><div><p class="text-xs font-bold uppercase tracking-[0.18em] text-[#F04444]">Karya Fortuna Shipping</p><h2 id="maintenance-cta-title" class="mt-3 text-3xl font-extrabold leading-tight text-white sm:text-4xl">Siap Menjaga Armada Anda Tetap Beroperasi?</h2><p class="mt-4 max-w-2xl text-base leading-8 text-slate-200">Diskusikan kebutuhan perawatan dan perbaikan kapal bersama Karya Fortuna Shipping.</p></div><x-link-button href="{{ route('contact') }}">Hubungi Kami</x-link-button></div></div></div>
    </section>
@endsection
