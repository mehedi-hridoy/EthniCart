@extends('layouts.app')

@section('title', 'EthniCart | Meet the Producers')
<link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">

@section('content')


<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-emerald-50 via-green-50 to-teal-50 py-20 overflow-hidden">
    <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23065f46" fill-opacity="0.03"%3E%3Ccircle cx="30" cy="30" r="4"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-40"></div>
    <div class="container mx-auto px-4 lg:px-6">
        <div class="text-center">
            <div class="inline-flex items-center justify-center w-20 h-20 bg-emerald-100 rounded-full mb-6">
                <span class="text-4xl">🧑‍🌾</span>
            </div>
            <h1 class="text-5xl md:text-6xl font-bold text-emerald-900 mb-6 leading-tight">
                Meet the <span class="text-emerald-600">Producers</span>
            </h1>
            <p class="text-xl text-gray-700 max-w-3xl mx-auto leading-relaxed">
                Behind every product is a passionate creator. Meet the talented farmers, artisans, and makers who bring authentic Bengali craftsmanship to your doorstep through EthniCart.
            </p>
            <div class="mt-8 flex justify-center">
                <div class="h-1 w-32 bg-gradient-to-r from-emerald-400 to-teal-400 rounded-full"></div>
            </div>
        </div>
    </div>
</section>

