    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Kantipur Vet Distributors — Stands For Excellence</title>

        <link rel="icon" type="image/png" href="{{ asset('assets/uploads/img/kantipurvet-logo.png') }}">
        <!-- Google Font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,600&family=Merriweather:ital,wght@0,400;0,700;1,400&family=Source+Sans+3:wght@300;400;500;600&display=swap"
            rel="stylesheet" />
        <!-- <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet"> -->
        <!-- Tailwind -->
        <script src="https://cdn.tailwindcss.com"></script>
        {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            primary: "var(--color-primary)",
                            secondary: "var(--color-secondary)",
                        }
                    }
                }
            }
        </script>
        <!-- Font Awesome -->
        {{-- <script src="https://kit.fontawesome.com/7254a5967d.js" crossorigin="anonymous"></script> --}}
        <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>

    <body class="bg-white overflow-x-hidden">
        @include('themes.default.common.response')
        <!-- ========================= PRELOADER ========================= -->
        <div id="preloader">
            <img src="{{ asset('assets/uploads/img/kantipurvet-logo.png') }}" alt="Kantipur Vet Distributer Logo">
        </div>

        <!-- ============TOPBAR=================================== -->
        <!-- Topbar -->
        <div id="topbar" class="fixed top-0 left-0 w-full z-[999] bg-[var(--color-primary)]">
            <div class="max-w-[1800px] mx-auto px-4 sm:px-6 lg:px-10">
                <div class="h-[44px] flex items-center justify-center sm:justify-end overflow-x-auto">
                    <div
                        class="flex items-center gap-4 sm:gap-8 text-[11px] sm:text-[14px] lg:text-[15px] font-medium whitespace-nowrap">
                        <!-- Phone -->
                        <a href="tel:+97715186604"
                            class="flex items-center gap-2 text-[var(--color-secondary)] hover:text-white transition duration-300">
                            <i class="fa-solid fa-phone text-[10px] sm:text-[12px]"></i>
                            <span>
                                {{ $setting->phone }}/{{ $setting->phone }}
                            </span>
                        </a>
                        <!-- Email -->
                        <a href="mailto:kantipurvet@gmail.com"
                            class="flex items-center gap-2 text-[var(--color-secondary)] hover:text-white transition duration-300">
                            <i class="fa-regular fa-envelope text-[10px] sm:text-[12px]"></i>
                            <span>
                                {{ $setting->email_primary }}
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- ========================= HEADER ========================= -->
        <header id="main-header" class="scrolled border-b-2 border-secondary">
            <!-- ========================= DESKTOP HEADER ========================= -->
            <div class="hidden lg:block">
                <div class="max-w-7xl mx-auto px-6 xl:px-0">
                    <nav class="flex items-center justify-between py-3">
                        <!-- Logo -->
                        <a href="{{ url('/') }}" class="flex-shrink-0 reveal">
                            <img src="{{ asset('assets/uploads/img/kantipurvet-logo.png') }}" alt="Kantipur Vet"
                                class="w-[125px]">
                        </a>
                        <!-- Navigation -->
                        {{-- <ul class="flex items-center gap-10">
                            <li>
                                <a href="index.php" class="nav-link">
                                    Home
                                </a>
                            </li>
                            <li class="has-dropdown">
                                <a href="#" class="nav-link flex items-center gap-2">
                                    About us
                                    <i class="fa-solid fa-chevron-down text-[11px]"></i>
                                </a>
                                <!-- Dropdown Panel -->
                                <div class="dropdown-panel">
                                    <a href="product-list.php">
                                        Our Story
                                    </a>
                                    <a href="product-list.php">
                                        Our Commitment
                                    </a>
                                </div>
                            </li>

                            <!-- Dropdown -->
                            <li class="has-dropdown">
                                <a href="#" class="nav-link flex items-center gap-2">
                                    Product
                                    <i class="fa-solid fa-chevron-down text-[11px]"></i>
                                </a>
                                <!-- Dropdown Panel -->
                                <div class="dropdown-panel">
                                    <a href="product-list.php">
                                        Feed Supplement
                                    </a>
                                    <a href="product-list.php">
                                        Allopathic
                                    </a>
                                    <a href="product-list.php">
                                        Marketing Division
                                    </a>
                                </div>
                            </li>
                            <li>
                                <a href="#" class="nav-link">
                                    Our Services
                                </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link">
                                    Gallery
                                </a>
                            </li>
                            <li>
                                <a href="blog.php" class="nav-link">
                                    Blogs
                                </a>
                            </li>

                        </ul> --}}
                        <ul class="flex items-center gap-10">

                            @foreach ($navigations as $row)
                                @if ($row->id != 2)
                                    <li>
                                        <a href="{{ url('page/' . posttype_url($row->uri)) }}" class="nav-link">
                                            {{ $row->post_type }}
                                        </a>
                                    </li>
                                @else
                                    <!-- Product Dropdown -->
                                    <li class="relative group">
                                        <a href="#" class="nav-link flex items-center gap-2">
                                            {{ $row->post_type }}

                                            <i
                                                class="fa-solid fa-chevron-down text-[11px] transition-transform duration-300 group-hover:rotate-180">
                                            </i>
                                        </a>

                                        <!-- Dropdown Panel -->
                                        <div
                                            class="absolute left-0 top-full z-50 hidden min-w-[250px] rounded-lg bg-white py-2 shadow-xl group-hover:block">

                                            @foreach ($services as $service)
                                                <a href="{{ url(geturl($service['uri'], $service['page_key'])) }}"
                                                    class="block px-5 py-3 text-sm text-gray-700 transition hover:bg-gray-50">
                                                    {{ $service->post_title }}
                                                </a>
                                            @endforeach

                                        </div>
                                    </li>
                                @endif
                            @endforeach

                        </ul>
                        <div class="flex items-center gap-3">

                            <a href="{{ url('/page/contact') }}">
                                <button class="bg-primary text-white px-6 py-2 rounded-xl font-semibold flex items-center gap-4 hover:bg-secondary transition duration-300 shadow-md">
                                    Contact Us
                                    <i class="fa-solid fa-arrow-right"></i>
                                </button>
                            </a>

                        </div>
                    </nav>
                </div>
            </div>

            <!-- ========================= MOBILE HEADER ========================= -->
            <div class="lg:hidden bg-white shadow-sm">
                <div class="max-w-7xl mx-auto px-4">
                    <nav class="flex items-center justify-between py-4">
                        <!-- Logo -->
                        <a href="index.php">
                            <img src="{{ asset('assets/uploads/img/kantipurvet-logo.png') }}" alt="Logo"
                                class="w-[115px]">
                        </a>
                        <!-- Toggle -->
                        <button id="offcanvas-toggle"
                            class="w-11 h-11 rounded-xl border border-gray-200 flex items-center justify-center text-primary hover:bg-primary hover:text-white transition duration-300">
                            <i class="fa-solid fa-bars"></i>
                        </button>
                    </nav>
                </div>
            </div>
        </header>

        <!-- ========================= OFFCANVAS OVERLAY ========================= -->
        <div class="offcanvas-overlay" id="oc-overlay"></div>

        <!-- ========================= MOBILE SIDEBAR ========================= -->
        <aside id="offcanvas-flip">
            <!-- Top -->
            <div class="flex items-center justify-between px-5 py-5 border-b border-gray-100">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('assets/uploads/img/kantipurvet-logo.png') }}" alt="Logo" class="w-[120px]">
                </a>
                <!-- Close -->
                <button id="offcanvas-close"
                    class="w-10 h-10 rounded-full bg-gray-100 text-gray-600 hover:bg-primary hover:text-white transition duration-300">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <!-- Navigation -->
            <nav class="py-2">

                @foreach ($navigations as $row)
                    @if ($row->id != 2)
                        <a href="{{ url('page/' . posttype_url($row->uri)) }}" class="offcanvas-nav-link">
                            {{ $row->post_type }}
                        </a>
                    @else
                        <div>
                            <button onclick="this.nextElementSibling.classList.toggle('hidden')"
                                class="offcanvas-nav-link w-full">

                                <span>{{ $row->post_type }}</span>

                                <i class="fa-solid fa-chevron-down text-xs"></i>
                            </button>

                            <!-- Submenu -->
                            <div class="hidden bg-gray-50">

                                @foreach ($services as $service)
                                    <a href="{{ url(geturl($service['uri'], $service['page_key'])) }}"
                                        class="offcanvas-nav-link pl-10">

                                        {{ $service->post_title }}

                                    </a>
                                @endforeach

                            </div>
                        </div>
                    @endif
                @endforeach

            </nav>
            <!-- Social -->
            <div class="px-5 py-6 flex items-center gap-3">

                <a href="{{ url('/page/contact') }}">
                    <button
                        class="bg-primary text-white px-6 py-2 rounded-xl font-semibold flex items-center gap-4 hover:bg-secondary transition duration-300 shadow-md">
                        Contact Us
                        <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </a>
            </div>
        </aside>
