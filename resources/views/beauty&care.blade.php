@extends('layouts.app')
@section('title', 'EthniCart | Beauty & Care')
<link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
@section('content')

<!-- Hero Section -->
<div class="min-h-screen" style="background: linear-gradient(135deg, #ffffff 0%, #fce7f3 50%, #f3e8ff 100%);">
    <!-- Header Banner -->
    <div class="relative overflow-hidden py-8" style="background: linear-gradient(90deg, #be185d 0%, #ec4899 50%, #be185d 100%);">
        <div class="absolute inset-0 bg-black opacity-10"></div>
        <div class="relative container mx-auto px-4 text-center">
            <h1 class="text-5xl md:text-6xl font-bold text-white mb-4 tracking-tight">
                Beauty & Care <span class="text-pink-200"></span>
            </h1>
            <p class="text-xl md:text-2xl text-pink-100 mb-8 max-w-3xl mx-auto">
                Discover premium skincare and haircare products for your natural beauty routine
            </p>
            <div class="flex justify-center">
                <div class="bg-white bg-opacity-20 backdrop-blur-sm rounded-full px-6 py-2">
                    <span class="text-white font-medium">✨ Natural • 🌸 Premium Quality • 💆‍♀️ Professional</span>
                </div>
            </div>
        </div>
        <!-- Decorative elements -->
        <div class="absolute top-10 left-10 opacity-30" style="color: #ffffff;">
            <svg class="w-20 h-20" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z" clip-rule="evenodd"/>
            </svg>
        </div>
        <div class="absolute bottom-5 right-5 opacity-20" style="color: #be185d;">
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

    <div class="flex justify-center">
    <!-- Increased container width -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 w-full max-w-7xl px-6">
        
        <!-- Skin Care Category -->
        <div class="group cursor-pointer transform hover:scale-105 transition-all duration-300">
            <a href="{{ url('/F1_Beauty&Care_SkinCare') }}" class="block">
                <div class="bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden border-2 border-transparent hover:border-pink-300 h-[600px]  w-[500px]  flex flex-col">
                    
                    <!-- Larger Image Section -->
                    <div class="relative h-[410px] overflow-hidden">
                        <img src="{{ asset('images/skinCare.jpeg') }}" alt="Skin Care" class="w-full h-full object-cover" />
                    </div>

                    <!-- Text Section -->
                    <div class="p-8 flex-grow">
                        <h3 class="text-3xl font-bold text-gray-800 mb-3 group-hover:text-pink-600 transition-colors">
                            Skin Care
                        </h3>
                        <p class="text-gray-700 text-base">
                            Premium skincare products for healthy, glowing and radiant skin
                        </p>
                    </div>

                </div>
            </a>
        </div>

        <!-- Hair Care Category -->
        <div class="group cursor-pointer transform hover:scale-105 transition-all duration-300">
            <a href="{{ url('/F2_Beauty&Care_HairCare') }}" class="block">
                <div class="bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden border-2 border-transparent hover:border-rose-300 h-[600px]  w-[500px]  flex flex-col">
                    
                    <!-- Larger Image Section -->
                    <div class="relative h-[410px] overflow-hidden">
                        <img src="{{ asset('images/HairCare.jpeg') }}" alt="Hair Care" class="w-full h-full object-cover" />
                    </div>

                    <!-- Text Section -->
                    <div class="p-8 flex-grow">
                        <h3 class="text-3xl font-bold text-gray-800 mb-3 group-hover:text-rose-600 transition-colors">
                            Hair Care
                        </h3>
                        <p class="text-gray-700 text-base">
                            Professional haircare solutions for strong, healthy and beautiful hair
                        </p>
                    </div>

                </div>
            </a>
        </div>

    </div>
</div>

</div>


    




<section class="min-h-screen py-8" style="background: linear-gradient(135deg, #ffffff 0%, #fce7f3 50%, #fdf2f8 100%);">
    
