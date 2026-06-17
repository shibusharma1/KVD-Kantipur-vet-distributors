@extends('themes.default.common.master')
@section('content')
<section class="bg-gray-50 py-20 md:py-28">
   ```
   <div class="max-w-3xl mx-auto px-5">
      <div class="modern-card text-center p-8 md:p-12 reveal">
         <!-- Success Icon -->
         <div
            class="mx-auto w-24 h-24 rounded-full bg-green-100 flex items-center justify-center">
            <i class="fa-solid fa-check text-4xl text-green-600"></i>
         </div>
         <!-- Heading -->
         <h1 class="mt-8 text-3xl md:text-4xl font-bold text-primary">
            Message Sent Successfully
         </h1>
         <!-- User Name -->
         <p class="mt-6 text-lg text-gray-600">
            Dear
            <span class="font-bold text-primary">
            {{ $name }}
            </span>,
         </p>
         <!-- Message -->
         <div class="mt-6 text-gray-600 leading-8 max-w-2xl mx-auto">
            {!! $message !!}
         </div>

         <div class="mt-8">
            <p class="text-gray-500">
               Best Wishes
            </p>
            <h3 class="mt-2 text-xl font-bold text-primary">
               {{ $setting->site_name }}
            </h3>
         </div>
         <!-- Buttons -->
         <div class="mt-8 flex flex-wrap justify-center gap-4">
            <a href="{{ url('/') }}"
               class="primary-btn">
            Back To Home
            <i class="fa-solid fa-arrow-right"></i>
            </a>
         </div>
      </div>
   </div>

</section>
@endsection