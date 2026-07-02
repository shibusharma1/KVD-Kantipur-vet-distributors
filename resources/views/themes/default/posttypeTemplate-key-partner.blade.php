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
    <section class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-5 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div>
                    <span class="section-tag">
                        Global Network
                    </span>
                    <h2 class="mt-5 text-4xl md:text-5xl font-bold leading-tight">
                        Building Success Through
                        <span class="text-secondary">
                            Trusted Partnerships
                        </span>
                    </h2>
                    <p class="mt-6 text-[16px] leading-9">
                        We collaborate with leading international veterinary
                        manufacturers and healthcare innovators to provide
                        world-class animal health solutions across Nepal.
                    </p>
                </div>
                <div>
                    <img src="{{ $data->banner ? asset('uploads/medium/' . $data->banner) : asset('assets/uploads/img/about.webp') }}"
                        class="rounded-[32px] w-full h-[500px] object-cover">
                </div>
            </div>
        </div>
    </section>
    {{-- <section class="py-12 bg-[#F7F8FA]">
        <div class="max-w-7xl mx-auto px-5 lg:px-8">
            <div class="grid md:grid-cols-4 gap-6">
                <div class="modern-card p-8 text-center">
                    <h3 class="text-5xl font-bold text-primary">40+</h3>
                    <p class="mt-3">
                        Global Partners
                    </p>
                </div>
                <div class="modern-card p-8 text-center">
                    <h3 class="text-5xl font-bold text-primary">15+</h3>
                    <p class="mt-3">
                        Countries
                    </p>
                </div>
                <div class="modern-card p-8 text-center">
                    <h3 class="text-5xl font-bold text-primary">3000+</h3>
                    <p class="mt-3">
                        Products
                    </p>
                </div>
                <div class="modern-card p-8 text-center">
                    <h3 class="text-5xl font-bold text-primary">23+</h3>
                    <p class="mt-3">
                        Years Experience
                    </p>
                </div>
            </div>
        </div>
    </section> --}}
    <section class="py-12 bg-[#F7F8FA]">
        <div class="max-w-7xl mx-auto px-5 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-8">
                <span class="section-tag justify-center">
                    Our Partners
                </span>
                <h2 class="mt-5 text-4xl md:text-5xl font-bold">
                    Trusted Around The World
                </h2>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">

                @foreach ($posts as $partner)
                    <div class="modern-card p-8 text-center group reveal">

                        {{-- Partner Logo --}}
                        <div class="h-28 flex items-center justify-center">

                            @if (!empty($partner->page_thumbnail))
                                <img src="{{ asset('uploads/medium/' . $partner->page_thumbnail) }}"
                                    alt="{{ $partner->post_title }}"
                                    class="max-h-20 object-contain transition duration-300 group-hover:scale-105">
                            @else
                                <div
                                    class="w-20 h-20 rounded-[20px] bg-primary/10 flex items-center justify-center text-4xl">
                                    {{ $partner->post_excerpt ?? '🏢' }}
                                </div>
                            @endif

                        </div>

                        {{-- Partner Name --}}
                        <h3 class="mt-6 text-lg font-bold text-primary">
                            {{ $partner->post_title }}
                        </h3>

                        {{-- Country --}}
                        @if (!empty($partner->post_excerpt))
                            {{-- <p class="text-sm text-gray-500 mt-2">
                                {{ $partner->post_excerpt }}
                            </p> --}}
                        @endif

                        {{-- Description --}}
                        @if (!empty($partner->post_content))
                            <div class="mt-4 text-sm text-gray-600 leading-7 line-clamp-3">
                                {!! strip_tags($partner->post_content) !!}
                            </div>
                        @endif

                    </div>
                @endforeach

            </div>

            {{-- Pagination --}}
            @if ($posts->hasPages())
                <div class="mt-12">
                    {{ $posts->links('themes.default.common.pagination') }}
                </div>
            @endif  
        </div>
    </section>
    <section class="py-12 bg-[#F7F8FA]">
        <div class="max-w-7xl mx-auto px-5 lg:px-8">
            <div class="text-center mb-8">
                <span class="section-tag justify-center">
                    Partnership Strength
                </span>
                <h2 class="mt-5 text-4xl md:text-5xl font-bold">
                    Why Global Brands Choose Us
                </h2>
            </div>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="modern-card p-8">
                    <i class="fa-solid fa-earth-asia text-4xl text-secondary"></i>
                    <h3 class="mt-5 text-xl font-bold">Nationwide Reach</h3>
                </div>
                <div class="modern-card p-8">
                    <i class="fa-solid fa-truck-fast text-4xl text-secondary"></i>
                    <h3 class="mt-5 text-xl font-bold">Strong Distribution</h3>
                </div>
                <div class="modern-card p-8">
                    <i class="fa-solid fa-award text-4xl text-secondary"></i>
                    <h3 class="mt-5 text-xl font-bold">Trusted Reputation</h3>
                </div>
            </div>
        </div>
    </section>
    {{-- <section class="relative py-12 overflow-hidden">
        <div class="absolute inset-0">
            <img src="{{ asset('assets/uploads/img/vision.jpg') }}" class="w-full h-full object-cover">
        </div>
        <div class="absolute inset-0 bg-primary/90"></div>
        <div class="relative z-10 max-w-5xl mx-auto px-5 lg:px-8 text-center">
            <span class="section-tag text-white justify-center">
                Let's Work Together
            </span>
            <h2 class="mt-5 text-4xl md:text-5xl font-bold text-white">
                Interested In Partnering With Us?
            </h2>
            <p class="mt-6 text-white/80 leading-9">
                Join our growing network of international veterinary healthcare partners.
            </p>
            <div class="mt-10">
                <a href="{{ url('page/contact.html') }}" class="white-btn">
                    Contact Us
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section> --}}
@endsection
