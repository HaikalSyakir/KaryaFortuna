<footer class="border-t border-neutral-200 bg-white">
    <div class="mx-auto grid max-w-7xl gap-10 px-5 py-12 sm:px-6 lg:grid-cols-[1.1fr_0.7fr_1fr] lg:px-8">
        <div>
            <a href="{{ route('home') }}" class="inline-flex items-center gap-3" aria-label="Karya Fortuna Group">
                <span class="flex size-11 items-center justify-center rounded-lg bg-neutral-950 shadow-lg shadow-neutral-950/15">
                    <span class="text-base font-extrabold text-white">KF</span>
                </span>
                <span class="flex flex-col leading-none">
                    <span class="text-base font-bold text-neutral-950 sm:text-lg">Karya Fortuna</span>
                    <span class="mt-1 text-xs font-semibold uppercase tracking-[0.18em] text-red-700">Group</span>
                </span>
            </a>

            <p class="mt-5 max-w-sm text-sm leading-7 text-neutral-600">
                Mitra solusi maritim profesional untuk transportasi laut, kepelabuhanan, dan kebutuhan operasional kapal.
            </p>
        </div>

        <nav aria-label="Menu footer">
            <p class="text-sm font-bold text-neutral-950">Menu Singkat</p>
            <div class="mt-4 flex flex-col gap-3 text-sm font-medium text-neutral-600">
                <a href="{{ route('home') }}" class="transition-colors hover:text-red-700">Beranda</a>
                <a href="{{ route('about.profile') }}" class="transition-colors hover:text-red-700">Tentang Kami</a>
                <a href="{{ route('services.bulk-cargo-transport') }}" class="transition-colors hover:text-red-700">Layanan</a>
                <a href="{{ route('contact') }}" class="transition-colors hover:text-red-700">Hubungi Kami</a>
            </div>
        </nav>

        <address class="not-italic">
            <p class="text-sm font-bold text-neutral-950">Kontak</p>
            <div class="mt-4 space-y-3 text-sm leading-7 text-neutral-600">
                <p>Jl. Pelabuhan Indonesia, Jakarta, Indonesia</p>
                <p>
                    <a href="mailto:info@karyafortunagroup.co.id" class="transition-colors hover:text-red-700">
                        info@karyafortunagroup.co.id
                    </a>
                </p>
                <p>
                    <a href="tel:+622112345678" class="transition-colors hover:text-red-700">
                        +62 21 1234 5678
                    </a>
                </p>
            </div>
        </address>
    </div>

    <div class="border-t border-neutral-200">
        <div class="mx-auto max-w-7xl px-5 py-5 text-sm text-neutral-500 sm:px-6 lg:px-8">
            <p>&copy; {{ date('Y') }} Karya Fortuna Group. All rights reserved.</p>
        </div>
    </div>
</footer>
