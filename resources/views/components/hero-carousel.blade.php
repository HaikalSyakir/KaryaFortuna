@props(['slides'])

<div
    data-embla-carousel
    class="group relative overflow-hidden rounded-xl bg-neutral-900 shadow-2xl shadow-neutral-950/20"
    aria-label="Galeri kapal Karya Fortuna Group"
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
                    <div class="absolute inset-0 bg-gradient-to-t from-neutral-950/40 via-neutral-950/5 to-white/10"></div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="pointer-events-none absolute inset-x-5 bottom-5 flex items-center justify-between">
        <div class="rounded-full bg-white/86 px-4 py-2 text-xs font-bold uppercase tracking-[0.18em] text-neutral-900 shadow-lg shadow-neutral-950/10 backdrop-blur-md">
            Maritime Fleet
        </div>
        <div class="hidden h-px w-24 bg-white/70 sm:block"></div>
    </div>
</div>
