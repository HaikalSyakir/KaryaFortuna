@props([
    'title',
    'description',
    'image',
    'alt',
    'specs' => [],
    'href',
])

<article {{ $attributes->merge([
    'class' => 'group overflow-hidden rounded-lg border border-[#0F2D52]/12 bg-white shadow-sm shadow-slate-950/5 transition duration-300 hover:border-[#0F2D52]/35 hover:shadow-xl hover:shadow-[#0F2D52]/10',
]) }}>
    <div class="relative overflow-hidden">
        <img
            src="{{ $image }}"
            alt="{{ $alt }}"
            width="900"
            height="620"
            loading="lazy"
            decoding="async"
            class="aspect-[16/10] w-full object-cover transition duration-500 group-hover:scale-[1.03]"
        >
        <div class="absolute inset-x-0 bottom-0 h-20 bg-gradient-to-t from-[#081F3A]/50 to-transparent"></div>
        <span class="absolute left-5 top-5 h-1 w-14 rounded-full bg-[#C62828]"></span>
    </div>

    <div class="p-6">
        <h3 class="text-xl font-extrabold text-[#081F3A]">{{ $title }}</h3>
        <p class="mt-3 text-sm leading-7 text-slate-600">{{ $description }}</p>

        @if ($specs)
            <dl class="mt-5 grid gap-3 sm:grid-cols-3">
                @foreach ($specs as $label => $value)
                    <div class="rounded-md border border-[#0F2D52]/10 bg-[#0F2D52]/5 px-3 py-3">
                        <dt class="text-xs font-bold uppercase tracking-[0.14em] text-slate-500">{{ $label }}</dt>
                        <dd class="mt-1 text-sm font-bold text-[#0F2D52]">{{ $value }}</dd>
                    </div>
                @endforeach
            </dl>
        @endif

        <a href="{{ $href }}" class="mt-6 inline-flex items-center gap-2 text-sm font-bold text-[#0F2D52] transition-colors hover:text-[#C62828]">
            Lihat armada
            <span aria-hidden="true">-&gt;</span>
        </a>
    </div>
</article>
