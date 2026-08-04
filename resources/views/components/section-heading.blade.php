@props([
    'eyebrow' => null,
    'title',
    'description' => null,
    'align' => 'left',
    'inverted' => false,
])

@php
    $centered = $align === 'center';
@endphp

<div {{ $attributes->merge([
    'class' => $centered ? 'mx-auto max-w-3xl text-center' : 'max-w-3xl',
]) }}>
    <div @class([
        'flex items-center gap-3',
        'justify-center' => $centered,
    ])>
        <span @class([
            'h-px w-10 bg-[#0F2D52]/70',
            'bg-white/55' => $inverted,
        ])></span>
        <span @class([
            'h-1.5 w-1.5 rounded-full bg-[#C62828]',
            'bg-[#F04444]' => $inverted,
        ])></span>
    </div>

    @if ($eyebrow)
        <p @class([
            'mt-4 text-xs font-bold uppercase tracking-[0.18em]',
            'text-[#C62828]' => ! $inverted,
            'text-red-100' => $inverted,
        ])>
            {{ $eyebrow }}
        </p>
    @endif

    <h2 @class([
        'mt-3 text-3xl font-extrabold leading-tight sm:text-4xl',
        'text-[#081F3A]' => ! $inverted,
        'text-white' => $inverted,
    ])>
        {{ $title }}
    </h2>

    @if ($description)
        <p @class([
            'mt-5 text-base leading-8 sm:text-lg',
            'text-slate-600' => ! $inverted,
            'text-slate-200' => $inverted,
        ])>
            {{ $description }}
        </p>
    @endif
</div>
