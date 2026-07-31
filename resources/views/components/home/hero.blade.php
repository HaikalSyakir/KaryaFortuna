@props([
    'videoSrc' => asset('videos/kfs-hero-shipping.mp4'),
    'fallbackImage' => 'https://images.unsplash.com/photo-1605281317010-fe5ffe798166?auto=format&fit=crop&w=1800&q=86',
])

<section
    class="relative isolate min-h-screen overflow-hidden bg-[#081F3A] text-white"
    aria-labelledby="home-hero-title"
>
    <div
        class="absolute inset-0 -z-20"
        x-data="{ videoFailed: false }"
    >
        <img
            src="{{ $fallbackImage }}"
            alt=""
            class="absolute inset-0 h-full w-full object-cover"
            loading="eager"
            fetchpriority="high"
            aria-hidden="true"
        >

        <video
            x-show="! videoFailed"
            x-on:error="videoFailed = true"
            class="absolute inset-0 h-full w-full object-cover"
            autoplay
            muted
            loop
            playsinline
            preload="metadata"
            poster="{{ $fallbackImage }}"
            aria-hidden="true"
        >
            <source src="{{ $videoSrc }}" type="video/mp4">
        </video>
    </div>

    <div class="absolute inset-0 -z-10 bg-[#081F3A]/60"></div>
    <div class="absolute inset-0 -z-10 bg-[linear-gradient(90deg,rgba(8,31,58,0.96)_0%,rgba(8,31,58,0.72)_44%,rgba(8,31,58,0.46)_100%)]"></div>

    <div class="mx-auto grid min-h-screen w-full max-w-7xl items-center gap-10 px-5 pb-20 pt-28 sm:px-6 sm:pt-32 md:gap-12 lg:grid-cols-[0.95fr_1.05fr] lg:gap-16 lg:px-8 lg:pb-24 lg:pt-28">
        <div class="max-w-3xl">
            <span
                data-home-hero-badge
                class="inline-flex rounded-full border border-white/20 bg-white/10 px-4 py-2 text-xs font-bold uppercase tracking-[0.18em] text-white shadow-lg shadow-slate-950/10 backdrop-blur-md"
            >
                Karya Fortuna Shipping
            </span>

            <h1
                id="home-hero-title"
                data-home-hero-heading
                class="mt-7 max-w-4xl text-4xl font-extrabold uppercase leading-[0.9] tracking-tight text-white sm:text-6xl lg:text-7xl xl:text-8xl"
            >
                Beyond
                <span class="block text-white">Maritime</span>
                <span class="block text-white">Solutions.</span>
            </h1>

            <p
                data-home-hero-description
                class="mt-7 max-w-2xl text-base leading-8 text-white/82 sm:text-lg"
            >
                Karya Fortuna Shipping menghadirkan layanan transportasi laut, perawatan kapal, dan solusi maritim profesional yang mengutamakan keselamatan, kualitas, dan kepercayaan.
            </p>

            <div
                data-home-hero-actions
                class="mt-9 grid gap-3 sm:flex sm:flex-wrap"
            >
                <a
                    href="{{ route('contact') }}"
                    class="motion-scale inline-flex min-h-12 w-full items-center justify-center rounded-md bg-[#C62828] px-6 py-3 text-sm font-bold text-white shadow-xl shadow-[#C62828]/25 transition-colors duration-200 hover:bg-[#9F1F1F] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white sm:w-auto"
                >
                    Hubungi Kami
                </a>

                <a
                    href="{{ route('about.profile') }}"
                    class="inline-flex min-h-12 w-full items-center justify-center rounded-md border border-white/70 bg-white/0 px-6 py-3 text-sm font-bold text-white transition-colors duration-200 hover:bg-white/12 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white sm:w-auto"
                >
                    Tentang Kami
                </a>
            </div>
        </div>

        <div
            data-home-hero-visual
            class="relative w-full"
            x-data="{ videoFailed: false }"
        >
            <div class="relative aspect-[4/3] overflow-hidden rounded-xl border border-white/15 bg-[#0F2D52] shadow-2xl shadow-slate-950/45 sm:aspect-[16/10] lg:aspect-[5/6] xl:aspect-[4/5]">
                <img
                    src="{{ $fallbackImage }}"
                    alt="Kapal niaga Karya Fortuna Shipping beroperasi di perairan terbuka"
                    class="absolute inset-0 h-full w-full object-cover"
                    loading="lazy"
                >

                <video
                    x-show="! videoFailed"
                    x-on:error="videoFailed = true"
                    class="absolute inset-0 h-full w-full object-cover"
                    autoplay
                    muted
                    loop
                    playsinline
                    preload="metadata"
                    poster="{{ $fallbackImage }}"
                >
                    <source src="{{ $videoSrc }}" type="video/mp4">
                </video>

                <div class="absolute inset-0 bg-[linear-gradient(180deg,rgba(8,31,58,0.08)_0%,rgba(8,31,58,0.34)_100%)]"></div>
                <div class="absolute inset-x-0 bottom-0 h-28 bg-gradient-to-t from-[#081F3A]/55 to-transparent"></div>
            </div>
        </div>
    </div>

    <a
        href="#trusted-clients-title"
        data-home-hero-scroll
        class="absolute bottom-6 left-1/2 hidden -translate-x-1/2 flex-col items-center gap-2 text-xs font-bold uppercase tracking-[0.18em] text-white/78 transition-colors hover:text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-white sm:flex"
        aria-label="Scroll to Explore"
    >
        <span class="text-2xl leading-none" aria-hidden="true">&darr;</span>
        <span>Scroll to Explore</span>
    </a>
</section>
