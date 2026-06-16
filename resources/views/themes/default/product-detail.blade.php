@extends('themes.default.common.master')
@section('title', $product->meta_title ?? $product->name)
@section('content')

    <!-- ========================= PAGE BANNER ========================= -->
    <section class="relative h-[420px] overflow-hidden">
        <!-- Background -->
        <img src="{{ $product->category && $product->category->banner_image
            ? asset('uploads/categories/' . $product->category->banner_image)
            : asset('assets/uploads/img/vision.jpg') }}"
            alt="{{ $product->name }}" loading="lazy" class="w-full h-[420px] object-cover">
        <!-- Overlay -->
        <div class="absolute inset-0 bg-black/55"></div>
        <!-- Bottom Gradient -->
        <div class="absolute bottom-0 left-0 w-full h-32 bg-gradient-to-t from-black/40 to-transparent"></div>
        <!-- Content -->
        <div class="absolute inset-0 flex flex-col items-center justify-center text-center px-4">
            <p class="text-white/80 uppercase tracking-[0.25em] text-sm reveal">
                Home / {{ $product->category->name ?? 'Products' }} / {{ $product->name }}
            </p>
            <h1 class="mt-5 text-white text-4xl md:text-6xl font-bold reveal">
                {{ $product->name }}
            </h1>
        </div>
    </section>
    <!-- ========================= PRODUCT DETAIL ========================= -->
    <section class="py-12 md:py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-14 items-start">
                <!-- ========================= PRODUCT IMAGE ========================= -->
                <div class="lg:col-span-5 sticky top-28 ">
                    <div class="reveal">
                        <!-- Product Card -->
                        <div class="modern-card overflow-hidden p-8 md:p-10">
                            <!-- Product Image -->
                            <div
                                class="bg-gradient-to-b from-white to-gray-50 rounded-[32px] p-10 flex items-center justify-center">
                                {{-- <img
                        src="assets/img/product/1.png"
                        alt="Product"
                        class="max-h-[500px] object-contain hover:scale-105 transition duration-700"> --}}
                                <img src="{{ $product->featured_image
                                    ? asset('uploads/products/' . $product->featured_image)
                                    : asset('assets/uploads/img/about.webp') }}"
                                    alt="{{ $product->name }}" class="w-full h-full object-cover">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ========================= PRODUCT CONTENT ========================= -->
                <div class="lg:col-span-7">
                    <!-- Category -->
                    <p class="section-tag reveal">
                        {{ $product->category->name ?? 'General Product' }}
                    </p>
                    <!-- Title -->
                    <h2 class="mt-5 text-3xl md:text-4xl font-bold leading-tight text-primary reveal">
                        {{-- Vita-K Veterinary Supplement --}}
                        {{ $product->name }}
                    </h2>
                    <!-- Description -->
                    @if ($product->short_description)
                        <p class="mt-6 text-gray-600 leading-9 text-[16px] reveal">
                            {{ $product->short_description }}
                        </p>
                    @endif

                    @if ($product->description)
                        <div class="mt-5 text-gray-600 leading-9 text-[16px] reveal">
                            {!! $product->description !!}
                        </div>
                    @endif
                    <!-- Product Info -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">
                        <!-- Item -->
                        <div class="modern-card p-4 reveal">
                            <div class="flex items-center gap-4">
                                <div
                                    class="w-14 h-14 rounded-2xl bg-primary/10 flex items-center justify-center flex-shrink-0">
                                    <i class="fa-solid fa-box text-primary text-2xl"></i>
                                </div>
                                <div>
                                    <p class="text-sm uppercase tracking-wide text-gray-400">
                                        Product Type
                                    </p>
                                    <h4 class="mt-1 text-xl font-semibold text-primary">
                                        {{-- Feed Supplement --}}
                                        {{ $product->product_type ?: 'N/A' }}

                                    </h4>
                                </div>
                            </div>
                        </div>
                        <!-- Item -->
                        <div class="modern-card p-4 reveal">
                            <div class="flex items-center gap-4">
                                <div
                                    class="w-14 h-14 rounded-2xl bg-secondary/10 flex items-center justify-center flex-shrink-0">
                                    <i class="fa-solid fa-paw text-secondary text-2xl"></i>
                                </div>
                                <div>
                                    <p class="text-sm uppercase tracking-wide text-gray-400">
                                        Suitable For
                                    </p>
                                    <h4 class="mt-1 text-xl font-semibold text-primary">
                                        {{-- Poultry & Livestock --}}
                                        {{ $product->suitable_for ?: 'N/A' }}
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <!-- Item -->
                        <div class="modern-card p-4 reveal">
                            <div class="flex items-center gap-4">
                                <div
                                    class="w-14 h-14 rounded-2xl bg-primary/10 flex items-center justify-center flex-shrink-0">
                                    <i class="fa-solid fa-flask text-primary text-2xl"></i>
                                </div>
                                <div>
                                    <p class="text-sm uppercase tracking-wide text-gray-400">
                                        Category
                                    </p>
                                    <h4 class="mt-1 text-xl font-semibold text-primary">
                                        {{-- Veterinary Healthcare --}}
                                        {{ $product->category->name ?? 'N/A' }}
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <!-- Item -->
                        <div class="modern-card p-4 reveal">
                            <div class="flex items-center gap-4">
                                <div
                                    class="w-14 h-14 rounded-2xl bg-secondary/10 flex items-center justify-center flex-shrink-0">
                                    <i class="fa-solid fa-shield-heart text-secondary text-2xl"></i>
                                </div>
                                <div>
                                    <p class="text-sm uppercase tracking-wide text-gray-400">
                                        Quality
                                    </p>
                                    <h4 class="mt-1 text-xl font-semibold text-primary">
                                        {{-- Premium Standard --}}
                                        {{ $product->quality ?: 'Premium Standard' }}
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Features -->

                    @if ($product->benefits_title || $product->benefits_description)
                        <div class="mt-8">
                            <h3 class="text-2xl font-bold text-primary reveal">
                                {{ $product->benefits_title ?? 'Product Benefits' }}
                            </h3>

                            <div class="mt-6 text-gray-600 leading-8 reveal">
                                {!! $product->benefits_description !!}
                            </div>
                        </div>
                    @endif
                    <!-- CTA -->
                    {{-- <div class="mt-8 reveal">
                        <a href="contact.php" class="primary-btn">
                            Contact For Inquiry
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div> --}}
                    @if ($product->external_link)
                        <a href="{{ $product->external_link }}" target="_blank" class="primary-btn mt-8">
                            Buy Now
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    @else
                        <a href="{{ url('/page/contact') }}" class="primary-btn mt-8">
                            Contact For Inquiry
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <!-- ========================= RELATED PRODUCTS ========================= -->
    <section class="py-12 md:py-12 bg-[#F7F8FA] overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-6 mb-8">
                <div>
                    <p class="section-tag reveal">
                        Related Products
                    </p>
                    <h2 class="mt-4 text-3xl md:text-4xl font-bold leading-tight text-primary reveal">
                        More {{ $product->category->name ?? 'Products' }}
                    </h2>
                </div>
                <div class="reveal">
                    <a href="product-list.php" class="primary-btn">
                        View All Products
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <!-- Product Grid -->
            {{-- <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-6">
                <a href="product-detail.php" class="product-card reveal group">
                    <div class="product-card-image">
                        <img src="assets/img/product/1.png" alt="Product">
                    </div>
                    <div class="product-card-content">
                        <h3 class="text-sm md:text-base font-semibold text-primary">
                            Clearcal-P-Oral
                        </h3>
                    </div>
                </a>
                <a href="product-detail.php" class="product-card reveal group">
                    <div class="product-card-image">
                        <img src="assets/img/product/1.png" alt="Product">
                    </div>
                    <div class="product-card-content">
                        <h3 class="text-sm md:text-base font-semibold text-primary">
                            Poultry Supplement
                        </h3>
                    </div>
                </a>
                <a href="product-detail.php" class="product-card reveal group">
                    <div class="product-card-image">
                        <img src="assets/img/product/1.png" alt="Product">
                    </div>
                    <div class="product-card-content">
                        <h3 class="text-sm md:text-base font-semibold text-primary">
                            Animal Care
                        </h3>
                    </div>
                </a>
                <a href="product-detail.php" class="product-card reveal group">
                    <div class="product-card-image">
                        <img src="assets/img/product/1.png" alt="Product">
                    </div>
                    <div class="product-card-content">
                        <h3 class="text-sm md:text-base font-semibold text-primary">
                            Livestock Formula
                        </h3>
                    </div>
                </a>
            </div> --}}
            <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-6">
                @foreach ($relatedProducts as $related)
                    <a href="{{ route('page.product_detail', $related->slug) }}" class="product-card reveal group">
                        <div class="product-card-image">
                            <img src="{{ $related->featured_image
                                ? asset('uploads/products/' . $related->featured_image)
                                : asset('assets/img/product/1.png') }}"
                                alt="{{ $related->name }}">
                        </div>
                        <div class="product-card-content">
                            <h3 class="text-sm md:text-base font-semibold text-primary">
                                {{ $related->name }}
                            </h3>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

@endsection
