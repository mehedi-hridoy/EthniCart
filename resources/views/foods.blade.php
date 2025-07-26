@extends('layouts.app')
@section('title', 'EthniCart | Foods')
<link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
@section('content')

<!-- Hero Section -->
<div class="bg-gradient-to-br from-green-50 via-emerald-50 to-teal-50 min-h-screen">
    <!-- Header Banner -->
    <div class="relative overflow-hidden bg-gradient-to-r from-green-600 via-emerald-600 to-teal-600 py-16">
        <div class="absolute inset-0 bg-black opacity-10"></div>
        <div class="relative container mx-auto px-4 text-center">
            <h1 class="text-5xl md:text-6xl font-bold text-white mb-4 tracking-tight">
                Fresh <span class="text-green-200">Foods</span>
            </h1>
            <p class="text-xl md:text-2xl text-green-100 mb-8 max-w-2xl mx-auto">
                Discover authentic flavors from nature's finest collection
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
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                From fresh fruits to delightful sweets, discover the finest selection of authentic foods
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Fruits Category -->
            <div class="group cursor-pointer transform hover:scale-105 transition-all duration-300">
                <a href="{{ url('/A1_foods_fruits') }}" class="block">
                    <div class="bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden border-2 border-transparent hover:border-green-300">
                        <div class="relative h-64 bg-gradient-to-br from-green-100 to-green-200 flex items-center justify-center">
                            <!-- Placeholder for fruit image -->
                            <div class="w-32 h-32 bg-green-300 rounded-full flex items-center justify-center">
                                <span class="text-6xl">🍎</span>
                            </div>
                            <div class="absolute top-4 right-4 bg-green-500 text-white px-3 py-1 rounded-full text-sm font-medium">
                                Fresh
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
                                <span class="text-6xl">🍰</span>
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
                                <span class="text-6xl">🥨</span>
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
                                <span class="text-6xl">🥛</span>
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
    <div class="bg-gradient-to-r from-green-600 to-emerald-600 py-12">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold text-white mb-4">Ready to Explore?</h2>
            <p class="text-green-100 text-lg mb-6">Start your culinary journey with EthniCart today</p>
            <button class="bg-white text-green-600 px-8 py-3 rounded-full font-bold hover:bg-green-50 transition-colors shadow-lg">
                Shop Now
            </button>
        </div>
    </div>
</div>

@endsection