@props(['slides'])

<div
    data-embla-carousel
    class="group relative overflow-hidden rounded-lg bg-[#081F3A] shadow-2xl shadow-slate-950/20"
    aria-label="Galeri kapal Karya Fortuna Shipping"
>
    <div class="overflow-hidden" data-embla-viewport>
        <div class="flex">
            @foreach ($slides as $index => $slide)
                <div class="relative min-w-0 flex-[0_0_100%]">
                    <img
                        src="{{ $slide['src'] }}"
                        alt="{{ $slide['alt'] }}"
                        width="1200"
                        height="900"
                        @if ($index === 0)
                            fetchpriority="high"
                            loading="eager"
                        @else
                            loading="lazy"
                        @endif
                        decoding="async"
                        class="aspect-[4/5] w-full object-cover sm:aspect-[16/11] lg:aspect-[5/6] xl:aspect-[4/5]"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-[#081F3A]/70 via-[#081F3A]/10 to-white/5"></div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="pointer-events-none absolute inset-x-5 bottom-5 flex items-center justify-between">
        <div class="rounded-md bg-white/90 px-4 py-2 text-xs font-bold uppercase tracking-[0.18em] text-[#0F2D52] shadow-lg shadow-slate-950/10 backdrop-blur-md">
            Maritime Fleet
        </div>
        <div class="hidden h-px w-24 bg-white/70 sm:block"></div>
    </div>
</div>
