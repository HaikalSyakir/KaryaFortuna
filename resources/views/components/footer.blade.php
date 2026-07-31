<footer class="border-t border-slate-200 bg-white">
    <div class="mx-auto grid max-w-7xl gap-10 px-5 py-12 sm:px-6 lg:grid-cols-[1.1fr_0.7fr_1fr] lg:px-8">
        <div>
            <a href="{{ route('home') }}" class="inline-flex items-center gap-3" aria-label="Karya Fortuna Shipping">
                <span class="flex size-11 items-center justify-center rounded-md bg-[#0F2D52] text-white shadow-lg shadow-slate-950/15">
                    <span class="text-base font-extrabold">KF</span>
                </span>
                <span class="flex flex-col leading-none">
                    <span class="text-base font-extrabold text-[#0F2D52] sm:text-lg">Karya Fortuna</span>
                    <span class="mt-1 text-xs font-bold uppercase tracking-[0.18em] text-[#C62828]">Shipping</span>
                </span>
            </a>

            <p class="mt-5 max-w-sm text-sm leading-7 text-slate-600">
                Mitra solusi maritim profesional untuk transportasi laut, kepelabuhanan, perawatan kapal, dan kebutuhan operasional armada.
            </p>
        </div>

        <nav aria-label="Menu footer">
            <p class="text-sm font-bold text-[#111827]">Menu Singkat</p>
            <div class="mt-4 flex flex-col gap-3 text-sm font-medium text-slate-600">
                <a href="{{ route('home') }}" class="transition-colors hover:text-[#C62828]">Beranda</a>
                <a href="{{ route('about.profile') }}" class="transition-colors hover:text-[#C62828]">Tentang Kami</a>
                <a href="{{ route('services.bulk-cargo-transport') }}" class="transition-colors hover:text-[#C62828]">Layanan</a>
                <a href="{{ route('contact') }}" class="transition-colors hover:text-[#C62828]">Hubungi Kami</a>
            </div>
        </nav>

        <address class="not-italic">
            <p class="text-sm font-bold text-[#111827]">Kontak</p>
            <div class="mt-4 space-y-3 text-sm leading-7 text-slate-600">
                <p>Jakarta, Indonesia</p>
                <p>
                    <a href="mailto:info@karyafortunashipping.co.id" class="transition-colors hover:text-[#C62828]">
                        info@karyafortunashipping.co.id
                    </a>
                </p>
                <p>
                    <a href="tel:+622112345678" class="transition-colors hover:text-[#C62828]">
                        +62 21 1234 5678
                    </a>
                </p>
            </div>
        </address>
    </div>

    <div class="border-t border-slate-200">
        <div class="mx-auto max-w-7xl px-5 py-5 text-sm text-slate-500 sm:px-6 lg:px-8">
            <p>&copy; {{ date('Y') }} Karya Fortuna Shipping. All rights reserved.</p>
        </div>
    </div>
</footer>
