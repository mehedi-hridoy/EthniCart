@extends('index')
@push('style')
  <title>Search Results - EthniCart</title>
@endpush
@section('main-content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Search Results - EthniCart</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#90c552'
                    }
                }
            }
        }
    </script>
</head>

<body>

<div class="bg-blue-50 min-h-screen">
    @include('partials.header')

    <!-- Search Results Section -->
    <div class="container mx-auto px-4 lg:px-6 pt-32 pb-20">
        
        <!-- Search Header -->
        <div class="mb-8">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                <div>
                    <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-2">
                        Search Results
                    </h1>
                    <p class="text-gray-600">
                        Found <span class="font-semibold text-primary">{{ $resultCount }}</span> 
                        {{ $resultCount == 1 ? 'result' : 'results' }} for 
                        <span class="font-semibold text-gray-900">"{{ $query }}"</span>
                    </p>
                </div>

                <!-- Back Button -->
                <a href="{{ url('/') }}" class="inline-flex items-center gap-2 px-6 py-3 bg-white hover:bg-gray-50 text-gray-700 rounded-lg border border-gray-200 transition-colors duration-200 shadow-sm">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                    </svg>
                    <span class="font-medium">Back to Home</span>
                </a>
            </div>

            <!-- Search Again Bar -->
            <div class="mt-6 max-w-2xl relative">
                <form method="GET" action="{{ url('/search') }}" id="searchPageForm" class="w-full">
                    <div class="flex items-center bg-white rounded-lg overflow-hidden border border-gray-200 shadow-sm transition-all duration-200 focus-within:ring-2 focus-within:ring-primary/30 focus-within:border-primary">
                        <input
                            type="text"
                            name="query"
                            id="searchPageInput"
                            value="{{ $query }}"
                            placeholder="Search again..."
                            autocomplete="off"
                            class="flex-grow px-4 lg:px-6 py-3 text-sm lg:text-base text-gray-700 focus:outline-none bg-transparent min-w-0"
                        >
                        <button
                            type="submit"
                            class="px-4 lg:px-6 py-3 transition-all duration-200 flex items-center justify-center flex-shrink-0 hover:opacity-90"
                            style="background-color: #90c552;"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </button>
                    </div>
                </form>
                
                <!-- Autocomplete Dropdown for Search Page -->
                <div id="searchPageSuggestions" class="absolute top-full left-0 right-0 mt-2 bg-white rounded-lg shadow-xl border border-gray-200 max-h-96 overflow-y-auto z-50 hidden">
                    <!-- Results will be inserted here -->
                </div>
            </div>
        </div>

        <!-- Products Grid -->
        @if($products->count() > 0)
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
                            <a href="{{ url('/product/' . $product->id) }}">{{ $product->name }}</a>
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

                    <!-- Category Tag -->
                    @if(isset($product->display_page))
                    <div class="mt-3 pt-3 border-t border-gray-100">
                        <span class="inline-block bg-primary/10 text-primary text-xs px-2 py-1 rounded-full">
                            {{ ucfirst(str_replace('_', ' ', $product->display_page)) }}
                        </span>
                    </div>
                    @endif
                </div>
            </div>
            @endforeach
        </div>

        <!-- Pagination -->
        @if($products->hasPages())
        <div class="mt-12 flex justify-center">
            <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-2">
                {{ $products->links() }}
            </div>
        </div>
        @endif

        @else
        <!-- Empty State -->
        <div class="text-center py-20 bg-white/60 backdrop-blur-sm rounded-3xl border border-white/30 shadow-sm">
            <div class="w-32 h-32 bg-white/80 backdrop-blur-sm rounded-full flex items-center justify-center mx-auto mb-6 border border-gray-200">
                <svg class="w-16 h-16 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                </svg>
            </div>
            <h3 class="text-2xl font-bold text-gray-900 mb-3">No Products Found</h3>
            <p class="text-gray-600 mb-8 max-w-md mx-auto">
                We couldn't find any products matching "<span class="font-semibold">{{ $query }}</span>". 
                Try searching with different keywords or browse our categories.
            </p>
            <div class="flex flex-wrap gap-4 justify-center">
                <a href="{{ url('/') }}" class="inline-flex items-center gap-2 px-6 py-3 bg-primary hover:bg-primary/90 text-white rounded-lg transition-colors duration-200 shadow-md hover:shadow-lg">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                    </svg>
                    <span class="font-medium">Go to Homepage</span>
                </a>
                <a href="{{ url('/foods') }}" class="inline-flex items-center gap-2 px-6 py-3 bg-white hover:bg-gray-50 text-gray-700 rounded-lg border border-gray-200 transition-colors duration-200 shadow-sm">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"/>
                    </svg>
                    <span class="font-medium">Browse Categories</span>
                </a>
            </div>
        </div>
        @endif

    </div>

    @include('partials.footer')
</div>

