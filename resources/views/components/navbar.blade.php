@php
    $navigationItems = [
        [
            'label' => 'Beranda',
            'route' => 'home',
            'active' => ['home'],
        ],
        [
            'label' => 'Tentang Kami',
            'active' => ['about.*'],
            'children' => [
                [
                    'items' => [
                        ['label' => 'Profil Perusahaan', 'route' => 'about.profile'],
                        ['label' => 'Visi & Misi', 'route' => 'about.vision-mission'],
                        ['label' => 'Struktur Organisasi', 'route' => 'about.organization-structure'],
                        ['label' => 'Legalitas & Sertifikasi', 'route' => 'about.legality'],
                    ],
                ],
            ],
        ],
        [
            'label' => 'Layanan & Armada',
            'active' => ['services.*', 'fleets.*'],
            'children' => [
                [
                    'heading' => 'Layanan',
                    'items' => [
                        ['label' => 'Transportasi Cargo Curah', 'route' => 'services.bulk-cargo-transport'],
                        ['label' => 'Jasa Sewa Tongkang & Barge', 'route' => 'services.barge-rental'],
                        ['label' => 'Transportasi Crew', 'route' => 'services.crew-transport'],
                        ['label' => 'Perawatan & Perbaikan Kapal', 'route' => 'services.ship-maintenance-repair'],
                        ['label' => 'Dokumentasi & Perizinan Kapal', 'route' => 'services.ship-documentation-permits'],
                    ],
                ],
                [
                    'heading' => 'Armada',
                    'items' => [
                        ['label' => 'Tugboat & Barge', 'route' => 'fleets.tugboat-barge'],
                        ['label' => 'Seatruck (Transportasi Crew)', 'route' => 'fleets.seatruck'],
                    ],
                ],
            ],
        ],
        [
            'label' => 'Afiliasi',
            'active' => ['applications.*'],
            'children' => [
                [
                    'items' => [
                        ['label' => 'PT GBF', 'route' => 'applications.gbf'],
                        ['label' => 'PT FTG', 'route' => 'applications.ftg'],
                        ['label' => 'PT Gemilang', 'route' => 'applications.gemilang'],
                    ],
                ],
            ],
        ],
        [
            'label' => 'Hubungi Kami',
            'route' => 'contact',
            'active' => ['contact'],
            'button' => true,
        ],
    ];

    $activeAccordionIndex = null;

    foreach ($navigationItems as $index => $item) {
        if (isset($item['children']) && request()->routeIs(...$item['active'])) {
            $activeAccordionIndex = $index;
            break;
        }
    }
@endphp

<header
    x-data="{ mobileOpen: false, scrolled: false, activeAccordion: @js($activeAccordionIndex) }"
    x-init="
        scrolled = window.scrollY > 12;
        window.addEventListener('scroll', () => scrolled = window.scrollY > 12, { passive: true });
    "
    x-bind:class="scrolled ? 'border-neutral-200/80 bg-white/86 shadow-lg shadow-neutral-950/8' : 'border-white/20 bg-white/70 shadow-none'"
    class="site-navbar fixed inset-x-0 top-0 z-50 border-b backdrop-blur-xl transition-all duration-300"
