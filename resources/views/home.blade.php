@extends('index')
@push('style')
  <title>EthniCart</title>
@endpush
@section('main-content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EthniCart</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

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

<body >

<div class="bg-blue-50">


    <nav class="sticky top-0 z-50">
        <!-- Main Navigation -->
        <div class="bg-white shadow-md">
            <div class="container mx-auto px-4 lg:px-6">
                <div class="flex justify-between items-center h-16 md:h-20">
                    
                    <div class="flex items-center space-x-3 md:space-x-4">
                        <button class="md:hidden text-gray-700 hover:text-primary transition-colors">
                            <i class="fa-solid fa-bars text-xl"></i>
                        </button>
                        
                        <button class="hidden md:block text-gray-700 hover:text-primary transition-colors">
                            <i class="fa-solid fa-bars text-2xl"></i>
                        </button>
<a href="/" class="flex items-center py-2">
    <img class="h-auto max-h-16 w-auto object-contain" src="images/site_logo.png" alt="EthniCart Logo" />
</a>

                    </div>

                    <!-- Search Bar  -->
                    <div class="hidden md:flex flex-1 max-w-2xl mx-8">
                        <form method="GET" class="w-full">
                            <div class="search-container flex items-center bg-white rounded-lg overflow-hidden border border-gray-200 transition-all duration-200">
                                <input
                                    type="text"
                                    name="query"
                                    placeholder="Search your products"
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
                    </div>

                    <div class="flex items-center space-x-4 md:space-x-6">
                        <button class="md:hidden text-gray-700 hover:text-primary transition-colors">
                            <i class="fa-solid fa-magnifying-glass text-xl"></i>
                        </button>
                        
                        <a href="/cart" class="relative text-gray-700 hover:text-primary transition-colors">
                            <i class="fa-solid fa-basket-shopping text-xl md:text-2xl" style="color: #90c552;"></i>
       
                            <span class="absolute -top-2 -right-2 bg-red-500 text-white text-xs rounded-full h-5 w-5 flex items-center justify-center">3</span>
                        </a>
                        
       
                        <a href="/account" class="text-gray-700 hover:text-primary transition-colors">
                            <i class="fa-solid fa-user text-xl md:text-2xl"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile Search Bar -->
        <div class="md:hidden bg-white border-t border-gray-200 px-4 py-3">
            <form method="GET" class="w-full">
                <div class="search-container flex items-center bg-gray-50 rounded-lg overflow-hidden border border-gray-200 transition-all duration-200">
                    <input
                        type="text"
                        name="query"
                        placeholder="Search your products"
                        class="flex-grow px-4 py-3 text-sm text-gray-700 focus:outline-none bg-transparent min-w-0"
                    >
                    <button
                        type="submit"
                        class="px-4 py-3 transition-all duration-200 flex items-center justify-center flex-shrink-0 hover:opacity-90"
                        style="background-color: #90c552;"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </button>
                </div>
            </form>
        </div>
    </nav>

</div>

<!--bottom nav design -->

 <nav class="bg-white shadow-sm border-b">
        <div class="max-w-7xl mx-auto pl-0 pr-4 sm:pr-6 lg:pr-8">
            <div class="flex justify-between items-center h-16">
                <!-- Shop by Category Button -->
                <div class="relative -ml-2">
                    <button id="categoryBtn" class="flex items-center space-x-2 text-gray-700 hover:text-gray-900 py-2 rounded-md text-sm font-medium">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                        <span>SHOP BY CATEGORY</span>
                    </button>
                    
                    <!-- Dropdown Menu -->
                    <div id="categoryDropdown" class="absolute left-0 mt-2 w-64 bg-white rounded-md shadow-lg z-50 border border-gray-200 hidden">
                        <div class="py-2">
                            <a href="{{ url('views/food.blade.php') }}" class="flex items-center px-4 py-3 text-sm text-gray-700 hover:bg-gray-50 hover:text-gray-900 transition-colors duration-150">
                                <svg class="w-5 h-5 mr-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"></path>
                                </svg>
                                Food
                                <svg class="w-4 h-4 ml-auto text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                            
                            <a href="/baby-food-care" class="flex items-center px-4 py-3 text-sm text-gray-700 hover:bg-gray-50 hover:text-gray-900 transition-colors duration-150">
                                <svg class="w-5 h-5 mr-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                                Baby Food & Care
                                <svg class="w-4 h-4 ml-auto text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                            
                            <a href="/home-cleaning" class="flex items-center px-4 py-3 text-sm text-gray-700 hover:bg-gray-50 hover:text-gray-900 transition-colors duration-150">
                                <svg class="w-5 h-5 mr-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z"></path>
                                </svg>
                                Home Cleaning
                                <svg class="w-4 h-4 ml-auto text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                            
                            <a href="/pet-care" class="flex items-center px-4 py-3 text-sm text-gray-700 hover:bg-gray-50 hover:text-gray-900 transition-colors duration-150">
                                <svg class="w-5 h-5 mr-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                </svg>
                                Pet Care
                                <svg class="w-4 h-4 ml-auto text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                            
                            <a href="/beauty-health" class="flex items-center px-4 py-3 text-sm text-gray-700 hover:bg-gray-50 hover:text-gray-900 transition-colors duration-150">
                                <svg class="w-5 h-5 mr-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                </svg>
                                Beauty & Health
                                <svg class="w-4 h-4 ml-auto text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                            
                            <a href="/fashion-lifestyle" class="flex items-center px-4 py-3 text-sm text-gray-700 hover:bg-gray-50 hover:text-gray-900 transition-colors duration-150">
                                <svg class="w-5 h-5 mr-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                                Fashion & Lifestyle
                                <svg class="w-4 h-4 ml-auto text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                            
                            <a href="/home-kitchen" class="flex items-center px-4 py-3 text-sm text-gray-700 hover:bg-gray-50 hover:text-gray-900 transition-colors duration-150">
                                <svg class="w-5 h-5 mr-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z"></path>
                                </svg>
                                Home & Kitchen
                                <svg class="w-4 h-4 ml-auto text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                            
                            <a href="/stationeries" class="flex items-center px-4 py-3 text-sm text-gray-700 hover:bg-gray-50 hover:text-gray-900 transition-colors duration-150">
                                <svg class="w-5 h-5 mr-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                </svg>
                                Stationeries
                                <svg class="w-4 h-4 ml-auto text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                            
                            <a href="/toys-sports" class="flex items-center px-4 py-3 text-sm text-gray-700 hover:bg-gray-50 hover:text-gray-900 transition-colors duration-150">
                                <svg class="w-5 h-5 mr-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h1.5a2.5 2.5 0 010 5H9m0-5.5V8a2 2 0 012-2h2a2 2 0 012 2v1.5M12 16v2a2 2 0 002 2h1a2 2 0 002-2v-2M5 12h14"></path>
                                </svg>
                                Toys & Sports
                                <svg class="w-4 h-4 ml-auto text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                            
                            <a href="/gadget" class="flex items-center px-4 py-3 text-sm text-gray-700 hover:bg-gray-50 hover:text-gray-900 transition-colors duration-150">
                                <svg class="w-5 h-5 mr-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                </svg>
                                Gadget
                                <svg class="w-4 h-4 ml-auto text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Other navigation items -->
                <div class="hidden md:flex space-x-8">
                    <a href="#" class="text-gray-700 hover:text-gray-900 px-3 py-2 text-sm font-medium">GREAT DEALS</a>
                    <a href="#" class="text-gray-700 hover:text-gray-900 px-3 py-2 text-sm font-medium">UNILEVER-STOCK & SAVE</a>
                    <a href="#" class="text-gray-700 hover:text-gray-900 px-3 py-2 text-sm font-medium">BUY & SAVE MORE</a>
                    <a href="#" class="text-gray-700 hover:text-gray-900 px-3 py-2 text-sm font-medium">OUR BRANDS</a>
                    <a href="#" class="text-gray-700 hover:text-gray-900 px-3 py-2 text-sm font-medium">ACI PURE FOODS</a>
                    <a href="#" class="text-gray-700 hover:text-gray-900 px-3 py-2 text-sm font-medium">WOMEN'S CORNER</a>
                </div>
            </div>
        </div>
    </nav>


    <!-- main body part of the site -->

    {{-- Scrollable Image Carousel Section --}}
<div class="relative w-full overflow-hidden bg-gray-50">
    {{-- Carousel Container --}}
    <div class="relative h-96 md:h-[500px] lg:h-[600px]">
        {{-- Carousel Wrapper --}}
        <div id="carousel-wrapper" class="flex transition-transform duration-500 ease-in-out h-full">
            {{-- Image Slide 1 --}}
            <div class="min-w-full relative">
                <a href="#" class="block w-full h-full">
                    <img src="{{ asset('images/header1.png') }}"
                         alt="Slide 1" 
                         class="w-full h-full object-cover">
                    <p class="text-lg md:text-xl mb-6">Fresh fruits and nutritious meals</p>
                           
                       
                </a>
            </div>

            {{-- Image Slide 2 --}}
            <div class="min-w-full relative">
                <a href="#" class="block w-full h-full">
                    <img src="{{ asset('images/header2.jpg') }}"
                         alt="Slide 2" 
                         class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-black bg-opacity-30 flex items-center justify-center">
                        <div class="text-center text-white">
                            <h2 class="text-3xl md:text-5xl font-bold mb-4">Fashion Collection</h2>
                            <p class="text-lg md:text-xl mb-6">Explore the latest trends</p>
                            <button class="bg-white text-gray-800 px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors">
                                Explore Now
                            </button>
                        </div>
                    </div>
                </a>
            </div>

            {{-- Image Slide 3 --}}
            <div class="min-w-full relative">
                <a href="#" class="block w-full h-full">
                    <img src="{{ asset('images/rosemery_oil.jpg') }}"
                         alt="Slide 3" 
                         class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-black bg-opacity-30 flex items-center justify-center">
                        <div class="text-center text-white">
                            <h2 class="text-3xl md:text-5xl font-bold mb-4">Special Offers</h2>
                            <p class="text-lg md:text-xl mb-6">Up to 50% off on selected items</p>
                            <button class="bg-white text-gray-800 px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors">
                                Shop Deals
                            </button>
                        </div>
                    </div>
                </a>
            </div>

            {{-- Image Slide 4 --}}
            <div class="min-w-full relative">
                <a href="#" class="block w-full h-full">
                    <img src="{{ asset('images/perfume.jpg') }}"
                         alt="Slide 4" 
                         class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-black bg-opacity-30 flex items-center justify-center">
                        <div class="text-center text-white">
                            <h2 class="text-3xl md:text-5xl font-bold mb-4">New Arrivals</h2>
                            <p class="text-lg md:text-xl mb-6">Discover our latest products</p>
                            <button class="bg-white text-gray-800 px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors">
                                View Collection
                            </button>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        {{-- Navigation Arrows --}}
        <button id="prev-btn" 
                class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-white bg-opacity-75 hover:bg-opacity-100 text-gray-800 p-3 rounded-full shadow-lg transition-all duration-300 z-10">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
        </button>

        <button id="next-btn" 
                class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-white bg-opacity-75 hover:bg-opacity-100 text-gray-800 p-3 rounded-full shadow-lg transition-all duration-300 z-10">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </button>

        {{-- Dots Indicator --}}
        <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2">
            <button class="carousel-dot w-3 h-3 bg-white bg-opacity-75 rounded-full transition-all duration-300" data-slide="0"></button>
            <button class="carousel-dot w-3 h-3 bg-white bg-opacity-50 rounded-full transition-all duration-300" data-slide="1"></button>
            <button class="carousel-dot w-3 h-3 bg-white bg-opacity-50 rounded-full transition-all duration-300" data-slide="2"></button>
            <button class="carousel-dot w-3 h-3 bg-white bg-opacity-50 rounded-full transition-all duration-300" data-slide="3"></button>
        </div>
    </div>

    {{-- Mobile Swipe Indicator (Optional) --}}
    <div class="md:hidden text-center py-2 text-gray-500 text-sm">
        Swipe to navigate
    </div>
</div>



{{-- Product Categories Grid Section --}}
<div class="bg-white py-8 md:py-12 lg:py-16">
    <div class="container mx-auto px-4">
        {{-- Section Title (Optional) --}}
        <div class="text-center mb-8">
            <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-gray-800 mb-2">
                Shop by Category
            </h2>
            <p class="text-gray-600 text-sm md:text-base">
                Explore our wide range of products
            </p>
        </div>

        {{-- Categories Grid --}}
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-6 lg:gap-8">
            {{-- Category 1: food --}}
            <div class="group">
                <a href="{{url('/food')}}" class="block bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 overflow-hidden">
                    <div class="aspect-square relative">
                        <img src="{{ asset('images/foods.png') }}"
                             alt="Grocery" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-10 transition-all duration-300"></div>
                    </div>
                    <div class="p-3 md:p-4">
                        <h3 class="text-sm md:text-base lg:text-lg font-semibold text-gray-800 text-center">
                            Food
                        </h3>
                    </div>
                </a>
            </div>

            {{-- Category 2: Food & Snacks --}}
            <div class="group">
                <a href="{{url('/home&kitchen')}}" class="block bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 overflow-hidden">
                    <div class="aspect-square relative">
                        <img src="images/home&kitchen.png" 
                             alt="Food & Snacks" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-10 transition-all duration-300"></div>
                    </div>
                    <div class="p-3 md:p-4">
                        <h3 class="text-sm md:text-base lg:text-lg font-semibold text-gray-800 text-center">
                          Home & Kitchen 
                        </h3>
                    </div>
                </a>
            </div>

            {{-- Category 3: Fruits & Vegetables --}}
            <div class="group">
                <a href="{{url('/fruits&vegetables')}}" class="block bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 overflow-hidden">
                    <div class="aspect-square relative">
                        <img src="images/beauty_items.png" 
                             alt="Fruits & Vegetables" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-10 transition-all duration-300"></div>
                    </div>
                    <div class="p-3 md:p-4">
                        <h3 class="text-sm md:text-base lg:text-lg font-semibold text-gray-800 text-center">
                            Beauty Products
                        </h3>
                    </div>
                </a>
            </div>

            {{-- Category 4: Craft Items --}}
            <div class="group">
                <a href="{{url('/craftItems')}}" class="block bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 overflow-hidden">
                    <div class="aspect-square relative">
                        <img src="https://via.placeholder.com/300x300/FDE2E7/BE185D?text=Fish+%26+Meat" 
                             alt="Fish & Meat" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-10 transition-all duration-300"></div>
                    </div>
                    <div class="p-3 md:p-4">
                        <h3 class="text-sm md:text-base lg:text-lg font-semibold text-gray-800 text-center">
                            Craft Items
                        </h3>
                    </div>
                </a>
            </div>

            {{-- Category 5: Homemade Masala--}}
            <div class="group">
                <a href="{{url('/homemadeMasala')}}" class="block bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 overflow-hidden">
                    <div class="aspect-square relative">
                        <img src="images/Masala.jpg"
                             alt="Commodities" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-10 transition-all duration-300"></div>
                    </div>
                    <div class="p-3 md:p-4">
                        <h3 class="text-sm md:text-base lg:text-lg font-semibold text-gray-800 text-center">
                            Homemade Masala
                        </h3>
                    </div>
                </a>
            </div>

            {{-- Category 6: Fish & Meat --}}
            <div class="group">
                <a href="{{url('/fish&meat')}}" class="block bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 overflow-hidden">
                    <div class="aspect-square relative">
                        <img src="images/fish_meat.png"
                             alt="Juice & Beverage" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-10 transition-all duration-300"></div>
                    </div>
                    <div class="p-3 md:p-4">
                        <h3 class="text-sm md:text-base lg:text-lg font-semibold text-gray-800 text-center">
                           Fish & Meat
                        </h3>
                    </div>
                </a>
            </div>

            {{-- Category 7: cloths  --}}
            <div class="group">
                <a href="{{url('/cloths')}}" class="block bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 overflow-hidden">
                    <div class="aspect-square relative">
                        <img src="images/cloths.jpg" 
                             alt="Dairy" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-10 transition-all duration-300"></div>
                    </div>
                    <div class="p-3 md:p-4">
                        <h3 class="text-sm md:text-base lg:text-lg font-semibold text-gray-800 text-center">
                            Cloths & Apparels
                        </h3>
                    </div>
                </a>
            </div>

            {{-- Category 8: Gifts & flowers --}}
            <div class="group">
                <a href="{{url('/gift')}}" class="block bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 overflow-hidden">
                    <div class="aspect-square relative">
                        <img src="https://via.placeholder.com/300x300/F0F9FF/0369A1?text=Frozen+Item" 
                             alt="Frozen Item" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-10 transition-all duration-300"></div>
                    </div>
                    <div class="p-3 md:p-4">
                        <h3 class="text-sm md:text-base lg:text-lg font-semibold text-gray-800 text-center">
                            Gifts & Flowers

                        </h3>
                    </div>
                </a>
            </div>

            {{-- Category 9: Beauty & Personal Care --}}
            <div class="group">
                <a href="{{url('/beauty&Pcare')}}" class="block bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 overflow-hidden">
                    <div class="aspect-square relative">
                        <img src="https://via.placeholder.com/300x300/FCE7F3/BE185D?text=Beauty+%26+Personal+Care" 
                             alt="Beauty & Personal Care" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-10 transition-all duration-300"></div>
                    </div>
                    <div class="p-3 md:p-4">
                        <h3 class="text-sm md:text-base lg:text-lg font-semibold text-gray-800 text-center">
                            Beauty & Personal Care
                        </h3>
                    </div>
                </a>
            </div>

            {{-- Category 10: Health & Wellness --}}
            <div class="health&wellness">
                <a href="{{url('/health')}}" class="block bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 overflow-hidden">
                    <div class="aspect-square relative">
                        <img src="https://via.placeholder.com/300x300/D1FAE5/047857?text=Health+%26+Wellness" 
                             alt="Health & Wellness" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-10 transition-all duration-300"></div>
                    </div>
                    <div class="p-3 md:p-4">
                        <h3 class="text-sm md:text-base lg:text-lg font-semibold text-gray-800 text-center">
                            Health & Wellness
                        </h3>
                    </div>
                </a>
            </div>

            {{-- Category 11: Cleaning & Household --}}
            <div class="group">
                <a href="{{url('/cleaning&household')}}" class="block bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 overflow-hidden">
                    <div class="aspect-square relative">
                        <img src="https://via.placeholder.com/300x300/E5E7EB/374151?text=Cleaning+%26+Household" 
                             alt="Cleaning & Household" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-10 transition-all duration-300"></div>
                    </div>
                    <div class="p-3 md:p-4">
                        <h3 class="text-sm md:text-base lg:text-lg font-semibold text-gray-800 text-center">
                            Cleaning & Household
                        </h3>
                    </div>
                </a>
            </div>

            {{-- Category 12: Baby Care --}}
            <div class="babyCare">
                <a href="{{url('/babyCare')}}" class="block bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 overflow-hidden">
                    <div class="aspect-square relative">
                        <img src="https://via.placeholder.com/300x300/FEF3C7/92400E?text=Baby+Care" 
                             alt="Baby Care" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-10 transition-all duration-300"></div>
                    </div>
                    <div class="p-3 md:p-4">
                        <h3 class="text-sm md:text-base lg:text-lg font-semibold text-gray-800 text-center">
                            Baby Care
                        </h3>
                    </div>
                </a>
            </div>
        </div>

        {{-- View All Categories Button (Optional) --}}
        <div class="text-center mt-8 md:mt-12">
            <a href="#" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded-lg transition-colors duration-300">
                View All Categories
            </a>
        </div>
    </div>
</div>



<!-- Cart Section -->




@php
$products = [
    [
        'name' => 'LISABO',
        'description' => 'Coffee table, ash veneer, 70x70 cm',
        'price' => 'Rp1.999.000',
         'image' => asset('images/product_images/table.jpg')
    ],
    [
        'name' => 'SANDARED',
        'description' => 'Pouffe, grey, 56 cm',
        'price' => 'Rp999.000',
        'image' => 'https://via.placeholder.com/300x200?text=SANDARED'
    ],
    [
        'name' => 'LACK',
        'description' => 'Side table, white, 55x55 cm',
        'price' => 'Rp199.000',
        'image' => 'https://via.placeholder.com/300x200?text=LACK'
    ],
     [
        'name' => 'LISABO',
        'description' => 'Coffee table, ash veneer, 70x70 cm',
        'price' => 'Rp1.999.000',
         'image' => asset('images/product_images/table.jpg')
    ],
     [
        'name' => 'LISABO',
        'description' => 'Coffee table, ash veneer, 70x70 cm',
        'price' => 'Rp1.999.000',
         'image' => asset('images/product_images/table.jpg')
    ],
     [
        'name' => 'LISABO',
        'description' => 'Coffee table, ash veneer, 70x70 cm',
        'price' => 'Rp1.999.000',
         'image' => asset('images/product_images/table.jpg')
    ],
     [
        'name' => 'LISABO',
        'description' => 'Coffee table, ash veneer, 70x70 cm',
        'price' => 'Rp1.999.000',
         'image' => asset('images/product_images/table.jpg')
    ],
     [
        'name' => 'LISABO',
        'description' => 'Coffee table, ash veneer, 70x70 cm',
        'price' => 'Rp1.999.000',
         'image' => asset('images/product_images/table.jpg')
    ],
     [
        'name' => 'LISABO',
        'description' => 'Coffee table, ash veneer, 70x70 cm',
        'price' => 'Rp1.999.000',
         'image' => asset('images/product_images/table.jpg')
    ],
     [
        'name' => 'LISABO',
        'description' => 'Coffee table, ash veneer, 70x70 cm',
        'price' => 'Rp1.999.000',
         'image' => asset('images/product_images/table.jpg')
    ],
     [
        'name' => 'LISABO',
        'description' => 'Coffee table, ash veneer, 70x70 cm',
        'price' => 'Rp1.999.000',
         'image' => asset('images/product_images/table.jpg')
    ],
     [
        'name' => 'LISABO',
        'description' => 'Coffee table, ash veneer, 70x70 cm',
        'price' => 'Rp1.999.000',
         'image' => asset('images/product_images/table.jpg')
    ],
     [
        'name' => 'LISABO',
        'description' => 'Coffee table, ash veneer, 70x70 cm',
        'price' => 'Rp1.999.000',
         'image' => asset('images/product_images/table.jpg')
    ],
     [
        'name' => 'LISABO',
        'description' => 'Coffee table, ash veneer, 70x70 cm',
        'price' => 'Rp1.999.000',
         'image' => asset('images/product_images/table.jpg')
    ],
     [
        'name' => 'LISABO',
        'description' => 'Coffee table, ash veneer, 70x70 cm',
        'price' => 'Rp1.999.000',
         'image' => asset('images/product_images/table.jpg')
    ],
     [
        'name' => 'LISABO',
        'description' => 'Coffee table, ash veneer, 70x70 cm',
        'price' => 'Rp1.999.000',
         'image' => asset('images/product_images/table.jpg')
    ],
     [
        'name' => 'LISABO',
        'description' => 'Coffee table, ash veneer, 70x70 cm',
        'price' => 'Rp1.999.000',
         'image' => asset('images/product_images/table.jpg')
    ],
     [
        'name' => 'LISABO',
        'description' => 'Coffee table, ash veneer, 70x70 cm',
        'price' => 'Rp1.999.000',
         'image' => asset('images/product_images/table.jpg')
    ],
     [
        'name' => 'LISABO',
        'description' => 'Coffee table, ash veneer, 70x70 cm',
        'price' => 'Rp1.999.000',
         'image' => asset('images/product_images/table.jpg')
    ],
     [
        'name' => 'LISABO',
        'description' => 'Coffee table, ash veneer, 70x70 cm',
        'price' => 'Rp1.999.000',
         'image' => asset('images/product_images/table.jpg')
    ],
     [
        'name' => 'LISABO',
        'description' => 'Coffee table, ash veneer, 70x70 cm',
        'price' => 'Rp1.999.000',
         'image' => asset('images/product_images/table.jpg')
    ],
     [
        'name' => 'LISABO',
        'description' => 'Coffee table, ash veneer, 70x70 cm',
        'price' => 'Rp1.999.000',
         'image' => asset('images/product_images/table.jpg')
    ],
     [
        'name' => 'LISABO',
        'description' => 'Coffee table, ash veneer, 70x70 cm',
        'price' => 'Rp1.999.000',
         'image' => asset('images/product_images/table.jpg')
    ],
     [
        'name' => 'LISABO',
        'description' => 'Coffee table, ash veneer, 70x70 cm',
        'price' => 'Rp1.999.000',
         'image' => asset('images/product_images/table.jpg')
    ],
     [
        'name' => 'LISABO',
        'description' => 'Coffee table, ash veneer, 70x70 cm',
        'price' => 'Rp1.999.000',
         'image' => asset('images/product_images/table.jpg')
    ],
     
     [
        'name' => 'LISABO',
        'description' => 'Coffee table, ash veneer, 70x70 cm',
        'price' => 'Rp1.999.000',
         'image' => asset('images/product_images/table.jpg')
    ],
     
     [
        'name' => 'LISABO',
        'description' => 'Coffee table, ash veneer, 70x70 cm',
        'price' => 'Rp1.999.000',
         'image' => asset('images/product_images/table.jpg')
    ],
    // Add as many products as you want...
];
@endphp

<section class="max-w-7xl mx-auto px-4 py-10">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-3xl font-bold">Total items {{ count($products) }}</h2>
        <div class="flex space-x-4">
            <button class="px-4 py-2 border rounded-md text-sm font-medium hover:bg-gray-100">Sort by :</button>
            <button class="px-4 py-2 border rounded-md text-sm font-medium hover:bg-gray-100 flex items-center gap-2">
                Filters
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2a1 1 0 01-.293.707L14 15.414V20a1 1 0 01-1.447.894l-4-2A1 1 0 018 18v-2.586L3.293 6.707A1 1 0 013 6V4z" />
                </svg>
            </button>
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @foreach($products as $index => $product)
        <div class="border rounded-lg p-4 hover:shadow-md transition">
            <div class="relative">
                <a href="/product/{{ $index }}">
                    <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}" class="w-full h-40 object-cover rounded-md">
                </a>
                <a href="/product/{{ $index }}" class="absolute top-2 right-2 text-gray-500 hover:text-black">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13l-1.293 2.707A1 1 0 007 17h10a1 1 0 001-1v-1M16 21a1 1 0 100-2 1 1 0 000 2zm-8 0a1 1 0 100-2 1 1 0 000 2z"/>
                    </svg>
                </a>
            </div>
            <div class="mt-4">
                <h3 class="text-sm font-semibold text-gray-800 uppercase">{{ $product['name'] }}</h3>
                <p class="text-gray-600 text-sm">{{ $product['description'] }}</p>
                <p class="mt-2 font-bold text-gray-900">{{ $product['price'] }}</p>
            </div>
        </div>
        @endforeach
    </div>
