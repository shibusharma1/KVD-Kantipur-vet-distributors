@extends('themes.default.common.master')
@section('meta_keyword',$data->meta_keyword)
@section('meta_description',$data->meta_description)
@section('content')

<!-- ========================= PAGE BANNER ========================= -->
<section class="relative h-[420px] overflow-hidden">
    <!-- Background -->
    <img src="assets/img/vision.jpg" alt="Contact Banner" class="w-full h-[420px] object-cover">
    <!-- Overlay -->
    <div class="absolute inset-0 bg-black/55"></div>
    <!-- Bottom Gradient -->
    <div class="absolute bottom-0 left-0 w-full h-32 bg-gradient-to-t from-black/40 to-transparent"></div>
    <!-- Content -->
    <div class="absolute inset-0 flex flex-col items-center justify-center text-center px-4">
        <p class="text-white/80 uppercase tracking-[0.25em] text-sm reveal">
            Home / Contact Us
        </p>
        <h1 class="mt-5 text-white text-4xl md:text-6xl font-bold reveal">
            Contact Us
        </h1>
    </div>
</section>
<!-- ========================= CONTACT SECTION ========================= -->
<section class="py-12 md:py-12 bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-14 items-start">
            <!-- ========================= LEFT CONTENT ========================= -->
            <div class="lg:col-span-5 pt-8">
                <p class="section-tag reveal">
                    Get In Touch
                </p>
                <h2 class="mt-5 text-3xl md:text-4xl font-bold leading-tight text-primary reveal">
                    We’d Love To Hear From You.
                </h2>
                <p class="mt-5 text-gray-600 leading-8 reveal">
                    Contact Kantipur Pharmaceuticals Lab Limited for veterinary healthcare products, technical support, product inquiries and partnership opportunities across Nepal.
                </p>
                <!-- Contact Cards -->
                <div class="space-y-2 mt-8">
                    <!-- Office -->
                    <div class="modern-card p-4  flex items-start gap-5 reveal">
                        <div class="w-16 h-16 rounded-3xl bg-primary/10 flex items-center justify-center flex-shrink-0">
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
                        <div class="w-16 h-16 rounded-3xl bg-secondary/10 flex items-center justify-center flex-shrink-0">
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
                        <div class="w-16 h-16 rounded-3xl bg-primary/10 flex items-center justify-center flex-shrink-0">
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
                        <div class="w-16 h-16 rounded-3xl bg-secondary/10 flex items-center justify-center flex-shrink-0">
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
                                <input
                                    type="text"
                                    placeholder="Enter your name"
                                    class="w-full h-14 rounded-2xl border border-gray-200 bg-gray-50 px-5 outline-none focus:border-primary focus:ring-4 focus:ring-primary/10 transition duration-300">
                            </div>
                            <!-- Email -->
                            <div>
                                <label class="block text-sm font-semibold text-primary mb-3">
                                    Email Address
                                </label>
                                <input
                                    type="email"
                                    placeholder="Enter your email"
                                    class="w-full h-14 rounded-2xl border border-gray-200 bg-gray-50 px-5 outline-none focus:border-primary focus:ring-4 focus:ring-primary/10 transition duration-300">
                            </div>
                            <!-- Phone -->
                            <div>
                                <label class="block text-sm font-semibold text-primary mb-3">
                                    Phone Number
                                </label>
                                <input
                                    type="text"
                                    placeholder="Enter your phone"
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
                            <textarea
                                rows="5"
                                placeholder="Write your message..."
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
<!-- ========================= MAP SECTION ========================= -->
<section class="pb-12 md:pb-16 bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Heading -->
        <div class="text-center max-w-3xl mx-auto mb-8">
            <p class="section-tag justify-center reveal">
                Find Us
            </p>
            <h2 class="mt-5 text-3xl md:text-4xl font-bold leading-tight text-primary reveal">
                Our Location
            </h2>
        </div>
        <!-- Map -->
        <div class="overflow-hidden rounded-[28px] shadow-2xl reveal">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5587.017491661533!2d85.627995!3d27.641364!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eba7e5da251f8b%3A0x94616c285a8191b6!2sKantipur%20Pharmaceuticals%20Lab%20Pvt.%20Ltd.!5e1!3m2!1sen!2snp!4v1758607652267!5m2!1sen!2snp"
                width="100%"
                height="400"
                style="border:0;"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
</section>

@endsection