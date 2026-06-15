@extends('themes.default.common.master')

@section('title', $data->post_title)
@section('meta_keyword', $data->meta_keyword)
@section('meta_description', $data->meta_description)
@section('thumbnail', $data->page_thumbnail)

@section('content')

    <!-- ========================= PAGE BANNER ========================= -->
    @php
        $breadcrumbs = [
            ['label' => 'Home', 'url' => url('/')],
            ['label' => 'Blog', 'url' => url('/blog')],
            ['label' => $data->post_title, 'url' => null],
        ];
    @endphp

    <section class="relative h-[420px] overflow-hidden">
        <img src="{{ $data->banner ? asset('uploads/medium/' . $data->banner) : asset('assets/uploads/img/vision.jpg') }}"
            alt="{{ $data->post_title }}" class="w-full h-[420px] object-cover">
        <div class="absolute inset-0 bg-black/55"></div>
        <div class="absolute bottom-0 left-0 w-full h-32 bg-gradient-to-t from-black/40 to-transparent"></div>

        <div class="absolute inset-0 flex flex-col items-center justify-center text-center px-4">
            <p class="text-white/80 uppercase tracking-[0.25em] text-sm reveal">
                    @foreach ($breadcrumbs as $crumb)
                    @if ($crumb['url'])
                        <a href="{{ $crumb['url'] }}" class="hover:text-primary">
                            {{ $crumb['label'] }}
                        </a>
                    @else
                        {{-- <span class="font-semibold text-white"> --}}
                            {{ $crumb['label'] }}
                        {{-- </span> --}}
                    @endif

                    @if (!$loop->last)
                        <span>/</span>
                    @endif
                @endforeach
            </p>
            <h1 class="mt-5 text-white text-4xl md:text-6xl font-bold reveal">

                {{ $data->post_title }}
            </h1>
        </div>
    </section>

    <!-- ========================= BLOG DETAIL SECTION ========================= -->
    <section class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">

                <!-- ========================= MAIN CONTENT ========================= -->
                <div class="lg:col-span-8">

                    <!-- Featured Image -->
                    <div class="overflow-hidden rounded-[32px] shadow-xl">
                        <img src="{{ $data->page_thumbnail ? asset('uploads/medium/' . $data->page_thumbnail) : asset('themes-assets/img/blog1.png') }}"
                            alt="{{ $data->post_title }}"
                            class="w-full h-[480px] object-cover hover:scale-105 transition duration-700">
                    </div>

                    <!-- Meta -->
                    <div class="flex flex-wrap items-center gap-6 mt-8 text-sm uppercase tracking-wide text-gray-400">
                        <span class="flex items-center gap-2">
                            <i class="fa-solid fa-user text-secondary"></i>
                            {{ $data->associated_title }}
                        </span>

                        <span class="flex items-center gap-2">
                            <i class="fa-solid fa-calendar text-secondary"></i>
                            {{ $data->created_at->format('d F, Y') }}
                        </span>
                    </div>

                    <!-- Content -->
                    <article class="mt-8">

                        <h2 class="text-3xl md:text-4xl font-bold text-primary leading-tight">
                            {{ $data->post_title }}
                        </h2>

                        <div class="mt-8 text-gray-600 leading-9 text-[16px] text-justify">
                            {!! $data->post_content !!}
                        </div>

                    </article>

                    <!-- Share -->
                    @php
                        $shareUrl = url()->current();
                        $shareText = $data->post_title;
                    @endphp

                    <div class="mt-10 border-t pt-6">

                        <h4 class="text-lg font-bold text-primary uppercase tracking-wide">
                            Share This Article
                        </h4>

                        <p class="text-sm text-gray-500 mt-2">
                            Help others discover this post
                        </p>

                        <!-- Share Buttons -->
                        <div class="flex flex-wrap items-center gap-3 mt-5">

                            <!-- Facebook -->
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode($shareUrl) }}"
                                target="_blank"
                                class="flex items-center gap-2 px-4 py-2 rounded-xl bg-[#1877F2] text-white text-sm hover:opacity-90 transition">
                                <i class="fab fa-facebook-f"></i> Facebook
                            </a>

                            <!-- X (Twitter) -->
                            <a href="https://twitter.com/intent/tweet?url={{ urlencode($shareUrl) }}&text={{ urlencode($shareText) }}"
                                target="_blank"
                                class="flex items-center gap-2 px-4 py-2 rounded-xl bg-black text-white text-sm hover:opacity-90 transition">
                                <i class="fab fa-x-twitter"></i> X
                            </a>

                            <!-- WhatsApp -->
                            <a href="https://wa.me/?text={{ urlencode($shareText . ' ' . $shareUrl) }}" target="_blank"
                                class="flex items-center gap-2 px-4 py-2 rounded-xl bg-green-500 text-white text-sm hover:opacity-90 transition">
                                <i class="fab fa-whatsapp"></i> WhatsApp
                            </a>

                            <!-- LinkedIn -->
                            <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode($shareUrl) }}"
                                target="_blank"
                                class="flex items-center gap-2 px-4 py-2 rounded-xl bg-[#0A66C2] text-white text-sm hover:opacity-90 transition">
                                <i class="fab fa-linkedin-in"></i> LinkedIn
                            </a>

                            <!-- Copy Link -->
                            <button onclick="copyBlogLink()"
                                class="flex items-center gap-2 px-4 py-2 rounded-xl bg-gray-100 text-gray-700 text-sm hover:bg-gray-200 transition">
                                <i class="fa fa-link"></i> Copy Link
                            </button>

                        </div>
                    </div>

                    <!-- Copy Script -->
                    <script>
                        function copyBlogLink() {
                            const url = "{{ url()->current() }}";
                            navigator.clipboard.writeText(url).then(() => {
                                alert("Blog link copied to clipboard!");
                            });
                        }
                    </script>

                </div>

                <!-- ========================= SIDEBAR ========================= -->
                <aside class="lg:col-span-4">
                    <div class="sticky top-28 space-y-8">

                        <!-- Search -->
                        <div class="p-6 border rounded-2xl">
                            <h3 class="text-2xl font-bold text-primary">Search</h3>
                            <div class="relative mt-5">
                                <input type="text" placeholder="Search blog..."
                                    class="w-full h-12 rounded-xl border px-4 pr-10 focus:ring-2 focus:ring-primary/20 outline-none">

                                <button class="absolute right-3 top-1/2 -translate-y-1/2 text-primary">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </button>
                            </div>
                        </div>

                        <!-- Categories -->
                        <div class="border rounded-2xl overflow-hidden">
                            <div class="p-5 border-b">
                                <h3 class="text-2xl font-bold text-primary">Categories</h3>
                            </div>

                            <div class="p-5 space-y-4">
                                <a href="#" class="flex justify-between hover:text-secondary">
                                    Animal Healthcare <i class="fa fa-angle-right"></i>
                                </a>
                                <a href="#" class="flex justify-between hover:text-secondary">
                                    Veterinary Medicines <i class="fa fa-angle-right"></i>
                                </a>
                                <a href="#" class="flex justify-between hover:text-secondary">
                                    Feed Supplements <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Recent Posts -->
                        <div class="border rounded-2xl p-6">
                            <h3 class="text-2xl font-bold text-primary">Recent Posts</h3>

                            <div class="space-y-6 mt-6">

                                <a href="#" class="flex gap-4 group">
                                    <img src="{{ asset('themes-assets/img/blog2.webp') }}"
                                        class="w-[90px] h-[80px] object-cover rounded-xl group-hover:scale-105 transition">
                                    <div>
                                        <p class="text-xs text-gray-400">27 August, 2025</p>
                                        <h4 class="text-sm font-semibold group-hover:text-secondary">
                                            Advancing Animal Health
                                        </h4>
                                    </div>
                                </a>

                                <a href="#" class="flex gap-4 group">
                                    <img src="{{ asset('themes-assets/img/blog3.jpeg') }}"
                                        class="w-[90px] h-[80px] object-cover rounded-xl group-hover:scale-105 transition">
                                    <div>
                                        <p class="text-xs text-gray-400">27 August, 2025</p>
                                        <h4 class="text-sm font-semibold group-hover:text-secondary">
                                            Safe Livestock Solutions
                                        </h4>
                                    </div>
                                </a>

                            </div>
                        </div>

                        <!-- CTA -->
                        <div class="relative rounded-[28px] overflow-hidden">
                            <img src="{{ asset('themes-assets/img/vision.jpg') }}"
                                class="absolute inset-0 w-full h-full object-cover">

                            <div class="absolute inset-0 bg-primary/90"></div>

                            <div class="relative p-8 text-center text-white">
                                <h3 class="text-2xl font-bold">
                                    Need Help?
                                </h3>
                                <p class="mt-3 text-white/80">
                                    Contact us for more information.
                                </p>

                                <a href="{{ url('/contact') }}"
                                    class="inline-block mt-6 bg-white text-primary px-6 py-2 rounded-xl font-semibold">
                                    Contact Us
                                </a>
                            </div>
                        </div>

                    </div>
                </aside>

            </div>
        </div>
    </section>

@endsection