<!-- Header Section -->
    <div class="container mx-auto px-4 py-8">
        <div class="text-center mb-8">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-3">
                  Hair &<span class=" text-green-600"> Skin Care</span> Products
            </h1>
            
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
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
    @foreach($products as $product)
    <div class="group bg-white/90 backdrop-blur-sm rounded-2xl shadow-sm border border-white/30 overflow-hidden hover:shadow-lg hover:border-orange-200/50 hover:bg-white/95 transition-all duration-300">
        
        <!-- Product Image -->
        <div class="relative aspect-square overflow-hidden bg-gray-100">
            @if (!empty($product->image))
            <a href="{{ url('/product/' . $product->id) }}">
                <img src="{{ asset('storage/' . $product->image) }}" 
                     alt="{{ $product->name }}" 
                     class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
            </a>
            @else
            <div class="w-full h-full bg-gradient-to-br from-gray-100 to-gray-200 flex items-center justify-center">
                <div class="text-center">
                    <svg class="w-16 h-16 text-gray-400 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>
                    <span class="text-sm text-gray-500">No Image</span>
                </div>
            </div>
            @endif
            
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

            <!-- Stock Badge -->
            @if(isset($product->stock) && $product->stock > 0)
                @if($product->stock <= 5)
                <div class="absolute top-4 left-4">
                    <span class="bg-red-500 text-white text-xs px-2 py-1 rounded-full">Only {{ $product->stock }} left</span>
                </div>
                @elseif($product->stock <= 10)
                <div class="absolute top-4 left-4">
                    <span class="bg-orange-500 text-white text-xs px-2 py-1 rounded-full">Low Stock</span>
                </div>
                @endif
            @elseif(isset($product->stock) && $product->stock == 0)
            <div class="absolute top-4 left-4">
                <span class="bg-gray-500 text-white text-xs px-2 py-1 rounded-full">Out of Stock</span>
            </div>
            @endif
        </div>

        <!-- Product Info -->
        <div class="p-5">
            <div class="mb-3">
                <h3 class="font-semibold text-gray-900 mb-1 line-clamp-1 hover:text-orange-600 transition-colors">
                    {{ $product->name }}
                </h3>
                <p class="text-sm text-gray-600 line-clamp-2">{{ $product->description }}</p>
            </div>
            
            <!-- Rating (Static for now) -->
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
    <span class="text-xl font-bold text-gray-900">
        ৳{{ number_format($product->price, 2) }} 
        @if (!empty($product->unit)) / {{ $product->unit }} @endif
    </span>

<form class="add-to-cart-form" data-product-id="{{ $product->id }}">
    @csrf
    <button 
        type="submit"
        class="bg-gradient-to-r from-green-600 to-lime-600 hover:from-green-700 hover:to-lime-700 text-white px-4 py-2 rounded-lg font-medium transition-all duration-300 flex items-center gap-2 text-sm group/btn shadow-md hover:shadow-lg disabled:opacity-50 disabled:cursor-not-allowed"
        {{ (isset($product->stock) && $product->stock == 0) ? 'disabled' : '' }}
    >
        <svg class="w-4 h-4 group-hover/btn:rotate-12 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13l-1.293 2.707A1 1 0 007 17h10a1 1 0 001-1v-1M9 21v-8a1 1 0 011-1h4a1 1 0 011 1v8"/>
        </svg>
        {{ (isset($product->stock) && $product->stock == 0) ? 'Sold Out' : 'Add to cart' }}
    </button>
</form>
</div>

            <!-- Additional Info -->
            @if(isset($product->category))
            <div class="mt-3 pt-3 border-t border-gray-100">
                <span class="inline-block bg-gray-100 text-gray-600 text-xs px-2 py-1 rounded-full">
                    {{ ucfirst($product->category) }}
                </span>
            </div>
            @endif
        </div>
    </div>
    @endforeach
</div>

<!-- Empty State -->
@if($products->isEmpty())
<div class="text-center py-20">
    <div class="w-32 h-32 bg-white/60 backdrop-blur-sm rounded-full flex items-center justify-center mx-auto mb-6 border border-white/30">
        <svg class="w-16 h-16 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"/>
        </svg>
    </div>
    <h3 class="text-xl font-semibold text-gray-900 mb-2">No products found</h3>
    <p class="text-gray-600">Check back later for authentic EthniCart products.</p>
</div>
@endif



      
    </div>
</section>





    <!-- Features Section -->
    <div class="bg-white bg-opacity-70 backdrop-blur-sm py-16">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center">
                    <div class="w-16 h-16 bg-pink-500 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Natural Ingredients</h3>
                    <p class="text-gray-600">Every product contains natural and organic ingredients</p>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 bg-purple-500 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Fast Delivery</h3>
                    <p class="text-gray-600">Beauty products delivered within 24 hours</p>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 bg-pink-600 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Dermatologist Tested</h3>
                    <p class="text-gray-600">All products are tested and approved by professionals</p>
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