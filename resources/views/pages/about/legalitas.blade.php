@php
    $title = 'Legalitas & Sertifikasi | Karya Fortuna Shipping';
    $description = 'Lihat legalitas dan sertifikasi Karya Fortuna Shipping sebagai bagian dari komitmen terhadap profesionalisme dan kredibilitas perusahaan.';
    $heroImage = asset('images/hero/gambar2.jpg');

    $certificates = [
        [
            'title' => 'Akta Pendirian Perusahaan',
            'category' => 'Legalitas',
            'category_label' => 'Legalitas Perusahaan',
            'description' => 'Dokumen legalitas pendirian perusahaan.',
            'image' => asset('images/legalitas/certificate-placeholder.svg'),
            'full_image' => asset('images/legalitas/certificate-placeholder.svg'),
            'alt' => 'Placeholder pratinjau Akta Pendirian Perusahaan',
        ],
        [
            'title' => 'Nomor Induk Berusaha (NIB)',
            'category' => 'Legalitas',
            'category_label' => 'Legalitas Perusahaan',
            'description' => 'Dokumen perizinan berusaha perusahaan.',
            'image' => asset('images/legalitas/certificate-placeholder.svg'),
            'full_image' => asset('images/legalitas/certificate-placeholder.svg'),
            'alt' => 'Placeholder pratinjau Nomor Induk Berusaha',
        ],
        [
            'title' => 'Sertifikat / Dokumen Perizinan Pelayaran',
            'category' => 'Perizinan',
            'category_label' => 'Perizinan',
            'description' => 'Dokumen pendukung kegiatan usaha di bidang pelayaran.',
            'image' => asset('images/legalitas/certificate-placeholder.svg'),
            'full_image' => asset('images/legalitas/certificate-placeholder.svg'),
            'alt' => 'Placeholder pratinjau dokumen perizinan pelayaran',
        ],
        [
            'title' => 'Sertifikasi Keselamatan',
            'category' => 'Sertifikasi',
            'category_label' => 'Sertifikasi',
            'description' => 'Dokumen sertifikasi yang berkaitan dengan standar keselamatan.',
            'image' => asset('images/legalitas/certificate-placeholder.svg'),
            'full_image' => asset('images/legalitas/certificate-placeholder.svg'),
            'alt' => 'Placeholder pratinjau Sertifikasi Keselamatan',
        ],
        [
            'title' => 'Sertifikasi Operasional',
            'category' => 'Sertifikasi',
            'category_label' => 'Sertifikasi',
            'description' => 'Dokumen sertifikasi pendukung kegiatan operasional perusahaan.',
            'image' => asset('images/legalitas/certificate-placeholder.svg'),
            'full_image' => asset('images/legalitas/certificate-placeholder.svg'),
            'alt' => 'Placeholder pratinjau Sertifikasi Operasional',
        ],
    ];

    $filters = ['Semua', 'Legalitas', 'Perizinan', 'Sertifikasi'];
@endphp

@extends('layouts.app', ['title' => $title, 'description' => $description])

