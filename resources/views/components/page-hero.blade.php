@props([
    'id' => 'page-hero-title',
    'eyebrow' => 'Tentang Kami',
    'title',
    'description',
    'background',
    'alt' => 'Kapal dan aktivitas pelayaran di area maritim',
])

<section class="relative isolate flex min-h-[66vh] overflow-hidden bg-[#081F3A] pt-16 text-white sm:min-h-[72vh]" aria-labelledby="{{ $id }}">
    <img
        src="{{ $background }}"
        alt="{{ $alt }}"
        class="absolute inset-0 -z-20 h-full w-full object-cover"
        loading="eager"
        fetchpriority="high"
    >
    <div class="absolute inset-0 -z-10 bg-[#081F3A]/68"></div>
    <div class="absolute inset-0 -z-10 bg-[linear-gradient(90deg,rgba(8,31,58,0.94)_0%,rgba(8,31,58,0.74)_50%,rgba(8,31,58,0.45)_100%)]"></div>

    <div class="mx-auto flex w-full max-w-7xl items-center px-5 py-20 sm:px-6 lg:px-8">
        <div data-hero-text class="max-w-3xl">
            <p class="text-xs font-bold uppercase tracking-[0.2em] text-red-100">{{ $eyebrow }}</p>
            <h1 id="{{ $id }}" class="mt-4 max-w-3xl text-4xl font-extrabold leading-tight tracking-tight text-white sm:text-5xl lg:text-6xl">
                {{ $title }}
            </h1>
            <p class="mt-6 max-w-2xl text-base leading-8 text-white/84 sm:text-lg">
                {{ $description }}
            </p>
        </div>
    </div>
</section>
