@props([
    'heroImages' => [
        asset('images/hero/gambar1.jpg'),
        asset('images/hero/gambar2.jpg'),
        asset('images/hero/gambar3.jpg'),
    ],
])

<section
    class="relative isolate min-h-screen overflow-hidden bg-[#081F3A] text-white"
    aria-labelledby="home-hero-title"
    x-data='homeHeroSlider(@json($heroImages))'
    x-init="start()"
    x-on:mouseenter="stop()"
    x-on:mouseleave="start()"
    x-on:focusin="stop()"
    x-on:focusout="start()"
    x-on:keydown.arrow-left.prevent="previous()"
    x-on:keydown.arrow-right.prevent="next()"
>
    <div class="absolute inset-0 -z-20">
        @foreach ($heroImages as $index => $image)
        <img
            src="{{ $image }}"
            alt=""
            class="absolute inset-0 h-full w-full object-cover transition-[opacity,transform] duration-[1400ms] ease-out"
            style="opacity: {{ $index === 0 ? '1' : '0' }}; transform: scale({{ $index === 0 ? '1' : '1.03' }});"
            loading="{{ $index === 0 ? 'eager' : 'lazy' }}"
            fetchpriority="{{ $index === 0 ? 'high' : 'auto' }}"
            aria-hidden="true"
            x-bind:style="activeSlide === {{ $index }} ? 'opacity: 1; transform: scale(1);' : 'opacity: 0; transform: scale(1.03);'"
        >
        @endforeach
    </div>

    <div class="absolute inset-0 -z-10 bg-[#081F3A]/60"></div>
    <div class="absolute inset-0 -z-10 bg-[linear-gradient(90deg,rgba(8,31,58,0.96)_0%,rgba(8,31,58,0.72)_44%,rgba(8,31,58,0.46)_100%)]"></div>

    <div class="mx-auto flex min-h-screen w-full max-w-7xl items-center px-5 pb-20 pt-28 sm:px-6 sm:pt-32 lg:px-8 lg:pb-24 lg:pt-28">
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
                class="mt-4 max-w-2xl text-3xl font-bold leading-tight tracking-tight text-white sm:text-4xl lg:text-5xl"
            >
                Solusi Transportasi Laut dan
                <span class="block text-white">Layanan Maritim Profesional</span>
            </h1>

            <p
                data-home-hero-description
                class="mt-7 max-w-2xl text-base leading-8 text-white/82 sm:text-lg"
            >
                Karya Fortuna Shipping menghadirkan layanan transportasi laut dan solusi maritim profesional dengan mengutamakan keselamatan, keandalan, dan kualitas layanan.
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
    </div>

    <div
        class="absolute inset-x-0 bottom-8 z-20 flex items-center justify-center gap-3 sm:bottom-8"
        role="group"
        aria-label="Pilih gambar Hero"
    >
        @foreach ($heroImages as $index => $image)
        <button
            type="button"
            class="size-2.5 rounded-full border border-white/70 transition focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-white"
            aria-label="Tampilkan gambar Hero {{ $index + 1 }}"
            x-bind:aria-current="activeSlide === {{ $index }} ? 'true' : 'false'"
            x-bind:class="activeSlide === {{ $index }} ? 'bg-white scale-110' : 'bg-white/20 hover:bg-white/55'"
            x-on:click="goTo({{ $index }})"
        ></button>
        @endforeach
    </div>

    <a
        href="#trusted-clients-title"
        data-home-hero-scroll
        class="absolute bottom-16 left-1/2 hidden -translate-x-1/2 flex-col items-center gap-2 text-xs font-bold uppercase tracking-[0.18em] text-white/78 transition-colors hover:text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-white sm:flex"
        aria-label="Scroll to Explore"
    >
        <span class="text-2xl leading-none" aria-hidden="true">&darr;</span>
        <span>Scroll to Explore</span>
    </a>
</section>
