@props([
    'number',
    'title',
    'description',
    'href',
])

<article {{ $attributes->merge([
    'class' => 'group relative h-full overflow-hidden rounded-lg border border-[#0F2D52]/12 bg-white p-6 shadow-sm shadow-slate-950/5 transition duration-300 hover:-translate-y-1 hover:border-[#0F2D52]/45 hover:shadow-xl hover:shadow-[#0F2D52]/10',
]) }}>
    <span class="absolute inset-x-0 top-0 h-1 bg-[#0F2D52]/85"></span>

    <div class="flex items-start justify-between gap-5">
        <span class="inline-flex size-11 items-center justify-center rounded-md bg-[#0F2D52]/8 text-sm font-extrabold text-[#0F2D52] ring-1 ring-[#0F2D52]/10 transition-colors group-hover:bg-[#0F2D52] group-hover:text-white">
            {{ $number }}
        </span>
        <span class="mt-5 h-px flex-1 bg-[#0F2D52]/12 transition-colors group-hover:bg-[#C62828]/55"></span>
    </div>

    <h3 class="mt-6 text-xl font-extrabold text-[#081F3A]">{{ $title }}</h3>
    <p class="mt-4 text-sm leading-7 text-slate-600">{{ $description }}</p>

    <a href="{{ $href }}" class="mt-6 inline-flex items-center gap-2 text-sm font-bold text-[#0F2D52] transition-colors hover:text-[#C62828]">
        Pelajari layanan
        <span aria-hidden="true">-&gt;</span>
    </a>
</article>
