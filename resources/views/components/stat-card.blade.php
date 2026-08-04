@props([
    'value',
    'suffix' => '',
    'label',
    'description' => null,
])

<div {{ $attributes->merge([
    'class' => 'group relative overflow-hidden rounded-lg border border-[#0F2D52]/12 bg-white p-6 shadow-sm shadow-slate-950/5 transition duration-300 hover:border-[#0F2D52]/35 hover:shadow-xl hover:shadow-[#0F2D52]/10',
]) }}>
    <span class="absolute inset-x-0 top-0 h-1 bg-[#0F2D52]/85"></span>
    <p class="text-4xl font-extrabold text-[#0F2D52]">
        <span data-count-up="{{ $value }}">0</span>{{ $suffix }}
    </p>
    <p class="mt-3 text-sm font-bold uppercase tracking-[0.14em] text-[#C62828]">{{ $label }}</p>
    @if ($description)
        <p class="mt-3 text-sm leading-7 text-slate-600">{{ $description }}</p>
    @endif
</div>
