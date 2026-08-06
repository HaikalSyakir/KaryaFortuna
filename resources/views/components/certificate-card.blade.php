@props([
    'certificate',
    'index' => 0,
])

<button
    type="button"
    x-on:click="openCertificate({{ $index }})"
    class="group flex h-full w-full flex-col overflow-hidden rounded-lg border border-[#0F2D52]/12 bg-white text-left shadow-sm shadow-slate-950/5 transition duration-300 hover:-translate-y-1 hover:border-[#0F2D52]/24 hover:shadow-xl hover:shadow-[#0F2D52]/10 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-[#C62828]"
    aria-label="Lihat sertifikat {{ $certificate['title'] }}"
>
    <span class="relative block aspect-[4/3] overflow-hidden bg-[#081F3A]">
        <img
            src="{{ $certificate['image'] }}"
            alt="{{ $certificate['alt'] }}"
            class="h-full w-full object-contain p-4 transition duration-500 group-hover:scale-[1.03]"
            loading="lazy"
        >
        <span class="absolute inset-0 flex items-center justify-center bg-[#081F3A]/0 opacity-0 transition duration-300 group-hover:bg-[#081F3A]/50 group-hover:opacity-100">
            <span class="inline-flex items-center gap-2 rounded-md bg-[#C62828] px-4 py-2 text-xs font-extrabold uppercase tracking-[0.14em] text-white shadow-lg shadow-black/20">
                <svg class="size-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.964-7.178Z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                </svg>
                Lihat Sertifikat
            </span>
        </span>
    </span>

    <span class="flex flex-1 flex-col p-5">
        <span class="text-xs font-bold uppercase tracking-[0.16em] text-[#C62828]">{{ $certificate['category_label'] }}</span>
        <span class="mt-3 text-lg font-extrabold leading-snug text-[#081F3A]">{{ $certificate['title'] }}</span>
        <span class="mt-3 text-sm leading-7 text-slate-600">{{ $certificate['description'] }}</span>
        <span class="mt-5 inline-flex items-center gap-2 text-sm font-extrabold text-[#0F2D52] transition group-hover:text-[#C62828]">
            Lihat Sertifikat
            <svg class="size-4 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
            </svg>
        </span>
    </span>
</button>
