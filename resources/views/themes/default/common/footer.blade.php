<!-- ========================= FOOTER ========================= -->
<footer class="relative overflow-hidden">
    <!-- Top Footer -->
    <div class="relative py-8">
        <!-- Background -->
        <div class="absolute inset-0 bg-[#1E1B4B]"></div>
        <div class="absolute inset-0 opacity-[0.04]">
            <img src="{{ asset('assets/uploads/img/kantipurvet-logo.png') }}" alt=""
                class="w-full h-full object-contain">
        </div>
        <!-- Content -->
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-14">
                <!-- ========================= Company ========================= -->
                <div class="reveal">
                    <a href="index.php" class="inline-block">
                        <img src="{{ asset('assets/uploads/img/kantipurvet-logo.png') }}" alt="Logo"
                            class="w-[130px] bg-white p-2 rounded-xl">
                    </a>
                    <p class="mt-6 text-white/75 leading-8 text-[15px]">
                        {{ $setting->welcome_title }}
                    </p>

                    <!-- Social -->
                    <div class="flex items-center gap-3 mt-8">

                        @if ($setting->facebook_link)
                            <a href="{{ $setting->facebook_link }}" target="_blank" class="icon-btn bg-facebook">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        @endif

                        @if ($setting->instagram_link)
                            <a href="{{ $setting->instagram_link }}" target="_blank" class="icon-btn bg-instagram">
                                <i class="fab fa-instagram"></i>
                            </a>
                        @endif

                        @if ($setting->twitter_link)
                            <a href="{{ $setting->twitter_link }}" target="_blank" class="icon-btn bg-twitter">
                                <i class="fab fa-x-twitter"></i>
                            </a>
                        @endif

                        @if ($setting->youtube_link)
                            <a href="{{ $setting->youtube_link }}" target="_blank" class="icon-btn bg-youtube">
                                <i class="fab fa-youtube"></i>
                            </a>
                        @endif

                    </div>
                </div>

                <!-- ========================= Quick Links ========================= -->
                <div class="reveal">
                    <h3 class="text-white text-xl font-semibold mb-8">
                        Quick Links
                    </h3>

                    <ul class="space-y-5">
                        @foreach ($navigations as $row)
                            <li><a href="{{ url('page/' . posttype_url($row->uri)) }}"
                                    class="footer-link">{{ $row->post_type }}</a></li>
                        @endforeach
                    </ul>

                </div>
                <!-- ========================= Products ========================= -->
                <div class="reveal">
                    <h3 class="text-white text-xl font-semibold mb-8">
                        Our Products
                    </h3>

                    <ul class="space-y-5">

                        @foreach ($products as $row)
                            <li><a href="{{ url(geturl($row['uri'], $row['page_key'])) }}"
                                    class="footer-link">{{ $row->post_title }}</a></li>
                        @endforeach
                    </ul>

                </div>

                <!-- ========================= Contact ========================= -->
                <div class="reveal">
                    <h3 class="text-white text-xl font-semibold mb-8">
                        Contact Info
                    </h3>

                    <div class="space-y-4">
                        <!-- Office -->
                        <div class="flex gap-4">
                            <div
                                class="w-11 h-11 rounded-xl bg-white/10 flex items-center justify-center text-white flex-shrink-0">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>

                            <div>
                                <h5 class="text-white font-medium mb-2">
                                    Corporate Office
                                </h5>

                                <p class="text-white/70 text-sm leading-7">
                                    {{-- Balkumari, Lalitpur, Nepal --}}
                                    {{ $setting->address }}
                                </p>
                            </div>
                        </div>

                        <!-- Factory -->
                        <div class="flex gap-4">
                            <div
                                class="w-11 h-11 rounded-xl bg-white/10 flex items-center justify-center text-white flex-shrink-0">
                                <i class="fa-solid fa-industry"></i>
                            </div>

                            <div>
                                <h5 class="text-white font-medium mb-2">
                                    Factory
                                </h5>

                                <p class="text-white/70 text-sm leading-7">
                                    {{ $setting->address2 }}
                                </p>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="flex gap-4">
                            <div
                                class="w-11 h-11 rounded-xl bg-white/10 flex items-center justify-center text-white flex-shrink-0">
                                <i class="fa-solid fa-phone"></i>
                            </div>

                            <div>
                                <h5 class="text-white font-medium mb-2">
                                    Phone Number
                                </h5>

                                <p class="text-white/70 text-sm">

                                    {{ $setting->phone }}
                                </p>
                            </div>

                        </div>

                        <!-- Email -->
                        <div class="flex gap-4">
                            <div
                                class="w-11 h-11 rounded-xl bg-white/10 flex items-center justify-center text-white flex-shrink-0">
                                <i class="fa-solid fa-envelope"></i>
                            </div>

                            <div>
                                <h5 class="text-white font-medium mb-2">
                                    Email Address
                                </h5>

                                <p class="text-white/70 text-sm break-all">
                                    {{ $setting->email_primary }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ========================= Bottom Footer ========================= -->
    <div class="border-t border-white/10 bg-[#18153F]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
            <div class="flex flex-col lg:flex-row items-center justify-between gap-4">
                <!-- Left -->
                <div class="flex items-center gap-6 text-center lg:text-left">
                    <a href="terms-and-conditions.php"
                        class="text-white/60 text-sm hover:text-white transition duration-300">
                        Terms & Conditions
                    </a>

                    <a href="privacy-policy.php" class="text-white/60 text-sm hover:text-white transition duration-300">
                        Privacy Policy
                    </a>
                </div>

                <!-- Center -->
                <div class="text-center">
                    <p class="text-white/70 text-sm">
                        Copyright © {{ date('Y') }} <a href="{{ url('/') }}"> {{ $setting->site_name }}
                            Limited.</a>
                    </p>
                </div>

                <!-- Right -->
                <div>
                    <p class="text-white/60 text-sm text-center lg:text-right">
                        Design & Developed By
                        <span class="text-secondary font-medium">
                            <a href="https://cyberlink.com.np/">
                                Cyberlink Pvt. Ltd.
                            </a>
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- ========================= BACK TO TOP ========================= -->
<button id="backToTop"
    class="fixed bottom-6 right-6 z-50 hidden items-center justify-center
           w-12 h-12 rounded-full bg-secondary text-white shadow-xl
           hover:-translate-y-1 hover:shadow-2xl
           transition-all duration-300">
    <i class="fa-solid fa-arrow-up text-sm"></i>
</button>

<!-- ========================= SCRIPTS ========================= -->
<!-- Preloader -->
<script src="{{ asset('js/preloader.js') }}"></script>
<!-- Sticky Navbar -->
{{-- <script src="{{ asset('js/stickynavbar.js') }}"></script> --}}
<!-- Offcanvas -->
<script src="{{ asset('js/offcanvas-slider.js') }}"></script>
<!-- Back To Top -->
<script src="{{ asset('js/backtotop.js') }}"></script>
<!-- Scroll Animation -->
<script src="{{ asset('js/scroll-animation.js') }}"></script>
<!-- Video modal -->
<script src="{{ asset('js/videomodal.js') }}"></script>
<!-- slide script for partners section -->
<script src="{{ asset('js/slider.js') }}"></script>
<!-- counter script for number section -->
<script src="{{ asset('js/counter.js') }}"></script>
</body>

</html>
