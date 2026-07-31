@php
    $title = 'Beranda | Karya Fortuna Shipping';
    $description = 'Karya Fortuna Shipping menghadirkan solusi maritim Indonesia melalui transportasi laut, jasa kepelabuhanan, perawatan kapal, dokumentasi, dan layanan armada profesional.';

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

    $clients = ['Port Operations', 'Mining Logistics', 'Marine Contractors', 'Industrial Cargo', 'Crew Transport'];

    $services = [
        [
            'number' => '01',
            'title' => 'Transportasi Cargo Curah',
            'description' => 'Pengangkutan kargo curah dengan perencanaan rute, koordinasi pelabuhan, dan monitoring operasional yang terukur.',
            'href' => route('services.bulk-cargo-transport'),
        ],
        [
            'number' => '02',
            'title' => 'Sewa Tongkang & Barge',
            'description' => 'Dukungan armada tongkang untuk kebutuhan distribusi material, proyek, dan pengiriman antar wilayah perairan.',
            'href' => route('services.barge-rental'),
        ],
        [
            'number' => '03',
            'title' => 'Transportasi Crew',
            'description' => 'Mobilisasi crew dan personel operasional secara aman, tepat waktu, dan sesuai standar industri maritim.',
            'href' => route('services.crew-transport'),
        ],
        [
            'number' => '04',
            'title' => 'Perawatan & Perbaikan Kapal',
            'description' => 'Layanan maintenance untuk menjaga kesiapan, performa, dan kelayakan armada dalam kegiatan operasional.',
            'href' => route('services.ship-maintenance-repair'),
        ],
        [
            'number' => '05',
            'title' => 'Dokumentasi & Perizinan Kapal',
            'description' => 'Pendampingan administrasi dokumen kapal dan perizinan agar kegiatan pelayaran berjalan lebih tertib.',
            'href' => route('services.ship-documentation-permits'),
        ],
        [
            'number' => '06',
            'title' => 'Solusi Tugboat & Barge',
            'description' => 'Konfigurasi armada tugboat dan barge untuk mendukung kebutuhan towing, hauling, dan pekerjaan maritim lainnya.',
            'href' => route('fleets.tugboat-barge'),
        ],
    ];

    $fleets = [
        [
            'title' => 'Tugboat & Barge',
            'description' => 'Armada pendukung untuk pengangkutan, towing, dan kebutuhan logistik laut dengan kapasitas kerja yang fleksibel.',
            'image' => 'https://images.unsplash.com/photo-1577717903315-1691ae25ab3f?auto=format&fit=crop&w=1000&q=85',
            'alt' => 'Tugboat membantu operasional kapal di pelabuhan',
            'specs' => ['Fungsi' => 'Towing', 'Area' => 'Indonesia', 'Support' => '24/7'],
            'href' => route('fleets.tugboat-barge'),
        ],
        [
            'title' => 'Seatruck Crew Transport',
            'description' => 'Unit transportasi crew untuk mobilisasi personel menuju area kerja, pelabuhan, dan titik operasional maritim.',
            'image' => 'https://images.unsplash.com/photo-1515238152791-8216bfdf89a7?auto=format&fit=crop&w=1000&q=85',
            'alt' => 'Kapal cepat untuk transportasi personel laut',
            'specs' => ['Fungsi' => 'Crew', 'Prioritas' => 'Safety', 'Status' => 'Ready'],
            'href' => route('fleets.seatruck'),
        ],
    ];

    $advantages = [
        'Standar kerja profesional dengan prioritas pada keselamatan dan kepatuhan operasional.',
        'Koordinasi end-to-end dari kebutuhan armada, dokumen, pelabuhan, hingga jadwal pengiriman.',
        'Tim maritim yang responsif untuk mendukung keputusan cepat di lapangan.',
        'Pendekatan kemitraan jangka panjang dengan komunikasi yang transparan.',
    ];

    $solutions = [
        'Marine Transportation',
        'Fleet Readiness',
        'Port Coordination',
        'Permit & Documentation',
    ];
