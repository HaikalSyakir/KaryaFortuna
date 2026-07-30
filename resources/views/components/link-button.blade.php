@props([
    'href',
    'variant' => 'primary',
])

@php
    $classes = [
        'primary' => 'bg-red-700 text-white shadow-red-700/20 hover:bg-red-800 focus-visible:outline-red-700',
        'secondary' => 'border border-neutral-300 bg-white text-neutral-950 shadow-neutral-950/5 hover:border-neutral-400 hover:bg-neutral-50 focus-visible:outline-neutral-900',
        'light' => 'bg-white text-red-800 shadow-black/10 hover:bg-red-50 focus-visible:outline-white',
    ][$variant];
@endphp

<a
    href="{{ $href }}"
    {{ $attributes->merge([
        'class' => 'motion-scale inline-flex items-center justify-center rounded-full px-6 py-3 text-sm font-bold shadow-lg transition-colors duration-200 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 ' . $classes,
    ]) }}
>
    {{ $slot }}
</a>
