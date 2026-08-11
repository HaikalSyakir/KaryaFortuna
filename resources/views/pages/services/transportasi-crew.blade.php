@php
    $title = 'Transportasi Crew';
    $serviceHighlights = [
        ['icon' => 'bi bi-shield-check', 'title' => 'Keselamatan Prioritas', 'description' => 'Mengutamakan keselamatan crew selama perjalanan.'],
        ['icon' => 'bi bi-clock', 'title' => 'Tepat Waktu', 'description' => 'Mendukung mobilisasi crew sesuai jadwal operasional.'],
        ['icon' => 'bi bi-life-preserver', 'title' => 'Armada Terawat', 'description' => 'Armada diperiksa dan dirawat secara berkala.'],
        ['icon' => 'bi bi-person-check', 'title' => 'Crew Profesional', 'description' => 'Didukung operator dan tenaga berpengalaman.'],
    ];
    $serviceBenefits = [
        ['icon' => 'bi bi-shield-check', 'title' => 'Keselamatan Terjamin', 'description' => 'Mengutamakan aspek keselamatan dalam setiap perjalanan crew.'],
        ['icon' => 'bi bi-clock', 'title' => 'Tepat Waktu', 'description' => 'Mendukung mobilisasi crew sesuai jadwal operasional perusahaan.'],
        ['icon' => 'bi bi-person-check', 'title' => 'Crew Profesional', 'description' => 'Didukung tenaga operasional yang berpengalaman dan profesional.'],
        ['icon' => 'bi bi-life-preserver', 'title' => 'Armada Terawat', 'description' => 'Armada diperiksa dan dirawat secara berkala untuk menjaga kesiapan operasional.'],
        ['icon' => 'bi bi-geo-alt', 'title' => 'Rute Fleksibel', 'description' => 'Menyesuaikan kebutuhan rute dan lokasi operasional pelanggan.'],
        ['icon' => 'bi bi-people', 'title' => 'Kapasitas Fleksibel', 'description' => 'Layanan dapat disesuaikan dengan kebutuhan jumlah crew dan operasional.'],
    ];
    $transportNeeds = [
        ['icon' => 'bi bi-people', 'title' => 'Mobilisasi Crew', 'description' => 'Transportasi crew menuju dan dari lokasi kerja melalui jalur laut.'],
        ['icon' => 'bi bi-arrow-left-right', 'title' => 'Crew Transfer', 'description' => 'Mendukung perpindahan crew antar lokasi operasional.'],
        ['icon' => 'bi bi-water', 'title' => 'Operasional Offshore', 'description' => 'Mendukung kebutuhan transportasi tenaga kerja menuju lokasi operasi di wilayah perairan.'],
    ];
@endphp

@extends('layouts.app', ['title' => $title . ' | Karya Fortuna Shipping'])

