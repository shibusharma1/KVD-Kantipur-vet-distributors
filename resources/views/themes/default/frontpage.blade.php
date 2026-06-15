@extends('themes.default.common.master')
@section('content')
    <!-- ========================= HERO SECTION ========================= -->
    <section class="homepage-banner">
        <div class="absolute inset-0">
            <img src="{{ asset('assets/uploads/img/banner.jpg') }}" alt="Banner" class="w-full h-full object-cover">
        </div>

        <!-- Overlay -->
        <div class="banner-overlay"></div>
        <!-- Bottom Fade -->
        <div class="absolute bottom-0 left-0 w-full h-32 bg-gradient-to-t from-black/40 to-transparent"></div>
        <!-- Content -->
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full pt-32 pb-12">
            <div class="max-w-3xl">
                <p class="section-tag text-white reveal">
                    Caring & Curing Animal Health
                </p>

                <h1 class="mt-6 text-white text-4xl md:text-6xl xl:text-7xl font-bold leading-[1.1] reveal">
                    {{-- Gold Standard Veterinary Solutions For Better Animal Healthcare. --}}
                    {{ $banners->title }}
                </h1>

                <p class="mt-7 text-white/80 text-[16px] md:text-lg leading-8 max-w-2xl reveal">
                    {{-- Kantipur Pharmaceuticals Lab Limited is dedicated to creating healthier lives for animals through innovative veterinary medicines, feed supplements and nutritional healthcare solutions. --}}
                    {{ $banners->content }}
                </p>

                <!-- Buttons -->
                <div class="flex flex-wrap items-center gap-4 mt-10 reveal">
                    <a href="about.php" class="primary-btn">
                        Explore More
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>

                    <a href="contact.php" class="white-btn">
                        Contact Us
                        <i class="fa-solid fa-phone"></i>
                    </a>

                </div>
            </div>
        </div>
    </section>

    <!-- =========================================
    OUR STORY SECTION
    ========================================= -->
    <section>
        <!-- Background Soft Shape -->
        <div
            class="absolute top-0 right-0 w-[420px] h-[420px] bg-green-100/40 rounded-full blur-3xl -translate-y-1/2 translate-x-1/3">
        </div>
        <div class="max-w-7xl mx-auto px-5 lg:px-8 relative z-10">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <!-- LEFT CONTENT -->
                <div class="reveal">
                    <span class="section-tag">
                        Our Story
                    </span>
                    <h2 class="mt-5 text-4xl md:text-5xl font-bold leading-tight max-w-2xl">
                        Dedicated to
                        <span class="text-[var(--color-secondary)]">
                            Nepal’s Animal Health
                        </span>
                        Since 2001
                    </h2>
                    <p class="mt-6 text-[16px] leading-9 max-w-2xl">
                        Kantipur Vet Distributors Pvt. Ltd. was established with one clear mission — to bridge the gap
                        between world-class animal health innovations.
                        Our philosophy is simple:
                        <strong class="text-[var(--color-primary)]">
                            quality without compromise.
                        </strong>
                        Every product we distribute is rigorously sourced, properly stored, and delivered with full
                        regulatory compliance.
                    </p>
                    <!-- STATS -->
                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 mt-8">
                        <div class="modern-card p-6 text-center">
                            <h3 class="text-3xl font-bold text-[var(--color-primary)]">
                                23+
                            </h3>
                            <p class="mt-2 text-sm font-semibold">
                                Years Experience
                            </p>
                        </div>
                        <div class="modern-card p-6 text-center">
                            <h3 class="text-3xl font-bold text-[var(--color-primary)]">
                                3000+
                            </h3>
                            <p class="mt-2 text-sm font-semibold">
                                Products
                            </p>
                        </div>
                        <div class="modern-card p-6 text-center">
                            <h3 class="text-3xl font-bold text-[var(--color-primary)]">
                                76+
                            </h3>
                            <p class="mt-2 text-sm font-semibold">
                                Awards
                            </p>
                        </div>
                        <div class="modern-card p-6 text-center">
                            <h3 class="text-3xl font-bold text-[var(--color-primary)]">
                                7
                            </h3>
                            <p class="mt-2 text-sm font-semibold">
                                Provinces
                            </p>
                        </div>
                    </div>
                    <!-- BUTTON -->
                    <div class="mt-8">
                        <a href="#contact" class="primary-btn">
                            Learn More About Us
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <!-- RIGHT VISUAL -->
                <div class="relative reveal">
                    <!-- MAIN CARD -->
                    <div
                        class="relative overflow-hidden rounded-[32px] bg-[var(--color-primary)] p-8 md:p-12 shadow-[0_20px_60px_rgba(52,47,127,0.20)]">
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-br from-white/10 to-transparent"></div>
                        <!-- YEAR -->
                        <div
                            class="relative z-10 inline-flex items-center gap-2 rounded-full bg-white/10 border border-white/10 px-5 py-2 text-white text-xs font-bold tracking-[0.15em] uppercase">
                            Since 2001
                        </div>
                        <!-- TITLE -->
                        <h3 class="relative z-10 text-white text-3xl md:text-4xl font-bold leading-tight mt-7">
                            KVD Group —
                            <span class="text-[var(--color-secondary)]">
                                Two Decades of Trust
                            </span>
                        </h3>
                        <!-- TEXT -->
                        <p class="relative z-10 text-white/75 leading-8 mt-6 text-[16px]">
                            From a single office in Lalitpur to a nationwide distribution network covering all 7 provinces
                            of Nepal — our journey has been driven by an unwavering commitment to animal health and farmer
                            prosperity.
                        </p>
                        <!-- MINI STATS -->
                        <div class="relative z-10 grid sm:grid-cols-2 gap-5 mt-10">
                            <div class="rounded-[24px] border border-white/10 bg-white/10 backdrop-blur-md p-6 text-center">
                                <h4 class="text-white text-3xl font-bold">
                                    100+
                                </h4>
                                <p class="text-white/60 text-sm font-semibold mt-2">
                                    Team Members
                                </p>
                            </div>
                            <div class="rounded-[24px] border border-white/10 bg-white/10 backdrop-blur-md p-6 text-center">
                                <h4 class="text-white text-3xl font-bold">
                                    40+
                                </h4>
                                <p class="text-white/60 text-sm font-semibold mt-2">
                                    Global Partners
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- ========================= PRODUCTS SECTION ========================= -->
    <section>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-10 mb-8">
                <div>
                    <p class="section-tag reveal">
                        Our Products
                    </p>
                    <h2 class="mt-4 text-3xl md:text-5xl font-bold leading-tight text-primary reveal">
                        Veterinary Healthcare Solutions
                    </h2>
                    <p class="mt-6 text-[16px] leading-9 max-w-2xl">
                        Discover trusted veterinary healthcare solutions designed to support animal wellness, disease
                        prevention, and modern livestock care across Nepal.
                    </p>
                </div>
                <!-- BUTTON -->
                <div class="reveal flex-shrink-0">
                    <a href="#" class="primary-btn">
                        View All Products
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <!-- Product Grid -->
            <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-6">
                @foreach ($products as $product)
                <a href="{{ route('page.product_detail', $product->slug) }}" class="product-card reveal group">
                        <div class="product-card-image">
                            <img src="{{ asset('uploads/products/' . $product->featured_image) }}" alt="Product">
                        </div>

                        <div class="product-card-content">
                            <h3 class="text-sm md:text-base font-semibold text-primary">
                                {{ $product->name }}
                            </h3>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    <!-- =========================================
       MESSAGE FROM MD SECTION
       ========================================= -->
    <section>
        <!-- Background Shape -->
        <div
            class="absolute left-[-120px] top-20 w-[320px] h-[320px] bg-[var(--color-secondary)]/10 rounded-full blur-3xl">
        </div>
        <div class="max-w-7xl mx-auto px-5 lg:px-8 relative z-10">
            <!-- SECTION HEADER -->
            <div class="text-center max-w-3xl mx-auto mb-16 reveal">
                <span class="section-tag justify-center">
                    Leadership
                </span>
                <h2 class="mt-5 text-4xl md:text-5xl font-bold leading-tight">
                    Message from our
                    <span class="text-[var(--color-secondary)] italic">
                        Managing Director
                    </span>
                </h2>
            </div>
            <!-- MAIN GRID -->
            <div class="grid lg:grid-cols-[460px_1fr] gap-16 items-center">
                <!-- LEFT SIDE -->
                <div class="relative reveal">
                    <!-- IMAGE CARD -->
                    <div class="modern-card overflow-hidden bg-white p-5">
                        <!-- IMAGE -->
                        <div
                            class="relative rounded-[24px] overflow-hidden bg-gradient-to-br from-[var(--color-primary)] to-[#221d63] h-[520px] flex items-center justify-center">
                            <img src="{{ asset('assets/uploads/img/md.jpg') }}" alt="Managing Director"
                                class="w-full h-full object-cover" />
                            <!-- Overlay -->
                            <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent"></div>
                            <!-- Caption -->
                            <div class="absolute bottom-0 left-0 right-0 p-8">
                                <div class="backdrop-blur-md bg-white/10 border border-white/10 rounded-[20px] p-5">
                                    <h4 class="text-white text-xl font-bold">
                                        Managing Director
                                    </h4>
                                    <p class="text-white/70 text-sm mt-1">
                                        Kantipur Vet Distributors Pvt. Ltd.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- FLOATING EXPERIENCE CARD -->
                    <div
                        class="modern-card absolute -bottom-8 -right-5 bg-white px-7 py-5 hidden sm:flex items-center gap-5">
                        <div
                            class="w-14 h-14 rounded-2xl bg-green-100 flex items-center justify-center text-[var(--color-secondary)] text-2xl">
                            <i class="fa-solid fa-award"></i>
                        </div>
                        <div>
                            <h5 class="text-2xl font-bold text-[var(--color-primary)]">
                                23+
                            </h5>
                            <p class="text-sm font-semibold">
                                Years Leading
                            </p>
                        </div>
                    </div>
                </div>
                <!-- RIGHT CONTENT -->
                <div class="reveal">
                    <span class="section-tag">
                        MD's Message
                    </span>
                    <h3 class="mt-5 text-3xl md:text-4xl font-bold leading-tight max-w-2xl">
                        Building a Healthier Nepal,
                        <span class="text-[var(--color-secondary)]">
                            One Farm at a Time
                        </span>
                    </h3>
                    <!-- QUOTE -->
                    <div class="modern-card mt-4 p-2 border-l-4 border-[var(--color-secondary)] bg-white">
                        <div class="text-5xl leading-none text-[var(--color-secondary)]">
                            “
                        </div>
                        <p class="text-[18px] leading-9 italic text-[var(--color-dark)]">
                            Our commitment has always been to deliver not just products, but trust. Every medicine, every
                            vaccine, every supplement we distribute carries our promise of quality.
                        </p>
                    </div>
                    <!-- CONTENT -->
                    <div class="mt-8 space-y-6">
                        <p class="text-[16px] leading-9">
                            Since founding Kantipur Vet Distributors in 2001, our vision has remained steadfast: to be
                            Nepal's most reliable partner in animal health. We have expanded our reach and strengthened our
                            partnerships with global manufacturers to ensure Nepal's farmers receive world-class veterinary
                            solutions.
                            <!-- </p>
                        <p class="text-[16px] leading-9"> -->
                            Today, with over 3,000 products, 40+ global partners, and a dedicated team of professionals, we
                            continue to move forward with innovation, integrity, and commitment toward Nepal’s agricultural
                            prosperity.
                        </p>
                    </div>
                    <!-- SIGNATURE -->
                    <div class="mt-10 pt-8 border-t border-gray-200 flex items-center justify-between flex-wrap gap-5">
                        <div>
                            <h5 class="text-2xl font-bold text-[var(--color-primary)]">
                                Managing Director
                            </h5>
                            <p class="mt-1 text-sm font-semibold tracking-wide uppercase text-gray-500">
                                Kantipur Vet Distributors Pvt. Ltd.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================
       GALLERY & CORPORATE VIDEOS SECTION
       ========================================= -->
    <section id="gallery">
        <!-- Background Glow -->
        <div class="absolute top-0 left-0 w-[420px] h-[420px] bg-[var(--color-primary)]/20 rounded-full blur-3xl"></div>
        <div class="max-w-7xl mx-auto px-5 lg:px-8 relative z-10">
            <!-- SECTION HEADER -->
            <div class="text-center max-w-3xl mx-auto mb-8 reveal">
                <span class="section-tag inline-flex items-center gap-3 text-[13px] font-bold uppercase tracking-[0.18em]">
                    <!-- <span class="w-9 h-[2px] bg-[var(--color-secondary)]"></span> -->
                    Our Gallery
                </span>
                <h2 class="mt-5 text-4xl md:text-5xl font-bold leading-tight">
                    Corporate
                    <span class="text-[var(--color-secondary)]">
                        Videos
                    </span>
                    & Gallery
                </h2>
                <p class="mt-4 text-[16px] leading-9">
                    Watch our corporate story, explore our operations, and discover life at KVD through our visual journey.
                </p>
            </div>
            <!-- GALLERY GRID -->

            <div class="grid lg:grid-cols-12 gap-5">
                <!-- LARGE VIDEO -->
                <div class="lg:col-span-6 reveal">
                    <div class="group relative h-[420px] overflow-hidden rounded-[30px] bg-black modern-card">
                        <!-- IMAGE -->
                        <img src="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?q=80&w=1600&auto=format&fit=crop"
                            alt="" loading="lazy"
                            class="w-full h-full object-cover transition duration-700 group-hover:scale-110">
                        <!-- OVERLAY -->
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-[rgba(0,0,0,0.88)] via-[rgba(0,0,0,0.15)] to-transparent">
                        </div>
                        <!-- PLAY BUTTON -->
                        <button data-video="{{ asset('assets/uploads/vdo/kvd.mp4') }}"
                            class="video-btn absolute inset-0 flex items-center justify-center">
                            <div
                                class="w-12 h-12 rounded-full bg-[var(--color-secondary)] text-white flex items-center justify-center shadow-[0_0_40px_rgba(56,172,75,0.5)] transition duration-300 group-hover:scale-110">
                                <i class="fa-solid fa-play text-3xl ml-1"></i>
                            </div>
                        </button>
                        <!-- CONTENT -->
                        <div class="absolute bottom-0 left-0 right-0 p-8">
                            <span
                                class="inline-block text-xs uppercase tracking-[0.18em] font-bold text-[var(--color-secondary)]">
                                Corporate Video
                            </span>
                            <h3 class="mt-3 text-3xl font-bold text-white leading-tight">
                                KVD Corporate Story 2024
                            </h3>
                        </div>
                    </div>
                </div>
                <!-- RIGHT GRID -->
                <div class="lg:col-span-6">
                    <div class="grid sm:grid-cols-2 gap-5">
                        <!-- ITEM -->
                        <div class="reveal">
                            <div class="group relative h-[200px] overflow-hidden rounded-[28px] bg-black modern-card">
                                <img src="https://images.unsplash.com/photo-1576086213369-97a306d36557?q=80&w=1200&auto=format&fit=crop"
                                    alt="" loading="lazy"
                                    class="w-full h-full object-cover transition duration-700 group-hover:scale-110">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent">
                                </div>
                                <button data-video="{{ asset('assets/uploads/vdo/kvd.mp4') }}"
                                    class="video-btn absolute inset-0 flex items-center justify-center">
                                    <div
                                        class="w-10 h-10 rounded-full bg-[var(--color-secondary)] text-white flex items-center justify-center shadow-[0_0_30px_rgba(56,172,75,0.45)] transition duration-300 group-hover:scale-110">
                                        <i class="fa-solid fa-play text-xl ml-1"></i>
                                    </div>
                                </button>
                                <div class="absolute bottom-0 left-0 right-0 p-6">
                                    <h3 class="text-xl font-bold text-white leading-tight">
                                        Our Warehouse & Cold Chain
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <!-- ITEM -->
                        <div class="reveal">
                            <div class="group relative h-[200px] overflow-hidden rounded-[28px] bg-black modern-card">
                                <img src="https://images.unsplash.com/photo-1516467508483-a7212febe31a?q=80&w=1200&auto=format&fit=crop"
                                    alt="" loading="lazy"
                                    class="w-full h-full object-cover transition duration-700 group-hover:scale-110">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent">
                                </div>
                                <button data-video="{{ asset('assets/uploads/vdo/kvd.mp4') }}"
                                    class="video-btn absolute inset-0 flex items-center justify-center">
                                    <div
                                        class="w-10 h-10 rounded-full bg-[var(--color-secondary)] text-white flex items-center justify-center shadow-[0_0_30px_rgba(56,172,75,0.45)] transition duration-300 group-hover:scale-110">
                                        <i class="fa-solid fa-play text-xl ml-1"></i>
                                    </div>
                                </button>
                                <div class="absolute bottom-0 left-0 right-0 p-6">
                                    <h3 class="text-xl font-bold text-white leading-tight">
                                        Cattle Health Solutions
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <!-- ITEM -->
                        <div class="reveal">
                            <div class="group relative h-[200px] overflow-hidden rounded-[28px] bg-black modern-card">
                                <img src="https://images.unsplash.com/photo-1590402494682-cd3fb53b1f70?q=80&w=1200&auto=format&fit=crop"
                                    alt="" loading="lazy"
                                    class="w-full h-full object-cover transition duration-700 group-hover:scale-110">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent">
                                </div>
                                <button data-video="{{ asset('assets/uploads/vdo/kvd.mp4') }}"
                                    class="video-btn absolute inset-0 flex items-center justify-center">
                                    <div
                                        class="w-10 h-10 rounded-full bg-[var(--color-secondary)] text-white flex items-center justify-center shadow-[0_0_30px_rgba(56,172,75,0.45)] transition duration-300 group-hover:scale-110">
                                        <i class="fa-solid fa-play text-xl ml-1"></i>
                                    </div>
                                </button>
                                <div class="absolute bottom-0 left-0 right-0 p-6">
                                    <h3 class="text-xl font-bold text-white leading-tight">
                                        Poultry Division Highlights
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <!-- ITEM -->
                        <div class="reveal">
                            <div class="group relative h-[200px] overflow-hidden rounded-[28px] bg-black modern-card">
                                <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?q=80&w=1200&auto=format&fit=crop"
                                    alt="" loading="lazy"
                                    class="w-full h-full object-cover transition duration-700 group-hover:scale-110">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent">
                                </div>
                                <button data-video="{{ asset('assets/uploads/vdo/kvd.mp4') }}"
                                    class="video-btn absolute inset-0 flex items-center justify-center">
                                    <div
                                        class="w-10 h-10 rounded-full bg-[var(--color-secondary)] text-white flex items-center justify-center shadow-[0_0_30px_rgba(56,172,75,0.45)] transition duration-300 group-hover:scale-110">
                                        <i class="fa-solid fa-play text-xl ml-1"></i>
                                    </div>
                                </button>
                                <div class="absolute bottom-0 left-0 right-0 p-6">
                                    <h3 class="text-xl font-bold text-white leading-tight">
                                        Training & Workshops
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================
       SERVICES SECTION
       ========================================= -->
    <section id="services" style="overflow: visible !important;">
        <!-- BACKGROUND SHAPES -->
        <div class="absolute top-0 right-0 w-[420px] h-[420px] bg-[var(--color-primary)]/5 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-[320px] h-[320px] bg-[var(--color-secondary)]/10 rounded-full blur-3xl">
        </div>
        <div class="max-w-7xl mx-auto px-5 lg:px-8 relative z-10">
            <div class="grid lg:grid-cols-[420px_1fr] gap-14 items-start">
                <!-- LEFT STICKY CONTENT -->
                <div class="lg:sticky lg:top-[140px] self-start reveal">
                    <span class="section-tag">
                        Our Services
                    </span>
                    <h2 class="mt-5 text-4xl md:text-5xl font-bold leading-tight">
                        Services Built
                        <span class="text-[var(--color-secondary)]">
                            Around You
                        </span>
                    </h2>
                    <p class="mt-7 text-[16px] leading-9">
                        Beyond distribution, we provide expert technical support, cold-chain logistics, training, and
                        consultation to help Nepal’s entire animal health ecosystem thrive.
                    </p>
                    <!-- CTA CARD -->
                    <div class="modern-card mt-10 p-7 bg-[var(--color-surface-200)] border border-slate-100">
                        <div class="flex items-start gap-4">
                            <div
                                class="w-14 h-14 rounded-2xl bg-green-100 text-[var(--color-secondary)] flex items-center justify-center text-2xl flex-shrink-0">
                                <i class="fa-solid fa-headset"></i>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold text-[var(--color-primary)]">
                                    Need Expert Help?
                                </h4>
                                <p class="mt-3 text-[15px] leading-8">
                                    Our veterinary team is ready to help you with product consultation and custom orders.
                                </p>
                                <a href="tel:+97715186604"
                                    class="inline-flex items-center gap-2 mt-5 font-bold text-[var(--color-secondary)] hover:gap-3 transition-all duration-300">
                                    Call +977-01-5186604
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- RIGHT SERVICES GRID -->
                <div class="grid sm:grid-cols-2 gap-6 reveal">
                    <!-- CARD -->
                    <div class="modern-card bg-[var(--color-surface-200)] p-8 group">
                        <div
                            class="w-16 h-16 rounded-2xl bg-[var(--color-primary)]/10 text-[var(--color-primary)] flex items-center justify-center text-3xl transition duration-300 group-hover:bg-[var(--color-primary)] group-hover:text-white">
                            <i class="fa-solid fa-stethoscope"></i>
                        </div>
                        <h3 class="mt-7 text-2xl font-bold leading-tight">
                            Veterinary Consultation
                        </h3>
                        <p class="mt-5 text-[16px] leading-8">
                            Our qualified veterinary advisors provide expert product guidance and disease management support
                            for farms, clinics, and veterinary professionals.
                        </p>
                    </div>
                    <!-- CARD -->
                    <div class="modern-card bg-[var(--color-surface-200)] p-8 group">
                        <div
                            class="w-16 h-16 rounded-2xl bg-[var(--color-primary)]/10 text-[var(--color-primary)] flex items-center justify-center text-3xl transition duration-300 group-hover:bg-[var(--color-primary)] group-hover:text-white">
                            <i class="fa-solid fa-truck-fast"></i>
                        </div>
                        <h3 class="mt-7 text-2xl font-bold leading-tight">
                            Nationwide Distribution
                        </h3>
                        <p class="mt-5 text-[16px] leading-8">
                            Reliable logistics across all 7 provinces with temperature-controlled delivery systems for
                            vaccines, biologics, and sensitive medicines.
                        </p>
                    </div>
                    <!-- CARD -->
                    <div class="modern-card bg-[var(--color-surface-200)] p-8 group">
                        <div
                            class="w-16 h-16 rounded-2xl bg-[var(--color-primary)]/10 text-[var(--color-primary)] flex items-center justify-center text-3xl transition duration-300 group-hover:bg-[var(--color-primary)] group-hover:text-white">
                            <i class="fa-solid fa-snowflake"></i>
                        </div>
                        <h3 class="mt-7 text-2xl font-bold leading-tight">
                            Cold Chain Storage
                        </h3>
                        <p class="mt-5 text-[16px] leading-8">
                            Advanced refrigerated warehousing facilities ensuring complete product integrity from import and
                            storage to final distribution.
                        </p>
                    </div>
                    <!-- CARD -->
                    <div class="modern-card bg-[var(--color-surface-200)] p-8 group">
                        <div
                            class="w-16 h-16 rounded-2xl bg-[var(--color-primary)]/10 text-[var(--color-primary)] flex items-center justify-center text-3xl transition duration-300 group-hover:bg-[var(--color-primary)] group-hover:text-white">
                            <i class="fa-solid fa-file-shield"></i>
                        </div>
                        <h3 class="mt-7 text-2xl font-bold leading-tight">
                            Regulatory Compliance
                        </h3>
                        <p class="mt-5 text-[16px] leading-8">
                            Complete support for import permits, registrations, and compliance documentation with Nepal’s
                            livestock authorities.
                        </p>
                    </div>
                    <!-- CARD -->
                    <div class="modern-card bg-[var(--color-surface-200)] p-8 group">
                        <div
                            class="w-16 h-16 rounded-2xl bg-[var(--color-primary)]/10 text-[var(--color-primary)] flex items-center justify-center text-3xl transition duration-300 group-hover:bg-[var(--color-primary)] group-hover:text-white">
                            <i class="fa-solid fa-graduation-cap"></i>
                        </div>
                        <h3 class="mt-7 text-2xl font-bold leading-tight">
                            Training & Workshops
                        </h3>
                        <p class="mt-5 text-[16px] leading-8">
                            Technical workshops and professional training programs focused on biosecurity, disease
                            management, and proper product use.
                        </p>
                    </div>
                    <!-- CARD -->
                    <div class="modern-card bg-[var(--color-surface-200)] p-8 group">
                        <div
                            class="w-16 h-16 rounded-2xl bg-[var(--color-primary)]/10 text-[var(--color-primary)] flex items-center justify-center text-3xl transition duration-300 group-hover:bg-[var(--color-primary)] group-hover:text-white">
                            <i class="fa-solid fa-globe"></i>
                        </div>
                        <h3 class="mt-7 text-2xl font-bold leading-tight">
                            Global Product Sourcing
                        </h3>
                        <p class="mt-5 text-[16px] leading-8">
                            Access to specialty veterinary products through our extensive network of trusted global
                            manufacturers and suppliers.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================
       GLOBAL PARTNERS SECTION
       ========================================= -->
    <section id="partners">
        <!-- BACKGROUND -->
        <div class="absolute top-0 right-0 w-[400px] h-[400px] bg-[var(--color-primary)]/5 rounded-full blur-3xl"></div>
        <div class="max-w-7xl mx-auto px-5 lg:px-8 relative z-10">
            <!-- SECTION HEADER -->
            <div class="text-center max-w-3xl mx-auto mb-8 reveal">
                <span class="section-tag justify-center">
                    Key Partners
                </span>
                <h2 class="mt-5 text-4xl md:text-5xl font-bold leading-tight">
                    40+ World-Renowned
                    <span class="text-[var(--color-secondary)] italic">
                        Global Partners
                    </span>
                </h2>
                <p class="mt-6 text-[16px] leading-9">
                    We collaborate with the world’s most trusted animal health manufacturers to deliver only the highest
                    quality veterinary solutions across Nepal.
                </p>
            </div>
            <!-- SLIDER WRAPPER -->
            <div class="relative reveal">
                <!-- GRADIENTS -->
                <!-- <div class="absolute left-0 top-0 bottom-0 w-16 z-20 bg-gradient-to-r from-white to-transparent pointer-events-none"></div> -->
                <!-- <div class="absolute right-0 top-0 bottom-0 w-16 z-20 bg-gradient-to-l from-white to-transparent pointer-events-none"></div> -->
                <!-- SLIDER -->
                <div id="partnersSlider" class="flex gap-6 overflow-x-auto scroll-smooth scrollbar-hide pb-4">
                    <!-- CARD -->
                    <div class="partner-card min-w-[280px] modern-card bg-white p-8 text-center flex-shrink-0">
                        <div
                            class="w-20 h-20 mx-auto rounded-[24px] bg-[var(--color-primary)]/10 text-4xl flex items-center justify-center">
                            🧪
                        </div>
                        <h3 class="mt-6 text-2xl font-bold">
                            Adisseo
                        </h3>
                        <p class="mt-2 text-sm font-semibold text-gray-500">
                            🇫🇷 France
                        </p>
                    </div>
                    <!-- CARD -->
                    <div class="partner-card min-w-[280px] modern-card bg-white p-8 text-center flex-shrink-0">
                        <div
                            class="w-20 h-20 mx-auto rounded-[24px] bg-green-100 text-4xl flex items-center justify-center">
                            🔬
                        </div>
                        <h3 class="mt-6 text-2xl font-bold">
                            NHF
                        </h3>
                        <p class="mt-2 text-sm font-semibold text-gray-500">
                            🇩🇪 Germany
                        </p>
                    </div>
                    <!-- CARD -->
                    <div class="partner-card min-w-[280px] modern-card bg-white p-8 text-center flex-shrink-0">
                        <div
                            class="w-20 h-20 mx-auto rounded-[24px] bg-blue-100 text-4xl flex items-center justify-center">
                            💊
                        </div>
                        <h3 class="mt-6 text-2xl font-bold">
                            Interchemie
                        </h3>
                        <p class="mt-2 text-sm font-semibold text-gray-500">
                            🇳🇱 Netherlands
                        </p>
                    </div>
                    <!-- CARD -->
                    <div class="partner-card min-w-[280px] modern-card bg-white p-8 text-center flex-shrink-0">
                        <div
                            class="w-20 h-20 mx-auto rounded-[24px] bg-orange-100 text-4xl flex items-center justify-center">
                            🌡
                        </div>
                        <h3 class="mt-6 text-2xl font-bold">
                            Avitech
                        </h3>
                        <p class="mt-2 text-sm font-semibold text-gray-500">
                            🇸🇬 Singapore
                        </p>
                    </div>
                    <!-- CARD -->
                    <div class="partner-card min-w-[280px] modern-card bg-white p-8 text-center flex-shrink-0">
                        <div
                            class="w-20 h-20 mx-auto rounded-[24px] bg-emerald-100 text-4xl flex items-center justify-center">
                            🌿
                        </div>
                        <h3 class="mt-6 text-2xl font-bold">
                            Natural Remedies
                        </h3>
                        <p class="mt-2 text-sm font-semibold text-gray-500">
                            🇮🇳 India
                        </p>
                    </div>
                    <!-- CARD -->
                    <div class="partner-card min-w-[280px] modern-card bg-white p-8 text-center flex-shrink-0">
                        <div class="w-20 h-20 mx-auto rounded-[24px] bg-red-100 text-4xl flex items-center justify-center">
                            🏥
                        </div>
                        <h3 class="mt-6 text-2xl font-bold">
                            Elanco
                        </h3>
                        <p class="mt-2 text-sm font-semibold text-gray-500">
                            🇺🇸 USA
                        </p>
                    </div>
                    <!-- CARD -->
                    <div class="partner-card min-w-[280px] modern-card bg-white p-8 text-center flex-shrink-0">
                        <div
                            class="w-20 h-20 mx-auto rounded-[24px] bg-indigo-100 text-4xl flex items-center justify-center">
                            💉
                        </div>
                        <h3 class="mt-6 text-2xl font-bold">
                            Boehringer
                        </h3>
                        <p class="mt-2 text-sm font-semibold text-gray-500">
                            🇩🇪 Germany
                        </p>
                    </div>
                </div>
                <!-- NAVIGATION -->
                <div class="flex items-center justify-center gap-4 mt-8">
                    <button id="partnerPrev"
                        class="w-12 h-12 rounded-full border border-gray-200 bg-white text-[var(--color-primary)] flex items-center justify-center text-xl hover:bg-[var(--color-primary)] hover:text-white transition">
                        <i class="fa-solid fa-arrow-left"></i>
                    </button>
                    <button id="partnerNext"
                        class="w-12 h-12 rounded-full border border-gray-200 bg-white text-[var(--color-primary)] flex items-center justify-center text-xl hover:bg-[var(--color-primary)] hover:text-white transition">
                        <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================
       NUMBERS / STATS SECTION
       ========================================= -->
    <section id="numbers" style="background-color: white;">
        <!-- BACKGROUND -->
        <div class="absolute inset-0 bg-[linear-gradient(to_bottom,var(--color-white),#f8fafc)]"></div>
        <!-- SHAPES -->
        <div class="absolute top-0 right-0 w-[380px] h-[380px] bg-[var(--color-primary)]/5 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-[320px] h-[320px] bg-[var(--color-secondary)]/10 rounded-full blur-3xl">
        </div>
        <div class="max-w-7xl mx-auto px-5 lg:px-8 relative z-10">
            <!-- TOP CONTENT -->
            <div class="grid lg:grid-cols-[420px_1fr] gap-16 items-center">
                <!-- LEFT -->
                <div class="reveal">
                    <span class="section-tag">
                        Our Impact
                    </span>
                    <h2 class="mt-5 text-4xl md:text-5xl font-bold leading-tight">
                        The Difference in
                        <span class="text-[var(--color-secondary)]">
                            Our Numbers
                        </span>
                    </h2>
                    <p class="mt-7 text-[16px] leading-9 max-w-lg">
                        Over two decades, KVD has built a trusted nationwide veterinary distribution network powered by
                        innovation, quality assurance, and global partnerships.
                    </p>
                    <!-- SMALL CTA -->
                    <div class="mt-10 flex items-center gap-5">
                        <div
                            class="w-16 h-16 rounded-2xl bg-[var(--color-primary)] text-white flex items-center justify-center text-2xl shadow-lg">
                            <i class="fa-solid fa-chart-line"></i>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold text-[var(--color-primary)]">
                                Trusted Across Nepal
                            </h4>
                            <p class="text-sm mt-1">
                                Supporting farms, clinics & distributors nationwide.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- RIGHT -->
                <div class="grid sm:grid-cols-2 gap-6 reveal">
                    <!-- LARGE CARD -->
                    <div class="sm:col-span-2 rounded-[36px] bg-[var(--color-primary)] p-8 md:p-10">
                        <!-- Glow -->
                        <div class="absolute top-0 right-0 w-[240px] h-[240px] bg-white/10 rounded-full blur-3xl"></div>
                        <div class="relative z-10 flex flex-col md:flex-row md:items-center md:justify-between gap-8">
                            <div>
                                <span
                                    class="inline-flex items-center gap-2 text-white/70 text-sm uppercase tracking-[0.15em] font-bold">
                                    <span class="w-8 h-[2px] bg-[var(--color-secondary)]"></span>
                                    Product Portfolio
                                </span>
                                <div class="mt-5 text-6xl md:text-7xl font-bold text-white leading-none">
                                    <span class="count-val" data-target="3000">
                                        0
                                    </span><sup class="text-[var(--color-secondary)] text-4xl">+</sup>
                                </div>
                            </div>
                            <div class="md:max-w-[260px]">
                                <p class="text-white/75 text-[16px] leading-8">
                                    Extensive veterinary medicines, vaccines, supplements, and feed solutions trusted across
                                    Nepal.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- CARD -->
                    <div
                        class="modern-card bg-white p-6 border border-slate-100 group hover:border-[var(--color-primary)]/20">
                        <div class="flex items-start justify-between">
                            <div>
                                <span class="text-sm uppercase tracking-[0.15em] font-bold text-gray-400">
                                    Global Partners
                                </span>
                                <div class="mt-4 text-5xl font-bold text-[var(--color-primary)] leading-none">
                                    <span class="count-val" data-target="40">
                                        0
                                    </span><sup class="text-[var(--color-secondary)] text-2xl">+</sup>
                                </div>
                            </div>
                            <div
                                class="w-14 h-14 rounded-2xl bg-green-100 text-[var(--color-secondary)] flex items-center justify-center text-2xl transition duration-300 group-hover:bg-[var(--color-secondary)] group-hover:text-white">
                                <i class="fa-solid fa-handshake"></i>
                            </div>
                        </div>
                        <p class="mt-6 text-[16px] leading-8">
                            Strategic partnerships with world-renowned veterinary manufacturers and suppliers.
                        </p>
                    </div>
                    <!-- CARD -->
                    <div
                        class="modern-card bg-white p-6 border border-slate-100 group hover:border-[var(--color-primary)]/20">
                        <div class="flex items-start justify-between">
                            <div>
                                <span class="text-sm uppercase tracking-[0.15em] font-bold text-gray-400">
                                    Team Members
                                </span>
                                <div class="mt-4 text-5xl font-bold text-[var(--color-primary)] leading-none">
                                    <span class="count-val" data-target="100">
                                        0
                                    </span><sup class="text-[var(--color-secondary)] text-2xl">+</sup>
                                </div>
                            </div>
                            <div
                                class="w-14 h-14 rounded-2xl bg-[var(--color-primary)]/10 text-[var(--color-primary)] flex items-center justify-center text-2xl transition duration-300 group-hover:bg-[var(--color-primary)] group-hover:text-white">
                                <i class="fa-solid fa-users"></i>
                            </div>
                        </div>
                        <p class="mt-6 text-[16px] leading-8">
                            Dedicated veterinary professionals, logistics experts, and technical advisors.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================
       SERVING ALL OF NEPAL
       ========================================= -->
    <section id="coverage">
        <!-- BACKGROUND -->
        <div class="absolute top-0 left-0 w-[400px] h-[400px] bg-[var(--color-primary)]/5 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-0 w-[320px] h-[320px] bg-[var(--color-secondary)]/10 rounded-full blur-3xl">
        </div>
        <div class="max-w-7xl mx-auto px-5 lg:px-8 relative z-10">
            <!-- SECTION HEADER -->
            <div class="text-center max-w-3xl mx-auto mb-8 reveal">
                <span class="section-tag justify-center">
                    Our Reach
                </span>
                <h2 class="mt-5 text-4xl md:text-5xl font-bold leading-tight">
                    Serving
                    <span class="text-[var(--color-secondary)] italic">
                        All of Nepal
                    </span>
                </h2>
                <p class="mt-5 text-[16px] leading-9">
                    Delivering trusted veterinary healthcare solutions across every province of Nepal through our nationwide
                    distribution network.
                </p>
            </div>
            <!-- MAIN GRID -->
            <div class="grid lg:grid-cols-[1fr_520px] gap-12 items-center">
                <!-- LEFT CONTENT -->
                <div class="reveal">
                    <span class="section-tag">
                        Nationwide Network
                    </span>
                    <h3 class="mt-5 text-4xl font-bold leading-tight max-w-2xl">
                        From
                        <span class="text-[var(--color-secondary)] italic">
                            Terai Plains
                        </span>
                        to
                        <span class="text-[var(--color-secondary)] italic">
                            Himalayan Hills
                        </span>
                    </h3>
                    <p class="mt-7 text-[16px] leading-9 max-w-2xl">
                        Our extensive supply chain and logistics infrastructure ensure that world-class veterinary
                        medicines, vaccines, and feed supplements reach every region of Nepal efficiently and safely.
                    </p>
                    <!-- FEATURES -->
                    <div class="mt-10 grid sm:grid-cols-2 gap-5">
                        <!-- ITEM -->
                        <div class="modern-card bg-white p-6 flex items-start gap-4">
                            <div
                                class="w-14 h-14 rounded-2xl bg-[var(--color-primary)]/10 text-[var(--color-primary)] flex items-center justify-center text-2xl flex-shrink-0">
                                <i class="fa-solid fa-shop"></i>
                            </div>
                            <div>
                                <h4 class="text-lg font-bold">
                                    500+ Retail Points
                                </h4>
                                <p class="text-sm mt-2 leading-7">
                                    Distribution network covering veterinary stores nationwide.
                                </p>
                            </div>
                        </div>
                        <!-- ITEM -->
                        <div class="modern-card bg-white p-6 flex items-start gap-4">
                            <div
                                class="w-14 h-14 rounded-2xl bg-green-100 text-[var(--color-secondary)] flex items-center justify-center text-2xl flex-shrink-0">
                                <i class="fa-solid fa-truck-fast"></i>
                            </div>
                            <div>
                                <h4 class="text-lg font-bold">
                                    Fast Delivery
                                </h4>
                                <p class="text-sm mt-2 leading-7">
                                    24–48 hour delivery service inside Kathmandu Valley.
                                </p>
                            </div>
                        </div>
                        <!-- ITEM -->
                        <div class="modern-card bg-white p-6 flex items-start gap-4">
                            <div
                                class="w-14 h-14 rounded-2xl bg-orange-100 text-orange-500 flex items-center justify-center text-2xl flex-shrink-0">
                                <i class="fa-solid fa-user-group"></i>
                            </div>
                            <div>
                                <h4 class="text-lg font-bold">
                                    Regional Teams
                                </h4>
                                <p class="text-sm mt-2 leading-7">
                                    Dedicated sales and technical teams in every province.
                                </p>
                            </div>
                        </div>
                        <!-- ITEM -->
                        <div class="modern-card bg-white p-6 flex items-start gap-4">
                            <div
                                class="w-14 h-14 rounded-2xl bg-cyan-100 text-cyan-600 flex items-center justify-center text-2xl flex-shrink-0">
                                <i class="fa-solid fa-snowflake"></i>
                            </div>
                            <div>
                                <h4 class="text-lg font-bold">
                                    Cold Chain Logistics
                                </h4>
                                <p class="text-sm mt-2 leading-7">
                                    Temperature-controlled transport for vaccines & biologics.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- RIGHT CARD -->
                <div class="relative reveal">
                    <!-- MAIN CARD -->
                    <div
                        class="relative overflow-hidden rounded-[36px] bg-[var(--color-primary)] p-8 md:p-10 shadow-[0_20px_60px_rgba(52,47,127,0.18)]">
                        <!-- GLOW -->
                        <div class="absolute top-0 right-0 w-[220px] h-[220px] bg-white/10 rounded-full blur-3xl"></div>
                        <div class="relative z-10">
                            <!-- TITLE -->
                            <div class="flex items-center justify-between gap-4 flex-wrap">
                                <div>
                                    <span
                                        class="inline-flex items-center gap-2 text-white/70 text-xs uppercase tracking-[0.18em] font-bold">
                                        <span class="w-8 h-[2px] bg-[var(--color-secondary)]"></span>
                                        Coverage Map
                                    </span>
                                    <h3 class="mt-4 text-3xl font-bold text-white">
                                        All 7 Provinces Covered
                                    </h3>
                                </div>
                                <div
                                    class="w-16 h-16 rounded-2xl bg-white/10 border border-white/10 text-white flex items-center justify-center text-3xl">
                                    🇳🇵
                                </div>
                            </div>
                            <!-- PROVINCES -->
                            <div class="mt-6 flex flex-wrap gap-4">
                                <div
                                    class="px-5 py-3 rounded-full bg-white/10 border border-white/10 text-white text-sm font-semibold">
                                    🏔 Koshi Province
                                </div>
                                <div
                                    class="px-5 py-3 rounded-full bg-white/10 border border-white/10 text-white text-sm font-semibold">
                                    🌾 Madhesh Province
                                </div>
                                <div
                                    class="px-5 py-3 rounded-full bg-white/10 border border-white/10 text-white text-sm font-semibold">
                                    🏙 Bagmati Province
                                </div>
                                <div
                                    class="px-5 py-3 rounded-full bg-white/10 border border-white/10 text-white text-sm font-semibold">
                                    ⛰ Gandaki Province
                                </div>
                                <div
                                    class="px-5 py-3 rounded-full bg-white/10 border border-white/10 text-white text-sm font-semibold">
                                    🌳 Lumbini Province
                                </div>
                                <div
                                    class="px-5 py-3 rounded-full bg-white/10 border border-white/10 text-white text-sm font-semibold">
                                    🏞 Karnali Province
                                </div>
                                <div
                                    class="px-5 py-3 rounded-full bg-white/10 border border-white/10 text-white text-sm font-semibold">
                                    🌄 Sudurpashchim
                                </div>
                            </div>
                            <!-- FOOTER -->
                            <div class="mt-6 p-5 rounded-[24px] bg-white/10 border border-white/10 backdrop-blur-md">
                                <div class="flex items-start gap-4">
                                    <div
                                        class="w-14 h-14 rounded-2xl bg-[var(--color-secondary)] text-white flex items-center justify-center text-2xl flex-shrink-0">
                                        <i class="fa-solid fa-location-dot"></i>
                                    </div>
                                    <div>
                                        <h4 class="text-white text-xl font-bold">
                                            KVD Headquarters
                                        </h4>
                                        <p class="text-white/70 mt-2 leading-7 text-sm">
                                            KVD Complex, Balkumari, Lalitpur — Central hub for nationwide veterinary
                                            distribution and logistics.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================
       LATEST NEWS & ANNOUNCEMENTS
       ========================================= -->
    <section id="news">
        <!-- BACKGROUND -->
        <div class="absolute top-0 right-0 w-[420px] h-[420px] bg-[var(--color-primary)]/5 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-[300px] h-[300px] bg-[var(--color-secondary)]/10 rounded-full blur-3xl">
        </div>
        <div class="max-w-7xl mx-auto px-5 lg:px-8 relative z-10">
            <!-- HEADER -->
            <div class="max-w-3xl mx-auto text-center reveal">
                <span class="section-tag">
                    Latest Updates
                </span>
                <h2 class="mt-5 text-4xl md:text-5xl font-bold leading-tight">
                    News &
                    <span class="text-[var(--color-secondary)] italic">
                        Announcements
                    </span>
                </h2>
                <p class="mt-6 text-[16px] leading-9 max-w-2xl">
                    Stay updated with the latest announcements, partnerships, technical programs, and veterinary industry
                    news from Kantipur Vet Distributors.
                </p>
            </div>
            <!-- NEWS LAYOUT -->
            <div class="grid lg:grid-cols-[1.1fr_0.9fr] gap-8 mt-8">
                <!-- FEATURED NEWS -->
                <div class="reveal">
                    <div
                        class="group rounded-[36px] bg-[var(--color-primary)] p-10 md:p-12 h-full shadow-[0_20px_60px_rgba(52,47,127,0.15)]">
                        <!-- GLOW -->
                        <div class="absolute top-0 right-0 w-[240px] h-[240px] bg-white/10 rounded-full blur-3xl"></div>
                        <div class="relative z-10">
                            <!-- TAG -->
                            <div
                                class="inline-flex items-center gap-3 px-5 py-2 rounded-full bg-white/10 border border-white/10 text-white text-xs uppercase tracking-[0.15em] font-bold">
                                <span class="w-2 h-2 rounded-full bg-[var(--color-secondary)]"></span>
                                Latest Announcement
                            </div>
                            <!-- DATE -->
                            <div class="mt-5 text-white/60 text-sm font-semibold tracking-wide uppercase">
                                June 3, 2025
                            </div>
                            <!-- TITLE -->
                            <h3 class="mt-5 text-3xl md:text-4xl font-bold leading-tight text-white">
                                Important Notice Regarding Product Distribution & Dealer Verification
                            </h3>
                            <!-- TEXT -->
                            <p class="mt-6 text-white/75 text-[16px] leading-9 max-w-2xl">
                                Kantipur Vet Distributors issues an important public notice regarding authorized dealer
                                verification and official distribution channels for veterinary healthcare products across
                                Nepal.
                            </p>
                            <!-- LINK -->
                            <div class="mt-8">
                                <a href="#"
                                    class="inline-flex items-center gap-3 text-[var(--color-secondary)] font-bold text-lg hover:gap-5 transition-all duration-300">
                                    Read Full Notice
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- NEWS LIST -->
                <div class="space-y-5 reveal">
                    <!-- ITEM -->
                    <div class="modern-card bg-white p-7 group cursor-pointer">
                        <div class="flex items-start justify-between gap-5">
                            <div>
                                <div class="text-xs uppercase tracking-[0.15em] font-bold text-[var(--color-secondary)]">
                                    May 2025
                                </div>
                                <h4
                                    class="mt-3 text-xl font-bold leading-8 group-hover:text-[var(--color-primary)] transition">
                                    New Partnership with Leading European Vaccine Manufacturer
                                </h4>
                            </div>
                            <div class="w-12 h-12 rounded-2xl text-[var(--color-primary)] flex items-center justify-center flex-shrink-0 group-hover:bg-[var(--color-primary)] group-hover:text-white transition duration-300"
                                style=" background-color: rgba(52, 47, 127, 0.1);">
                                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                            </div>
                        </div>
                    </div>
                    <!-- ITEM -->
                    <div class="modern-card bg-white p-7 group cursor-pointer">
                        <div class="flex items-start justify-between gap-5">
                            <div>
                                <div class="text-xs uppercase tracking-[0.15em] font-bold text-[var(--color-secondary)]">
                                    March 2025
                                </div>
                                <h4
                                    class="mt-3 text-xl font-bold leading-8 group-hover:text-[var(--color-primary)] transition">
                                    KVD Hosts Annual Veterinary Technical Training at KVD Complex
                                </h4>
                            </div>
                            <div
                                class="w-12 h-12 rounded-2xl bg-green-100 text-[var(--color-secondary)] flex items-center justify-center flex-shrink-0 group-hover:bg-[var(--color-secondary)] group-hover:text-white transition duration-300">
                                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                            </div>
                        </div>
                    </div>
                    <!-- ITEM -->
                    <div class="modern-card bg-white p-7 group cursor-pointer">
                        <div class="flex items-start justify-between gap-5">
                            <div>
                                <div class="text-xs uppercase tracking-[0.15em] font-bold text-[var(--color-secondary)]">
                                    January 2025
                                </div>
                                <h4
                                    class="mt-3 text-xl font-bold leading-8 group-hover:text-[var(--color-primary)] transition">
                                    Poultry Disease Alert & Biosecurity Recommendations
                                </h4>
                            </div>
                            <div
                                class="w-12 h-12 rounded-2xl bg-orange-100 text-orange-500 flex items-center justify-center flex-shrink-0 group-hover:bg-orange-500 group-hover:text-white transition duration-300">
                                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                            </div>
                        </div>
                    </div>
                    <!-- ITEM -->
                    <div class="modern-card bg-white p-7 group cursor-pointer">
                        <div class="flex items-start justify-between gap-5">
                            <div>
                                <div class="text-xs uppercase tracking-[0.15em] font-bold text-[var(--color-secondary)]">
                                    December 2024
                                </div>
                                <h4
                                    class="mt-3 text-xl font-bold leading-8 group-hover:text-[var(--color-primary)] transition">
                                    KVD Awarded Best Animal Health Distributor at Nepal Agri Expo
                                </h4>
                            </div>
                            <div
                                class="w-12 h-12 rounded-2xl bg-blue-100 text-blue-500 flex items-center justify-center flex-shrink-0 group-hover:bg-blue-500 group-hover:text-white transition duration-300">
                                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================= CONTACT SECTION ========================= -->
    <section>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-14 items-start">
                <!-- ========================= LEFT CONTENT ========================= -->
                <div class="lg:col-span-5 pt-8">
                    <p class="section-tag reveal">
                        Get In Touch
                    </p>
                    <h2 class="mt-5 text-4xl md:text-5xl font-bold leading-tight text-primary reveal">
                        We’d Love To Hear From You.
                    </h2>
                    <p class="mt-5 text-gray-600 leading-8 reveal">
                        Contact Kantipur Pharmaceuticals Lab Limited for veterinary healthcare products, technical support,
                        product inquiries and partnership opportunities across Nepal.
                    </p>
                    <!-- Contact Cards -->
                    <div class="space-y-2 mt-8">
                        <!-- Office -->
                        <div class="modern-card p-4  flex items-start gap-5 reveal">
                            <div
                                class="w-16 h-16 rounded-3xl bg-primary/10 flex items-center justify-center flex-shrink-0">
                                <i class="fa-solid fa-location-dot text-primary text-2xl"></i>
                            </div>
                            <div>
                                <h4 class="text-xl font-semibold text-primary">
                                    Corporate Office
                                </h4>
                                <p class="mt-2 text-gray-500 leading-8">
                                    Balkumari, Lalitpur, Nepal
                                </p>
                            </div>
                        </div>
                        <!-- Factory -->
                        <div class="modern-card p-4  flex items-start gap-5 reveal">
                            <div
                                class="w-16 h-16 rounded-3xl bg-secondary/10 flex items-center justify-center flex-shrink-0">
                                <i class="fa-solid fa-industry text-secondary text-2xl"></i>
                            </div>
                            <div>
                                <h4 class="text-xl font-semibold text-primary">
                                    Factory Address
                                </h4>
                                <p class="mt-2 text-gray-500 leading-8">
                                    Hokshe, Kavre
                                </p>
                            </div>
                        </div>
                        <!-- Phone -->
                        <div class="modern-card p-4  flex items-start gap-5 reveal">
                            <div
                                class="w-16 h-16 rounded-3xl bg-primary/10 flex items-center justify-center flex-shrink-0">
                                <i class="fa-solid fa-phone text-primary text-2xl"></i>
                            </div>
                            <div>
                                <h4 class="text-xl font-semibold text-primary">
                                    Phone Number
                                </h4>
                                <p class="mt-2 text-gray-500 leading-8">
                                    +977-01-5186604
                                </p>

                            </div>
                        </div>
                        <!-- Email -->
                        <div class="modern-card p-4  flex items-start gap-5 reveal">
                            <div
                                class="w-16 h-16 rounded-3xl bg-secondary/10 flex items-center justify-center flex-shrink-0">
                                <i class="fa-solid fa-envelope text-secondary text-2xl"></i>
                            </div>
                            <div>
                                <h4 class="text-2xl font-semibold text-primary">
                                    Email Address
                                </h4>
                                <p class="mt-2 text-gray-500 leading-8 break-all">
                                    info@kantipurpharma.com
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ========================= FORM ========================= -->
                <div class="lg:col-span-7">
                    <div class="modern-card p-8 md:p-12 reveal">
                        <div class="mb-10">
                            <p class="section-tag">
                                Send Message
                            </p>
                            <h3 class="mt-5 text-3xl md:text-4xl font-bold text-primary">
                                Contact Form
                            </h3>
                        </div>
                        <!-- Form -->
                        <form action="#" method="POST">
                            <!-- Grid -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <!-- Name -->
                                <div>
                                    <label class="block text-sm font-semibold text-primary mb-3">
                                        Full Name
                                    </label>
                                    <input type="text" placeholder="Enter your name"
                                        class="w-full h-14 rounded-2xl border border-gray-200 bg-gray-50 px-5 outline-none focus:border-primary focus:ring-4 focus:ring-primary/10 transition duration-300">
                                </div>
                                <!-- Email -->
                                <div>
                                    <label class="block text-sm font-semibold text-primary mb-3">
                                        Email Address
                                    </label>
                                    <input type="email" placeholder="Enter your email"
                                        class="w-full h-14 rounded-2xl border border-gray-200 bg-gray-50 px-5 outline-none focus:border-primary focus:ring-4 focus:ring-primary/10 transition duration-300">
                                </div>
                                <!-- Phone -->
                                <div>
                                    <label class="block text-sm font-semibold text-primary mb-3">
                                        Phone Number
                                    </label>
                                    <input type="text" placeholder="Enter your phone"
                                        class="w-full h-14 rounded-2xl border border-gray-200 bg-gray-50 px-5 outline-none focus:border-primary focus:ring-4 focus:ring-primary/10 transition duration-300">
                                </div>
                                <!-- Subject -->
                                <div>
                                    <label class="block text-sm font-semibold text-primary mb-3">
                                        Subject
                                    </label>
                                    <input type="text" placeholder="Enter subject"
                                        class="w-full h-14 rounded-2xl border border-gray-200 bg-gray-50 px-5 outline-none focus:border-primary focus:ring-4 focus:ring-primary/10 transition duration-300">
                                </div>
                            </div>
                            <!-- Message -->
                            <div class="mt-6">
                                <label class="block text-sm font-semibold text-primary mb-3">
                                    Message
                                </label>
                                <textarea rows="5" placeholder="Write your message..."
                                    class="w-full rounded-[28px] border border-gray-200 bg-gray-50 px-5 py-5 outline-none focus:border-primary focus:ring-4 focus:ring-primary/10 transition duration-300 resize-none"></textarea>
                            </div>
                            <!-- Button -->
                            <div class="mt-8">
                                <button type="submit" class="primary-btn border-0 cursor-pointer">
                                    Send Message
                                    <i class="fa-solid fa-paper-plane"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================
       VIDEO MODAL
       ========================================= -->
    <div id="videoModal"
        class="fixed inset-0 z-[9999] hidden items-center justify-center bg-black/80 backdrop-blur-sm p-5">
        <!-- CLOSE -->
        <button id="closeVideo"
            class="absolute top-5 right-5 w-10 h-10 rounded-full bg-white text-black text-xl flex items-center justify-center hover:bg-[var(--color-secondary)] hover:text-white transition">
            <i class="fa-solid fa-xmark"></i>
        </button>
        <!-- VIDEO WRAPPER -->
        <div class="relative w-full max-w-5xl rounded-[28px] overflow-hidden shadow-2xl bg-black scale-[0.9] opacity-0 transition duration-300"
            id="videoWrapper">
            <video id="popupVideo" controls autoplay preload="none" class="w-full h-full max-h-[80vh] bg-black">
                <source src="" type="video/mp4">
            </video>
        </div>
    </div>
@endsection
