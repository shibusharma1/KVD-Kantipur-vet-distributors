@extends('themes.default.common.master')
@section('meta_keyword', $data->meta_keyword)
@section('meta_description', $data->meta_description)
@section('content')

    <!-- ========================= PAGE BANNER ========================= -->
    <section class="relative h-[420px] overflow-hidden">
        <!-- Background -->
        <img {{-- src="assets/img/about.webp" --}}
            src="{{ $data->banner ? asset('uploads/medium/' . $data->banner) : asset('assets/uploads/img/about.webp') }}"
            alt="{{ $data->post_type }}" loading="lazy" class="w-full h-[420px] object-cover">
        <!-- Overlay -->
        <div class="absolute inset-0 bg-black/55"></div>
        <!-- Bottom Gradient -->
        <div class="absolute bottom-0 left-0 w-full h-32 bg-gradient-to-t from-black/40 to-transparent"></div>
        <!-- Content -->
        <div class="absolute inset-0 flex flex-col items-center justify-center text-center px-4">
            <p class="text-white/80 uppercase tracking-[0.25em] text-sm reveal">
                <a href=" {{ url('/') }} ">HOME</a> / {{ $data->post_type }}
            </p>
            <h1 class="mt-5 text-white text-4xl md:text-6xl font-bold reveal">
                {{ $data->uid }}
            </h1>
        </div>
    </section>


    <section class="py-12 md:py-12 bg-[#F7F8FA] overflow-hidden">
        <div class="max-w-7xl mx-auto px-5 lg:px-8">
            <div class="text-center max-w-3xl mx-auto reveal">
                <span class="section-tag justify-center">
                    Our Gallery
                </span>
                <h2 class="mt-5 text-4xl md:text-5xl font-bold leading-tight">
                    {{-- Capturing Moments --}}
                    {!! $data->caption !!}
                    {{-- <span class="text-[var(--color-secondary)]">
                        That Matter
                    </span> --}}
                </h2>
                <p class="mt-5 text-[16px] leading-9">
                    {{-- Explore highlights from our corporate events, training programs,
                    product launches, field visits and milestones across Nepal. --}}
                     {!! $data->content !!}
                </p>
            </div>
        </div>
        {{-- <div class="max-w-7xl mx-auto px-5 lg:px-8">
        <div class="flex flex-wrap justify-center gap-4 reveal">
            <button class="px-6 py-3 rounded-full bg-primary text-white font-semibold">
                All
            </button>
            <button class="px-6 py-3 rounded-full border border-gray-200 hover:bg-primary hover:text-white transition duration-300">
                Events
            </button>
            <button class="px-6 py-3 rounded-full border border-gray-200 hover:bg-primary hover:text-white transition duration-300">
                Training
            </button>
            <button class="px-6 py-3 rounded-full border border-gray-200 hover:bg-primary hover:text-white transition duration-300">
                Products
            </button>
            <button class="px-6 py-3 rounded-full border border-gray-200 hover:bg-primary hover:text-white transition duration-300">
                Corporate
            </button>
        </div>
    </div> --}}
    </section>
    <section class="pt-0">
        <div class="max-w-7xl mx-auto px-5 lg:px-8">
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($posts as $key => $post)
                    @php
                        $image = $post->banner
                            ? asset('uploads/medium/' . $post->banner)
                            : ($post->page_thumbnail
                                ? asset('uploads/medium/' . $post->page_thumbnail)
                                : asset('assets/uploads/img/about.webp'));

                        $isLarge = $key == 0 || $key == 5;
                    @endphp

                    <div class="{{ $isLarge ? 'lg:col-span-2' : '' }} reveal">
                        <a href="{{ $image }}" class="group block overflow-hidden rounded-[32px] modern-card">

                            <div class="relative overflow-hidden">
                                <img src="{{ $image }}" alt="{{ $post->post_title }}"
                                    class="{{ $isLarge ? 'h-[420px]' : 'h-[320px]' }} w-full object-cover transition duration-700 group-hover:scale-110">

                                <div class="absolute inset-0 bg-black/0 group-hover:bg-black/10 transition duration-300">
                                </div>

                                <div
                                    class="absolute top-5 right-5 opacity-0 group-hover:opacity-100 transition duration-300">
                                    <div
                                        class="w-12 h-12 rounded-full bg-white text-primary flex items-center justify-center">
                                        <i class="fa-solid fa-expand"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            @if ($posts->hasPages())
                <div class="mt-12">
                    {!! $posts->links('themes.default.common.pagination') !!}
                </div>
            @endif
        </div>
    </section>

@endsection
