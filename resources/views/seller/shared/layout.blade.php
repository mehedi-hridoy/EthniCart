<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EthniCart - @yield('title','Seller')</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
<div class="flex h-screen">
  <!-- Sidebar -->
  <div class="bg-gray-900 text-white w-64 flex-shrink-0 relative">
    <div class="p-6 border-b border-gray-700">
      <h1 class="text-2xl font-bold text-orange-400">EthniCart</h1>
      <p class="text-sm text-gray-400">Seller Panel</p>
    </div>
    <nav class="mt-6">
      <a href="{{ route('seller.dashboard') }}" class="block px-6 py-3 hover:bg-gray-800 transition-colors @if(request()->routeIs('seller.dashboard')) bg-gray-800 border-r-4 border-orange-400 @endif">
        <i class="fas fa-tachometer-alt mr-3"></i><span>Dashboard</span>
      </a>
      <a href="{{ route('seller.product.create') }}" class="block px-6 py-3 hover:bg-gray-800 transition-colors @if(request()->routeIs('seller.product.create')) bg-gray-800 border-r-4 border-orange-400 @endif">
        <i class="fas fa-plus mr-3"></i><span>Add Product</span>
      </a>
      <a href="{{ route('seller.products.index') }}" class="block px-6 py-3 hover:bg-gray-800 transition-colors @if(request()->routeIs('seller.products.index')) bg-gray-800 border-r-4 border-orange-400 @endif">
        <i class="fas fa-box mr-3"></i><span>Products</span>
      </a>
      <a href="{{ route('seller.orders.index') }}" class="block px-6 py-3 hover:bg-gray-800 transition-colors @if(request()->routeIs('seller.orders.*')) bg-gray-800 border-r-4 border-orange-400 @endif">
        <i class="fas fa-shopping-cart mr-3"></i><span>Orders</span>
      </a>
      <a href="{{ route('seller.analytics.index') }}" class="block px-6 py-3 hover:bg-gray-800 transition-colors @if(request()->routeIs('seller.analytics.index')) bg-gray-800 border-r-4 border-orange-400 @endif">
        <i class="fas fa-chart-line mr-3"></i><span>Analytics</span>
      </a>
      <a href="{{ route('seller.settings.edit') }}" class="block px-6 py-3 hover:bg-gray-800 transition-colors @if(request()->routeIs('seller.settings.*')) bg-gray-800 border-r-4 border-orange-400 @endif">
        <i class="fas fa-cog mr-3"></i><span>Settings</span>
      </a>
    </nav>
    <div class="absolute bottom-0 w-64 p-6 border-t border-gray-700">
      <div class="flex items-center mb-4">
        <div class="w-10 h-10 bg-orange-400 rounded-full flex items-center justify-center overflow-hidden">
          @if(Auth::guard('seller')->user()->seller_image)
            <img src="{{ asset('storage/' . Auth::guard('seller')->user()->seller_image) }}" class="w-10 h-10 object-cover">
          @else
            <i class="fas fa-user text-white"></i>
          @endif
        </div>
        <div class="ml-3">
          <p class="font-medium">{{ Auth::guard('seller')->user()->name }}</p>
          <p class="text-sm text-gray-400">Seller</p>
        </div>
      </div>
      <form method="POST" action="{{ route('seller.logout') }}">
        @csrf
        <button type="submit" class="w-full bg-red-600 hover:bg-red-700 px-4 py-2 rounded transition-colors">
          <i class="fas fa-sign-out-alt mr-2"></i> Logout
        </button>
      </form>
    </div>
  </div>
  <!-- Main -->
  <div class="flex-1 overflow-auto">
    <header class="bg-white shadow-sm border-b border-gray-200 px-6 py-4 flex items-center justify-between">
      <div>
        <h2 class="text-2xl font-bold text-gray-800">@yield('page_title', 'Dashboard')</h2>
      </div>
      <div class="text-right text-sm text-gray-500">
        {{ date('l, F j, Y') }}<br>{{ date('g:i A') }}
      </div>
    </header>
    @yield('content')
  </div>
</div>
</body>
</html>
