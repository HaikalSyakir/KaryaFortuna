@props([
    'href',
    'variant' => 'primary',
])

@php
    $classes = [
        'primary' => 'bg-[#C62828] text-white shadow-[#C62828]/20 hover:bg-[#A61E1E] focus-visible:outline-[#C62828]',
        'secondary' => 'border border-slate-200 bg-white text-[#0F2D52] shadow-slate-950/5 hover:border-[#0F2D52]/30 hover:bg-slate-50 focus-visible:outline-[#0F2D52]',
        'light' => 'bg-white text-[#C62828] shadow-black/10 hover:bg-slate-50 focus-visible:outline-white',
    ][$variant];
@endphp

<a
    href="{{ $href }}"
    {{ $attributes->merge([
        'class' => 'motion-scale inline-flex min-h-12 items-center justify-center rounded-md px-6 py-3 text-sm font-bold shadow-lg transition-colors duration-200 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 ' . $classes,
    ]) }}
>
    {{ $slot }}
</a>