>
    <nav class="mx-auto flex h-20 max-w-7xl items-center justify-between px-5 sm:px-6 lg:px-8" aria-label="Navigasi utama">
        <a href="{{ route('home') }}" class="flex items-center gap-3" aria-label="Karya Fortuna Shipping">
            <span class="flex size-11 items-center justify-center rounded-lg bg-neutral-950 shadow-lg shadow-neutral-950/15">
                <span class="text-base font-extrabold text-white">KF</span>
            </span>
            <span class="flex flex-col leading-none">
                <span class="text-base font-bold text-neutral-950 sm:text-lg">Karya Fortuna</span>
                <span class="mt-1 text-xs font-semibold uppercase tracking-[0.18em] text-red-700">Group</span>
            </span>
        </a>

        <div class="hidden items-center gap-1 lg:flex">
            @foreach ($navigationItems as $item)
                @php
                    $isActive = request()->routeIs(...$item['active']);
                @endphp

                @if (isset($item['children']))
                    <x-dropdown :item="$item" :active="$isActive" />
                @elseif (! ($item['button'] ?? false))
                    <a
                        href="{{ route($item['route']) }}"
                        @class([
                            'group relative rounded-full px-4 py-2 text-sm font-semibold transition-colors duration-200',
                            'text-neutral-950' => $isActive,
                            'text-neutral-600 hover:text-neutral-950' => ! $isActive,
                        ])
                        @if ($isActive) aria-current="page" @endif
                    >
                        {{ $item['label'] }}
                        <span
                            @class([
                                'absolute inset-x-4 -bottom-1 h-0.5 rounded-full bg-red-700 transition-all duration-300',
                                'opacity-100' => $isActive,
                                'opacity-0 group-hover:opacity-100' => ! $isActive,
                            ])
                        ></span>
                    </a>
                @endif
            @endforeach
        </div>

        <div class="hidden items-center lg:flex">
            @foreach ($navigationItems as $item)
                @if ($item['button'] ?? false)
                    @php
                        $isActive = request()->routeIs(...$item['active']);
                    @endphp

                    <a
                        href="{{ route($item['route']) }}"
                        @class([
                            'motion-scale inline-flex items-center justify-center rounded-full px-5 py-3 text-sm font-bold shadow-lg transition-colors duration-200 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-700',
                            'bg-red-800 text-white shadow-red-700/25' => $isActive,
                            'bg-red-700 text-white shadow-red-700/20 hover:bg-red-800' => ! $isActive,
                        ])
                        @if ($isActive) aria-current="page" @endif
                    >
                        {{ $item['label'] }}
                    </a>
                @endif
            @endforeach
        </div>

        <button
            type="button"
            class="inline-flex size-11 items-center justify-center rounded-lg border border-neutral-200 bg-white/85 text-neutral-950 shadow-sm transition-colors hover:bg-white lg:hidden"
            x-on:click="mobileOpen = ! mobileOpen"
            x-bind:aria-expanded="mobileOpen.toString()"
            aria-controls="mobile-navigation"
            aria-label="Buka menu navigasi"
        >
            <span class="sr-only">Menu</span>
            <span class="relative h-4 w-5">
                <span x-bind:class="mobileOpen ? 'top-1.5 rotate-45' : 'top-0 rotate-0'" class="absolute left-0 h-0.5 w-5 rounded-full bg-current transition-all"></span>
                <span x-bind:class="mobileOpen ? 'opacity-0' : 'opacity-100'" class="absolute left-0 top-1.5 h-0.5 w-5 rounded-full bg-current transition-all"></span>
                <span x-bind:class="mobileOpen ? 'top-1.5 -rotate-45' : 'top-3 rotate-0'" class="absolute left-0 h-0.5 w-5 rounded-full bg-current transition-all"></span>
            </span>
        </button>
    </nav>

    <div
        id="mobile-navigation"
        x-cloak
        x-show="mobileOpen"
        x-transition.opacity.duration.200ms
        class="max-h-[calc(100vh-5rem)] overflow-y-auto border-t border-neutral-200/80 bg-white/96 px-5 py-4 shadow-xl shadow-neutral-950/8 backdrop-blur-xl lg:hidden"
    >
        <div class="mx-auto flex max-w-7xl flex-col gap-2">
            @foreach ($navigationItems as $index => $item)
                @php
                    $isActive = request()->routeIs(...$item['active']);
                @endphp

                @if (isset($item['children']))
                    <div class="rounded-lg border border-neutral-200 bg-white">
                        <button
                            type="button"
                            x-on:click="activeAccordion = activeAccordion === {{ $index }} ? null : {{ $index }}"
                            x-bind:aria-expanded="(activeAccordion === {{ $index }}).toString()"
                            @class([
                                'flex w-full items-center justify-between rounded-lg px-4 py-3 text-left text-sm font-bold transition-colors',
                                'bg-red-50 text-red-700' => $isActive,
                                'text-neutral-900 hover:bg-neutral-50' => ! $isActive,
                            ])
                        >
                            <span>{{ $item['label'] }}</span>
                            <svg class="size-4 transition-transform duration-200" x-bind:class="activeAccordion === {{ $index }} ? 'rotate-180' : ''" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 0 1 1.06.02L10 11.17l3.71-3.94a.75.75 0 1 1 1.08 1.04l-4.25 4.5a.75.75 0 0 1-1.08 0l-4.25-4.5a.75.75 0 0 1 .02-1.06Z" clip-rule="evenodd" />
                            </svg>
                        </button>

                        <div x-cloak x-show="activeAccordion === {{ $index }}" x-transition.opacity.duration.150ms class="px-2 pb-3">
                            @foreach ($item['children'] as $group)
                                @if (isset($group['heading']))
                                    <p class="px-3 pb-1 pt-3 text-xs font-bold uppercase tracking-[0.16em] text-blue-900">
                                        {{ $group['heading'] }}
                                    </p>
                                @endif

                                @foreach ($group['items'] as $child)
                                    <a
                                        href="{{ route($child['route']) }}"
                                        x-on:click="mobileOpen = false"
                                        @class([
                                            'block rounded-lg px-3 py-2.5 text-sm font-semibold transition-colors',
                                            'bg-red-50 text-red-700' => request()->routeIs($child['route']),
                                            'text-neutral-700 hover:bg-neutral-100 hover:text-neutral-950' => ! request()->routeIs($child['route']),
                                        ])
                                        @if (request()->routeIs($child['route'])) aria-current="page" @endif
                                    >
                                        {{ $child['label'] }}
                                    </a>
                                @endforeach
                            @endforeach
                        </div>
                    </div>
                @else
                    <a
                        href="{{ route($item['route']) }}"
                        x-on:click="mobileOpen = false"
                        @class([
                            'rounded-lg px-4 py-3 text-sm font-bold transition-colors',
                            'bg-red-700 text-white shadow-lg shadow-red-700/20' => ($item['button'] ?? false) && ! $isActive,
                            'bg-red-800 text-white shadow-lg shadow-red-700/20' => ($item['button'] ?? false) && $isActive,
                            'bg-red-50 text-red-700' => ! ($item['button'] ?? false) && $isActive,
                            'text-neutral-700 hover:bg-neutral-100 hover:text-neutral-950' => ! ($item['button'] ?? false) && ! $isActive,
                        ])
                        @if ($isActive) aria-current="page" @endif
                    >
                        {{ $item['label'] }}
                    </a>
                @endif
            @endforeach
        </div>
    </div>
</header>
