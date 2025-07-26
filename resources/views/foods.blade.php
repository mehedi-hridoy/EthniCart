@extends('layouts.app')
@section('title', 'EthniCart | Foods')
<link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
@section('content')

<!-- Hero Section -->
<div class="bg-gradient-to-br from-green-50 via-emerald-50 to-teal-50 min-h-screen">
    <!-- Header Banner -->
    <div class="relative overflow-hidden bg-gradient-to-r from-green-300 via-yellow-300 to-green-300 py-8">
        <div class="absolute inset-0 bg-black opacity-10"></div>
        <div class="relative container mx-auto px-4 text-center">
            <h1 class="text-5xl md:text-6xl font-bold text-white mb-4 tracking-tight">
                Foods <span class="text-green-200"></span>
            </h1>
            <p class="text-xl md:text-2xl text-green-100 mb-8 max-w-3gitxl mx-auto">
                From fresh fruits to delightful sweets, discover the finest selection of authentic foods
            </p>
            <div class="flex justify-center">
                <div class="bg-white bg-opacity-20 backdrop-blur-sm rounded-full px-6 py-2">
                    <span class="text-white font-medium">🌱 Farm Fresh • 🌿 Organic • 🍃 Natural</span>
                </div>
            </div>
        </div>
        <!-- Decorative elements -->
        <div class="absolute top-10 left-10 text-green-200 opacity-30">
            <svg class="w-20 h-20" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z" clip-rule="evenodd"/>
            </svg>
        </div>
        <div class="absolute bottom-5 right-5 text-green-200 opacity-20">
            <svg class="w-32 h-32" fill="currentColor" viewBox="0 0 20 20">
                <path d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z"/>
            </svg>
        </div>
    </div>

    <!-- Categories Grid -->
    <div class="container mx-auto px-4 py-16">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-gray-800 mb-4">Explore Our Categories</h2>
           
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Fruits Category -->
            <div class="group cursor-pointer transform hover:scale-105 transition-all duration-300">
                <a href="{{ url('/A1_foods_fruits') }}" class="block">
                    <div class="bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden border-2 border-transparent hover:border-green-300">
                        <div class="relative h-64 bg-gradient-to-br from-green-100 to-green-200 flex items-center justify-center">
                            <!-- Placeholder for fruit image -->
                            <div class="w-32 h-32 bg-green-300 rounded-full flex items-center justify-center">
                                <span class="text-6xl"></span>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-2xl font-bold text-gray-800 mb-2 group-hover:text-green-600 transition-colors">
                                Fruits
                            </h3>
                            <p class="text-gray-600 text-sm mb-4">
                                Fresh, juicy fruits packed with natural vitamins and flavors
                            </p>
                            
                        </div>
                    </div>
                </a>
            </div>

            <!-- Sweets Category -->
            <div class="group cursor-pointer transform hover:scale-105 transition-all duration-300">
                <a href="{{ url('/A2_foods_sweets') }}" class="block">
                    <div class="bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden border-2 border-transparent hover:border-pink-300">
                        <div class="relative h-64 bg-gradient-to-br from-pink-100 to-rose-200 flex items-center justify-center">
                            <!-- Placeholder for sweets image -->
                            <div class="w-32 h-32 bg-pink-300 rounded-full flex items-center justify-center">
                                <span class="text-6xl"></span>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-2xl font-bold text-gray-800 mb-2 group-hover:text-pink-600 transition-colors">
                                Sweets
                            </h3>
                            <p class="text-gray-600 text-sm mb-4">
                                Traditional and modern sweets to satisfy your cravings
                            </p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Snacks Category -->
            <div class="group cursor-pointer transform hover:scale-105 transition-all duration-300">
                <a href="{{ url('/A3_foods_snacks') }}" class="block">
                    <div class="bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden border-2 border-transparent hover:border-orange-300">
                        <div class="relative h-64 bg-gradient-to-br from-orange-100 to-yellow-200 flex items-center justify-center">
                            <!-- Placeholder for snacks image -->
                            <div class="w-32 h-32 bg-orange-300 rounded-full flex items-center justify-center">
                                <span class="text-6xl"></span>
                            </div>
                           
                        </div>
                        <div class="p-6">
                            <h3 class="text-2xl font-bold text-gray-800 mb-2 group-hover:text-orange-600 transition-colors">
                                Snacks
                            </h3>
                            <p class="text-gray-600 text-sm mb-4">
                                Crunchy and tasty snacks perfect for any time of day
                            </p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Dairy Category -->
            <div class="group cursor-pointer transform hover:scale-105 transition-all duration-300">
                <a href="{{ url('/A4_foods_dairy') }}" class="block">
                    <div class="bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden border-2 border-transparent hover:border-blue-300">
                        <div class="relative h-64 bg-gradient-to-br from-blue-100 to-indigo-200 flex items-center justify-center">
                            <!-- Placeholder for dairy image -->
                            <div class="w-32 h-32 bg-blue-300 rounded-full flex items-center justify-center">
                                <span class="text-6xl"></span>
                            </div>
                          
                        </div>
                        <div class="p-6">
                            <h3 class="text-2xl font-bold text-gray-800 mb-2 group-hover:text-blue-600 transition-colors">
                                Dairy
                            </h3>
                            <p class="text-gray-600 text-sm mb-4">
                                Fresh dairy products rich in nutrients and natural goodness
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>


    
<!-- Cart started from here -->


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
   
];
@endphp