<!-- Add to Cart Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Add to Cart functionality
    document.querySelectorAll('.add-to-cart-form').forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const productId = this.dataset.productId;
            const button = this.querySelector('button');
            const originalText = button.innerHTML;
            
            // Check if user is logged in
            @guest
                Swal.fire({
                    icon: 'warning',
                    title: 'Please Login',
                    text: 'You need to login to add items to cart',
                    showCancelButton: true,
                    confirmButtonText: 'Login',
                    cancelButtonText: 'Cancel',
                    confirmButtonColor: '#90c552',
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = '{{ route("login") }}';
                    }
                });
                return;
            @endguest
            
            // Disable button and show loading
            button.disabled = true;
            button.innerHTML = '<svg class="animate-spin h-4 w-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>';
            
            // Make AJAX request
            fetch(`/cart/add/${productId}`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                },
                body: JSON.stringify({})
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Added to Cart!',
                        text: data.message,
                        timer: 2000,
                        showConfirmButton: false,
                        toast: true,
                        position: 'top-end'
                    });
                    
                    // Update cart count if exists
                    const cartCountElements = document.querySelectorAll('.cart-count');
                    cartCountElements.forEach(element => {
                        element.textContent = data.cartCount;
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: data.message || 'Failed to add to cart'
                    });
                }
            })
            .catch(error => {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Something went wrong. Please try again.'
                });
            })
            .finally(() => {
                // Re-enable button and restore text
                button.disabled = false;
                button.innerHTML = originalText;
            });
        });
    });
    
    // Live Search Autocomplete for Search Page
    const searchPageInput = document.getElementById('searchPageInput');
    const searchPageSuggestions = document.getElementById('searchPageSuggestions');
    let debounceTimer;

    if (searchPageInput) {
        searchPageInput.addEventListener('input', function() {
            const query = this.value.trim();
            
            clearTimeout(debounceTimer);
            
            if (query.length === 0) {
                searchPageSuggestions.classList.add('hidden');
                return;
            }
            
            debounceTimer = setTimeout(() => {
                if (query.length >= 1) {
                    fetchSearchPageSuggestions(query);
                }
            }, 300);
        });

        document.addEventListener('click', function(e) {
            if (!searchPageInput.contains(e.target) && !searchPageSuggestions.contains(e.target)) {
                searchPageSuggestions.classList.add('hidden');
            }
        });

        searchPageInput.addEventListener('focus', function() {
            if (this.value.trim().length >= 1 && searchPageSuggestions.children.length > 0) {
                searchPageSuggestions.classList.remove('hidden');
            }
        });
    }

    function fetchSearchPageSuggestions(query) {
        fetch(`{{ url('/api/search-suggestions') }}?query=${encodeURIComponent(query)}`)
            .then(response => response.json())
            .then(data => {
                displaySearchPageSuggestions(data.products, query);
            })
            .catch(error => {
                console.error('Search error:', error);
            });
    }

    function displaySearchPageSuggestions(products, query) {
        if (!products || products.length === 0) {
            searchPageSuggestions.innerHTML = `
                <div class="p-4 text-center text-gray-500">
                    <svg class="w-12 h-12 mx-auto mb-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                    <p class="text-sm">No products found for "${query}"</p>
                </div>
            `;
            searchPageSuggestions.classList.remove('hidden');
            return;
        }

        let html = '<div class="py-2">';
        
        products.forEach(product => {
            const imageUrl = product.image ? `{{ asset('storage/') }}/${product.image}` : '';
            const productUrl = `{{ url('/product') }}/${product.id}`;
            const price = parseFloat(product.price).toFixed(2);
            
            html += `
                <a href="${productUrl}" class="flex items-center gap-3 px-4 py-3 hover:bg-gray-50 transition-colors duration-150 group">
                    <div class="w-12 h-12 flex-shrink-0 rounded-lg overflow-hidden bg-gray-100">
                        ${imageUrl ? 
                            `<img src="${imageUrl}" alt="${product.name}" class="w-full h-full object-cover">` :
                            `<div class="w-full h-full flex items-center justify-center">
                                <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                            </div>`
                        }
                    </div>
                    <div class="flex-grow min-w-0">
                        <p class="font-medium text-gray-900 truncate group-hover:text-primary transition-colors">${product.name}</p>
                        <p class="text-sm text-gray-500 truncate">${product.description || 'No description'}</p>
                    </div>
                    <div class="flex-shrink-0 text-right">
                        <p class="font-semibold text-gray-900">৳${price}</p>
                        ${product.stock > 0 ? 
                            `<p class="text-xs text-green-600">In Stock</p>` :
                            `<p class="text-xs text-red-600">Out of Stock</p>`
                        }
                    </div>
                </a>
            `;
        });
        
        html += `
            <div class="border-t border-gray-200 mt-2">
                <button onclick="document.getElementById('searchPageForm').submit()" class="w-full px-4 py-3 text-center text-sm font-medium text-primary hover:bg-primary/5 transition-colors">
                    View all results for "${query}"
                    <svg class="w-4 h-4 inline-block ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </button>
            </div>
        `;
        
        html += '</div>';
        searchPageSuggestions.innerHTML = html;
        searchPageSuggestions.classList.remove('hidden');
    }
});
</script>

</body>
</html>

@endsection