<!-- Makers Grid Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4 lg:px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-8 lg:gap-12 justify-items-center">
            
            <!-- Maker 1 - Abdul Karim -->
            <div class="group relative bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden border border-gray-100">
                <div class="relative overflow-hidden">
                    <img class="w-full h-80 object-cover group-hover:scale-105 transition-transform duration-700" 
                         src="{{ asset('images/abdul_karim.jpg') }}" 
                         alt="Abdul Karim - Mango Farmer">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="absolute top-4 left-4 bg-emerald-500 text-white px-3 py-1 rounded-full text-sm font-medium">
                        🥭 Mango Farmer
                    </div>
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-bold text-emerald-900 mb-3">Abdul Karim</h3>
                    <p class="text-emerald-600 font-medium mb-4">রাজশাহীর আম চাষি</p>
                    <p class="text-gray-700 leading-relaxed mb-6">
                        "আমি গত ২৫ বছর ধরে রাজশাহীর বিখ্যাত হিমসাগর ও ল্যাংড়া আম চাষ করছি। EthniCart-এর মাধ্যমে এখন আমার আম সারাদেশের মানুষের কাছে পৌঁছাচ্ছে। এটা আমার জীবনের সবচেয়ে বড় গর্বের বিষয়।"
                    </p>
                    <div class="flex items-center text-sm text-emerald-600">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                        </svg>
                        Rajshahi, Bangladesh
                    </div>
                </div>
            </div>

            <!-- Maker 2 - Afsana Begum -->
            <div class="group relative bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden border border-gray-100">
                <div class="relative overflow-hidden">
                    <img class="w-full h-80 object-cover group-hover:scale-105 transition-transform duration-700" 
                         src="{{ asset('images/afsana_begum.png') }}"
                         alt="Afsana Begum - Jamdani Weaver">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="absolute top-4 left-4 bg-emerald-500 text-white px-3 py-1 rounded-full text-sm font-medium">
                        🧵 Jamdani Weaver`
                    </div>
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-bold text-emerald-900 mb-3">Afsana Begum</h3>
                    <p class="text-emerald-600 font-medium mb-4">Master Jamdani Weaver</p>
                    <p class="text-gray-700 leading-relaxed mb-6">
                        "My grandmother taught me the art of Jamdani weaving when I was just 12 years old. Each saree takes me 3-4 months to complete by hand. Through EthniCart, women around the world can now wear my creations and know the story behind each thread."
                    </p>
                    <div class="flex items-center text-sm text-emerald-600">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                        </svg>
                        Narayanganj, Bangladesh
                    </div>
                </div>
            </div>

            <!-- Maker 3 - Harun Mia -->
            <div class="group relative bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden border border-gray-100">
                <div class="relative overflow-hidden">
                    <img class="w-full h-80 object-cover group-hover:scale-105 transition-transform duration-700" 
                         src="{{ asset('images/harun_mia.png') }}"
                         alt="Harun Mia - Pottery Artist">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="absolute top-4 left-4 bg-emerald-500 text-white px-3 py-1 rounded-full text-sm font-medium">
                        🏺 Pottery Artist
                    </div>
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-bold text-emerald-900 mb-3">Harun Mia</h3>
                    <p class="text-emerald-600 font-medium mb-4">চট্টগ্রামের মৃৎশিল্পী</p>
                    <p class="text-gray-700 leading-relaxed mb-6">
                        "আমার পূর্বপুরুষরা ৫ প্রজন্ম ধরে মাটি দিয়ে বাসন তৈরি করেছেন। আমার হাতে তৈরি প্রতিটি পাত্রে আছে চট্টগ্রামের ঐতিহ্যের ছোঁয়া। EthniCart-এর মাধ্যমে এখন আমার কাজ বিদেশেও পৌঁছাচ্ছে।"
                    </p>
                    <div class="flex items-center text-sm text-emerald-600">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                        </svg>
                        Chattogram, Bangladesh
                    </div>
                </div>
            </div>

            <!-- Maker 4 - Rashida Khatun -->
            <div class="group relative bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden border border-gray-100">
                <div class="relative overflow-hidden">
                    <img class="w-full h-80 object-cover group-hover:scale-105 transition-transform duration-700" 
                         src="{{ asset('images/rashida_khatun.jpg') }}"
                         alt="Rashida Khatun - Nakshi Kantha Artist">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <!-- <div class="absolute top-4 left-4 bg-emerald-500 text-white px-3 py-1 rounded-full text-sm font-medium">
                        🪡 Nakshi Kantha Artist
                    </div> -->
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-bold text-emerald-900 mb-3">Rashida Khatun</h3>
                    <p class="text-emerald-600 font-medium mb-4">নকশী কাঁথা শিল্পী</p>
                    <p class="text-gray-700 leading-relaxed mb-6">
                        "প্রতিটি নকশী কাঁথায় আমি বাংলার গ্রামীণ জীবনের গল্প বুনে দিই। পাখি, ফুল, লতাপাতার নকশায় লুকিয়ে থাকে আমাদের সংস্কৃতির হাজার বছরের ইতিহাস। EthniCart আমার এই শিল্পকে বিশ্বব্যাপী পরিচিত করে তুলেছে।"
                    </p>
                    <div class="flex items-center text-sm text-emerald-600">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                        </svg>
                        Jessore, Bangladesh
                    </div>
                </div>
            </div>

            <!-- Maker 5 - Antim Chakma -->
            <div class="group relative bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden border border-gray-100">
                <div class="relative overflow-hidden">
                    <img class="w-full h-80 object-cover group-hover:scale-105 transition-transform duration-700" 
                         src="{{ asset('images/antim_chakma.png') }}" 
                         alt="Antim Chakma - Bamboo Craftsman">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="absolute top-4 left-4 bg-emerald-500 text-white px-3 py-1 rounded-full text-sm font-medium">
                        🎋 Bamboo Craftsman
                    </div>
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-bold text-emerald-900 mb-3">Antim Chakma</h3>
                    <p class="text-emerald-600 font-medium mb-4">Bamboo Craftsman & Eco-Warrior</p>
                    <p class="text-gray-700 leading-relaxed mb-6">
                        "Bamboo is a timeless gift from nature. I craft everything from furniture to decorative pieces using traditional techniques that have been passed down through generations. My mission is to demonstrate that sustainable living can be both elegant and practical."
                    </p>
                    <div class="flex items-center text-sm text-emerald-600">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                        </svg>
                        Sylhet, Bangladesh
                    </div>
                </div>
            </div>

            <!-- Maker 6 - Fatema Begum -->
            <div class="group relative bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden border border-gray-100">
                <div class="relative overflow-hidden">
                    <img class="w-full h-80 object-cover group-hover:scale-105 transition-transform duration-700" 
                         src="{{ asset('images/fatema-begum.jpg') }}" 
                         alt="Fatema Begum - Organic Spice Farmer">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="absolute top-4 left-4 bg-emerald-500 text-white px-3 py-1 rounded-full text-sm font-medium">
                        🌶️ Spice Farmer
                    </div>
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-bold text-emerald-900 mb-3">Fatema Begum</h3>
                    <p class="text-emerald-600 font-medium mb-4">প্রাকৃতিক মশলা উৎপাদনকারী</p>
                    <p class="text-gray-700 leading-relaxed mb-6">
                        "আমি কোনো রাসায়নিক সার ব্যবহার করি না। আমার হলুদ, মরিচ, ধনিয়া সব প্রাকৃতিক উপায়ে চাষ করি। EthniCart-এর কারণে এখন সারাদেশের মানুষ আমার বিশুদ্ধ মশলা খেতে পাচ্ছে।"
                    </p>
                    <div class="flex items-center text-sm text-emerald-600">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                        </svg>
                        Bogura, Bangladesh
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Impact Section -->
<section class="py-20 bg-gradient-to-br from-emerald-900 to-teal-800 text-white">
    <div class="container mx-auto px-4 lg:px-6">
        <div class="text-center">
            <h2 class="text-4xl font-bold mb-8">Our Impact Together</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-16">
                <div class="text-center">
                    <div class="text-5xl font-bold text-emerald-300 mb-2">500+</div>
                    <p class="text-xl">Makers Supported</p>
                </div>
                <div class="text-center">
                    <div class="text-5xl font-bold text-emerald-300 mb-2">50,000+</div>
                    <p class="text-xl">Products Sold</p>
                </div>
                <div class="text-center">
                    <div class="text-5xl font-bold text-emerald-300 mb-2">25+</div>
                    <p class="text-xl">Districts Reached</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4 lg:px-6">
        <div class="text-center">
            <h2 class="text-4xl font-bold text-emerald-900 mb-6">Join Our Community</h2>
            <p class="text-xl text-gray-700 mb-8 max-w-3xl mx-auto">
                Every purchase supports these incredible makers and preserves Bangladesh's rich cultural heritage.
            </p>
            <a href="{{url('/vegetables')}}" class="inline-flex items-center px-8 py-4 bg-emerald-600 text-white font-semibold rounded-full hover:bg-emerald-700 transition-colors duration-300 shadow-lg hover:shadow-xl">
                Shop Their Products
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                </svg>
            </a>
        </div>
    </div>
</section>
@endsection
