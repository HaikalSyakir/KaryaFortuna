@props([
    'number',
    'title',
    'description',
    'href',
])

<article {{ $attributes->merge([
    'class' => 'group h-full rounded-lg border border-slate-200 bg-white p-6 shadow-sm shadow-slate-950/5 transition duration-300 hover:-translate-y-1 hover:border-[#0F2D52]/25 hover:shadow-xl hover:shadow-slate-950/8',
]) }}>
    <div class="flex items-start justify-between gap-5">
        <span class="text-sm font-extrabold text-[#C62828]">{{ $number }}</span>
        <span class="h-px flex-1 bg-slate-200 transition-colors group-hover:bg-[#C62828]/40"></span>
    </div>

    <h3 class="mt-6 text-xl font-extrabold text-[#111827]">{{ $title }}</h3>
    <p class="mt-4 text-sm leading-7 text-slate-600">{{ $description }}</p>

    <a href="{{ $href }}" class="mt-6 inline-flex items-center gap-2 text-sm font-bold text-[#0F2D52] transition-colors hover:text-[#C62828]">
        Pelajari layanan
        <span aria-hidden="true">-&gt;</span>
    </a>
</article>
