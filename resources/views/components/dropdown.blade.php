@props([
    'item',
    'active' => false,
])

<div
    x-data="{ open: false }"
    x-on:mouseenter="open = true"
    x-on:mouseleave="open = false"
    class="relative"
>
    <button
        type="button"
        x-on:click="open = ! open"
        x-bind:aria-expanded="open.toString()"
        x-bind:class="scrolled ? '{{ $active ? 'text-[#F04444]' : 'text-white/88 hover:text-white' }}' : (lightAtTop ? '{{ $active ? 'text-[#C62828]' : 'text-[#0F2D52] hover:text-[#C62828]' }}' : '{{ $active ? 'text-white' : 'text-white/86 hover:text-white' }}')"
        class="group inline-flex items-center gap-2 rounded-md px-4 py-2 text-sm font-semibold transition-colors duration-200"
    >
        {{ $item['label'] }}
        <svg class="size-4 transition-transform duration-200" x-bind:class="open ? 'rotate-180' : ''" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 0 1 1.06.02L10 11.17l3.71-3.94a.75.75 0 1 1 1.08 1.04l-4.25 4.5a.75.75 0 0 1-1.08 0l-4.25-4.5a.75.75 0 0 1 .02-1.06Z" clip-rule="evenodd" />
        </svg>
        <span
            @class([
                'absolute inset-x-4 -bottom-1 h-0.5 rounded-full bg-[#C62828] transition-all duration-300',
                'opacity-100' => $active,
                'opacity-0 group-hover:opacity-100' => ! $active,
            ])
        ></span>
    </button>

    <div
        x-cloak
        x-show="open"
        x-transition.opacity.duration.150ms
        class="absolute left-1/2 top-full z-50 mt-4 w-76 -translate-x-1/2 rounded-lg border border-slate-200 bg-white/95 p-3 shadow-2xl shadow-slate-950/12 backdrop-blur-xl"
    >
        @foreach ($item['children'] as $group)
            @if (isset($group['heading']))
                <p class="px-3 pb-2 pt-3 text-xs font-bold uppercase tracking-[0.16em] text-[#0F2D52] first:pt-1">
                    {{ $group['heading'] }}
                </p>
            @endif

            @foreach ($group['items'] as $child)
                <a
                    href="{{ route($child['route']) }}"
                    @class([
                        'block rounded-md px-3 py-2.5 text-sm font-semibold transition-colors duration-200',
                        'bg-red-50 text-[#C62828]' => request()->routeIs($child['route']),
                        'text-slate-700 hover:bg-slate-100 hover:text-[#0F2D52]' => ! request()->routeIs($child['route']),
                    ])
                    @if (request()->routeIs($child['route'])) aria-current="page" @endif
                >
                    {{ $child['label'] }}
                </a>
            @endforeach
        @endforeach
    </div>
</div>