@section('content')
    <section class="relative overflow-hidden bg-[#F8FAFC] pb-16 pt-28 sm:pb-20 sm:pt-32" aria-labelledby="crew-transport-title">
        <div class="pointer-events-none absolute inset-x-0 top-0 h-px bg-[#0F2D52]/10"></div>

        <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">
            <nav data-reveal class="mb-8 flex flex-wrap items-center gap-2 text-sm text-slate-500" aria-label="Breadcrumb">
                <a href="{{ route('home') }}" class="font-medium transition-colors hover:text-[#D62828]">Beranda</a>
                <span aria-hidden="true">/</span>
                <span class="font-medium text-[#0F2D52]" aria-current="page">Transportasi Crew</span>
            </nav>

            <div class="overflow-hidden rounded-[20px] border border-[#E5E7EB] bg-white p-6 shadow-xl shadow-slate-950/5 sm:p-8 lg:p-10">
                <div class="grid items-stretch gap-10 lg:grid-cols-[45fr_55fr] lg:gap-12">
                    <div data-reveal class="flex flex-col justify-center">
                        <div class="flex items-center gap-3">
                            <span class="h-px w-10 bg-[#0F2D52]/60"></span>
                            <p class="text-xs font-bold uppercase tracking-[0.2em] text-[#D62828]">Layanan</p>
                        </div>
                        <h1 id="crew-transport-title" class="mt-5 text-3xl font-extrabold leading-tight text-[#0F2D52] sm:text-4xl xl:text-5xl">Transportasi Crew</h1>
                        <p class="mt-4 text-lg font-semibold text-[#D62828]">Solusi Transportasi Crew yang Aman dan Tepat Waktu</p>

                        <div class="mt-6 space-y-4 text-base leading-8 text-slate-600">
                            <p>Karya Fortuna Shipping menyediakan layanan transportasi crew melalui jalur laut untuk mendukung kebutuhan operasional perusahaan, khususnya mobilisasi tenaga kerja menuju dan dari lokasi kerja di wilayah perairan.</p>
                            <p>Dengan armada yang layak dan terawat, operator berpengalaman, serta koordinasi perjalanan yang terencana, kami menjaga keselamatan penumpang, kenyamanan perjalanan, dan ketepatan waktu untuk setiap kebutuhan mobilisasi Anda.</p>
                        </div>

                        <div class="mt-7 grid gap-3 sm:grid-cols-2">
                            @foreach ($serviceHighlights as $highlight)
                                <article class="rounded-xl border border-[#E5E7EB] bg-[#F8FAFC] px-4 py-3">
                                    <div class="flex items-center gap-3 text-sm font-bold text-[#0F2D52]">
                                        <i class="{{ $highlight['icon'] }} text-base text-[#D62828]" aria-hidden="true"></i>
                                        <h2 class="text-sm font-bold">{{ $highlight['title'] }}</h2>
                                    </div>
                                    <p class="mt-1 pl-7 text-xs leading-5 text-slate-600">{{ $highlight['description'] }}</p>
                                </article>
                            @endforeach
                        </div>

                        <div class="mt-8">
                            <x-link-button :href="route('contact')">Hubungi Kami <i class="bi bi-arrow-right" aria-hidden="true"></i></x-link-button>
                        </div>
                    </div>

                    <div data-reveal class="relative min-h-[360px] overflow-hidden rounded-[20px] shadow-lg shadow-[#0F2D52]/10 sm:min-h-[460px] lg:min-h-[500px]">
                        <img src="https://images.unsplash.com/photo-1566847438217-76e82d383f84?auto=format&amp;fit=crop&amp;w=1400&amp;q=90" alt="Kapal untuk mobilisasi crew di perairan" class="h-full w-full object-cover">
                        <span class="absolute left-5 top-5 inline-flex items-center gap-2 rounded-full bg-[#D62828] px-4 py-2 text-xs font-bold tracking-[0.14em] text-white shadow-lg shadow-[#D62828]/25">
                            <i class="bi bi-people-fill" aria-hidden="true"></i>
                            CREW TRANSPORTATION
                        </span>
                        <div class="pointer-events-none absolute inset-x-0 bottom-0 h-1/3 bg-gradient-to-t from-[#0F2D52]/35 to-transparent"></div>
                    </div>
                </div>

                <div class="my-12 h-px bg-gradient-to-r from-transparent via-[#0F2D52]/20 to-transparent sm:my-14"></div>

                <section aria-labelledby="service-benefits-title">
                    <div data-reveal class="mx-auto max-w-2xl text-center">
                        <p class="text-xs font-bold uppercase tracking-[0.2em] text-[#D62828]">Nilai Layanan</p>
                        <h2 id="service-benefits-title" class="mt-3 text-3xl font-extrabold text-[#0F2D52] sm:text-4xl">Keunggulan Layanan</h2>
                        <p class="mt-4 text-base leading-7 text-slate-600">Mobilisasi crew yang aman, nyaman, dan mendukung kelancaran operasional.</p>
                    </div>

                    <div class="mt-9 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
                        @foreach ($serviceBenefits as $benefit)
                            <article data-reveal class="group rounded-[20px] border border-[#E5E7EB] bg-white p-5 shadow-sm shadow-slate-950/5 transition duration-300 hover:-translate-y-1 hover:border-[#0F2D52]/25 hover:shadow-xl hover:shadow-[#0F2D52]/10 sm:p-6">
                                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-[#0F2D52]/8 text-xl text-[#D62828] transition duration-300 group-hover:bg-[#0F2D52] group-hover:text-white">
                                    <i class="{{ $benefit['icon'] }}" aria-hidden="true"></i>
                                </div>
                                <h3 class="mt-5 text-lg font-extrabold text-[#0F2D52]">{{ $benefit['title'] }}</h3>
                                <p class="mt-2 text-sm leading-7 text-slate-600">{{ $benefit['description'] }}</p>
                            </article>
                        @endforeach
                    </div>
                </section>

                <section class="mt-14 border-t border-[#E5E7EB] pt-12 sm:mt-16 sm:pt-14" aria-labelledby="transport-needs-title">
                    <div data-reveal class="mx-auto max-w-2xl text-center">
                        <p class="text-xs font-bold uppercase tracking-[0.2em] text-[#D62828]">Dukungan Operasional</p>
                        <h2 id="transport-needs-title" class="mt-3 text-3xl font-extrabold text-[#0F2D52] sm:text-4xl">Kebutuhan Transportasi Crew</h2>
                    </div>

                    <div class="mt-9 grid gap-4 md:grid-cols-3">
                        @foreach ($transportNeeds as $need)
                            <article data-reveal class="rounded-[20px] border border-[#E5E7EB] bg-[#F8FAFC] p-6">
                                <i class="{{ $need['icon'] }} text-2xl text-[#D62828]" aria-hidden="true"></i>
                                <h3 class="mt-4 text-lg font-extrabold text-[#0F2D52]">{{ $need['title'] }}</h3>
                                <p class="mt-2 text-sm leading-7 text-slate-600">{{ $need['description'] }}</p>
                            </article>
                        @endforeach
                    </div>
                </section>

                <section data-reveal class="mt-14 rounded-[20px] bg-[#0F2D52] px-6 py-9 text-center shadow-lg shadow-[#0F2D52]/15 sm:mt-16 sm:px-10 sm:py-10" aria-labelledby="crew-cta-title">
                    <h2 id="crew-cta-title" class="text-2xl font-extrabold text-white sm:text-3xl">Butuh Layanan Transportasi Crew?</h2>
                    <p class="mx-auto mt-3 max-w-2xl text-sm leading-7 text-slate-200 sm:text-base">Hubungi tim kami untuk mendiskusikan kebutuhan mobilisasi crew dan mendapatkan solusi transportasi yang sesuai dengan kebutuhan operasional Anda.</p>
                    <div class="mt-6">
                        <x-link-button :href="route('contact')">Hubungi Kami <i class="bi bi-arrow-right" aria-hidden="true"></i></x-link-button>
                    </div>
                </section>
            </div>
        </div>
    </section>
@endsection