</section>



























 <!-- Footer Section for home.blade.php -->
<footer class="bg-gradient-to-br from-gray-800 to-gray-900 text-white relative overflow-hidden">
    <!-- Decorative leaf pattern -->
    <div class="absolute top-0 left-0 w-full h-2 bg-gradient-to-r from-green-500 to-green-600"></div>
    
    <div class="container mx-auto px-6 py-12">
        <!-- Main Footer Content -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            
            <!-- Brand Section -->
            <div class="lg:col-span-1">
                <div class="flex items-center mb-4">
                    <div class="w-10 h-10 bg-gradient-to-r from-green-500 to-green-600 rounded-full flex items-center justify-center mr-3">
                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white">EthniCart</h3>
                </div>
                <p class="text-green-400 font-medium mb-3">From Earth to You</p>
                <p class="text-gray-300 text-sm leading-relaxed mb-4">
                    Connecting you directly with authentic, rooted products from trusted producers. 
                    Quality and authenticity guaranteed in every purchase.
                </p>
                <div class="flex space-x-4">
                    <a href="#" class="w-10 h-10 bg-gray-700 hover:bg-green-600 rounded-full flex items-center justify-center transition-colors duration-300">
                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M20 10c0-5.523-4.477-10-10-10S0 4.477 0 10c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V10h2.54V7.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V10h2.773l-.443 2.89h-2.33v6.988C16.343 19.128 20 14.991 20 10z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                    <a href="#" class="w-10 h-10 bg-gray-700 hover:bg-green-600 rounded-full flex items-center justify-center transition-colors duration-300">
                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84"></path>
                        </svg>
                    </a>
                    <a href="#" class="w-10 h-10 bg-gray-700 hover:bg-green-600 rounded-full flex items-center justify-center transition-colors duration-300">
                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 0C4.477 0 0 4.484 0 10.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0110 4.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.203 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.942.359.31.678.921.678 1.856 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0020 10.017C20 4.484 15.522 0 10 0z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                    <a href="#" class="w-10 h-10 bg-gray-700 hover:bg-green-600 rounded-full flex items-center justify-center transition-colors duration-300">
                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 0C4.477 0 0 4.484 0 10.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0110 4.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.203 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.942.359.31.678.921.678 1.856 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0020 10.017C20 4.484 15.522 0 10 0z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h4 class="text-lg font-semibold mb-4 text-green-400">Quick Links</h4>
                <ul class="space-y-2">
                    <li><a href="#" class="text-gray-300 hover:text-green-400 transition-colors duration-200 flex items-center">
                        <svg class="w-3 h-3 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        About Us
                    </a></li>
                    <li><a href="#" class="text-gray-300 hover:text-green-400 transition-colors duration-200 flex items-center">
                        <svg class="w-3 h-3 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        Our Products
                    </a></li>
                    <li><a href="#" class="text-gray-300 hover:text-green-400 transition-colors duration-200 flex items-center">
                        <svg class="w-3 h-3 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        Our Producers
                    </a></li>
                    <li><a href="#" class="text-gray-300 hover:text-green-400 transition-colors duration-200 flex items-center">
                        <svg class="w-3 h-3 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        Quality Guarantee
                    </a></li>
                    <li><a href="#" class="text-gray-300 hover:text-green-400 transition-colors duration-200 flex items-center">
                        <svg class="w-3 h-3 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        Contact Us
                    </a></li>
                </ul>
            </div>

            <!-- Categories -->
            <div>
                <h4 class="text-lg font-semibold mb-4 text-green-400">Categories</h4>
                <ul class="space-y-2">
                    <li><a href="#" class="text-gray-300 hover:text-green-400 transition-colors duration-200 flex items-center">
                        <svg class="w-3 h-3 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"></path>
                        </svg>
                        Farm Fresh Fruits
                    </a></li>
                    <li><a href="#" class="text-gray-300 hover:text-green-400 transition-colors duration-200 flex items-center">
                        <svg class="w-3 h-3 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"></path>
                        </svg>
                        Fresh Vegetables
                    </a></li>
                    <li><a href="#" class="text-gray-300 hover:text-green-400 transition-colors duration-200 flex items-center">
                        <svg class="w-3 h-3 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"></path>
                        </svg>
                        Organic Products
                    </a></li>
                    <li><a href="#" class="text-gray-300 hover:text-green-400 transition-colors duration-200 flex items-center">
                        <svg class="w-3 h-3 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"></path>
                        </svg>
                        Traditional Foods
                    </a></li>
                    <li><a href="#" class="text-gray-300 hover:text-green-400 transition-colors duration-200 flex items-center">
                        <svg class="w-3 h-3 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"></path>
                        </svg>
                        Herbal Products
                    </a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div>
                <h4 class="text-lg font-semibold mb-4 text-green-400">Get In Touch</h4>
                <div class="space-y-3">
                    <div class="flex items-start">
                        <svg class="w-5 h-5 text-green-500 mt-1 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                        </svg>
                        <div>
                            <p class="text-gray-300 text-sm">Birulia, Ashulia , Savar</p>
                            <p class="text-gray-300 text-sm">Dhaka, Bangladesh</p>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                        </svg>
                        <p class="text-gray-300 text-sm">+880 123-456-7890</p>
                    </div>
                    <div class="flex items-center">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                        </svg>
                        <p class="text-gray-300 text-sm">info@ethnicart.com</p>
                    </div>
                    <div class="flex items-center">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                        </svg>
                        <p class="text-gray-300 text-sm">Mon - Sat: 9AM - 8PM</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Newsletter Section -->
        <div class="mt-12 pt-8 border-t border-gray-700">
            <div class="flex flex-col md:flex-row items-center justify-between">
                <div class="mb-4 md:mb-0">
                    <h4 class="text-lg font-semibold text-white mb-2">Stay Connected</h4>
                    <p class="text-gray-300 text-sm">Subscribe to get updates on fresh arrivals and special offers</p>
                </div>
                <form action="#" method="POST" class="flex w-full md:w-auto">
                    @csrf
                    <input 
                        type="email" 
                        name="email"
                        placeholder="Enter your email" 
                        class="flex-1 md:w-64 px-4 py-2 bg-gray-700 text-white rounded-l-lg focus:outline-none focus:ring-2 focus:ring-green-500"
                        required
                    >
                    <button type="submit" class="bg-gradient-to-r from-green-500 to-green-600 px-6 py-2 rounded-r-lg hover:from-green-600 hover:to-green-700 transition-all duration-300">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z"></path>
                        </svg>
                    </button>
                </form>
            </div>
        </div>

        <!-- Bottom Bar -->
        <div class="mt-8 pt-6 border-t border-gray-700 flex flex-col md:flex-row items-center justify-between">
            <p class="text-gray-400 text-sm mb-4 md:mb-0">
                © {{ date('Y') }} EthniCart. All rights reserved. | Bringing authentic products from earth to you.
            </p>
            <div class="flex space-x-6">
                <a href="#" class="text-gray-400 hover:text-green-400 text-sm transition-colors duration-200">Privacy Policy</a>
                <a href="#" class="text-gray-400 hover:text-green-400 text-sm transition-colors duration-200">Terms of Service</a>
                <a href="#" class="text-gray-400 hover:text-green-400 text-sm transition-colors duration-200">Shipping Policy</a>
                <a href="#" class="text-gray-400 hover:text-green-400 text-sm transition-colors duration-200">Return Policy</a>
            </div>
        </div>
    </div>
</footer>


 
          
       


























 
    <script src="{{ asset('assets/js/script.js') }}"></script>

</body>
</html>