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
    @if ($eyebrow)
        <p @class([
            'text-xs font-bold uppercase tracking-[0.18em]',
            'text-[#C62828]' => ! $inverted,
            'text-red-100' => $inverted,
        ])>
            {{ $eyebrow }}
        </p>
    @endif

    <h2 @class([
        'mt-3 text-3xl font-extrabold leading-tight sm:text-4xl',
        'text-[#111827]' => ! $inverted,
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
