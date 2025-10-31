@extends('layouts.app')
@section('title', 'EthniCart | Your Cart')
<link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
@section('content')
<div class="bg-gradient-to-br from-green-50 via-emerald-50 to-teal-50 min-h-screen">
    <div class="container mx-auto px-4 py-6 lg:py-8 max-w-7xl">
        <!-- Header Section -->
        <div class="mb-6 lg:mb-8">
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                <div>
                    <h1 class="text-2xl lg:text-3xl font-bold text-gray-900 mb-2">Your Shopping Cart</h1>
                    <p class="text-gray-600 text-sm lg:text-base">Review your items and proceed to checkout</p>
                </div>
                @auth
                <div class="flex items-center gap-3">
                    <span class="text-sm text-gray-600">Welcome, <strong>{{ Auth::user()->name }}</strong></span>
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" 
                                class="inline-flex items-center px-4 py-2 bg-red-600 hover:bg-red-700 text-white text-sm font-medium rounded-lg transition-colors shadow-sm hover:shadow-md">
                            <i class="fas fa-sign-out-alt mr-2"></i>
                            Logout
                        </button>
                    </form>
                </div>
                @endauth
            </div>
        </div>
        
        @php
            // Get user-specific cart
            $cartKey = auth()->check() ? 'cart_' . auth()->id() : 'cart_' . session()->getId();
            $cart = session()->get($cartKey, []);
            
            // Calculate total quantity
            $totalQuantity = 0;
            if($cart) {
                foreach($cart as $item) {
                    $totalQuantity += $item['quantity'];
                }
            }
        @endphp
        
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 lg:gap-8">
            <!-- Cart Items Section -->
            <div class="lg:col-span-2">
                <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-sm border border-green-100 overflow-hidden">
                    <!-- Cart Header -->
                    <div class="bg-gradient-to-r from-green-600 to-emerald-600 p-4 lg:p-6 text-white">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 bg-white/20 rounded-full flex items-center justify-center">
                                    <i class="fas fa-shopping-cart text-lg"></i>
                                </div>
                                <div>
                                    <h2 class="text-xl font-bold">Cart Items</h2>
                                    <p class="text-green-100 text-sm">{{ count($cart) }} items in your cart</p>
                                </div>
                            </div>
                            <div class="text-right">
                                <p class="text-sm text-green-100">Total Items</p>
                                <p class="text-2xl font-bold">{{ $totalQuantity }}</p>
                            </div>
                        </div>
                    </div>
                    <!-- Cart Items -->
                    <div class="divide-y divide-gray-100">
                        @if($cart && count($cart) > 0)
                            @foreach($cart as $id => $item)
                            <div class="p-4 lg:p-6 hover:bg-green-50/50 transition-colors group">
                                <div class="flex flex-col sm:flex-row sm:items-start space-y-4 sm:space-y-0 sm:space-x-4">
                                    <!-- Product Image -->
                                    <div class="flex-shrink-0 mx-auto sm:mx-0">
                                        <div class="w-20 h-20 lg:w-24 lg:h-24 bg-gray-100 rounded-xl overflow-hidden group-hover:shadow-md transition-shadow">
                                            @if(!empty($item['image']))
                                                <img src="{{ asset('storage/' . $item['image']) }}" 
                                                     alt="{{ $item['name'] }}"
                                                     class="w-full h-full object-cover"
                                                     onerror="this.src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAwIiBoZWlnaHQ9IjIwMCIgdmlld0JveD0iMCAwIDIwMCAyMDAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxyZWN0IHdpZHRoPSIyMDAiIGhlaWdodD0iMjAwIiBmaWxsPSIjRjNGNEY2Ii8+CjxwYXRoIGQ9Ik04NyA3NUgxMTNWMTI1SDg3Vjc1WiIgZmlsbD0iIzlDQTNBRiIvPgo8cGF0aCBkPSJNNzUgMTAwTDEwMCA3NUwxMjUgMTAwSDEyNVYxMzdINzVWMTAwWiIgZmlsbD0iIzlDQTNBRiIvPgo8L3N2Zz4='">
                                            @else
                                                <div class="w-full h-full bg-gradient-to-br from-gray-100 to-gray-200 flex items-center justify-center">
                                                    <i class="fas fa-image text-gray-400 text-2xl"></i>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <!-- Product Details -->
                                    <div class="flex-1 min-w-0 text-center sm:text-left">
                                        <h3 class="text-lg font-semibold text-gray-900 mb-2">{{ $item['name'] }}</h3>
                                        <p class="text-sm text-gray-600 mb-3">Unit Price: ৳{{ number_format($item['price'], 2) }}</p>
                                        
                                        <!-- Mobile Layout: Stack vertically -->
                                        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                                            <!-- Quantity Update Form -->
                                            <form action="{{ route('cart.update', $id) }}" method="POST" class="flex items-center justify-center sm:justify-start space-x-3">
                                                @csrf
                                                <span class="text-sm font-medium text-gray-700">Qty:</span>
                                                <div class="flex items-center bg-green-50 border border-green-200 rounded-lg overflow-hidden">
                                                    <button type="button" onclick="decrementQuantity('{{ $id }}')" 
                                                            class="w-10 h-10 flex items-center justify-center hover:bg-green-100 transition-colors text-green-600 hover:text-green-700">
                                                        <i class="fas fa-minus text-sm"></i>
                                                    </button>
                                                    <input type="number" 
                                                           id="quantity-{{ $id }}" 
                                                           name="quantity"
                                                           value="{{ $item['quantity'] }}" 
                                                           min="1" 
                                                           class="w-16 h-10 text-center border-0 bg-transparent font-semibold text-gray-900 focus:outline-none focus:ring-0">
                                                    <button type="button" onclick="incrementQuantity('{{ $id }}')" 
                                                            class="w-10 h-10 flex items-center justify-center hover:bg-green-100 transition-colors text-green-600 hover:text-green-700">
                                                        <i class="fas fa-plus text-sm"></i>
                                                    </button>
                                                </div>
                                                <button type="submit" 
                                                        class="px-4 py-2 bg-green-600 hover:bg-green-700 text-white text-sm font-medium rounded-lg transition-colors">
                                                    Update
                                                </button>
                                            </form>
                                            <!-- Price and Remove -->
                                            <div class="flex items-center justify-between sm:justify-end space-x-4">
                                                <div class="text-center sm:text-right">
                                                    <p class="text-sm text-gray-500">Subtotal</p>
                                                    <p class="text-xl font-bold text-gray-900">
                                                        ৳{{ number_format($item['price'] * $item['quantity'], 2) }}
                                                    </p>
                                                </div>
                                                
                                                <!-- Remove Form -->
                                                <form action="{{ route('cart.remove', $id) }}" method="POST" class="inline">
                                                    @csrf
                                                    <button type="submit" 
                                                            onclick="return confirm('Are you sure you want to remove this item?')"
                                                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-red-600 hover:text-red-700 hover:bg-red-50 rounded-lg transition-colors">
                                                        <i class="fas fa-trash-alt mr-2"></i>
                                                        <span class="hidden sm:inline">Remove</span>
                                                        <span class="sm:hidden">Delete</span>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        @else
                        <!-- Empty Cart State -->
                        <div class="p-8 lg:p-12 text-center">
                            <div class="w-20 h-20 lg:w-24 lg:h-24 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6">
                                <i class="fas fa-shopping-cart text-green-500 text-2xl lg:text-3xl"></i>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Your cart is empty</h3>
                            <p class="text-gray-600 mb-6">Discover amazing authentic products from EthniCart</p>
                                     <a href="{{ url('/') }}" 
                               class="inline-flex items-center px-6 py-3 bg-green-600 hover:bg-green-700 text-white font-semibold rounded-lg transition-colors">
                                <i class="fas fa-leaf mr-2"></i>
                                Explore Products
                            </a>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            <!-- Order Summary Sidebar -->
            <div class="lg:col-span-1">
                <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-sm border border-green-100 overflow-hidden sticky top-8">
                    <!-- Summary Header -->
                    <div class="bg-gradient-to-r from-emerald-700 to-teal-700 p-4 lg:p-6 text-white">
                        <h3 class="text-lg font-bold flex items-center">
                            <i class="fas fa-receipt mr-3"></i>
                            Order Summary
                        </h3>
                    </div>
                    <div class="p-4 lg:p-6 space-y-4">
                        <!-- User Details -->
                        <div class="bg-green-50 border border-green-200 rounded-xl p-4">
                            <h4 class="font-semibold text-gray-800 mb-2 flex items-center">
                                <i class="fas fa-user text-green-600 mr-2"></i>
                                Customer Details
                            </h4>
                            <div class="space-y-1 text-sm">
                                <p class="text-gray-700"><strong>Name:</strong> {{ Auth::user()->name ?? 'Guest User' }}</p>
                                <p class="text-gray-700"><strong>Email:</strong> {{ Auth::user()->email ?? 'guest@example.com' }}</p>
                            </div>
                        </div>
                        @if($cart && count($cart) > 0)
                        <!-- Price Breakdown -->
                        <div class="space-y-3">
                            @php
                                $subtotal = 0;
                                foreach($cart as $item) {
                                    $subtotal += $item['price'] * $item['quantity'];
                                }
                                $shipping = $subtotal > 1000 ? 0 : 60; // Free shipping over ৳1000
                                $tax = $subtotal * 0.05; // 5% tax
                                $total = $subtotal + $shipping + $tax;
                            @endphp
                            <div class="flex justify-between text-gray-600 text-sm lg:text-base">
                                <span>Subtotal ({{ $totalQuantity }} items)</span>
                                <span>৳{{ number_format($subtotal, 2) }}</span>
                            </div>
                            
                            <div class="flex justify-between text-gray-600 text-sm lg:text-base">
                                <span>Shipping</span>
                                <span class="{{ $shipping == 0 ? 'text-green-600 font-semibold' : '' }}">
                                    {{ $shipping == 0 ? 'FREE' : '৳' . number_format($shipping, 2) }}
                                </span>
                            </div>
                            
                            <div class="flex justify-between text-gray-600 text-sm lg:text-base">
                                <span>Tax (5%)</span>
                                <span>৳{{ number_format($tax, 2) }}</span>
                            </div>
                            
                            @if($subtotal < 1000 && $subtotal > 0)
                            <div class="bg-blue-50 border border-blue-200 rounded-lg p-3">
                                <p class="text-sm text-blue-700">
                                    <i class="fas fa-gift mr-1"></i>
                                    Add ৳{{ number_format(1000 - $subtotal, 2) }} more for free shipping!
                                </p>
                            </div>
                            @endif
                        </div>
                        <hr class="border-green-200">
                        <!-- Total -->
                        <div class="flex justify-between items-center text-lg font-bold text-gray-900">
                            <span>Total</span>
                            <span class="text-green-600">৳{{ number_format($total, 2) }}</span>
                        </div>
                        <!-- Checkout Button -->
                       <!-- Checkout Button -->
