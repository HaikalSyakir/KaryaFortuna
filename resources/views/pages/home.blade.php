@php
    $title = 'Beranda | Karya Fortuna Shipping';
    $description = 'Karya Fortuna Shipping menghadirkan solusi maritim Indonesia melalui transportasi laut, jasa kepelabuhanan, perawatan kapal, dan layanan profesional.';
    $shipSlides = [
        [
            'src' => 'https://images.unsplash.com/photo-1605281317010-fe5ffe798166?auto=format&fit=crop&w=1200&q=85',
            'alt' => 'Kapal niaga melintas di perairan terbuka',
        ],
        [
            'src' => 'https://images.unsplash.com/photo-1569263979104-865ab7cd8d13?auto=format&fit=crop&w=1200&q=85',
            'alt' => 'Kapal kargo bersandar di area pelabuhan',
        ],
        [
            'src' => 'https://images.unsplash.com/photo-1494412519320-aa613dfb7738?auto=format&fit=crop&w=1200&q=85',
            'alt' => 'Operasional kapal di kawasan pelabuhan modern',
        ],
    ];
@endphp

@extends('layouts.app', ['title' => $title, 'description' => $description])

@section('content')
    <section class="flex min-h-screen items-center bg-white pt-24">
        <div class="mx-auto grid w-full max-w-7xl items-center gap-12 px-5 pb-16 pt-8 sm:px-6 lg:grid-cols-[1fr_0.86fr] lg:gap-16 lg:px-8 lg:pb-20 lg:pt-12">
            <div data-hero-text class="max-w-3xl">
                <span class="inline-flex rounded-full border border-red-100 bg-red-50 px-4 py-2 text-xs font-bold uppercase tracking-[0.18em] text-red-700">
                    Karya Fortuna Shipping
                </span>

                <h1 class="mt-7 text-4xl font-extrabold leading-tight text-neutral-950 sm:text-5xl lg:text-6xl">
                    Mitra Terpercaya dalam Solusi Maritim Indonesia
                </h1>

                <p class="mt-6 max-w-2xl text-base leading-8 text-neutral-600 sm:text-lg">
                    Kami menghadirkan layanan transportasi laut, jasa kepelabuhanan, perawatan kapal, dan solusi maritim profesional dengan mengutamakan keselamatan, kualitas, dan kepercayaan.
                </p>

                <div class="mt-9 flex flex-col gap-3 sm:flex-row">
                    <x-link-button :href="route('about.profile')">
                        Tentang Kami
                    </x-link-button>
                    <x-link-button :href="route('contact')" variant="secondary">
                        Hubungi Kami
                    </x-link-button>
                </div>
            </div>

            <div data-carousel-shell class="w-full">
                <x-hero-carousel :slides="$shipSlides" />
            </div>
        </div>
    </section>

    <section class="bg-neutral-50 py-20 sm:py-24">
        <div data-page-shell class="mx-auto max-w-4xl px-5 sm:px-6 lg:px-8">
            <p class="text-sm font-bold uppercase tracking-[0.18em] text-red-700">Tentang Singkat</p>
            <h2 class="mt-4 text-3xl font-extrabold text-neutral-950 sm:text-4xl">
                Tentang Karya Fortuna Shipping
            </h2>

            <div class="mt-7 space-y-5 text-base leading-8 text-neutral-600 sm:text-lg">
                <p>
                    Karya Fortuna Shipping bergerak dalam layanan maritim yang mendukung kebutuhan bisnis, pelabuhan, dan operasional kapal di Indonesia.
                </p>
                <p>
                    Dengan pendekatan profesional dan berorientasi pada keselamatan, kami membangun layanan yang dapat diandalkan untuk kemitraan jangka panjang.
                </p>
            </div>

            <div class="mt-9">
                <x-link-button :href="route('about.profile')" variant="secondary">
                    Selengkapnya
                </x-link-button>
            </div>
        </div>
    </section>

    <section class="bg-red-800 py-18 text-white sm:py-20">
        <div data-cta-section class="mx-auto flex max-w-7xl flex-col items-start justify-between gap-8 px-5 sm:px-6 lg:flex-row lg:items-center lg:px-8">
            <div class="max-w-2xl">
                <h2 class="text-3xl font-extrabold sm:text-4xl">Siap Menjadi Mitra Bisnis Anda</h2>
                <p class="mt-4 text-base leading-8 text-red-50/90 sm:text-lg">
                    Diskusikan kebutuhan maritim Anda bersama tim kami untuk mendapatkan solusi yang tepat, aman, dan profesional.
                </p>
            </div>

            <x-link-button :href="route('contact')" variant="light">
                Hubungi Kami
            </x-link-button>
        </div>
    </section>
@endsection
