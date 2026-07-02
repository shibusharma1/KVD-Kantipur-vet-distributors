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
<section class="py-12">
   <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
      <span class="section-tag">
      Corporate Philosophy
      </span>
      <h2 class="mt-5 text-4xl md:text-5xl font-bold leading-tight">
         Guided By Values, Driven By Purpose
      </h2>
      <p class="mt-6 text-[16px] leading-9 max-w-3xl mx-auto">
         At Kantipur Vet Distributors, our corporate philosophy reflects the values,
         ethics, and principles that shape every decision we make. It defines how we
         serve our customers, support our partners, and contribute to the advancement
         of animal health and veterinary care across Nepal.
      </p>
   </div>
</section>
<section class="pb-20">
   <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
         <div class="modern-card p-8 text-center reveal">
            <div class="icon-circle mx-auto">
               <i class="fa-solid fa-medal"></i>
            </div>
            <h3 class="mt-6 text-2xl font-bold">
               Integrity
            </h3>
            <p class="mt-5 text-[16px] leading-8 text-gray-600">
               We conduct our business with honesty, transparency, and accountability.
            </p>
         </div>
         <div class="modern-card p-8 text-center reveal">
            <div class="icon-circle mx-auto">
               <i class="fa-solid fa-shield-heart"></i>
            </div>
            <h3 class="mt-6 text-2xl font-bold">
               Responsibility
            </h3>
            <p class="mt-5 text-[16px] leading-8 text-gray-600">
               We are committed to safeguarding animal health through responsible practices.
            </p>
         </div>
         <div class="modern-card p-8 text-center reveal">
            <div class="icon-circle mx-auto">
               <i class="fa-solid fa-lightbulb"></i>
            </div>
            <h3 class="mt-6 text-2xl font-bold">
               Innovation
            </h3>
            <p class="mt-5 text-[16px] leading-8 text-gray-600">
               We embrace innovation to deliver better products and services.
            </p>
         </div>
         <div class="modern-card p-8 text-center reveal">
            <div class="icon-circle mx-auto">
               <i class="fa-solid fa-handshake"></i>
            </div>
            <h3 class="mt-6 text-2xl font-bold">
               Partnership
            </h3>
            <p class="mt-5 text-[16px] leading-8 text-gray-600">
               We believe strong partnerships create sustainable growth and trust.
            </p>
         </div>
      </div>
   </div>
</section>
{{-- <section class="py-12 bg-gray-50">
   <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="modern-card p-10 lg:p-14">
         <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div>
               <span class="section-tag">
               Our Belief
               </span>
               <h2 class="mt-5 text-4xl md:text-5xl font-bold leading-tight">
                  Building Trust Through Quality And Care
               </h2>
               <p class="mt-6 text-[16px] leading-9 text-gray-600">
                  We believe that success is achieved not only through business growth
                  but through meaningful contributions to society, the veterinary
                  profession, and the communities we serve.
               </p>
               <p class="mt-6 text-[16px] leading-9 text-gray-600">
                  Our philosophy encourages continuous learning, innovation,
                  collaboration, and an unwavering commitment to quality.
               </p>
            </div>
            <div>
               <img
                  src="{{ $data->banner ? asset('uploads/medium/' . $data->banner) : asset('assets/uploads/img/about.webp') }}"
                  alt="Corporate Philosophy"
                  class="rounded-[28px] w-full object-cover">
            </div>
         </div>
      </div>
   </div>
</section> --}}
<section class="py-12">
   <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-16">
         <span class="section-tag">
         Our Commitments
         </span>
         <h2 class="mt-5 text-4xl md:text-5xl font-bold leading-tight">
            Principles We Uphold Every Day
         </h2>
      </div>
      <div class="grid md:grid-cols-2 gap-8">
         <div class="modern-card p-8">
            <h3 class="text-2xl font-bold text-primary">
               Customer First
            </h3>
            <p class="mt-5 text-[16px] leading-8 text-gray-600">
               Delivering reliable products and responsive support.
            </p>
         </div>
         <div class="modern-card p-8">
            <h3 class="text-2xl font-bold text-primary">
               Quality Assurance
            </h3>
            <p class="mt-5 text-[16px] leading-8 text-gray-600">
               Maintaining high standards in sourcing and distribution.
            </p>
         </div>
         <div class="modern-card p-8">
            <h3 class="text-2xl font-bold text-primary">
               Continuous Improvement
            </h3>
            <p class="mt-5 text-[16px] leading-8 text-gray-600">
               Learning, adapting, and innovating to meet evolving needs.
            </p>
         </div>
         <div class="modern-card p-8">
            <h3 class="text-2xl font-bold text-primary">
               Sustainable Growth
            </h3>
            <p class="mt-5 text-[16px] leading-8 text-gray-600">
               Creating long-term value for stakeholders and communities.
            </p>
         </div>
      </div>
   </div>
</section>
<section class="pb-20">
   <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="modern-card p-12 text-center">
         <i class="fa-solid fa-quote-left text-primary text-4xl"></i>
         <p class="mt-8 text-2xl lg:text-3xl leading-relaxed text-gray-700 font-medium">
            Our philosophy is rooted in trust, quality, innovation,
            and a commitment to improving animal health through
            responsible partnerships and sustainable growth.
         </p>
      </div>
   </div>
</section>
@endsection