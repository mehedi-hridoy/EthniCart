<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EthniCart Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        * { font-family: 'Inter', sans-serif; }
        .sidebar-link.active { background: rgba(255,255,255,0.1); border-radius: 0 9999px 9999px 0; margin-right: 1rem; }
        .sidebar-link { transition: all 0.2s; }
        .sidebar-link:hover { background: rgba(255,255,255,0.05); }
        .stat-card { transition: transform 0.2s, box-shadow 0.2s; }
        .stat-card:hover { transform: translateY(-2px); box-shadow: 0 10px 25px -5px rgba(0,0,0,0.1); }
        .chart-container { position: relative; height: 300px; }
    </style>
</head>
<body class="bg-gray-50">
    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar -->
        <aside class="w-72 bg-gray-900 text-white flex-shrink-0 overflow-y-auto">
            <!-- Logo -->
            <div class="p-6 border-b border-gray-800">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-emerald-500 rounded-xl flex items-center justify-center">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"></path>
                        </svg>
                    </div>
                    <div>
                        <h1 class="text-lg font-bold">EthniCart</h1>
                        <p class="text-xs text-gray-400">Admin Panel</p>
                    </div>
                </div>
            </div>

            <!-- Navigation -->
            <nav class="py-6">
                <div class="px-4 mb-3">
                    <p class="text-xs font-semibold text-gray-500 uppercase tracking-wider">GENERAL</p>
                </div>
                <a href="#dashboard" class="sidebar-link active flex items-center gap-3 px-6 py-3 text-sm font-medium">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>
                    Dashboard
                </a>
                <a href="#inventory" class="sidebar-link flex items-center gap-3 px-6 py-3 text-sm font-medium text-gray-300">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                    </svg>
                    Inventory
                </a>
                <a href="#customers" class="sidebar-link flex items-center gap-3 px-6 py-3 text-sm font-medium text-gray-300">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                    </svg>
                    Customers
                </a>
                <a href="#sellers" class="sidebar-link flex items-center gap-3 px-6 py-3 text-sm font-medium text-gray-300">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                    </svg>
                    Sellers
                    @if($pendingSellers->count() > 0)
                    <span class="ml-auto px-2 py-0.5 text-xs bg-emerald-500 text-white rounded-full">{{ $pendingSellers->count() }}</span>
                    @endif
                </a>
                <a href="#review" class="sidebar-link flex items-center gap-3 px-6 py-3 text-sm font-medium text-gray-300">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                    </svg>
                    Review
                </a>
                <a href="{{ route('seller.stats') }}" class="sidebar-link flex items-center gap-3 px-6 py-3 text-sm font-medium text-gray-300">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                    </svg>
                    Payment
                </a>
                
                <div class="px-4 my-6">
                    <div class="h-px bg-gray-800"></div>
                </div>

                <div class="px-4 mb-3">
                    <p class="text-xs font-semibold text-gray-500 uppercase tracking-wider">ACCOUNT</p>
                </div>
                <a href="#settings" class="sidebar-link flex items-center gap-3 px-6 py-3 text-sm font-medium text-gray-300">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    Settings
                </a>
                <a href="#help" class="sidebar-link flex items-center gap-3 px-6 py-3 text-sm font-medium text-gray-300">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    Help
                </a>
            </nav>

            <!-- Logout -->
            <div class="p-6 border-t border-gray-800 mt-auto">
                <form method="POST" action="{{ route('admin.logout') }}">
                    @csrf
                    <button type="submit" class="w-full flex items-center justify-center gap-2 px-4 py-3 rounded-xl bg-red-600 hover:bg-red-700 transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                        </svg>
                        <span class="font-medium">Sign Out</span>
                    </button>
                </form>
            </div>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Top Header -->
            <header class="bg-white border-b border-gray-200 px-8 py-5">
                <div class="flex items-center justify-between">
                    <div>
                        <h1 class="text-2xl font-bold text-gray-900">Welcome Back, Mahfuzul!</h1>
                        <p class="text-sm text-gray-500 mt-1">Here's what happening with your store today</p>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="relative hidden md:block">
                            <input type="text" placeholder="Search" class="w-80 pl-10 pr-4 py-2.5 rounded-xl border border-gray-200 focus:ring-2 focus:ring-emerald-500 focus:border-transparent outline-none">
                            <svg class="w-5 h-5 absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                        <button class="p-2.5 rounded-xl bg-gray-100 hover:bg-gray-200 transition-colors">
                            <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </header>

            <!-- Scrollable Content -->
            <main class="flex-1 overflow-y-auto p-8">
                <!-- KPI Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                    <!-- Ecommerce Revenue -->
                    <div class="stat-card bg-amber-50 rounded-2xl p-6 border border-amber-100">
                        <div class="flex items-start justify-between mb-4">
                            <div>
                                <p class="text-sm text-amber-900/60 font-medium">Ecommerce Revenue</p>
                                <h3 class="text-3xl font-bold text-amber-900 mt-1">৳{{ number_format($totalRevenue, 0) }}</h3>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            @if($revenueGrowth >= 0)
                            <span class="inline-flex items-center gap-1 text-xs font-semibold text-green-600">
                                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                {{ number_format(abs($revenueGrowth), 1) }}%
                            </span>
                            @else
                            <span class="inline-flex items-center gap-1 text-xs font-semibold text-red-600">
                                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M14.707 10.293a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 111.414-1.414L9 12.586V5a1 1 0 012 0v7.586l2.293-2.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                {{ number_format(abs($revenueGrowth), 1) }}%
                            </span>
                            @endif
                            <span class="text-xs text-amber-900/60">(+৳{{ number_format($last30DaysRevenue, 0) }})</span>
                        </div>
                    </div>

                    <!-- New Customers -->
                    <div class="stat-card bg-emerald-50 rounded-2xl p-6 border border-emerald-100">
                        <div class="flex items-start justify-between mb-4">
                            <div>
                                <p class="text-sm text-emerald-900/60 font-medium">New Customers</p>
                                <h3 class="text-3xl font-bold text-emerald-900 mt-1">{{ $newCustomers }}</h3>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            @if($customerGrowth >= 0)
                            <span class="inline-flex items-center gap-1 text-xs font-semibold text-green-600">
                                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                {{ number_format(abs($customerGrowth), 1) }}%
                            </span>
                            @else
                            <span class="inline-flex items-center gap-1 text-xs font-semibold text-red-600">
                                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M14.707 10.293a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 111.414-1.414L9 12.586V5a1 1 0 012 0v7.586l2.293-2.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                {{ number_format(abs($customerGrowth), 1) }}%
                            </span>
                            @endif
                            <span class="text-xs text-emerald-900/60">(+{{ $newCustomers }})</span>
                        </div>
                    </div>

                    <!-- Repeat Purchase Rate -->
                    <div class="stat-card bg-blue-50 rounded-2xl p-6 border border-blue-100">
                        <div class="flex items-start justify-between mb-4">
                            <div>
                                <p class="text-sm text-blue-900/60 font-medium">Repeat Purchase Rate</p>
                                <h3 class="text-3xl font-bold text-blue-900 mt-1">{{ number_format($repeatPurchaseRate, 2) }}%</h3>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="inline-flex items-center gap-1 text-xs font-semibold text-green-600">
                                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                {{ number_format($repeatPurchaseGrowth, 1) }}%
                            </span>
                            <span class="text-xs text-blue-900/60">(+20.11%)</span>
                        </div>
                    </div>

                    <!-- Average Order Value -->
                    <div class="stat-card bg-purple-50 rounded-2xl p-6 border border-purple-100">
                        <div class="flex items-start justify-between mb-4">
                            <div>
                                <p class="text-sm text-purple-900/60 font-medium">Average Order Value</p>
                                <h3 class="text-3xl font-bold text-purple-900 mt-1">৳{{ number_format($averageOrderValue, 2) }}</h3>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="inline-flex items-center gap-1 text-xs font-semibold text-green-600">
                                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                35.2%
                            </span>
                            <span class="text-xs text-purple-900/60">(+৳{{ number_format($averageOrderValue * 0.352, 2) }})</span>
                        </div>
                    </div>
                </div>

                <!-- Summary Chart -->
                <div class="bg-white rounded-2xl border border-gray-200 shadow-sm p-6 mb-8" id="dashboard">
                    <div class="flex items-center justify-between mb-6">
                        <h2 class="text-lg font-bold text-gray-900">Summary</h2>
                        <div class="flex items-center gap-4">
                            <div class="flex items-center gap-2">
                                <span class="w-3 h-3 rounded-full bg-teal-500"></span>
                                <span class="text-sm text-gray-600">Order</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="w-3 h-3 rounded-full bg-emerald-400"></span>
                                <span class="text-sm text-gray-600">Income Growth</span>
                            </div>
                            <select class="px-3 py-1.5 text-sm border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-emerald-500">
                                <option>Last 7 days</option>
                                <option>Last 14 days</option>
                                <option>Last 30 days</option>
                            </select>
                        </div>
                    </div>
                    <div class="chart-container">
                        <canvas id="summaryChart"></canvas>
                    </div>
                </div>

                <!-- Two Column Layout -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-8">
                    <!-- Recent Orders -->
                    <div class="lg:col-span-2 bg-white rounded-2xl border border-gray-200 shadow-sm p-6">
                        <div class="flex items-center justify-between mb-6">
                            <h2 class="text-lg font-bold text-gray-900">Recent Orders</h2>
                            <a href="#" class="text-sm text-blue-600 hover:text-blue-700 font-medium">View All</a>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="w-full">
                                <thead>
                                    <tr class="border-b border-gray-200">
                                        <th class="text-left py-3 px-4 text-xs font-semibold text-gray-600 uppercase">Product</th>
                                        <th class="text-left py-3 px-4 text-xs font-semibold text-gray-600 uppercase">Customer</th>
                                        <th class="text-left py-3 px-4 text-xs font-semibold text-gray-600 uppercase">Order ID</th>
                                        <th class="text-left py-3 px-4 text-xs font-semibold text-gray-600 uppercase">Date</th>
                                        <th class="text-right py-3 px-4 text-xs font-semibold text-gray-600 uppercase">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($recentOrders as $order)
                                    <tr class="border-b border-gray-100 hover:bg-gray-50">
                                        <td class="py-3 px-4 text-sm font-medium text-gray-900">{{ Str::limit($order->product_name, 30) }}</td>
                                        <td class="py-3 px-4 text-sm text-gray-600">{{ $order->user_name ?? 'Guest' }}</td>
                                        <td class="py-3 px-4 text-sm text-gray-600">#{{ $order->order_id }}</td>
                                        <td class="py-3 px-4 text-sm text-gray-600">{{ $order->created_at->format('M d, Y') }}</td>
                                        <td class="py-3 px-4 text-right">
                                            <span class="inline-flex px-2 py-1 text-xs font-medium rounded-full 
                                                {{ $order->status == 'completed' ? 'bg-green-100 text-green-700' : '' }}
                                                {{ $order->status == 'pending' ? 'bg-yellow-100 text-yellow-700' : '' }}
                                                {{ $order->status == 'processing' ? 'bg-blue-100 text-blue-700' : '' }}">
                                                {{ ucfirst($order->status) }}
                                            </span>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Top Sellers -->
                    <div class="bg-white rounded-2xl border border-gray-200 shadow-sm p-6">
                        <div class="flex items-center justify-between mb-6">
                            <h2 class="text-lg font-bold text-gray-900">Top Sellers</h2>
                            <select id="topSellersPeriod" class="px-3 py-1.5 text-sm border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-emerald-500">
                                <option value="7">7 Days</option>
                                <option value="15">15 Days</option>
                                <option value="30" selected>30 Days</option>
                            </select>
                        </div>
                        <div id="topSellersContainer" class="space-y-4">
                            @foreach($topSellers30Days as $index => $seller)
                            <div class="flex items-center gap-3">
                                <div class="flex-shrink-0 w-10 h-10 rounded-full bg-gradient-to-br from-emerald-400 to-teal-600 flex items-center justify-center text-white font-bold">
                                    {{ $index + 1 }}
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-sm font-semibold text-gray-900 truncate">{{ $seller->seller_name }}</p>
                                    <p class="text-xs text-gray-500">{{ $seller->total_orders }} orders</p>
                                </div>
                                <div class="text-right">
                                    <p class="text-sm font-bold text-gray-900">৳{{ number_format($seller->total_revenue, 0) }}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- Inventory & Top Buyers -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-8">
                    <!-- Inventory Overview -->
                    <div class="bg-white rounded-2xl border border-gray-200 shadow-sm p-6" id="inventory">
                        <div class="flex items-center justify-between mb-6">
                            <h2 class="text-lg font-bold text-gray-900">Inventory Overview</h2>
                            <a href="#" class="text-sm text-blue-600 hover:text-blue-700 font-medium">View All</a>
                        </div>
                        
                        <!-- Inventory Stats -->
                        <div class="grid grid-cols-3 gap-4 mb-6">
                            <div class="text-center p-4 bg-gray-50 rounded-xl">
                                <p class="text-xs text-gray-500 mb-1">Total Products</p>
                                <p class="text-2xl font-bold text-gray-900">{{ $products->count() }}</p>
                            </div>
                            <div class="text-center p-4 bg-red-50 rounded-xl">
                                <p class="text-xs text-red-600 mb-1">Out of Stock</p>
                                <p class="text-2xl font-bold text-red-600">{{ $outOfStockCount }}</p>
                            </div>
                            <div class="text-center p-4 bg-emerald-50 rounded-xl">
                                <p class="text-xs text-emerald-600 mb-1">Inventory Value</p>
                                <p class="text-xl font-bold text-emerald-600">৳{{ number_format($inventoryValue, 0) }}</p>
                            </div>
                        </div>

                        <!-- Low Stock Items -->
                        <div>
                            <h3 class="text-sm font-semibold text-gray-700 mb-3">Low Stock Alert</h3>
                            <div class="space-y-2">
                                @foreach($lowStockProducts as $product)
                                <div class="flex items-center justify-between p-3 bg-red-50 rounded-lg border border-red-100">
                                    <div class="flex-1 min-w-0">
                                        <p class="text-sm font-medium text-gray-900 truncate">{{ $product->name }}</p>
                                        <p class="text-xs text-gray-500">By {{ $product->seller->name ?? 'N/A' }}</p>
                                    </div>
                                    <div class="text-right">
                                        <span class="inline-flex px-2 py-1 text-xs font-bold rounded-full {{ $product->stock <= 5 ? 'bg-red-100 text-red-700' : 'bg-yellow-100 text-yellow-700' }}">
                                            {{ $product->stock }} left
                                        </span>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <!-- Top Buyers -->
                    <div class="bg-white rounded-2xl border border-gray-200 shadow-sm p-6">
                        <div class="flex items-center justify-between mb-6">
                            <h2 class="text-lg font-bold text-gray-900">Top Buyers</h2>
                            <select id="topBuyersPeriod" class="px-3 py-1.5 text-sm border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-emerald-500">
                                <option value="7">7 Days</option>
                                <option value="30" selected>30 Days</option>
                            </select>
                        </div>
                        <div id="topBuyersContainer" class="space-y-4">
                            @foreach($topBuyers30Days as $index => $buyer)
                            <div class="flex items-center gap-4 p-4 bg-gray-50 rounded-xl hover:bg-gray-100 transition-colors">
                                <div class="flex-shrink-0">
                                    <div class="w-12 h-12 rounded-full bg-gradient-to-br from-purple-400 to-pink-600 flex items-center justify-center text-white font-bold text-lg">
                                        {{ substr($buyer->user_name, 0, 1) }}
                                    </div>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-sm font-semibold text-gray-900 truncate">{{ $buyer->user_name }}</p>
                                    <p class="text-xs text-gray-500 truncate">{{ $buyer->user_email }}</p>
                                    <p class="text-xs text-gray-500 mt-1">{{ $buyer->total_orders }} orders</p>
                                </div>
                                <div class="text-right">
                                    <p class="text-lg font-bold text-emerald-600">৳{{ number_format($buyer->total_spent, 0) }}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- Sellers & Customers Management -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8" id="sellers">
                    <!-- Pending Sellers -->
                    <div class="bg-white rounded-2xl border border-gray-200 shadow-sm p-6">
                        <div class="flex items-center justify-between mb-6">
                            <h2 class="text-lg font-bold text-gray-900">Pending Sellers</h2>
                            <span class="px-3 py-1 text-xs font-semibold bg-yellow-100 text-yellow-700 rounded-full">{{ $pendingSellers->count() }} Pending</span>
                        </div>
                        <div class="space-y-3">
                            @forelse($pendingSellers as $seller)
                            <div class="flex items-center justify-between p-4 bg-yellow-50 rounded-xl border border-yellow-100">
                                <div class="flex items-center gap-3 flex-1 min-w-0">
                                    <div class="w-10 h-10 rounded-full bg-yellow-200 flex items-center justify-center text-yellow-700 font-bold flex-shrink-0">
                                        {{ substr($seller->name, 0, 1) }}
                                    </div>
                                    <div class="min-w-0 flex-1">
                                        <p class="text-sm font-semibold text-gray-900 truncate">{{ $seller->name }}</p>
                                        <p class="text-xs text-gray-500 truncate">{{ $seller->email }}</p>
                                    </div>
                                </div>
                                <div class="flex items-center gap-2 flex-shrink-0 ml-2">
                                    <a href="{{ route('admin.sellers.profile', $seller->id) }}" class="px-3 py-1.5 text-xs font-medium text-blue-600 hover:text-blue-700 hover:bg-blue-50 rounded-lg transition-colors">
                                        View
                                    </a>
                                    <a href="{{ route('admin.sellers.approve', $seller->id) }}" class="px-3 py-1.5 text-xs font-medium bg-green-600 text-white hover:bg-green-700 rounded-lg transition-colors">
                                        Approve
                                    </a>
                                </div>
                            </div>
                            @empty
                            <p class="text-center py-8 text-gray-500">No pending sellers</p>
                            @endforelse
                        </div>
                    </div>

                    <!-- User Statistics -->
                    <div class="bg-white rounded-2xl border border-gray-200 shadow-sm p-6" id="customers">
                        <div class="flex items-center justify-between mb-6">
                            <h2 class="text-lg font-bold text-gray-900">User Statistics</h2>
                        </div>
                        <div class="grid grid-cols-2 gap-4 mb-6">
                            <div class="p-4 bg-blue-50 rounded-xl text-center">
                                <p class="text-sm text-blue-600 mb-1">Total Users</p>
                                <p class="text-3xl font-bold text-blue-900">{{ $users->count() }}</p>
                            </div>
                            <div class="p-4 bg-emerald-50 rounded-xl text-center">
                                <p class="text-sm text-emerald-600 mb-1">Total Sellers</p>
                                <p class="text-3xl font-bold text-emerald-900">{{ $sellers->count() }}</p>
                            </div>
                            <div class="p-4 bg-purple-50 rounded-xl text-center">
                                <p class="text-sm text-purple-600 mb-1">Total Orders</p>
                                <p class="text-3xl font-bold text-purple-900">{{ $totalOrders }}</p>
                            </div>
                            <div class="p-4 bg-amber-50 rounded-xl text-center">
                                <p class="text-sm text-amber-600 mb-1">Total Products</p>
                                <p class="text-3xl font-bold text-amber-900">{{ $products->count() }}</p>
                            </div>
                        </div>
                        <div class="pt-4 border-t border-gray-200">
                            <div class="flex items-center justify-between mb-3">
                                <span class="text-sm text-gray-600">Active Users</span>
                                <span class="text-sm font-semibold text-gray-900">{{ $users->where('is_blocked', false)->count() }}</span>
                            </div>
                            <div class="flex items-center justify-between mb-3">
                                <span class="text-sm text-gray-600">Blocked Users</span>
                                <span class="text-sm font-semibold text-red-600">{{ $users->where('is_blocked', true)->count() }}</span>
                            </div>
                            <div class="flex items-center justify-between mb-3">
                                <span class="text-sm text-gray-600">Approved Sellers</span>
                                <span class="text-sm font-semibold text-green-600">{{ $approvedSellers->count() }}</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-sm text-gray-600">Pending Sellers</span>
                                <span class="text-sm font-semibold text-yellow-600">{{ $pendingSellers->count() }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script>
        // Summary Chart
        const summaryCtx = document.getElementById('summaryChart').getContext('2d');
        new Chart(summaryCtx, {
            type: 'line',
            data: {
                labels: @json($trendLabels),
                datasets: [
                    {
                        label: 'Orders',
                        data: @json($orderTrend),
                        borderColor: '#14b8a6',
                        backgroundColor: 'rgba(20, 184, 166, 0.1)',
                        borderWidth: 2,
                        tension: 0.4,
                        fill: true,
                        pointRadius: 0,
                        pointHoverRadius: 6,
                        pointHoverBackgroundColor: '#14b8a6',
                        pointHoverBorderColor: '#fff',
                        pointHoverBorderWidth: 2
                    },
                    {
                        label: 'Revenue (৳)',
                        data: @json($revenueTrend),
                        borderColor: '#10b981',
                        backgroundColor: 'rgba(16, 185, 129, 0.1)',
                        borderWidth: 2,
                        tension: 0.4,
                        fill: true,
                        pointRadius: 0,
                        pointHoverRadius: 6,
                        pointHoverBackgroundColor: '#10b981',
                        pointHoverBorderColor: '#fff',
                        pointHoverBorderWidth: 2
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                interaction: {
                    intersect: false,
                    mode: 'index'
                },
                plugins: {
                    legend: {
                        display: false
                    },
                    tooltip: {
                        backgroundColor: 'rgba(0, 0, 0, 0.8)',
                        padding: 12,
                        titleColor: '#fff',
                        bodyColor: '#fff',
                        borderColor: 'rgba(255, 255, 255, 0.2)',
                        borderWidth: 1,
                        cornerRadius: 8,
                        displayColors: true,
                        callbacks: {
                            label: function(context) {
                                let label = context.dataset.label || '';
                                if (label) {
                                    label += ': ';
                                }
                                if (context.parsed.y !== null) {
                                    if (context.dataset.label === 'Revenue (৳)') {
                                        label += '৳' + context.parsed.y.toLocaleString();
                                    } else {
                                        label += context.parsed.y.toLocaleString();
                                    }
                                }
                                return label;
                            }
                        }
                    }
                },
                scales: {
                    x: {
                        grid: {
                            display: false
                        },
                        ticks: {
                            color: '#6b7280',
                            font: {
                                size: 11
                            }
                        }
                    },
                    y: {
                        beginAtZero: true,
                        grid: {
                            color: 'rgba(0, 0, 0, 0.05)'
                        },
                        ticks: {
                            color: '#6b7280',
                            font: {
                                size: 11
                            },
                            callback: function(value) {
                                return value.toLocaleString();
                            }
                        }
                    }
                }
            }
        });

        // Top Sellers Period Change
        document.getElementById('topSellersPeriod').addEventListener('change', function() {
            const period = this.value;
            const sellers = {
                '7': @json($topSellers7Days),
                '15': @json($topSellers15Days),
                '30': @json($topSellers30Days)
            };
            
            const container = document.getElementById('topSellersContainer');
            container.innerHTML = '';
            
            sellers[period].forEach((seller, index) => {
                container.innerHTML += `
                    <div class="flex items-center gap-3">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-gradient-to-br from-emerald-400 to-teal-600 flex items-center justify-center text-white font-bold">
                            ${index + 1}
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-sm font-semibold text-gray-900 truncate">${seller.seller_name}</p>
                            <p class="text-xs text-gray-500">${seller.total_orders} orders</p>
                        </div>
                        <div class="text-right">
                            <p class="text-sm font-bold text-gray-900">৳${Number(seller.total_revenue).toLocaleString()}</p>
                        </div>
                    </div>
                `;
            });
        });

        // Top Buyers Period Change
        document.getElementById('topBuyersPeriod').addEventListener('change', function() {
            const period = this.value;
            const buyers = {
                '7': @json($topBuyers7Days),
                '30': @json($topBuyers30Days)
            };
            
            const container = document.getElementById('topBuyersContainer');
            container.innerHTML = '';
            
            buyers[period].forEach((buyer, index) => {
                const initial = buyer.user_name.charAt(0).toUpperCase();
                container.innerHTML += `
                    <div class="flex items-center gap-4 p-4 bg-gray-50 rounded-xl hover:bg-gray-100 transition-colors">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 rounded-full bg-gradient-to-br from-purple-400 to-pink-600 flex items-center justify-center text-white font-bold text-lg">
                                ${initial}
                            </div>
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-sm font-semibold text-gray-900 truncate">${buyer.user_name}</p>
                            <p class="text-xs text-gray-500 truncate">${buyer.user_email}</p>
                            <p class="text-xs text-gray-500 mt-1">${buyer.total_orders} orders</p>
                        </div>
                        <div class="text-right">
                            <p class="text-lg font-bold text-emerald-600">৳${Number(buyer.total_spent).toLocaleString()}</p>
                        </div>
                    </div>
                `;
            });
        });

        // Smooth scrolling for navigation
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
</body>
</html>
