@props([
    'title',
    'description',
    'image',
    'alt',
    'specs' => [],
    'href',
])

<article {{ $attributes->merge([
    'class' => 'overflow-hidden rounded-lg border border-slate-200 bg-white shadow-sm shadow-slate-950/5',
]) }}>
    <img
        src="{{ $image }}"
        alt="{{ $alt }}"
        width="900"
        height="620"
        loading="lazy"
        decoding="async"
        class="aspect-[16/10] w-full object-cover"
    >

    <div class="p-6">
        <h3 class="text-xl font-extrabold text-[#111827]">{{ $title }}</h3>
        <p class="mt-3 text-sm leading-7 text-slate-600">{{ $description }}</p>

        @if ($specs)
            <dl class="mt-5 grid gap-3 sm:grid-cols-3">
                @foreach ($specs as $label => $value)
                    <div class="border-l-2 border-[#C62828] pl-3">
                        <dt class="text-xs font-bold uppercase tracking-[0.14em] text-slate-400">{{ $label }}</dt>
                        <dd class="mt-1 text-sm font-bold text-[#0F2D52]">{{ $value }}</dd>
                    </div>
                @endforeach
            </dl>
        @endif

        <a href="{{ $href }}" class="mt-6 inline-flex items-center gap-2 text-sm font-bold text-[#C62828] transition-colors hover:text-[#A61E1E]">
            Lihat armada
            <span aria-hidden="true">-&gt;</span>
        </a>
    </div>
</article>
