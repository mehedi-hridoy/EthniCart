@extends('layouts.app')
@section('title', $product->name . ' | EthniCart')

@section('content')
<div class="bg-gradient-to-br from-gray-50 via-emerald-50/30 to-green-50 min-h-screen py-10">
  <div class="container mx-auto px-4">
    <!-- Breadcrumbs -->
    <nav class="text-sm text-gray-500 mb-6">
      <a href="/" class="hover:text-green-600">Home</a>
      <span class="mx-2">/</span>
      <a href="{{ url('/foods') }}" class="hover:text-green-600">Products</a>
      <span class="mx-2">/</span>
      <span class="text-gray-800">{{ $product->name }}</span>
    </nav>

    <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-sm border border-white/40 p-6 md:p-8 grid grid-cols-1 lg:grid-cols-2 gap-10">
      <!-- Gallery -->
      <div>
        <div class="relative rounded-2xl overflow-hidden bg-gray-100">
          @php
            $firstImage = $product->images->first() ?? null;
            $mainImageSrc = $firstImage ? asset('storage/' . $firstImage->image_path) : (!empty($product->image) ? asset('storage/' . $product->image) : asset('images/placeholder.png'));
          @endphp
          <img id="mainImage" src="{{ $mainImageSrc }}" alt="{{ $product->name }}" class="w-full aspect-square object-contain">
          @if(isset($product->stock))
            <div class="absolute top-4 left-4">
              @if($product->stock == 0)
                <span class="bg-gray-700/90 text-white text-xs px-2 py-1 rounded-full">Out of Stock</span>
              @elseif($product->stock <= 5)
                <span class="bg-red-600 text-white text-xs px-2 py-1 rounded-full">Only {{ $product->stock }} left</span>
              @elseif($product->stock <= 10)
                <span class="bg-orange-500 text-white text-xs px-2 py-1 rounded-full">Low Stock</span>
              @else
                <span class="bg-green-600 text-white text-xs px-2 py-1 rounded-full">In Stock</span>
              @endif
            </div>
          @endif
        </div>

        <!-- Thumbnails -->
        <div class="mt-4 grid grid-cols-5 gap-3">
          @if($product->images->count() > 0)
            @foreach($product->images as $image)
              <button type="button" class="thumb border-2 border-gray-200 rounded-xl overflow-hidden focus:outline-none focus:ring-2 focus:ring-green-500 hover:border-green-500 transition-colors">
                <img src="{{ asset('storage/' . $image->image_path) }}" class="w-full aspect-square object-cover" alt="Thumbnail">
              </button>
            @endforeach
          @else
            @if(!empty($product->image))
              <button type="button" class="thumb border-2 border-gray-200 rounded-xl overflow-hidden focus:outline-none focus:ring-2 focus:ring-green-500">
                <img src="{{ asset('storage/' . $product->image) }}" class="w-full aspect-square object-cover" alt="Thumbnail">
              </button>
            @endif
          @endif
        </div>
      </div>

      <!-- Details -->
      <div>
        <div class="flex items-start justify-between gap-4">
          <div>
            <p class="text-xs tracking-widest text-emerald-600 font-semibold mb-1">ETHNICART</p>
            <h1 class="text-2xl md:text-3xl font-bold text-gray-900 mb-2">{{ $product->name }}</h1>
          </div>
          <button class="w-10 h-10 rounded-full border border-gray-200 flex items-center justify-center hover:bg-red-50 group" title="Add to wishlist">
            <svg class="w-5 h-5 text-gray-500 group-hover:text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
          </button>
        </div>

        <!-- Rating -->
        <div class="flex items-center gap-2 mb-4">
          <div class="flex items-center">
            @for($i=0; $i<5; $i++)
              <svg class="w-4 h-4 {{ $i < 5 ? 'text-yellow-400' : 'text-gray-300' }}" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
            @endfor
          </div>
          <span class="text-xs text-gray-500">(4.8)</span>
        </div>

        <!-- Price block -->
        <div class="flex items-end gap-3 mb-6">
          <div class="text-3xl font-bold text-gray-900">৳{{ number_format($product->price, 2) }}</div>
          @if (!empty($product->unit))
            <div class="text-sm text-gray-500 mb-1">/ {{ $product->unit }}</div>
          @endif
        </div>

        <!-- Description -->
        <p class="text-gray-700 leading-relaxed mb-6">{{ $product->description }}</p>

        <!-- Quantity + Add to Cart -->
        <div class="flex flex-col sm:flex-row items-stretch gap-4 mb-8">
          <div class="flex items-center border border-gray-200 rounded-xl overflow-hidden w-full sm:w-auto">
            <button type="button" id="qtyMinus" class="w-10 h-10 flex items-center justify-center text-gray-700 hover:bg-gray-50">-</button>
            <input type="number" id="qtyInput" value="1" min="1" class="w-14 h-10 text-center border-x border-gray-200 focus:outline-none"/>
            <button type="button" id="qtyPlus" class="w-10 h-10 flex items-center justify-center text-gray-700 hover:bg-gray-50">+</button>
          </div>

          <form class="add-to-cart-form flex-1" data-product-id="{{ $product->id }}">
            @csrf
            <input type="hidden" name="quantity" id="qtyField" value="1">
            <button type="submit" class="w-full sm:w-auto bg-gradient-to-r from-green-600 to-emerald-600 hover:from-green-700 hover:to-emerald-700 text-white px-6 py-3 rounded-xl font-semibold shadow-sm hover:shadow-md transition-all disabled:opacity-50 disabled:cursor-not-allowed" {{ (isset($product->stock) && $product->stock == 0) ? 'disabled' : '' }}>
              Add to cart
            </button>
          </form>
        </div>

        <!-- Meta -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm text-gray-700">
          <div>
            <span class="block text-gray-500">Product ID</span>
            <span class="font-medium">#{{ $product->id }}</span>
          </div>
          @if(isset($product->category))
          <div>
            <span class="block text-gray-500">Category</span>
            <span class="font-medium">{{ ucfirst($product->category) }}</span>
          </div>
          @endif
        </div>

        <!-- Assurance -->
        <div class="mt-8 grid grid-cols-1 sm:grid-cols-3 gap-4 text-sm">
          <div class="flex items-center gap-3 p-3 rounded-xl bg-gray-50">
            <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
            <span>Authentic & quality checked</span>
          </div>
          <div class="flex items-center gap-3 p-3 rounded-xl bg-gray-50">
            <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h18M9 3v18m6-18v18M3 9h18M3 15h18"/></svg>
            <span>Secure payment</span>
          </div>
          <div class="flex items-center gap-3 p-3 rounded-xl bg-gray-50">
            <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7l1.664 8.32A2 2 0 006.63 17h10.74a2 2 0 001.966-1.68L21 7M5 7h14M7 7l1-4h8l1 4"/></svg>
            <span>Fast local delivery</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  // Simple gallery: swap main image when clicking a thumbnail
  document.querySelectorAll('.thumb img').forEach(btn => {
    btn.addEventListener('click', () => {
      const main = document.getElementById('mainImage');
      if (main) main.src = btn.src;
    })
  });

  // Quantity stepper syncs with hidden field used by the add-to-cart form
  const minus = document.getElementById('qtyMinus');
  const plus = document.getElementById('qtyPlus');
  const input = document.getElementById('qtyInput');
  const hidden = document.getElementById('qtyField');
  function clamp(v){ return Math.max(1, parseInt(v||'1',10)); }
  function sync(){ hidden.value = clamp(input.value); input.value = hidden.value; }
  if(minus && plus && input && hidden){
    minus.addEventListener('click', () => { input.value = clamp(input.value) - 1; sync(); });
    plus.addEventListener('click', () => { input.value = clamp(input.value) + 1; sync(); });
    input.addEventListener('input', sync);
    sync();
  }
</script>

@endsection
