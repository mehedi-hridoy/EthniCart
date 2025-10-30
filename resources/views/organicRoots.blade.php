@extends('layouts.app')

@section('title', 'EthniCart | Organic Roots')
<link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
@section('content')


<section class="bg-gradient-to-br from-gray-50 to-gray-100 min-h-screen">
    <!-- Header Section -->
    <div class="container mx-auto px-4 py-8">
        <div class="text-center mb-8">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-3">
                Pure <span class="text-4xl font-bold text-green-600"> & Organic </span> Products
            </h1>      
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




  
@endsection



