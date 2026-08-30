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

    $lightAtTop = request()->routeIs('home') || request()->routeIs('services.bulk-cargo-transport') || request()->routeIs('services.barge-rental') || request()->routeIs('services.crew-transport') || request()->routeIs('services.ship-maintenance-repair') || request()->routeIs('services.ship-documentation-permits') || request()->routeIs('fleets.tugboat-barge') || request()->routeIs('fleets.seatruck');
@endphp

<header
    x-data="{ mobileOpen: false, scrolled: false, activeAccordion: @js($activeAccordionIndex), lightAtTop: @js($lightAtTop) }"
    x-init="
        scrolled = window.scrollY > 24;
        window.addEventListener('scroll', () => scrolled = window.scrollY > 24, { passive: true });
    "
    x-bind:class="scrolled ? 'border-[#0F2D52] bg-[#0F2D52] shadow-xl shadow-slate-950/20' : (lightAtTop ? 'border-slate-200 bg-white shadow-lg shadow-slate-950/8' : 'border-transparent bg-transparent shadow-none')"
    class="site-navbar fixed inset-x-0 top-0 z-50 border-b transition-all duration-300"
>
    <!-- DIUBAH: h-20 menjadi h-16 -->
    <nav class="mx-auto flex h-16 max-w-7xl items-center justify-between px-5 sm:px-6 lg:px-8" aria-label="Navigasi utama">
        <a href="{{ route('home') }}" class="flex items-center gap-2.5" aria-label="Karya Fortuna Shipping">
            <!-- DIUBAH: size-11 menjadi size-9 -->
            <span x-bind:class="scrolled ? 'bg-white text-[#0F2D52]' : (lightAtTop ? 'bg-[#0F2D52] text-white' : 'bg-white text-[#0F2D52]')" class="flex size-9 items-center justify-center rounded-md shadow-md transition-colors">
                <span class="text-sm font-extrabold">KF</span>
            </span>
            <span class="flex flex-col leading-none">
                <span x-bind:class="scrolled ? 'text-white' : (lightAtTop ? 'text-[#0F2D52]' : 'text-white')" class="text-sm font-extrabold transition-colors sm:text-base">Karya Fortuna</span>
                <span class="mt-0.5 text-[10px] font-bold uppercase tracking-[0.18em] text-[#C62828]">Shipping</span>
            </span>
        </a>

        <!-- Menu Kapsul Tengah -->
        <div
            x-bind:class="scrolled ? 'bg-white/10 ring-white/10' : (lightAtTop ? 'bg-slate-100/90 ring-slate-200' : 'bg-white/8 ring-white/15')"
            class="hidden items-center gap-1 rounded-full px-2 py-1 ring-1 backdrop-blur-md transition-colors duration-300 lg:flex"
        >
            @foreach ($navigationItems as $item)
                @php
                    $isActive = request()->routeIs(...$item['active']);
                @endphp

                @if (isset($item['children']))
                    <x-dropdown :item="$item" :active="$isActive" />
                @elseif (! ($item['button'] ?? false))
                    <!-- DIUBAH: py-2 menjadi py-1.5 & text-sm menjadi text-xs/sm -->
                    <a
                        href="{{ route($item['route']) }}"
                        x-bind:class="scrolled ? '{{ $isActive ? 'text-[#F04444]' : 'text-white/88 hover:text-white' }}' : (lightAtTop ? '{{ $isActive ? 'text-[#C62828]' : 'text-[#0F2D52] hover:text-[#C62828]' }}' : '{{ $isActive ? 'text-white' : 'text-white/86 hover:text-white' }}')"
                        class="group relative rounded-md px-3.5 py-1.5 text-xs font-semibold sm:text-sm transition-colors duration-200"
                        @if ($isActive) aria-current="page" @endif
                    >
                        {{ $item['label'] }}
                        <span
                            @class([
                                'absolute inset-x-3.5 -bottom-0.5 h-0.5 rounded-full bg-[#C62828] transition-all duration-300',
                                'opacity-100' => $isActive,
                                'opacity-0 group-hover:opacity-100' => ! $isActive,
                            ])
                        ></span>
                    </a>
                @endif
            @endforeach
        </div>

        <!-- Tombol CTA Kanan -->
        <div class="hidden items-center lg:flex">
            @foreach ($navigationItems as $item)
                @if ($item['button'] ?? false)
                    @php
                        $isActive = request()->routeIs(...$item['active']);
                    @endphp

                    <a
                        href="{{ route($item['route']) }}"
                        @class([
                            'inline-flex items-center gap-2 rounded-lg px-4 py-2 text-xs sm:text-sm font-semibold text-white transition-all duration-200',
                            'bg-[#A61E1E]' => $isActive,
                            'bg-[#C62828] hover:bg-[#A61E1E] hover:shadow-lg hover:shadow-[#C62828]/25' => ! $isActive,
                        ])
                    >
                        <span>{{ $item['label'] }}</span>
                        <!-- Icon Panah -->
                        <svg class="size-4 transition-transform group-hover:translate-x-0.5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                        </svg>
                    </a>
                @endif
            @endforeach
        </div>

        <!-- Mobile Toggle Button -->
        <button
            type="button"
            class="inline-flex size-9 items-center justify-center rounded-md border border-slate-200 bg-white/90 text-[#0F2D52] shadow-sm transition-colors hover:bg-white lg:hidden"
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

    <!-- Mobile Navigation Drawer -->
    <div
        id="mobile-navigation"
        x-cloak
        x-show="mobileOpen"
        x-transition.opacity.duration.200ms
        class="max-h-[calc(100vh-4rem)] overflow-y-auto border-t border-slate-200/80 bg-white/96 px-5 py-4 shadow-xl shadow-slate-950/8 backdrop-blur-xl lg:hidden"
    >
        <div class="mx-auto flex max-w-7xl flex-col gap-2">
            @foreach ($navigationItems as $index => $item)
                @php
                    $isActive = request()->routeIs(...$item['active']);
                @endphp

                @if (isset($item['children']))
                    <div class="rounded-lg border border-slate-200 bg-white">
                        <button
                            type="button"
                            x-on:click="activeAccordion = activeAccordion === {{ $index }} ? null : {{ $index }}"
                            x-bind:aria-expanded="(activeAccordion === {{ $index }}).toString()"
                            @class([
                                'flex w-full items-center justify-between rounded-lg px-4 py-2.5 text-left text-sm font-bold transition-colors',
                                'bg-red-50 text-[#C62828]' => $isActive,
                                'text-[#0F2D52] hover:bg-slate-50' => ! $isActive,
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
                                    <p class="px-3 pb-1 pt-3 text-xs font-bold uppercase tracking-[0.16em] text-[#0F2D52]">
                                        {{ $group['heading'] }}
                                    </p>
                                @endif

                                @foreach ($group['items'] as $child)
                                    <a
                                        href="{{ route($child['route']) }}"
                                        x-on:click="mobileOpen = false"
                                        @class([
                                            'block rounded-md px-3 py-2 text-sm font-semibold transition-colors',
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
                @else
                    <a
                        href="{{ route($item['route']) }}"
                        x-on:click="mobileOpen = false"
                        @class([
                            'rounded-lg px-4 py-2.5 text-sm font-bold transition-colors',
                            'bg-[#C62828] text-white shadow-lg shadow-[#C62828]/20' => ($item['button'] ?? false) && ! $isActive,
                            'bg-[#A61E1E] text-white shadow-lg shadow-[#C62828]/20' => ($item['button'] ?? false) && $isActive,
                            'bg-red-50 text-[#C62828]' => ! ($item['button'] ?? false) && $isActive,
                            'text-slate-700 hover:bg-slate-100 hover:text-[#0F2D52]' => ! ($item['button'] ?? false) && ! $isActive,
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

