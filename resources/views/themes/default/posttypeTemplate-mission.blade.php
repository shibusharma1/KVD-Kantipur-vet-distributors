@extends('themes.default.common.master')
@section('meta_keyword',$data->meta_keyword)
@section('meta_description',$data->meta_description)
@section('content')

<!-- ========================= PAGE BANNER ========================= -->
<section class="relative h-[420px] overflow-hidden">
    <!-- Background -->
    <img src="{{ $data->banner ? asset('uploads/medium/'.$data->banner) : asset('assets/uploads/img/commit.jpg') }}" alt="{{ $data->post_type }}" loading="lazy" class="w-full h-[420px] object-cover">
    {{-- <img src="assets/img/commit.jpg" alt="Mission Banner" class="w-full h-full object-cover"> --}}
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
            {{-- Mission & Vision --}}
            {{ $data->uid }}
        </h1>
    </div>
</section>
<!-- ========================= INTRO SECTION ========================= -->
<section class="py-12 md:py-12 bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <!-- Content -->
            <div>
                <p class="section-tag reveal">
                    Our Commitment
                </p>
                <h2 class="mt-5 text-3xl md:text-5xl font-bold leading-tight text-primary reveal">
                    Dedicated To Better Veterinary Healthcare Solutions.
                </h2>
                <p class="mt-8 text-gray-600 leading-8 reveal">
                    Kantipur Pharmaceuticals Lab Limited is committed to supporting Nepal’s animal healthcare sector through innovative veterinary medicines, feed supplements and high-quality nutritional products.
                </p>
                <p class="mt-5 text-gray-600 leading-8 reveal">
                    Our mission and vision reflect our dedication to animal welfare, livestock productivity and trusted healthcare innovation across the country.
                </p>
                <!-- Features -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 mt-10">
                    <!-- Card -->
                    <div class="modern-card p-6 reveal">
                        <div class="w-14 h-14 rounded-2xl bg-primary/10 flex items-center justify-center">
                            <i class="fa-solid fa-heart-pulse text-primary text-2xl"></i>
                        </div>
                        <h4 class="mt-5 text-xl font-semibold text-primary">
                            Animal Welfare
                        </h4>
                        <p class="mt-3 text-sm leading-7 text-gray-500">
                            Safer and healthier solutions for animals and livestock industries.
                        </p>
                    </div>
                    <!-- Card -->
                    <div class="modern-card p-6 reveal">
                        <div class="w-14 h-14 rounded-2xl bg-secondary/10 flex items-center justify-center">
                            <i class="fa-solid fa-award text-secondary text-2xl"></i>
                        </div>
                        <h4 class="mt-5 text-xl font-semibold text-primary">
                            Trusted Standards
                        </h4>
                        <p class="mt-3 text-sm leading-7 text-gray-500">
                            Consistent quality and innovation in veterinary healthcare products.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Image -->
            <div class="relative reveal">
                <div class="overflow-hidden rounded-[32px] shadow-2xl">
                    <img src="assets/img/about.webp" alt="Mission" class="w-full h-[620px] object-cover hover:scale-105 transition duration-700">
                </div>
                <!-- Floating Card -->
                <div class="absolute -bottom-10 -left-5 bg-white rounded-3xl shadow-2xl px-8 py-6 border border-gray-100 hidden md:block">
                    <h4 class="text-4xl font-bold text-secondary">
                        ISO
                    </h4>
                    <p class="mt-1 text-gray-500 text-sm">
                        Quality Focused Standards
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========================= MISSION VISION GOALS ========================= -->
<section class="py-12 md:py-12 bg-[#F7F8FA] overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Heading -->
        <div class="max-w-3xl mx-auto text-center mb-8">
            <p class="section-tag justify-center reveal">
                Core Values
            </p>
            <h2 class="mt-5 text-3xl md:text-5xl font-bold leading-tight text-primary reveal">
                Mission, Vision & Goals
            </h2>
        </div>
        <!-- Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Mission -->
            <div class="modern-card p-10 text-center relative overflow-hidden reveal">
                <!-- Icon -->
                <div class="w-24 h-24 rounded-[28px] bg-primary/10 flex items-center justify-center mx-auto">
                    <img src="assets/img/icon/mission.png" alt="" class="w-12 h-12">
                </div>
                <h3 class="mt-8 text-3xl font-bold text-primary">
                    Our Mission
                </h3>
                <p class="mt-6 text-gray-600 leading-8">
                    To support the growth and development of Nepal’s animal and poultry industries by delivering trusted veterinary healthcare products and innovative nutritional solutions.
                </p>
            </div>

            <!-- Vision -->
            <div class="modern-card p-10 text-center relative overflow-hidden reveal">
                <!-- Icon -->
                <div class="w-24 h-24 rounded-[28px] bg-secondary/10 flex items-center justify-center mx-auto">
                    <img src="assets/img/icon/vision.png" alt="" class="w-12 h-12">
                </div>
                <h3 class="mt-8 text-3xl font-bold text-primary">
                    Our Vision
                </h3>
                <p class="mt-6 text-gray-600 leading-8">
                    To become a nationally and internationally recognized veterinary pharmaceutical company trusted for innovation, safety and healthcare excellence.
                </p>
            </div>
            <!-- Goals -->
            <div class="modern-card p-10 text-center relative overflow-hidden reveal">
                <!-- Icon -->
                <div class="w-24 h-24 rounded-[28px] bg-primary/10 flex items-center justify-center mx-auto">
                    <img src="assets/img/icon/goal.png" alt="" class="w-12 h-12">
                </div>
                <h3 class="mt-8 text-3xl font-bold text-primary">
                    Our Goals
                </h3>
                <p class="mt-6 text-gray-600 leading-8">
                    To strengthen distribution networks, enhance product innovation and continuously improve veterinary healthcare services throughout Nepal.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- ========================= IMAGE SHOWCASE ========================= -->
