@extends('layouts.app')

@section('title', 'EthniCart | Foods')
<link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">

@section('content')
@php
$products = [
    [
        'id' => 1,
        'name' => 'Rajshahi Mango (Himsagar)',
        'description' => 'Sweet, juicy seasonal mango',
        'price' => '৳550/kg',
        'image' => asset('images/product_images/01_himsagor.jpeg')
    ],
    [
        'id' => 2,
        'name' => 'Tangail Shari (Handloom Cotton)',
        'description' => 'Authentic Tangail weave, pure cotton',
        'price' => '৳1800',
        'image' => asset('images/product_images/02_shari.jpg')
    ],
    [
        'id' => 3,
        'name' => 'Natore-er Kacha Golla',
        'description' => 'Soft, fresh dairy sweet',
        'price' => '৳350/box',
        'image' => asset('images/product_images/03_kachaGolla.jpeg')
    ],
    [
        'id' => 4,
        'name' => 'Chui Jhal Masala Blend',
        'description' => 'Handmade spice mix with Chui',
        'price' => '৳199',
        'image' => asset('images/product_images/04_chuiJhal.jpg')
    ],
    [
        'id' => 5,
        'name' => 'Hilsha Fish (Padma River)',
        'description' => 'Freshly caught Ilish',
        'price' => '৳1200/kg',
        'image' => asset('images/product_images/05_hilsha.jpg')
    ],
    [
        'id' => 6,
        'name' => 'Organic Turmeric Powder',
        'description' => 'Hand-ground haldi from Rangpur',
        'price' => '৳120/100g',
        'image' => asset('images/product_images/06_termeric.jpg')
    ],
    [
        'id' => 7,
        'name' => 'Rosogolla (Dhaka Style)',
        'description' => 'Spongy, syrupy sweet',
        'price' => '৳240/box',
        'image' => asset('images/product_images/07_rosogolla.jpg')
    ],
    [
        'id' => 8,
        'name' => 'Neem Face Pack',
        'description' => 'Natural skin detox',
        'price' => '৳170',
        'image' => asset('images/product_images/08_neem.jpeg')
    ],
    [
        'id' => 9,
        'name' => 'Bamboo Toothbrush (Set of 2)',
        'description' => 'Eco-friendly dental hygiene',
        'price' => '৳150/set',
        'image' => asset('images/product_images/09_bambooBrush.jpg')
    ],
    [
        'id' => 10,
        'name' => 'Amloki Pickle',
        'description' => 'Sweet & tangy seasonal preserve',
        'price' => '৳130/200g',
        'image' => asset('images/product_images/10_amlokiPickle.jpg')
    ],
    [
        'id' => 11,
        'name' => 'Nakshi Kantha (Wall Frame)',
        'description' => 'Traditional embroidered art',
        'price' => '৳950',
        'image' => asset('images/product_images/nakshi_kantha.jpg')
    ],
    [
        'id' => 12,
        'name' => 'Dhakai Jamdani (Off-White)',
        'description' => 'Museum-grade Dhakai Jamdani',
        'price' => '৳6500',
        'image' => asset('images/product_images/jamdani.jpg')
    ],
    [
        'id' => 13,
        'name' => 'Mustard Oil (Cold Pressed)',
        'description' => 'Pure ghani mustard oil',
        'price' => '৳200/L',
        'image' => asset('images/product_images/mustard_oil.jpg')
    ],
    [
        'id' => 14,
        'name' => 'Coriander Powder',
        'description' => 'Stone-ground, aromatic',
        'price' => '৳90/100g',
        'image' => asset('images/product_images/coriander.jpg')
    ],
];
@endphp
<section class="bg-gradient-to-br from-gray-50 to-gray-100 min-h-screen">
    <!-- Header Section -->
    <div class="container mx-auto px-4 py-8">
        <div class="text-center mb-8">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-3">
                Ethnic<span class="text-[#6A9793]">Art</span> Collection
            </h1>
            <p class="text-base text-gray-600 max-w-2xl mx-auto">
                Discover our curated selection of beautiful handcrafted furniture and decor
            </p>
        </div>

        <!-- Filters and Controls -->
        <div class="flex flex-col sm:flex-row justify-between items-center mb-6 bg-white rounded-2xl shadow-lg p-4 backdrop-blur-sm">
            <div class="flex items-center space-x-4 mb-4 sm:mb-0">
                <h2 class="text-2xl font-bold text-gray-800">{{ count($products) }} Items</h2>
                <div class="h-6 w-px bg-gray-300"></div>
                <span class="text-sm text-gray-500">Premium Quality</span>
            </div>
            
            <div class="flex flex-wrap gap-3">
                <button class="group relative px-6 py-3 bg-white border-2 border-gray-200 rounded-xl text-sm font-medium hover:border-[#6A9793] transition-all duration-300 hover:shadow-md">
                    <span class="flex items-center gap-2">
                        Sort by: Featured
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 group-hover:rotate-180 transition-transform" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                    </span>
                </button>
                
                <button class="group relative px-6 py-3 bg-white border-2 border-gray-200 rounded-xl text-sm font-medium hover:border-[#GA9793] transition-all duration-300 hover:shadow-md">
                    <span class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2a1 1 0 01-.293.707L14 15.414V20a1 1 0 01-1.447.894l-4-2A1 1 0 018 18v-2.586L3.293 6.707A1 1 0 013 6V4z" />
                        </svg>
                        Filters
                    </span>
                </button>
            </div>
        </div>

        <!-- Products Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 md:gap-6 lg:gap-8">
            @foreach($products as $index => $product)
            <div class="group relative bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden hover:-translate-y-2 border border-gray-100">
                <!-- Product Image Container -->
                <div class="relative overflow-hidden rounded-t-3xl">
                    <a href="{{ url('/product/' . $product['id']) }}" class="block">
                        <img src="{{ $product['image'] }}" 
                             alt="{{ $product['name'] }}" 
                             class="w-full h-72 object-cover group-hover:scale-110 transition-transform duration-700">
                    </a>
                    
                    <!-- Overlay with Quick Actions -->
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-20 transition-all duration-300 flex items-center justify-center">
                        <div class="transform translate-y-4 group-hover:translate-y-0 opacity-0 group-hover:opacity-100 transition-all duration-300">
                            <button class="bg-white p-3 rounded-full shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-110 mx-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-700" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                            </button>
                            <button class="bg-white p-3 rounded-full shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-110 mx-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    
                    <!-- Sale Badge -->
                    <div class="absolute top-4 left-4">
                        <span class="bg-red-500 text-white text-xs font-bold px-3 py-1 rounded-full">NEW</span>
                    </div>
                </div>

                <!-- Product Details -->
                <div class="p-7 space-y-4">
                    <div class="space-y-2">
                        <h3 class="text-lg font-bold text-gray-900 uppercase tracking-wide group-hover:text-[#6A9793] transition-colors">
                            {{ $product['name'] }}
                        </h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            {{ $product['description'] }}
                        </p>
                    </div>
                    
                    <!-- Price -->
                    <div class="flex items-center justify-between">
                        <span class="text-2xl font-bold text-gray-900">{{ $product['price'] }}</span>
                        <div class="flex items-center space-x-1">
                            @for($i = 1; $i <= 5; $i++)
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                                </svg>
                            @endfor
                        </div>
                    </div>

                    <!-- Add to Cart Button -->
                    <button class="w-full bg-[#6A9793] hover:bg-[#5a8480] text-white font-semibold py-4 px-6 rounded-2xl transition-all duration-300 transform hover:scale-105 hover:shadow-lg active:scale-95 flex items-center justify-center space-x-2 group">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 group-hover:rotate-12 transition-transform" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13l-1.293 2.707A1 1 0 007 17h10a1 1 0 001-1v-1M16 21a1 1 0 100-2 1 1 0 000 2zm-8 0a1 1 0 100-2 1 1 0 000 2z"/>
                        </svg>
                        <span>Add to Cart</span>
                    </button>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Load More Button -->
        <div class="text-center mt-16">
            <button class="bg-white hover:bg-gray-50 text-gray-700 font-semibold py-4 px-8 rounded-2xl border-2 border-gray-200 hover:border-[#6A9793] transition-all duration-300 hover:shadow-lg">
                Load More Products
            </button>
        </div>
    </div>
</section>
  
@endsection
