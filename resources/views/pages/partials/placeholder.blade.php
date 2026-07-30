@extends('layouts.app', ['title' => $title . ' | Karya Fortuna Group'])

@section('content')
    <section class="min-h-screen bg-neutral-50 pt-28">
        <div class="mx-auto max-w-7xl px-5 py-16 sm:px-6 lg:px-8">
            <nav class="mb-8 flex flex-wrap items-center gap-2 text-sm text-neutral-500" aria-label="Breadcrumb">
                <a href="{{ route('home') }}" class="font-medium text-neutral-700 transition-colors hover:text-red-700">Beranda</a>
                @foreach ($breadcrumbs as $breadcrumb)
                    <span aria-hidden="true">/</span>
                    @if (! empty($breadcrumb['route']))
                        <a href="{{ route($breadcrumb['route']) }}" class="font-medium text-neutral-700 transition-colors hover:text-red-700">
                            {{ $breadcrumb['label'] }}
                        </a>
                    @else
                        <span class="font-medium text-neutral-950" aria-current="page">{{ $breadcrumb['label'] }}</span>
                    @endif
                @endforeach
            </nav>

            <div data-page-shell class="rounded-xl border border-neutral-200 bg-white p-8 shadow-sm sm:p-10 lg:p-12">
                <p class="mb-4 text-sm font-bold uppercase tracking-[0.18em] text-red-700">Karya Fortuna Group</p>
                <h1 class="text-3xl font-extrabold text-neutral-950 sm:text-4xl">{{ $title }}</h1>
                <p class="mt-5 max-w-2xl text-base leading-8 text-neutral-600">Halaman Sedang Dalam Pengembangan</p>
            </div>
        </div>
    </section>
@endsection