<section class="py-12 md:py-12 bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6">
            <!-- Image -->
            <div class="overflow-hidden rounded-[28px] reveal group">
                <img src="assets/img/commit/img1.jpg" alt="" class="w-full h-[420px] object-cover group-hover:scale-105 transition duration-700">
            </div>

            <!-- Image -->
            <div class="overflow-hidden rounded-[28px] reveal group md:mt-12">
                <img src="assets/img/commit/img3.jpg" alt="" class="w-full h-[420px] object-cover group-hover:scale-105 transition duration-700">
            </div>
            
            <!-- Image -->
            <div class="overflow-hidden rounded-[28px] reveal group">
                <img src="assets/img/commit/img4.jpg" alt="" class="w-full h-[420px] object-cover group-hover:scale-105 transition duration-700">
            </div>
            <!-- Content Card -->
            <div class="modern-card p-10 flex flex-col justify-center reveal rounded-b-none">
                <div class="w-20 h-20 rounded-3xl bg-secondary/10 flex items-center justify-center">
                    <i class="fa-solid fa-seedling text-secondary text-3xl"></i>
                </div>
                <h3 class="mt-8 text-3xl font-bold text-primary leading-tight">
                    Sustainable Growth Through Veterinary Innovation.
                </h3>
                <p class="mt-6 text-gray-600 leading-8">
                    KPL continuously works towards advanced animal healthcare technologies and sustainable veterinary product development for better productivity and healthier livestock.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- ========================= CTA SECTION ========================= -->
<section class="relative py-12 md:py-12 overflow-hidden">
    <!-- Background -->
    <div class="absolute inset-0">
        <img src="assets/img/vision.jpg" alt="" class="w-full h-full object-cover">
    </div>
    <!-- Overlay -->
    <div class="absolute inset-0 bg-primary/90"></div>
    <!-- Content -->
    <div class="relative z-10 max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <p class="section-tag text-white justify-center reveal">
            Join With Us
        </p>
        <h2 class="mt-5 text-3xl md:text-5xl font-bold leading-tight text-white reveal">
            Together We Can Build Healthier Animal Communities.
        </h2>
        <p class="mt-7 text-white/75 leading-8 max-w-3xl mx-auto reveal">
            We remain committed to quality veterinary healthcare, trusted partnerships and sustainable livestock development across Nepal.
        </p>
        <!-- Buttons -->
        <div class="flex flex-wrap justify-center gap-4 mt-10 reveal">
            <a href="{{ url('page/contact.html') }}" class="white-btn">
                Contact Us
                <i class="fa-solid fa-arrow-right"></i>
            </a>
            <a href="product-list.php" class="primary-btn bg-secondary hover:bg-white hover:text-primary">
                Explore Products
                <i class="fa-solid fa-box-open"></i>
            </a>
        </div>
    </div>
</section>

@endsection