@extends('themes.default.common.master')
@section('meta_keyword', $data->meta_keyword ?? 'Our Products')
{{-- @section('meta_description', $data->meta_description) --}}
@section('content')


    <section class="relative h-[420px] overflow-hidden">
        <!-- Background -->
        <img src="{{ asset('assets/uploads/img/vision.jpg') }}" alt="Our Products Banner" loading="lazy"
            class="w-full h-[420px] object-cover">
        <!-- Overlay -->
        <div class="absolute inset-0 bg-black/55"></div>
        <!-- Bottom Gradient -->
        <div class="absolute bottom-0 left-0 w-full h-32 bg-gradient-to-t from-black/40 to-transparent"></div>
        <!-- Content -->
        <div class="absolute inset-0 flex flex-col items-center justify-center text-center px-4">
            <p class="text-white/80 uppercase tracking-[0.25em] text-sm reveal">
                Home / Our Products
            </p>
            <h1 class="mt-5 text-white text-4xl md:text-6xl font-bold reveal">
                Our Products
            </h1>
        </div>
    </section>

    <!-- ========================= PRODUCT SECTION ========================= -->
    <section class="py-12 md:py-12 bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
                <!-- ========================= SIDEBAR ========================= -->
                <aside class="lg:col-span-3">
                    <div class="sticky top-28 space-y-8">
                        <!-- Category -->
                        <div class="sidebar-card reveal">
                            <!-- Heading -->
                            <div class="px-7 pt-7 pb-5 border-b border-gray-100">
                                <h3 class="text-2xl font-bold text-primary">
                                    Product Categories
                                </h3>
                            </div>
                            <!-- Links -->
                            {{-- <div>
                                <a href="#" class="sidebar-link">
                                    <span>Feed Supplement</span>
                                    <i class="fa-solid fa-angle-right"></i>
                                </a>
                                <a href="#" class="sidebar-link">
                                    <span>Veterinary Medicine</span>
                                    <i class="fa-solid fa-angle-right"></i>
                                </a>
                                <a href="#" class="sidebar-link">
                                    <span>Animal Care</span>
                                    <i class="fa-solid fa-angle-right"></i>
                                </a>
                                <a href="#" class="sidebar-link">
                                    <span>Poultry Products</span>
                                    <i class="fa-solid fa-angle-right"></i>
                                </a>
                                <a href="#" class="sidebar-link border-b-0">
                                    <span>Swine Care</span>
                                    <i class="fa-solid fa-angle-right"></i>
                                </a>
                            </div> --}}
                            <div>
                                @foreach ($categories as $category)
                                    <a href="{{ url('page/products?category=' . $category->slug) }}"
                                        class="sidebar-link {{ request('category') == $category->slug ? 'active' : '' }} {{ $loop->last ? 'border-b-0' : '' }}">
                                        <span>{{ $category->name }}</span>
                                        <i class="fa-solid fa-angle-right"></i>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                        <!-- CTA -->
                        <div class="relative overflow-hidden rounded-[32px] reveal">
                            <!-- Background -->
                            <img src="{{ asset('assets/uploads/img/vision.jpg') }}" alt=""
                                class="absolute inset-0 w-full h-full object-cover">
                            <!-- Overlay -->
                            <div class="absolute inset-0 bg-primary/90"></div>
                            <!-- Content -->
                            <div class="relative z-10 p-10 text-center">
                                <h3 class="text-3xl font-bold text-white leading-tight">
                                    Need Product Support?
                                </h3>
                                <p class="mt-5 text-white/75 leading-8">
                                    Contact our team for veterinary product information and support.
                                </p>
                                <!-- Button -->
                                <a href="{{ url('page/contact.html') }}" class="white-btn mt-8">
                                    Contact Us
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </aside>
                <!-- ========================= PRODUCTS ========================= -->
                <div class="lg:col-span-9">
                    <!-- Heading -->
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-5 mb-8">
                        <div>
                            <p class="section-tag reveal">
                                Product Collection
                            </p>
                            <h2 class="mt-4 text-2xl md:text-3xl font-bold leading-tight text-primary reveal">
                                Veterinary Healthcare Products
                            </h2>
                        </div>
                        <!-- Search -->
                        <div class="relative reveal">
                            <input id="productSearch" type="text" value="{{ request('search') }}"
                                placeholder="Search products..."
                                class="w-full md:w-[320px] h-14 rounded-2xl border border-gray-200 bg-gray-50 px-5 pr-14 outline-none focus:border-primary focus:ring-4 focus:ring-primary/10 transition duration-300">
                            <button class="absolute top-1/2 right-5 -translate-y-1/2 text-primary">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </button>
                        </div>
                    </div>

                    {{-- loader --}}
                    <div id="searchLoader" class="hidden py-12">
                        <div class="flex justify-center items-center">
                            <div class="w-12 h-12 border-4 border-primary/20 border-t-primary rounded-full animate-spin">
                            </div>
                        </div>
                    </div>
                    <!-- Product Grid -->
                    <div id="productGrid" class="grid grid-cols-2 md:grid-cols-3 gap-6">
                        @forelse($products as $product)
                            <a href="{{ route('page.product_detail', $product->slug) }}"
                                class="product-card reveal group product-item" data-name="{{ strtolower($product->name) }}">
                                <div class="product-card-image">
                                    <img src="{{ $product->featured_image
                                        ? asset('uploads/products/' . $product->featured_image)
                                        : asset('assets/img/product/1.png') }}"
                                        alt="{{ $product->name }}">
                                </div>
                                <div class="product-card-content">
                                    <h3 class="text-sm md:text-base font-semibold text-primary">
                                        {{ $product->name }}
                                    </h3>
                                </div>
                            </a>
                        @empty
                            <div class="col-span-full text-center py-20">
                                <h3 class="text-2xl font-bold text-primary">
                                    No Products Found
                                </h3>
                            </div>
                        @endforelse
                    </div>
                    <div id="noProductsFound" class="hidden col-span-full">
                        <div class="modern-card text-center py-16 px-8 rounded-[32px]">
                            <div class="w-20 h-20 mx-auto rounded-full bg-primary/10 flex items-center justify-center">
                                <i class="fa-solid fa-box-open text-3xl text-primary"></i>
                            </div>
                            <h3 class="mt-6 text-2xl font-bold text-primary">
                                No Products Found
                            </h3>
                            <p class="mt-3 text-gray-500 max-w-md mx-auto">
                                We couldn't find any products matching your search.
                                Try a different keyword or browse our categories.
                            </p>
                        </div>
                    </div>
                    <!-- ========================= PAGINATION ========================= -->
                    <div class="mt-12">
                        {!! $products->links('themes.default.common.pagination') !!}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const searchInput = document.getElementById('productSearch');

            const loader = document.getElementById('searchLoader');

            const noProducts = document.getElementById('noProductsFound');

            const items = document.querySelectorAll('.product-item');

            if (!searchInput) return;

            searchInput.addEventListener('keyup', function() {

                loader.classList.remove('hidden');

                setTimeout(() => {

                    let value = this.value.toLowerCase();

                    let visibleCount = 0;

                    items.forEach(function(item) {

                        let name = item.dataset.name;

                        if (name.includes(value)) {

                            item.style.display = '';

                            visibleCount++;

                        } else {

                            item.style.display = 'none';

                        }

                    });

                    if (visibleCount === 0) {

                        noProducts.classList.remove('hidden');

                    } else {

                        noProducts.classList.add('hidden');

                    }

                    loader.classList.add('hidden');

                }, 250);

            });

        });
    </script>
@endsection
