@php
    $title = 'Jasa Sewa Tongkang & Barge';
    $serviceHighlights = [
        ['icon' => 'bi bi-check2-circle', 'label' => 'Tugboat siap operasi'],
        ['icon' => 'bi bi-box-seam', 'label' => 'Tongkang berbagai kapasitas'],
        ['icon' => 'bi bi-people', 'label' => 'Crew profesional'],
        ['icon' => 'bi bi-shield-check', 'label' => 'Perawatan berkala'],
    ];
    $serviceBenefits = [
        ['icon' => 'bi bi-anchor', 'title' => 'Armada Siap Operasi', 'description' => 'Armada selalu siap mendukung kebutuhan operasional pelanggan.'],
        ['icon' => 'bi bi-calendar2-check', 'title' => 'Charter Fleksibel', 'description' => 'Penyewaan harian maupun kontrak jangka panjang.'],
        ['icon' => 'bi bi-shield-check', 'title' => 'Aman & Terawat', 'description' => 'Seluruh armada menjalani inspeksi dan perawatan rutin.'],
        ['icon' => 'bi bi-geo-alt', 'title' => 'Jangkauan Nasional', 'description' => 'Melayani berbagai pelabuhan di Indonesia.'],
        ['icon' => 'bi bi-people', 'title' => 'Crew Profesional', 'description' => 'Dioperasikan oleh tenaga yang berpengalaman.'],
        ['icon' => 'bi bi-clock-history', 'title' => 'Tepat Waktu', 'description' => 'Komitmen terhadap jadwal operasional pelanggan.'],
    ];
@endphp

@extends('layouts.app', ['title' => $title . ' | Karya Fortuna Shipping'])

@section('content')
    {{-- Hero layanan sewa tongkang dan barge --}}
    <section class="relative overflow-hidden bg-[#F8FAFC] pb-16 pt-28 sm:pb-20 sm:pt-32" aria-labelledby="barge-rental-title">
        <div class="pointer-events-none absolute inset-x-0 top-0 h-px bg-[#0F2D52]/10"></div>
        <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">
            {{-- Breadcrumb --}}
            <nav data-reveal class="mb-8 flex flex-wrap items-center gap-2 text-sm text-slate-500" aria-label="Breadcrumb">
                <a href="{{ route('home') }}" class="font-medium transition-colors hover:text-[#D62828]">Beranda</a>
                <span aria-hidden="true">/</span>
                <span class="font-medium text-[#0F2D52]" aria-current="page">Jasa Sewa Tongkang &amp; Barge</span>
            </nav>

            {{-- Container utama layanan --}}
            <div class="overflow-hidden rounded-[20px] border border-[#E5E7EB] bg-white p-6 shadow-xl shadow-slate-950/5 sm:p-8 lg:p-10">
                {{-- Bagian 1: deskripsi dan visual layanan --}}
                <div class="grid items-stretch gap-10 lg:grid-cols-[45fr_55fr] lg:gap-12">
                    {{-- Kolom informasi layanan --}}
                    <div data-reveal class="flex flex-col justify-center">
                        <div class="flex items-center gap-3">
                            <span class="h-px w-10 bg-[#0F2D52]/60"></span>
                            <p class="text-xs font-bold uppercase tracking-[0.2em] text-[#D62828]">Layanan</p>
                        </div>
                        <h1 id="barge-rental-title" class="mt-5 text-3xl font-extrabold leading-tight text-[#0F2D52] sm:text-4xl xl:text-5xl">
                            Jasa Sewa Tongkang &amp; Barge
                        </h1>
                        <p class="mt-4 text-lg font-semibold text-[#D62828]">Solusi Charter Armada Laut Profesional</p>

                        <div class="mt-6 space-y-4 text-base leading-8 text-slate-600">
                            <p>
                                Karya Fortuna Shipping menyediakan layanan penyewaan tugboat dan barge untuk mendukung pengangkutan batu bara maupun cargo curah lainnya. Kami menghadirkan solusi charter yang disesuaikan dengan kebutuhan rute, volume muatan, dan rencana operasional pelanggan.
                            </p>
                            <p>
                                Dengan armada yang terawat, crew berpengalaman, serta koordinasi yang mengutamakan keselamatan dan ketepatan waktu, kami siap menjadi mitra operasional laut yang andal untuk kebutuhan jangka pendek maupun kontrak berkelanjutan.
                            </p>
                        </div>

                        {{-- Keunggulan ringkas layanan --}}
                        <div class="mt-7 grid gap-3 sm:grid-cols-2">
                            @foreach ($serviceHighlights as $highlight)
                                <div class="flex items-center gap-3 rounded-xl border border-[#E5E7EB] bg-[#F8FAFC] px-4 py-3 text-sm font-semibold text-[#0F2D52]">
                                    <i class="{{ $highlight['icon'] }} text-base text-[#D62828]" aria-hidden="true"></i>
                                    <span>{{ $highlight['label'] }}</span>
                                </div>
                            @endforeach
                        </div>

                        <div class="mt-8">
                            <x-link-button :href="route('contact')">Hubungi Kami</x-link-button>
                        </div>
                    </div>

                    {{-- Kolom foto layanan --}}
                    <div data-reveal class="relative min-h-[360px] overflow-hidden rounded-[20px] shadow-lg shadow-[#0F2D52]/10 sm:min-h-[460px] lg:min-h-[540px]">
                        <img
                            src="https://images.unsplash.com/photo-1577717903315-1691ae25ab3f?auto=format&amp;fit=crop&amp;w=1400&amp;q=90"
                            alt="Tugboat dan kapal pendukung operasional di perairan"
                            class="h-full w-full object-cover"
                        >
                        <span class="absolute left-5 top-5 inline-flex items-center gap-2 rounded-full bg-[#D62828] px-4 py-2 text-xs font-bold tracking-[0.14em] text-white shadow-lg shadow-[#D62828]/25">
                            <i class="bi bi-check-circle-fill" aria-hidden="true"></i>
                            READY CHARTER
                        </span>
                        <div class="pointer-events-none absolute inset-x-0 bottom-0 h-1/3 bg-gradient-to-t from-[#0F2D52]/35 to-transparent"></div>
                    </div>
                </div>

                {{-- Pemisah antar bagian --}}
                <div class="my-12 h-px bg-gradient-to-r from-transparent via-[#0F2D52]/20 to-transparent sm:my-14"></div>

                {{-- Bagian 2: grid keunggulan layanan --}}
                <div>
                    <div data-reveal class="mx-auto max-w-2xl text-center">
                        <p class="text-xs font-bold uppercase tracking-[0.2em] text-[#D62828]">Nilai Layanan</p>
                        <h2 class="mt-3 text-3xl font-extrabold text-[#0F2D52] sm:text-4xl">Keunggulan Layanan</h2>
                        <p class="mt-4 text-base leading-7 text-slate-600">Dukungan charter yang dirancang untuk menjaga kelancaran dan kepastian operasional laut Anda.</p>
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
                </div>
            </div>
        </div>
    </section>
@endsection