<a href="{{ url('/checkout') }}" 
   class="w-full bg-gradient-to-r from-green-600 to-emerald-600 hover:from-green-700 hover:to-emerald-700 text-white font-bold py-3 lg:py-4 px-6 rounded-xl transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl flex items-center justify-center">
    <i class="fas fa-lock mr-2"></i>
    Proceed to Checkout
</a>

<!-- Cash on Delivery Button -->
<form action="{{ route('cart.cod') }}" method="POST" id="codForm">
    @csrf
    <button type="submit" 
            class="w-full mt-3 bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-3 lg:py-4 px-6 rounded-xl transition-all duration-300 flex items-center justify-center">
        <i class="fas fa-money-bill-wave mr-2"></i>
        Pay on Delivery
    </button>
</form>

                        <p class="text-xs text-gray-500 text-center mt-2">
                            <i class="fas fa-shield-alt mr-1"></i>
                            Secure checkout with 256-bit SSL encryption
                        </p>
                        @endif
                    </div>
                </div>
                <!-- Continue Shopping -->
                <div class="mt-4 lg:mt-6">
                          <a href="{{ url('/') }}" 
                       class="w-full bg-white/90 hover:bg-white text-gray-700 font-semibold py-3 px-6 rounded-xl border border-green-200 hover:border-green-300 transition-colors flex items-center justify-center backdrop-blur-sm">
                        <i class="fas fa-arrow-left mr-2"></i>
                        Continue Shopping
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    // Quantity increment/decrement functions
    function incrementQuantity(itemId) {
        const input = document.getElementById(`quantity-${itemId}`);
        input.value = parseInt(input.value) + 1;
    }
    function decrementQuantity(itemId) {
        const input = document.getElementById(`quantity-${itemId}`);
        if (parseInt(input.value) > 1) {
            input.value = parseInt(input.value) - 1;
        }
    }
</script>
@endsection