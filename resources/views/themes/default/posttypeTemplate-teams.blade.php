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
    <section class="bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-12 reveal">

                <span class="section-tag justify-center">
                    {{ $data->uid }}
                </span>

                <h2 class="mt-5 text-4xl md:text-5xl font-bold leading-tight">
                    Meet The
                    <span class="text-[var(--color-secondary)] italic">
                        Professionals
                    </span>
                    Behind Our Success
                </h2>

                <p class="mt-6 text-[16px] leading-9">
                    {!! $data->caption !!}
                </p>

            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">

                @foreach ($posts as $member)
                    <div class="modern-card overflow-hidden group reveal">

                        {{-- Image --}}
                        <div class="relative overflow-hidden">


                            @if ($member->page_thumbnail)
                                <img src="{{ asset('uploads/medium/' . $member->page_thumbnail) }}"
                                    alt="{{ $member->post_title }}"
                                    class="w-full h-[340px] object-cover transition duration-700 group-hover:scale-105">
                            @else
                                <div class="h-[340px] bg-primary/10 flex items-center justify-center">
                                    <i class="fa-solid fa-user text-7xl text-primary/30"></i>
                                </div>
                            @endif

                        </div>

                        {{-- Content --}}
                        <div class="p-8">

                            {{-- Name --}}
                            <h3 class="text-2xl font-bold leading-tight">
                                {{ $member->post_title }}
                            </h3>

                            {{-- Designation --}}
                            @if ($member->post_excerpt)
                                <p
                                    class="mt-3 text-[var(--color-secondary)] font-semibold uppercase tracking-[0.08em] text-sm">
                                    {{ $member->post_excerpt }}
                                </p>
                            @endif

                            {{-- Bio --}}
                            @if ($member->post_content)
                                <p class="mt-5 text-[16px] leading-8 text-gray-600">
                                    {{ Str::limit(strip_tags($member->post_content), 120) }}
                                </p>
                            @endif

                        </div>

                    </div>
                @endforeach
            </div>
            @if ($posts->hasPages())
                <div class="mt-16 flex justify-center">
                    {{ $posts->links('themes.default.common.pagination') }}
                </div>
            @endif
        </div>
    </section>
    {{-- <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-12">
                <span class="section-tag">
                    Why Our Team
                </span>
                <h2 class="mt-5 text-4xl md:text-5xl font-bold leading-tight">
                    What Drives Us Every Day
                </h2>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="modern-card p-8 text-center">
                    <div class="w-16 h-16 rounded-full bg-primary/10 mx-auto flex items-center justify-center">
                        <i class="fa-solid fa-award text-primary text-2xl"></i>
                    </div>
                    <h3 class="mt-6 text-xl font-bold">
                        Excellence
                    </h3>
                    <p class="mt-4 text-gray-600">
                        Committed to maintaining the highest standards in every aspect of our work.
                    </p>
                </div>
                <div class="modern-card p-8 text-center">
                    <div class="w-16 h-16 rounded-full bg-primary/10 mx-auto flex items-center justify-center">
                        <i class="fa-solid fa-lightbulb text-primary text-2xl"></i>
                    </div>
                    <h3 class="mt-6 text-xl font-bold">
                        Innovation
                    </h3>
                    <p class="mt-4 text-gray-600">
                        Continuously seeking new solutions to improve animal health and well-being.
                    </p>
                </div>
                <div class="modern-card p-8 text-center">
                    <div class="w-16 h-16 rounded-full bg-primary/10 mx-auto flex items-center justify-center">
                        <i class="fa-solid fa-handshake text-primary text-2xl"></i>
                    </div>
                    <h3 class="mt-6 text-xl font-bold">
                        Collaboration
                    </h3>
                    <p class="mt-4 text-gray-600">
                        Working together with partners, customers, and communities to create impact.
                    </p>
                </div>
            </div>
        </div>
    </section> --}}
    <section class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="modern-card p-10 lg:p-14">
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div>
                        <span class="section-tag">
                            Leadership
                        </span>
                        <h2 class="section-title mt-6">
                            <h2 class="mt-5 text-4xl md:text-5xl font-bold leading-tight">
                                Strong Leadership,
                                <span class="text-[var(--color-secondary)] italic">
                                    Shared Vision
                                </span>
                            </h2>
                            <p class="section-description mt-6">
                                Guided by experienced professionals, our leadership team drives innovation,
                                operational excellence, and sustainable growth while remaining committed
                                to quality and customer satisfaction.
                            </p>
                    </div>
                    <div>
                        <img src="{{ $data->banner ? asset('uploads/medium/' . $data->banner) : asset('assets/uploads/img/about.webp') }}"
                            class="rounded-[28px] w-full object-cover">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
