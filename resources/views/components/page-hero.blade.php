@props([
    'id' => 'page-hero-title',
    'eyebrow' => 'Tentang Kami',
    'title',
    'description',
    'background',
    'alt' => 'Kapal dan aktivitas pelayaran di area maritim',
    'variant' => 'cinematic',
    'imagePosition' => 'right',
    'visualLabel' => null,
    'visualCaption' => null,
    'secondaryBackground' => null,
    'secondaryAlt' => 'Aktivitas pelayaran dan logistik maritim',
])

@php
    $isImageLeft = $imagePosition === 'left';
    $visualLabel = $visualLabel ?? $eyebrow;
    $visualCaption = $visualCaption ?? 'Maritime business network';
    $secondaryBackground = $secondaryBackground ?? $background;
@endphp

@if ($variant === 'split')
    <section class="relative isolate overflow-hidden bg-white pt-16" aria-labelledby="{{ $id }}">
        <div class="pointer-events-none absolute inset-x-0 top-16 h-px bg-[#0F2D52]/10"></div>
        <div class="pointer-events-none absolute -right-10 top-28 hidden h-32 w-48 border-r border-t border-[#0F2D52]/10 lg:block"></div>
        <div class="mx-auto grid min-h-[68vh] max-w-7xl gap-10 px-5 py-18 sm:px-6 sm:py-22 lg:grid-cols-[0.9fr_1.1fr] lg:items-center lg:px-8 lg:py-24">
            <div data-hero-text @class(['order-2' => $isImageLeft, 'lg:order-2' => $isImageLeft])>
                <div class="mb-5 flex items-center gap-3">
                    <span class="h-px w-12 bg-[#0F2D52]/65"></span>
                    <span class="h-1.5 w-8 rounded-full bg-[#C62828]"></span>
                </div>
                <p class="text-xs font-bold uppercase tracking-[0.2em] text-[#C62828]">{{ $eyebrow }}</p>
                <h1 id="{{ $id }}" class="mt-4 max-w-3xl text-4xl font-extrabold leading-tight tracking-tight text-[#081F3A] sm:text-5xl lg:text-6xl">
                    {{ $title }}
                </h1>
                <p class="mt-6 max-w-2xl text-base leading-8 text-slate-600 sm:text-lg">
                    {{ $description }}
                </p>
            </div>

            <figure data-hero-visual @class(['relative overflow-hidden rounded-lg border border-[#0F2D52]/12 bg-[#081F3A] shadow-2xl shadow-[#0F2D52]/14', 'order-1 lg:order-1' => $isImageLeft])>
                <span class="absolute -left-8 top-8 z-10 h-24 w-24 rounded-lg border border-white/20"></span>
                <span class="absolute right-0 top-0 z-10 h-1.5 w-28 bg-[#C62828]"></span>
                <img src="{{ $background }}" alt="{{ $alt }}" class="aspect-[4/3] w-full object-cover transition duration-700 hover:scale-[1.025]" loading="eager" fetchpriority="high">
                <figcaption class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-[#081F3A]/92 to-transparent px-6 pb-6 pt-20 text-sm font-semibold text-white">
                    {{ $visualCaption }}
                </figcaption>
            </figure>
        </div>
    </section>
@elseif ($variant === 'minimal')
    <section class="relative isolate overflow-hidden bg-[#F8FAFC] pt-16" aria-labelledby="{{ $id }}">
        <div class="pointer-events-none absolute inset-x-0 top-16 h-px bg-[#0F2D52]/10"></div>
        <div class="pointer-events-none absolute inset-x-0 top-0 -z-10 h-72 bg-[radial-gradient(circle_at_50%_0%,rgba(15,45,82,0.12)_0%,rgba(15,45,82,0.05)_32%,transparent_68%)]"></div>
        <div class="pointer-events-none absolute inset-0 -z-10 bg-[linear-gradient(rgba(15,45,82,0.045)_1px,transparent_1px),linear-gradient(90deg,rgba(15,45,82,0.045)_1px,transparent_1px)] bg-[size:64px_64px] [mask-image:linear-gradient(to_bottom,black_0%,black_54%,transparent_88%)]"></div>

        <div class="mx-auto min-h-[82vh] max-w-7xl px-5 py-16 sm:px-6 sm:py-20 lg:px-8 lg:py-24">
            <div data-hero-text class="mx-auto max-w-5xl text-center">
                <div class="mb-5 flex items-center justify-center gap-3">
                    <span class="h-px w-10 bg-[#0F2D52]/55"></span>
                    <span class="h-1.5 w-1.5 rounded-full bg-[#C62828]"></span>
                    <p class="text-xs font-bold uppercase tracking-[0.24em] text-[#C62828]">{{ $eyebrow }}</p>
                    <span class="h-1.5 w-1.5 rounded-full bg-[#C62828]"></span>
                    <span class="h-px w-10 bg-[#0F2D52]/55"></span>
                </div>

                <h1 id="{{ $id }}" class="mx-auto max-w-5xl text-[clamp(2.75rem,6.8vw,6.25rem)] font-extrabold leading-[0.98] tracking-tight text-[#081F3A]">
                    {{ $title }}
                </h1>

                <p class="mx-auto mt-6 max-w-2xl text-base leading-8 text-slate-600 sm:text-lg">
                    {{ $description }}
                </p>
            </div>

            <div data-hero-visual class="relative mx-auto mt-12 max-w-6xl sm:mt-14 lg:mt-16">
                <div class="pointer-events-none absolute -left-4 top-10 hidden h-24 w-24 border-l border-t border-[#0F2D52]/14 lg:block"></div>
                <div class="pointer-events-none absolute -right-4 bottom-10 hidden h-24 w-24 border-b border-r border-[#C62828]/28 lg:block"></div>

                <figure class="group relative overflow-hidden rounded-lg border border-[#0F2D52]/12 bg-[#081F3A] shadow-2xl shadow-[#0F2D52]/12">
                    <img
                        src="{{ $background }}"
                        alt="{{ $alt }}"
                        class="aspect-[16/8.5] w-full object-cover transition duration-700 ease-out group-hover:scale-[1.025] sm:aspect-[16/7.5]"
                        loading="eager"
                        fetchpriority="high"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-[#081F3A]/62 via-transparent to-transparent"></div>
                    <span class="absolute left-6 top-6 h-1 w-20 rounded-full bg-[#C62828]"></span>
                </figure>

                <figure class="group relative ml-auto mt-4 w-[78%] overflow-hidden rounded-lg border border-white/70 bg-white p-2 shadow-xl shadow-[#0F2D52]/12 sm:-mt-20 sm:w-[46%] lg:-mt-28 lg:mr-12">
                    <div class="overflow-hidden rounded-md bg-[#081F3A]">
                        <img
                            src="{{ $secondaryBackground }}"
                            alt="{{ $secondaryAlt }}"
                            class="aspect-[4/3] w-full object-cover transition duration-700 ease-out group-hover:scale-[1.035]"
                            loading="eager"
                            fetchpriority="high"
                        >
                    </div>
                    <div class="absolute inset-x-6 bottom-5 hidden items-center gap-3 rounded-md border border-white/14 bg-[#081F3A]/84 px-4 py-3 text-left text-white backdrop-blur-md sm:flex">
                        <span class="h-8 w-px bg-[#C62828]"></span>
                        <p class="text-xs font-bold uppercase tracking-[0.16em] text-white/78">Forward-looking maritime growth</p>
                    </div>
                </figure>
            </div>
        </div>
    </section>
@elseif ($variant === 'corporate')
    <section class="relative isolate overflow-hidden bg-[#081F3A] pt-16 text-white" aria-labelledby="{{ $id }}">
        <div class="pointer-events-none absolute inset-y-0 right-0 hidden w-1/2 bg-white lg:block"></div>
        <div class="pointer-events-none absolute left-0 top-16 h-px w-2/5 bg-gradient-to-r from-[#C62828]/55 to-transparent"></div>
        <div class="mx-auto grid min-h-[66vh] max-w-7xl gap-10 px-5 py-18 sm:px-6 sm:py-22 lg:grid-cols-[0.88fr_1.12fr] lg:items-center lg:px-8 lg:py-24">
            <div data-hero-text class="relative z-10 max-w-3xl">
                <p class="text-xs font-bold uppercase tracking-[0.2em] text-red-100">{{ $eyebrow }}</p>
                <h1 id="{{ $id }}" class="mt-4 text-4xl font-extrabold leading-tight tracking-tight text-white sm:text-5xl lg:text-6xl">
                    {{ $title }}
                </h1>
                <p class="mt-6 max-w-2xl text-base leading-8 text-slate-200 sm:text-lg">
                    {{ $description }}
                </p>
                <div class="mt-10 grid max-w-xl grid-cols-3 gap-3" aria-hidden="true">
                    <span class="h-16 rounded-md border border-white/10 bg-white/8"></span>
                    <span class="h-16 rounded-md border border-white/10 bg-white/12"></span>
                    <span class="h-16 rounded-md border border-[#C62828]/40 bg-[#C62828]/18"></span>
                </div>
            </div>

            <figure data-hero-visual class="relative z-10 overflow-hidden rounded-lg border border-white/12 bg-[#0F2D52] shadow-2xl shadow-slate-950/25 lg:translate-x-4">
                <img src="{{ $background }}" alt="{{ $alt }}" class="aspect-[16/11] w-full object-cover opacity-95 transition duration-700 hover:scale-[1.025]" loading="eager" fetchpriority="high">
                <div class="absolute inset-0 bg-gradient-to-t from-[#081F3A]/82 via-transparent to-transparent"></div>
                <figcaption class="absolute bottom-5 left-5 right-5 rounded-md border border-white/12 bg-[#081F3A]/82 px-5 py-4 text-sm font-semibold text-white backdrop-blur-md">
                    {{ $visualCaption }}
                </figcaption>
            </figure>
        </div>
    </section>
@elseif ($variant === 'formal')
    <section class="relative isolate min-h-[78vh] overflow-hidden bg-[#081F3A] pt-16 text-white sm:min-h-[84vh] lg:min-h-[88vh]" aria-labelledby="{{ $id }}">
        <img
            src="{{ $background }}"
            alt="{{ $alt }}"
            class="absolute inset-0 -z-30 h-full w-full scale-[1.03] object-cover object-center motion-safe:animate-[legalHeroImage_18s_ease-in-out_infinite_alternate]"
            loading="eager"
            fetchpriority="high"
        >

        <div class="absolute inset-0 -z-20 bg-[#081F3A]/46"></div>
        <div class="absolute inset-0 -z-20 bg-[radial-gradient(circle_at_76%_26%,rgba(255,255,255,0.20)_0%,rgba(255,255,255,0.06)_18%,transparent_36%),linear-gradient(90deg,rgba(8,31,58,0.98)_0%,rgba(8,31,58,0.88)_38%,rgba(8,31,58,0.56)_70%,rgba(8,31,58,0.38)_100%)]"></div>
        <div class="absolute inset-0 -z-10 bg-[linear-gradient(rgba(255,255,255,0.055)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,0.055)_1px,transparent_1px)] bg-[size:72px_72px] opacity-35 [mask-image:linear-gradient(90deg,black_0%,black_48%,transparent_82%)]"></div>
        <div class="absolute inset-x-0 bottom-0 -z-10 h-44 bg-gradient-to-t from-[#081F3A] to-transparent"></div>

        <div class="pointer-events-none absolute left-5 top-28 hidden h-24 w-px bg-gradient-to-b from-transparent via-white/24 to-transparent sm:block"></div>
        <div class="pointer-events-none absolute right-0 top-32 hidden h-px w-1/3 bg-gradient-to-l from-white/20 to-transparent lg:block"></div>
        <div class="pointer-events-none absolute bottom-24 left-0 hidden h-px w-2/5 bg-gradient-to-r from-[#C62828]/70 to-transparent lg:block"></div>

        <div class="mx-auto flex min-h-[calc(78vh-4rem)] w-full max-w-7xl items-center px-5 py-16 sm:min-h-[calc(84vh-4rem)] sm:px-6 sm:py-20 lg:min-h-[calc(88vh-4rem)] lg:px-8">
            <div class="grid w-full gap-10 lg:grid-cols-[0.78fr_0.42fr] lg:items-end">
                <div data-hero-text class="max-w-4xl">
                    <div class="mb-6 flex items-center gap-4">
                        <span class="h-10 w-px bg-[#C62828] sm:h-14"></span>
                        <p class="text-xs font-bold uppercase tracking-[0.24em] text-white/88">
                            <span class="text-[#F04444]">Trust</span> &amp; Compliance
                        </p>
                    </div>

                    <h1 id="{{ $id }}" class="max-w-4xl text-[clamp(3rem,7vw,6.75rem)] font-extrabold leading-[0.95] tracking-tight text-white">
                        {{ $title }}
                    </h1>

                    <p class="mt-7 max-w-2xl text-base leading-8 text-white/78 sm:text-lg lg:text-xl lg:leading-9">
                        {{ $description }}
                    </p>

                    <div class="mt-9 flex flex-wrap items-center gap-3" aria-hidden="true">
                        <span class="h-1 w-20 rounded-full bg-[#C62828] motion-safe:animate-[legalHeroLine_2.8s_ease-in-out_infinite]"></span>
                        <span class="h-px w-28 bg-white/32"></span>
                        <span class="text-xs font-bold uppercase tracking-[0.18em] text-white/55">Verified maritime governance</span>
                    </div>
                </div>

                <div data-hero-visual class="hidden lg:block">
                    <div class="relative overflow-hidden rounded-lg border border-white/14 bg-white/8 p-5 shadow-2xl shadow-slate-950/30 backdrop-blur-md">
                        <div class="absolute inset-x-0 top-0 h-px bg-gradient-to-r from-transparent via-white/35 to-transparent"></div>
                        <div class="flex items-center justify-between gap-6">
                            <div>
                                <p class="text-xs font-bold uppercase tracking-[0.2em] text-red-100">Corporate Records</p>
                                <p class="mt-3 text-2xl font-extrabold text-white">Legal &amp; Certified</p>
                            </div>
                            <span class="flex size-12 items-center justify-center rounded-md border border-white/15 bg-[#C62828]/90 text-sm font-extrabold text-white">KF</span>
                        </div>
                        <div class="mt-7 grid gap-3">
                            <span class="h-2 w-full rounded-full bg-white/22"></span>
                            <span class="h-2 w-4/5 rounded-full bg-white/14"></span>
                            <span class="h-2 w-2/3 rounded-full bg-[#C62828]/50"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@elseif ($variant === 'affiliate-asymmetric')
    <section class="relative isolate overflow-hidden bg-white pt-16" aria-labelledby="{{ $id }}">
        <div class="pointer-events-none absolute left-0 top-16 hidden h-full w-[38%] bg-[#F4F7FB] lg:block"></div>
        <div class="mx-auto grid min-h-[66vh] max-w-7xl gap-10 px-5 py-18 sm:px-6 sm:py-22 lg:grid-cols-[1.05fr_0.95fr] lg:items-center lg:px-8 lg:py-24">
            <figure data-hero-visual class="relative overflow-hidden rounded-lg border border-[#0F2D52]/12 bg-[#081F3A] shadow-2xl shadow-[#0F2D52]/14 lg:-rotate-1">
                <img src="{{ $background }}" alt="{{ $alt }}" class="aspect-[5/4] w-full object-cover transition duration-700 hover:scale-[1.025]" loading="eager" fetchpriority="high">
                <span class="absolute left-0 top-0 h-1.5 w-32 bg-[#C62828]"></span>
            </figure>
            <div data-hero-text>
                <p class="text-xs font-bold uppercase tracking-[0.2em] text-[#C62828]">{{ $eyebrow }}</p>
                <h1 id="{{ $id }}" class="mt-4 text-4xl font-extrabold leading-tight tracking-tight text-[#081F3A] sm:text-5xl lg:text-6xl">{{ $title }}</h1>
                <p class="mt-6 max-w-2xl text-base leading-8 text-slate-600 sm:text-lg">{{ $description }}</p>
                <div class="mt-8 rounded-lg border border-[#0F2D52]/12 bg-[#F8FAFC] p-5">
                    <p class="text-sm font-semibold leading-7 text-slate-600">{{ $visualCaption }}</p>
                </div>
            </div>
        </div>
    </section>
@elseif ($variant === 'affiliate-visual')
    <section class="relative isolate min-h-[68vh] overflow-hidden bg-[#081F3A] pt-16 text-white" aria-labelledby="{{ $id }}">
        <img src="{{ $background }}" alt="{{ $alt }}" class="absolute inset-0 -z-20 h-full w-full object-cover" loading="eager" fetchpriority="high">
        <div class="absolute inset-0 -z-10 bg-[#081F3A]/58"></div>
        <div class="absolute inset-0 -z-10 bg-[linear-gradient(90deg,rgba(8,31,58,0.86)_0%,rgba(8,31,58,0.48)_56%,rgba(8,31,58,0.18)_100%)]"></div>
        <div class="mx-auto flex min-h-[68vh] max-w-7xl items-end px-5 py-16 sm:px-6 lg:px-8">
            <div data-hero-text class="max-w-2xl rounded-lg border border-white/12 bg-[#081F3A]/88 p-6 shadow-2xl shadow-slate-950/28 backdrop-blur-md sm:p-8">
                <p class="text-xs font-bold uppercase tracking-[0.2em] text-red-100">{{ $eyebrow }}</p>
                <h1 id="{{ $id }}" class="mt-4 text-4xl font-extrabold leading-tight tracking-tight text-white sm:text-5xl">{{ $title }}</h1>
                <p class="mt-5 text-base leading-8 text-slate-200 sm:text-lg">{{ $description }}</p>
                <span class="mt-7 block h-1 w-20 rounded-full bg-[#C62828]"></span>
            </div>
        </div>
    </section>
@else
    <section class="relative isolate flex min-h-[66vh] overflow-hidden bg-[#081F3A] pt-16 text-white sm:min-h-[72vh]" aria-labelledby="{{ $id }}">
        <img src="{{ $background }}" alt="{{ $alt }}" class="absolute inset-0 -z-20 h-full w-full object-cover" loading="eager" fetchpriority="high">
        <div class="absolute inset-0 -z-10 bg-[#081F3A]/68"></div>
        <div class="absolute inset-0 -z-10 bg-[linear-gradient(90deg,rgba(8,31,58,0.94)_0%,rgba(8,31,58,0.74)_50%,rgba(8,31,58,0.45)_100%)]"></div>

        <div class="mx-auto flex w-full max-w-7xl items-center px-5 py-20 sm:px-6 lg:px-8">
            <div data-hero-text class="max-w-3xl">
                <p class="text-xs font-bold uppercase tracking-[0.2em] text-red-100">{{ $eyebrow }}</p>
                <h1 id="{{ $id }}" class="mt-4 max-w-3xl text-4xl font-extrabold leading-tight tracking-tight text-white sm:text-5xl lg:text-6xl">
                    {{ $title }}
                </h1>
                <p class="mt-6 max-w-2xl text-base leading-8 text-white/84 sm:text-lg">
                    {{ $description }}
                </p>
            </div>
        </div>
    </section>
@endif