@section('content')
    <x-page-hero
        id="legality-hero-title"
        eyebrow="Trust & Compliance"
        :title="'Legalitas & Sertifikasi'"
        variant="formal"
        description="Dokumen legalitas dan sertifikasi yang mendukung profesionalisme serta kredibilitas Karya Fortuna Shipping."
        :background="$heroImage"
        alt="Kapal dan aktivitas maritim Karya Fortuna Shipping"
    />

    <div
        x-data="{
            filter: 'Semua',
            certificates: @js($certificates),
            activeIndex: 0,
            modalOpen: false,
            zoom: 1,
            get activeCertificate() {
                return this.certificates[this.activeIndex] || this.certificates[0];
            },
            openCertificate(index) {
                this.activeIndex = index;
                this.zoom = 1;
                this.modalOpen = true;
                document.body.classList.add('overflow-hidden');
                this.$nextTick(() => this.$refs.closeButton?.focus());
            },
            closeModal() {
                this.modalOpen = false;
                this.zoom = 1;
                document.body.classList.remove('overflow-hidden');
            },
            nextCertificate() {
                this.activeIndex = (this.activeIndex + 1) % this.certificates.length;
                this.zoom = 1;
            },
            previousCertificate() {
                this.activeIndex = (this.activeIndex - 1 + this.certificates.length) % this.certificates.length;
                this.zoom = 1;
            },
            setZoom(value) {
                this.zoom = Math.min(1.8, Math.max(1, value));
            }
        }"
        x-on:keydown.window.escape="modalOpen && closeModal()"
    >
        <section class="relative overflow-hidden bg-white py-16 sm:py-20">
            <div class="pointer-events-none absolute right-0 top-16 hidden h-px w-1/3 bg-gradient-to-l from-[#0F2D52]/16 to-transparent lg:block"></div>
            <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">
                <div data-reveal class="max-w-3xl">
                    <x-section-heading
                        eyebrow="Legalitas & Sertifikasi"
                        title="Komitmen terhadap Profesionalisme"
                        description="Sebagai bagian dari komitmen terhadap profesionalisme dan tata kelola perusahaan, Karya Fortuna Shipping didukung oleh dokumen legalitas dan sertifikasi yang relevan dengan kegiatan usaha."
                    />
                </div>
            </div>
        </section>

        <section class="relative overflow-hidden bg-[#F4F7FB] py-16 sm:py-20" aria-labelledby="certificate-grid-title">
            <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">
                <div data-reveal class="flex flex-col gap-6 md:flex-row md:items-end md:justify-between">
                    <div class="max-w-2xl">
                        <p class="text-xs font-bold uppercase tracking-[0.18em] text-[#C62828]">Dokumen Perusahaan</p>
                        <h2 id="certificate-grid-title" class="mt-3 text-3xl font-extrabold text-[#081F3A] sm:text-4xl">
                            Daftar Legalitas &amp; Sertifikasi
                        </h2>
                        <p class="mt-4 text-sm leading-7 text-slate-600 sm:text-base">
                            Data berikut merupakan dummy yang disiapkan agar mudah diganti dengan dokumen final melalui pengembangan admin Filament.
                        </p>
                    </div>

                    <div class="flex flex-wrap gap-2" role="tablist" aria-label="Filter kategori sertifikat">
                        @foreach ($filters as $filter)
                            <button
                                type="button"
                                x-on:click="filter = @js($filter)"
                                x-bind:class="filter === @js($filter) ? 'bg-[#0F2D52] text-white shadow-lg shadow-[#0F2D52]/16 ring-[#0F2D52]' : 'bg-white text-[#0F2D52] ring-[#0F2D52]/12 hover:text-[#C62828] hover:ring-[#C62828]/30'"
                                class="rounded-md px-4 py-2 text-sm font-bold ring-1 transition duration-200 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#C62828]"
                                role="tab"
                                x-bind:aria-selected="(filter === @js($filter)).toString()"
                            >
                                {{ $filter }}
                            </button>
                        @endforeach
                    </div>
                </div>

                <div class="mt-10 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach ($certificates as $index => $certificate)
                        <div
                            data-reveal
                            x-show="filter === 'Semua' || filter === @js($certificate['category'])"
                            x-transition.opacity.duration.200ms
                        >
                            <x-certificate-card :certificate="$certificate" :index="$index" />
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="relative overflow-hidden bg-[#081F3A] py-16 text-white sm:py-20" aria-labelledby="legality-cta-title">
            <div class="pointer-events-none absolute inset-x-0 top-0 h-px bg-white/15"></div>
            <div data-reveal class="mx-auto flex max-w-7xl flex-col items-start justify-between gap-8 px-5 sm:px-6 lg:flex-row lg:items-center lg:px-8">
                <div class="max-w-2xl">
                    <p class="text-xs font-bold uppercase tracking-[0.18em] text-red-100">Hubungi Kami</p>
                    <h2 id="legality-cta-title" class="mt-3 text-3xl font-extrabold text-white sm:text-4xl">Butuh Informasi Lebih Lanjut?</h2>
                    <p class="mt-4 text-base leading-8 text-slate-200">
                        Hubungi Karya Fortuna Shipping untuk informasi perusahaan dan kerja sama maritim.
                    </p>
                </div>

                <x-link-button :href="route('contact')">
                    Hubungi Kami
                </x-link-button>
            </div>
        </section>

        <div
            x-cloak
            x-show="modalOpen"
            x-transition.opacity.duration.200ms
            class="fixed inset-0 z-[80] flex items-center justify-center bg-[#020B16]/88 px-4 py-6 backdrop-blur-sm sm:px-6"
            role="dialog"
            aria-modal="true"
            aria-label="Pratinjau sertifikat"
            x-on:click.self="closeModal()"
        >
            <div
                x-show="modalOpen"
                x-transition:enter="transition duration-200 ease-out"
                x-transition:enter-start="opacity-0 scale-95"
                x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition duration-150 ease-in"
                x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-95"
                class="relative flex max-h-[92vh] w-full max-w-6xl flex-col overflow-hidden rounded-lg border border-white/12 bg-white shadow-2xl shadow-black/40"
            >
                <div class="flex items-center justify-between gap-4 border-b border-slate-200 px-4 py-3 sm:px-5">
                    <div class="min-w-0">
                        <p class="truncate text-xs font-bold uppercase tracking-[0.16em] text-[#C62828]" x-text="activeCertificate.category_label"></p>
                        <h2 class="truncate text-base font-extrabold text-[#081F3A] sm:text-lg" x-text="activeCertificate.title"></h2>
                    </div>

                    <div class="flex shrink-0 items-center gap-2">
                        <button
                            type="button"
                            x-on:click="setZoom(zoom - 0.2)"
                            class="hidden size-9 items-center justify-center rounded-md border border-slate-200 text-[#0F2D52] transition hover:bg-slate-50 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#C62828] sm:inline-flex"
                            aria-label="Perkecil sertifikat"
                        >
                            <svg class="size-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14" />
                            </svg>
                        </button>
                        <button
                            type="button"
                            x-on:click="setZoom(zoom + 0.2)"
                            class="hidden size-9 items-center justify-center rounded-md border border-slate-200 text-[#0F2D52] transition hover:bg-slate-50 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#C62828] sm:inline-flex"
                            aria-label="Perbesar sertifikat"
                        >
                            <svg class="size-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 5v14m7-7H5" />
                            </svg>
                        </button>
                        <button
                            type="button"
                            x-ref="closeButton"
                            x-on:click="closeModal()"
                            class="inline-flex size-9 items-center justify-center rounded-md bg-[#081F3A] text-white transition hover:bg-[#0F2D52] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#C62828]"
                            aria-label="Tutup modal sertifikat"
                        >
                            <svg class="size-5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="relative flex min-h-0 flex-1 items-center justify-center overflow-auto bg-[#EEF3F8] p-4 sm:p-6">
                    <button
                        type="button"
                        x-on:click="previousCertificate()"
                        class="absolute left-3 top-1/2 z-10 inline-flex size-10 -translate-y-1/2 items-center justify-center rounded-full bg-[#081F3A]/88 text-white shadow-lg shadow-black/20 transition hover:bg-[#C62828] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white sm:left-5"
                        aria-label="Lihat sertifikat sebelumnya"
                    >
                        <svg class="size-5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                        </svg>
                    </button>

                    <div class="flex h-full w-full items-center justify-center overflow-auto px-8 sm:px-14">
                        <img
                            x-bind:src="modalOpen ? activeCertificate.full_image : ''"
                            x-bind:alt="activeCertificate.alt"
                            x-on:click="setZoom(zoom === 1 ? 1.4 : 1)"
                            x-bind:style="`transform: scale(${zoom});`"
                            class="max-h-[68vh] max-w-full cursor-zoom-in rounded-md object-contain shadow-xl shadow-slate-950/14 transition-transform duration-200"
                        >
                    </div>

                    <button
                        type="button"
                        x-on:click="nextCertificate()"
                        class="absolute right-3 top-1/2 z-10 inline-flex size-10 -translate-y-1/2 items-center justify-center rounded-full bg-[#081F3A]/88 text-white shadow-lg shadow-black/20 transition hover:bg-[#C62828] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white sm:right-5"
                        aria-label="Lihat sertifikat berikutnya"
                    >
                        <svg class="size-5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                        </svg>
                    </button>
                </div>

                <div class="border-t border-slate-200 bg-white px-4 py-3 text-center sm:px-5">
                    <p class="text-sm font-bold text-[#081F3A]" x-text="activeCertificate.title"></p>
                    <p class="mt-1 text-xs leading-6 text-slate-500">Pratinjau dummy. Ganti path gambar saat dokumen final tersedia.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
