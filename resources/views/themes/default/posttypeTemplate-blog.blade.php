@extends('themes.default.common.master')
@section('meta_keyword', $data->meta_keyword)
@section('meta_description', $data->meta_description)
@section('content')

    <!-- ========================= PAGE BANNER ========================= -->
    <section class="relative h-[420px] overflow-hidden">
        <!-- Background -->
        <img src="{{ $data->banner ? asset('uploads/medium/' . $data->banner) : asset('assets/uploads/img/vision.jpg') }}"
            alt="{{ $data->post_type }}" loading="lazy" class="w-full h-[420px] object-cover">
        <!-- Overlay -->
        <div class="absolute inset-0 bg-black/55"></div>
        <!-- Bottom Gradient -->
        <div class="absolute bottom-0 left-0 w-full h-32 bg-gradient-to-t from-black/40 to-transparent"></div>
        <!-- Content -->
        <div class="absolute inset-0 flex flex-col items-center justify-center text-center px-4">
            <p class="text-white/80 uppercase tracking-[0.25em] text-sm reveal">
                {{-- Home / Blog & News --}}
                <a href=" {{ url('/') }} ">HOME</a> / {{ $data->post_type }}
            </p>
            <h1 class="mt-5 text-white text-4xl md:text-6xl font-bold reveal">
                {{-- Blog & News --}}
                {{ $data->uid }}
            </h1>
        </div>
    </section>
    <!-- ========================= BLOG SECTION ========================= -->
    <section class="py-12 md:py-12 bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Heading -->
            <div class="max-w-2xl mx-auto text-center mb-16">
                <p class="section-tag justify-center reveal">
                    Latest Updates
                </p>
                <h2 class="mt-5 text-3xl md:text-5xl font-bold leading-tight text-primary reveal">
                    Veterinary News & Insights
                </h2>
            </div>
            <!-- Blog Grid -->
            {{-- <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                <!-- ========================= BLOG CARD ========================= -->
                <article class="blog-card reveal group">
                    <!-- Image -->
                    <a href="blog-detail.php" class="blog-card-image block overflow-hidden rounded-[28px]">
                        <img src="assets/img/blog1.png" alt="Blog">
                    </a>
                    <!-- Content -->
                    <div class="mt-6">
                        <!-- Meta -->
                        <div class="flex flex-wrap items-center gap-5 text-[13px] uppercase tracking-wide text-gray-400">
                            <span class="flex items-center gap-2">
                                <i class="fa-solid fa-user text-secondary"></i>
                                Admin Name
                            </span>
                            <span class="flex items-center gap-2">
                                <i class="fa-solid fa-calendar text-secondary"></i>
                                27 August, 2025
                            </span>
                        </div>
                        <!-- Title -->
                        <a href="blog-detail.php">
                            <h3
                                class="mt-5 text-xl md:text-2xl font-bold leading-snug text-primary hover:text-secondary transition duration-300 two-line">
                                Behavior And Training Animals For Better Care & Productivity
                            </h3>
                        </a>
                        <!-- Description -->
                        <p class="mt-4 text-gray-600 leading-8 three-line">
                            Owning and caring for animals requires proper understanding, attention and consistent healthcare
                            support to ensure healthier growth and better productivity in livestock industries.
                        </p>
                        <!-- Button -->
                        <a href="blog-detail.php"
                            class="inline-flex items-center gap-3 mt-5 text-secondary font-semibold hover:gap-4 transition-all duration-300">
                            Read More
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </article>
                <!-- ========================= BLOG CARD ========================= -->
                <article class="blog-card reveal group">
                    <!-- Image -->
                    <a href="blog-detail.php" class="blog-card-image block overflow-hidden rounded-[28px]">
                        <img src="assets/img/blog2.webp" alt="Blog">
                    </a>
                    <!-- Content -->
                    <div class="mt-6">
                        <!-- Meta -->
                        <div class="flex flex-wrap items-center gap-5 text-[13px] uppercase tracking-wide text-gray-400">
                            <span class="flex items-center gap-2">
                                <i class="fa-solid fa-user text-secondary"></i>
                                Admin Name
                            </span>
                            <span class="flex items-center gap-2">
                                <i class="fa-solid fa-calendar text-secondary"></i>
                                27 August, 2025
                            </span>
                        </div>
                        <!-- Title -->
                        <a href="blog-detail.php">
                            <h3
                                class="mt-5 text-xl md:text-2xl font-bold leading-snug text-primary hover:text-secondary transition duration-300 two-line">
                                Advancing Animal Health Through Veterinary Innovation
                            </h3>
                        </a>
                        <!-- Description -->
                        <p class="mt-4 text-gray-600 leading-8 three-line">
                            Modern veterinary healthcare innovations continue to improve animal welfare, productivity and
                            nutritional standards across livestock and poultry industries.
                        </p>
                        <!-- Button -->
                        <a href="blog-detail.php"
                            class="inline-flex items-center gap-3 mt-5 text-secondary font-semibold hover:gap-4 transition-all duration-300">
                            Read More
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </article>
                <!-- ========================= BLOG CARD ========================= -->
                <article class="blog-card reveal group">
                    <!-- Image -->
                    <a href="blog-detail.php" class="blog-card-image block overflow-hidden rounded-[28px]">
                        <img src="assets/img/blog3.jpeg" alt="Blog">
                    </a>
                    <!-- Content -->
                    <div class="mt-6">
                        <!-- Meta -->
                        <div class="flex flex-wrap items-center gap-5 text-[13px] uppercase tracking-wide text-gray-400">
                            <span class="flex items-center gap-2">
                                <i class="fa-solid fa-user text-secondary"></i>
                                Admin Name
                            </span>
                            <span class="flex items-center gap-2">
                                <i class="fa-solid fa-calendar text-secondary"></i>
                                27 August, 2025
                            </span>
                        </div>
                        <!-- Title -->
                        <a href="blog-detail.php">
                            <h3
                                class="mt-5 text-xl md:text-2xl font-bold leading-snug text-primary hover:text-secondary transition duration-300 two-line">
                                Safe & Effective Solutions For Livestock Healthcare
                            </h3>
                        </a>
                        <!-- Description -->
                        <p class="mt-4 text-gray-600 leading-8 three-line">
                            Quality veterinary medicines and healthcare solutions help maintain healthier livestock while
                            improving long-term productivity and disease management.
                        </p>
                        <!-- Button -->
                        <a href="blog-detail.php"
                            class="inline-flex items-center gap-3 mt-5 text-secondary font-semibold hover:gap-4 transition-all duration-300">
                            Read More
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </article>
                <!-- ========================= BLOG CARD ========================= -->
                <article class="blog-card reveal group">
                    <!-- Image -->
                    <a href="blog-detail.php" class="blog-card-image block overflow-hidden rounded-[28px]">
                        <img src="assets/img/blog4.jpeg" alt="Blog">
                    </a>
                    <!-- Content -->
                    <div class="mt-6">
                        <!-- Meta -->
                        <div class="flex flex-wrap items-center gap-5 text-[13px] uppercase tracking-wide text-gray-400">
                            <span class="flex items-center gap-2">
                                <i class="fa-solid fa-user text-secondary"></i>
                                Admin Name
                            </span>
                            <span class="flex items-center gap-2">
                                <i class="fa-solid fa-calendar text-secondary"></i>
                                27 August, 2025
                            </span>
                        </div>
                        <!-- Title -->
                        <a href="blog-detail.php">
                            <h3
                                class="mt-5 text-xl md:text-2xl font-bold leading-snug text-primary hover:text-secondary transition duration-300 two-line">
                                Trusted Veterinary Medicines For Every Animal Sector
                            </h3>
                        </a>
                        <!-- Description -->
                        <p class="mt-4 text-gray-600 leading-8 three-line">
                            Reliable healthcare products support stronger immunity, healthier growth and improved animal
                            welfare in livestock and poultry industries.
                        </p>
                        <!-- Button -->
                        <a href="blog-detail.php"
                            class="inline-flex items-center gap-3 mt-5 text-secondary font-semibold hover:gap-4 transition-all duration-300">
                            Read More
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </article>
            </div> --}}
            <!-- ========================= BLOG GRID ========================= -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">

                @foreach ($posts as $post)
                    <article class="blog-card reveal group">

                        <!-- Image -->
                        <a href="{{ url(geturl($post['uri'], $post['page_key'])) }}"
                            class="blog-card-image block overflow-hidden rounded-[28px]">

                            <img src="{{ $post->page_thumbnail
                                ? asset('uploads/medium/' . $post->page_thumbnail)
                                : asset('themes-assets/img/blog1.png') }}"
                                alt="{{ $post->post_title }}" class="w-full h-full object-cover">
                        </a>

                        <!-- Content -->
                        <div class="mt-6">

                            <!-- Meta -->
                            <div
                                class="flex flex-wrap items-center gap-5 text-[13px] uppercase tracking-wide text-gray-400">

                                @if ($post->associated_title)
                                    <span class="flex items-center gap-2">
                                        <i class="fa-solid fa-user text-secondary"></i>
                                        {{ $post->associated_title }}
                                    </span>
                                @endif

                                <span class="flex items-center gap-2">
                                    <i class="fa-solid fa-calendar text-secondary"></i>
                                    {{ $post->created_at->format('d F, Y') }}
                                </span>

                            </div>

                            <!-- Title -->
                            <a href="{{ url(geturl($post['uri'], $post['page_key'])) }}">
                                <h3
                                    class="mt-5 text-xl md:text-2xl font-bold leading-snug text-primary hover:text-secondary transition duration-300 two-line">
                                    {{ $post->post_title }}
                                </h3>
                            </a>

                            <!-- Description -->
                            <p class="mt-4 text-gray-600 leading-8 three-line">
                                {{ $post->post_excerpt }}
                            </p>

                            <!-- Button -->
                            <a href="{{ url(geturl($post['uri'], $post['page_key'])) }}"
                                class="inline-flex items-center gap-3 mt-5 text-secondary font-semibold hover:gap-4 transition-all duration-300">

                                Read More
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>

                        </div>
                    </article>
                @endforeach

            </div>
            <!-- ========================= PAGINATION ========================= -->
            {{-- {!! $posts->links('themes.default.common.pagination') !!} --}}
            <div class="mt-12">
                {!! $posts->links('themes.default.common.pagination') !!}
            </div>
        </div>
    </section>

@endsection
