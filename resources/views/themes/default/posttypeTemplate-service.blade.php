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

    <section>
        <div class="max-w-7xl mx-auto px-5 lg:px-8">
            <div class="grid lg:grid-cols-[1fr_420px] gap-16 items-center">
                <div class="reveal">
                    <span class="section-tag">
                        {{-- Our data --}}
                        {{ $data->post_type }}
                    </span>
                    <h2 class="mt-5 text-4xl md:text-5xl font-bold leading-tight">
                        Complete Veterinary
                        <span class="text-[var(--color-secondary)]">
                            Support Solutions
                        </span>
                    </h2>
                    <p class="mt-6 text-[16px] leading-9 max-w-2xl">
                        Beyond product distribution, we provide technical expertise,
                        logistics support, cold-chain management, professional training,
                        and veterinary consultation data throughout Nepal.
                    </p>
                </div>
                <div class="modern-card p-8 reveal">
                    <div class="grid grid-cols-2 gap-8">
                        <div class="text-center border-2 border-grey rounded-2xl p-3">
                            <h3 class="text-4xl font-bold text-primary">
                                7
                            </h3>
                            <p class="mt-2 font-semibold">
                                Provinces
                            </p>
                        </div>
                        <div class="text-center border-2 border-grey rounded-2xl p-3">
                            <h3 class="text-4xl font-bold text-primary">
                                100+
                            </h3>
                            <p class="mt-2 font-semibold">
                                Experts
                            </p>
                        </div>
                        <div class="text-center border-2 border-grey rounded-2xl p-3">
                            <h3 class="text-4xl font-bold text-primary">
                                500+
                            </h3>
                            <p class="mt-2 font-semibold">
                                Dealers
                            </p>
                        </div>
                        <div class="text-center border-2 border-grey rounded-2xl p-3">
                            <h3 class="text-4xl font-bold text-primary">
                                24/7
                            </h3>
                            <p class="mt-2 font-semibold">
                                Support
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="max-w-7xl mx-auto px-5 lg:px-8">
            <!-- Section Heading -->
            <div class="text-center max-w-3xl mx-auto mb-16 reveal">
                <span class="section-tag justify-center">
                    Why Choose KVD
                </span>
                <h2 class="mt-5 text-4xl md:text-5xl font-bold leading-tight">
                    Trusted By Veterinary
                    <span class="text-[var(--color-secondary)]">
                        Professionals
                    </span>
                </h2>
                <p class="mt-6 text-[16px] leading-8">
                    Delivering quality veterinary healthcare solutions through
                    innovation, expertise, and a nationwide support network.
                </p>
            </div>
            <div class="grid lg:grid-cols-3 gap-8">
                <div class="modern-card p-10 reveal group">
                    <div class="flex items-center justify-between">
                        <div
                            class="w-16 h-16 rounded-2xl bg-primary/10 text-primary flex items-center justify-center text-3xl group-hover:bg-primary group-hover:text-white transition duration-300">
                            <i class="fa-solid fa-award"></i>
                        </div>
                        <span class="text-5xl font-bold text-primary/15">
                            01
                        </span>
                    </div>
                    <h3 class="mt-8 text-2xl font-bold">
                        23+ Years Experience
                    </h3>
                    <p class="mt-4 leading-8">
                        Decades of expertise in veterinary pharmaceuticals,
                        feed supplements and livestock healthcare solutions.
                    </p>
                </div>
                <!-- Card 2 -->
                <div class="modern-card p-10 reveal group">
                    <div class="flex items-center justify-between">
                        <div
                            class="w-16 h-16 rounded-2xl bg-[var(--color-secondary)]/10 text-[var(--color-secondary)] flex items-center justify-center text-3xl group-hover:bg-[var(--color-secondary)] group-hover:text-white transition duration-300">
                            <i class="fa-solid fa-shield-heart"></i>
                        </div>
                        <span class="text-5xl font-bold text-[var(--color-secondary)]/15">
                            02
                        </span>
                    </div>
                    <h3 class="mt-8 text-2xl font-bold">
                        Quality Assured
                    </h3>
                    <p class="mt-4 leading-8">
                        Products sourced from globally recognized manufacturers
                        with strict quality control and compliance standards.
                    </p>
                </div>
                <!-- Card 3 -->
                <div class="modern-card p-10 reveal group">
                    <div class="flex items-center justify-between">
                        <div
                            class="w-16 h-16 rounded-2xl bg-primary/10 text-primary flex items-center justify-center text-3xl group-hover:bg-primary group-hover:text-white transition duration-300">
                            <i class="fa-solid fa-truck-fast"></i>
                        </div>
                        <span class="text-5xl font-bold text-primary/15">
                            03
                        </span>
                    </div>
                    <h3 class="mt-8 text-2xl font-bold">
                        Nationwide Network
                    </h3>
                    <p class="mt-4 leading-8">
                        Serving veterinarians, distributors and livestock farmers
                        across all provinces through an extensive supply network.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="max-w-7xl mx-auto px-5 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="section-tag justify-center">
                    {{-- Our data --}}
                    {{ $data->post_type }}
                </span>
                <h2 class="mt-5 text-4xl md:text-5xl font-bold">
                    Excellence in
                    <span class="text-[var(--color-secondary)]">
                        Every Service
                    </span>
                </h2>
            </div>
            <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-6">
                @foreach ($posts as $service)
                    <div class="modern-card bg-[var(--color-surface-200)] p-8 group">
                        {{-- ICON (stored in DB as HTML) --}}
                        <div
                            class="w-16 h-16 rounded-2xl bg-[var(--color-primary)]/10 text-[var(--color-primary)] flex items-center justify-center text-3xl transition duration-300 group-hover:bg-[var(--color-primary)] group-hover:text-white">
                            {!! $service->post_excerpt !!}
                        </div>

                        {{-- TITLE --}}
                        <h3 class="mt-7 text-2xl font-bold leading-tight">
                            {{ $service->post_title }}
                        </h3>

                        {{-- DESCRIPTION --}}
                        <p class="mt-5 text-[16px] leading-8">
                            {!! $service->post_content !!}
                        </p>

                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