@endphp

@extends('layouts.app', ['title' => $title, 'description' => $description])

@section('content')
    <section class="relative overflow-hidden bg-white pt-24">
        <div class="absolute right-0 top-0 hidden h-full w-[38%] bg-[#F8FAFC] lg:block"></div>
        <div class="relative mx-auto grid min-h-[calc(100vh-6rem)] w-full max-w-7xl items-center gap-12 px-5 pb-16 pt-8 sm:px-6 lg:grid-cols-[1fr_0.88fr] lg:gap-16 lg:px-8 lg:pb-20 lg:pt-12">
            <div data-hero-text class="max-w-3xl">
                <span class="inline-flex rounded-md border border-red-100 bg-red-50 px-4 py-2 text-xs font-bold uppercase tracking-[0.18em] text-[#C62828]">
                    Karya Fortuna Shipping
                </span>

                <h1 class="mt-7 text-4xl font-extrabold leading-tight text-[#111827] sm:text-5xl lg:text-6xl">
                    Mitra Terpercaya dalam Solusi Maritim Indonesia
                </h1>

                <p class="mt-6 max-w-2xl text-base leading-8 text-slate-600 sm:text-lg">
                    Kami mendukung kebutuhan transportasi laut, armada, kepelabuhanan, dan dokumentasi kapal melalui layanan yang profesional, aman, dan tepat sasaran.
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

    <section class="bg-[#F8FAFC] py-12" aria-labelledby="trusted-clients-title">
        <div data-reveal class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">
            <div class="flex flex-col gap-6 lg:flex-row lg:items-center lg:justify-between">
                <div>
                    <p id="trusted-clients-title" class="text-xs font-bold uppercase tracking-[0.18em] text-[#C62828]">Client Terpercaya</p>
                    <p class="mt-2 max-w-xl text-sm leading-7 text-slate-600">Dipercaya untuk mendukung kebutuhan operasional maritim, logistik, dan transportasi laut.</p>
                </div>

                <div class="grid flex-1 grid-cols-2 gap-3 sm:grid-cols-3 lg:grid-cols-5">
                    @foreach ($clients as $client)
                        <div class="rounded-md border border-slate-200 bg-white px-4 py-4 text-center text-xs font-bold uppercase tracking-[0.12em] text-[#0F2D52] shadow-sm shadow-slate-950/5">
                            {{ $client }}
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white py-20 sm:py-24">
        <div class="mx-auto grid max-w-7xl gap-12 px-5 sm:px-6 lg:grid-cols-[0.85fr_1fr] lg:px-8">
            <div data-reveal>
                <x-section-heading
                    eyebrow="Tentang Kami"
                    title="Perusahaan maritim yang dibangun untuk keandalan operasional."
                    description="Karya Fortuna Shipping bergerak dalam layanan pelayaran dan jasa maritim yang mendukung kebutuhan bisnis, pelabuhan, dan operasional kapal di Indonesia."
                />
            </div>

            <div data-reveal class="space-y-6 text-base leading-8 text-slate-600">
                <p>
                    Kami memahami bahwa setiap pekerjaan laut membutuhkan kesiapan armada, koordinasi lapangan, dokumen yang tertib, dan komunikasi yang jelas. Karena itu, layanan kami dirancang untuk membantu klien bekerja lebih efisien dari tahap perencanaan hingga eksekusi.
                </p>
                <p>
                    Dengan karakter profesional, modern, dan berorientasi keselamatan, Karya Fortuna Shipping hadir sebagai mitra yang dapat diandalkan untuk kebutuhan maritim jangka panjang.
                </p>
                <x-link-button :href="route('about.profile')" variant="secondary" class="mt-2">
                    Profil Perusahaan
                </x-link-button>
            </div>
        </div>
    </section>

    <section class="bg-[#F8FAFC] py-20 sm:py-24">
        <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">
            <div data-reveal class="flex flex-col gap-6 lg:flex-row lg:items-end lg:justify-between">
                <x-section-heading
                    eyebrow="Layanan Kami"
                    title="Solusi maritim untuk kebutuhan operasional yang kompleks."
                    description="Layanan disusun modular agar dapat menyesuaikan kebutuhan pengiriman, armada, crew, maintenance, dan perizinan."
                />
                <x-link-button :href="route('services.bulk-cargo-transport')" variant="secondary">
                    Semua Layanan
                </x-link-button>
            </div>

            <div class="mt-12 grid gap-5 md:grid-cols-2 xl:grid-cols-3">
                @foreach ($services as $service)
                    <div data-reveal>
                        <x-service-card
                            :number="$service['number']"
                            :title="$service['title']"
                            :description="$service['description']"
                            :href="$service['href']"
                        />
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="bg-white py-20 sm:py-24">
        <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">
            <div data-reveal>
                <x-section-heading
                    eyebrow="Armada / Fleet"
                    title="Armada pendukung untuk pekerjaan laut yang menuntut presisi."
                    description="Ketersediaan armada menjadi bagian penting dalam menjaga kelancaran kegiatan transportasi, towing, dan mobilisasi personel."
                />
            </div>

            <div class="mt-12 grid gap-6 lg:grid-cols-2">
                @foreach ($fleets as $fleet)
                    <div data-reveal>
                        <x-fleet-card
                            :title="$fleet['title']"
                            :description="$fleet['description']"
                            :image="$fleet['image']"
                            :alt="$fleet['alt']"
                            :specs="$fleet['specs']"
                            :href="$fleet['href']"
                        />
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="bg-[#F8FAFC] py-20 sm:py-24">
        <div class="mx-auto grid max-w-7xl gap-12 px-5 sm:px-6 lg:grid-cols-[0.9fr_1fr] lg:px-8">
            <div data-reveal>
                <x-section-heading
                    eyebrow="Mengapa Memilih Kami"
                    title="Fokus pada safety, reliability, dan kemitraan yang jelas."
                    description="Kami menempatkan kebutuhan klien sebagai pusat perencanaan agar setiap pekerjaan memiliki alur yang rapi dan dapat dipantau."
                />
            </div>

            <div class="grid gap-4 sm:grid-cols-2">
                @foreach ($advantages as $advantage)
                    <div data-reveal class="rounded-lg border border-slate-200 bg-white p-6 shadow-sm shadow-slate-950/5">
                        <span class="block h-1 w-12 rounded-full bg-[#C62828]"></span>
                        <p class="mt-5 text-sm leading-7 text-slate-700">{{ $advantage }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="bg-[#081F3A] py-20 text-white sm:py-24">
        <div class="mx-auto grid max-w-7xl gap-12 px-5 sm:px-6 lg:grid-cols-[0.95fr_1fr] lg:px-8">
            <div data-reveal>
                <x-section-heading
                    eyebrow="Integrated Solutions"
                    title="Satu koordinasi untuk kebutuhan maritim end-to-end."
                    description="Karya Fortuna Shipping mengintegrasikan transportasi laut, kesiapan armada, koordinasi pelabuhan, serta dokumen operasional dalam satu pendekatan kerja."
                    inverted
                />
            </div>

            <div data-reveal class="grid gap-4 sm:grid-cols-2">
                @foreach ($solutions as $solution)
                    <div class="rounded-lg border border-white/10 bg-white/7 p-6 backdrop-blur-sm">
                        <p class="text-lg font-extrabold">{{ $solution }}</p>
                        <span class="mt-5 block h-px w-full bg-white/15"></span>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="bg-white py-20 sm:py-24">
        <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">
            <div data-reveal>
                <x-section-heading
                    eyebrow="Track Record"
                    title="Dibangun untuk performa yang konsisten."
                    description="Indikator berikut menggambarkan fokus kami pada kesiapan layanan, respons operasional, dan cakupan dukungan maritim."
                    align="center"
                />
            </div>

            <div class="mt-12 grid gap-5 sm:grid-cols-2 lg:grid-cols-4">
                <div data-reveal>
                    <x-stat-card value="12" suffix="+" label="Tahun" description="Pengalaman tim dalam operasional maritim dan pelayaran." />
                </div>
                <div data-reveal>
                    <x-stat-card value="50" suffix="+" label="Project" description="Dukungan pekerjaan transportasi, armada, dan logistik laut." />
                </div>
                <div data-reveal>
                    <x-stat-card value="24" suffix="/7" label="Support" description="Koordinasi operasional untuk kebutuhan lapangan yang dinamis." />
                </div>
                <div data-reveal>
                    <x-stat-card value="100" suffix="%" label="Commitment" description="Komitmen terhadap keselamatan, kualitas, dan transparansi kerja." />
                </div>
            </div>
        </div>
    </section>

    <section class="bg-[#F8FAFC] py-20 sm:py-24">
        <div class="mx-auto grid max-w-7xl gap-10 px-5 sm:px-6 lg:grid-cols-[0.9fr_1.1fr] lg:px-8">
            <div data-reveal>
                <x-section-heading
                    eyebrow="Lokasi"
                    title="Terhubung dengan pusat kegiatan maritim Indonesia."
                    description="Berbasis di Indonesia, kami mendukung kebutuhan klien melalui koordinasi yang dekat dengan area pelabuhan, proyek, dan rute pelayaran."
                />

                <div class="mt-8 rounded-lg border border-slate-200 bg-white p-6 text-sm leading-7 text-slate-600 shadow-sm shadow-slate-950/5">
                    <p class="font-bold text-[#111827]">Karya Fortuna Shipping</p>
                    <p class="mt-2">Jakarta, Indonesia</p>
                    <p>info@karyafortunashipping.co.id</p>
                    <p>+62 21 1234 5678</p>
                </div>
            </div>

            <div data-reveal class="min-h-80 overflow-hidden rounded-lg border border-slate-200 bg-white shadow-sm shadow-slate-950/5">
                <div class="flex h-full min-h-80 items-center justify-center bg-[linear-gradient(135deg,#FFFFFF_0%,#F8FAFC_48%,#E2E8F0_100%)] p-8">
                    <div class="w-full max-w-md">
                        <div class="rounded-lg border border-[#0F2D52]/15 bg-white/85 p-6 shadow-xl shadow-slate-950/8 backdrop-blur-sm">
                            <p class="text-xs font-bold uppercase tracking-[0.18em] text-[#C62828]">Indonesia Maritime Network</p>
                            <div class="mt-6 space-y-4">
                                <div class="h-2 w-3/4 rounded-full bg-[#0F2D52]"></div>
                                <div class="h-2 w-full rounded-full bg-slate-200"></div>
                                <div class="h-2 w-2/3 rounded-full bg-slate-200"></div>
                            </div>
                            <div class="mt-8 grid grid-cols-3 gap-3">
                                <span class="h-16 rounded-md bg-[#0F2D52]/10"></span>
                                <span class="h-16 rounded-md bg-[#C62828]/10"></span>
                                <span class="h-16 rounded-md bg-[#0F2D52]/10"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white py-16 sm:py-20">
        <div data-reveal class="mx-auto flex max-w-7xl flex-col items-start justify-between gap-8 px-5 sm:px-6 lg:flex-row lg:items-center lg:px-8">
            <div class="max-w-2xl">
                <p class="text-xs font-bold uppercase tracking-[0.18em] text-[#C62828]">Hubungi Kami</p>
                <h2 class="mt-3 text-3xl font-extrabold text-[#111827] sm:text-4xl">Siap mendukung kebutuhan maritim Anda.</h2>
                <p class="mt-4 text-base leading-8 text-slate-600">
                    Diskusikan kebutuhan transportasi laut, armada, crew, maintenance, atau dokumen kapal bersama tim kami.
                </p>
            </div>

            <x-link-button :href="route('contact')">
                Hubungi Kami
            </x-link-button>
        </div>
    </section>
@endsection