<section class="bg-gradient-to-br from-green-100 via-lime-50 to-green-50 min-h-screen py-8">
    <div class="container mx-auto px-4">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <span class="text-green-600">Food</span> Section
            </h1>
           
        </div>

        <!-- Filter Bar -->
        <div class="bg-white/80 backdrop-blur-sm rounded-2xl shadow-sm border border-white/20 p-6 mb-8">
            <div class="flex flex-col lg:flex-row justify-between items-center gap-4">
                <div class="flex items-center gap-6">
                    <h2 class="text-xl font-semibold text-gray-900">{{ count($products) }} Products</h2>
                    <div class="hidden sm:flex items-center gap-2 text-sm text-gray-500">
                        <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                        <span>Authentic & Fresh</span>
                    </div>
                </div>
                
                <div class="flex items-center gap-3">
                    <select class="px-4 py-2 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-lime-500 bg-white/90">
                        <option>Sort by Featured</option>
                        <option>Price: Low to High</option>
                        <option>Price: High to Low</option>
                        <option>Name: A to Z</option>
                    </select>
                    
                    <button class="flex items-center gap-2 px-4 py-2 bg-white/60 hover:bg-white/80 rounded-lg text-sm font-medium transition-colors backdrop-blur-sm">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707L13 13.293V19a1 1 0 01-.553.894l-2 1A1 1 0 019 20v-6.707L3.293 7.707A1 1 0 013 7V4z"/>
                        </svg>
                        Filter
                    </button>
                </div>
            </div>
        </div>

        <!-- Products Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            @foreach($products as $product)
            <div class="group bg-white/90 backdrop-blur-sm rounded-2xl shadow-sm border border-white/30 overflow-hidden hover:shadow-lg hover:border-lime-200/50 hover:bg-white/95 transition-all duration-300">
                
                <!-- Product Image -->
                <div class="relative aspect-square overflow-hidden bg-gray-100">
                    <a href="{{ url('/product/' . $product['id']) }}">
                        <img src="{{ $product['image'] }}" 
                             alt="{{ $product['name'] }}" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                             onerror="this.src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAwIiBoZWlnaHQ9IjQwMCIgdmlld0JveD0iMCAwIDQwMCA0MDAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxyZWN0IHdpZHRoPSI0MDAiIGhlaWdodD0iNDAwIiBmaWxsPSIjRjNGNEY2Ii8+CjxwYXRoIGQ9Ik0xNzUgMTUwSDIyNVYyNTBIMTc1VjE1MFoiIGZpbGw9IiM5Q0EzQUYiLz4KPHBhdGggZD0iTTE1MCAyMDBMMjAwIDE1MEwyNTAgMjAwSDI1MFYyNzVIMTUwVjIwMFoiIGZpbGw9IiM5Q0EzQUYiLz4KPC9zdmc+'">
                    </a>
                    
                    <!-- Quick Actions -->
                    <div class="absolute top-4 right-4 flex flex-col gap-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <button class="w-10 h-10 bg-white/90 backdrop-blur-sm rounded-full shadow-md flex items-center justify-center hover:bg-white transition-colors" title="Quick View">
                            <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                            </svg>
                        </button>
                        <button class="w-10 h-10 bg-white/90 backdrop-blur-sm rounded-full shadow-md flex items-center justify-center hover:bg-red-50 transition-colors group/heart" title="Add to Wishlist">
                            <svg class="w-5 h-5 text-gray-600 group-hover/heart:text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                            </svg>
                        </button>
                    </div>
                  </div>

                <!-- Product Info -->
                <div class="p-5">
                    <div class="mb-3">
                        <h3 class="font-semibold text-gray-900 mb-1 line-clamp-1 hover:text-lime-600 transition-colors">
                            {{ $product['name'] }}
                        </h3>
                        <p class="text-sm text-gray-600 line-clamp-2">{{ $product['description'] }}</p>
                    </div>
                    
                    <!-- Rating -->
                    <div class="flex items-center gap-1 mb-4">
                        @for($i = 1; $i <= 5; $i++)
                        <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        @endfor
                        <span class="text-xs text-gray-500 ml-1">(4.8)</span>
                    </div>
                    
                    <!-- Price & Add to Cart -->
                    <div class="flex items-center justify-between">
                        <span class="text-xl font-bold text-gray-900">{{ $product['price'] }}</span>
                        <button class="bg-gradient-to-r from-green-600 to-lime-600 hover:from-green-700 hover:to-lime-700 text-white px-4 py-2 rounded-lg font-medium transition-all duration-300 flex items-center gap-2 text-sm group/btn shadow-md hover:shadow-lg">
                            <svg class="w-4 h-4 group-hover/btn:rotate-12 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13l-1.293 2.707A1 1 0 007 17h10a1 1 0 001-1v-1M9 21v-8a1 1 0 011-1h4a1 1 0 011 1v8"/>
                            </svg>
                            Add
                        </button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Load More Section -->
        <div class="text-center mt-12">
            <button class="bg-white/80 backdrop-blur-sm hover:bg-white/90 text-gray-700 font-semibold py-3 px-8 rounded-xl border border-white/30 hover:border-lime-300/50 transition-all duration-300 hover:shadow-md">
                Load More Products
            </button>
        </div>
        
        <!-- Empty State -->
        @if(count($products) === 0)
        <div class="text-center py-20">
            <div class="w-32 h-32 bg-white/60 backdrop-blur-sm rounded-full flex items-center justify-center mx-auto mb-6 border border-white/30">
                <svg class="w-16 h-16 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"/>
                </svg>
            </div>
            <h3 class="text-xl font-semibold text-gray-900 mb-2">No products found</h3>
            <p class="text-gray-600">Check back later for authentic Bangladeshi products.</p>
        </div>
        @endif
    </div>
</section>

<style>
    .line-clamp-1 {
        display: -webkit-box;
        -webkit-line-clamp: 1;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    
    .line-clamp-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
</style>
    <!-- Features Section -->
    <div class="bg-white bg-opacity-70 backdrop-blur-sm py-16">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center">
                    <div class="w-16 h-16 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Quality Assured</h3>
                    <p class="text-gray-600">Every product is carefully selected and quality tested</p>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Fast Delivery</h3>
                    <p class="text-gray-600">Quick and reliable delivery to your doorstep</p>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Made with Love</h3>
                    <p class="text-gray-600">Authentic flavors prepared with traditional care</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Call to Action -->
    <div class="bg-gradient-to-r from-green-600 to-emerald-600 py-4">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-xl font-bold text-white mb-2">Ready to Explore?</h2>
            <p class="text-green-100 text-lg mb-2">Start your culinary journey with EthniCart today</p>
            <button class="bg-white text-green-600 px-4 py-2 rounded-full font-bold hover:bg-green-50 transition-colors shadow-lg">
                Shop Now
            </button>
        </div>
    </div>
</div>

@endsection