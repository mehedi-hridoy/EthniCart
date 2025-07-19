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
                            <!-- <i class="fa-solid fa-bars text-2xl"></i> -->
                        </button>
<a href="/" class="relative flex items-center py-2 lg:left-[-100px] md:left-[-80px] sm:left-[-60px] left-[-40px]">
    <img class="h-auto max-h-16 w-auto object-contain" src="{{ asset('images/site_logo.png') }}" alt="EthniCart Logo" />
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
                <div class="relative -ml-4 sm:-ml-6 md:-ml-10 lg:-ml-24 xl:-ml-36">


                    <button id="categoryBtn" class="flex items-center space-x-2 text-gray-700 hover:text-gray-900 py-2 rounded-md text-sm font-medium">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                        <span>SHOP BY CATEGORY</span>
                    </button>
                    
                    <!-- Dropdown Menu -->
                    <div id="categoryDropdown" class="absolute left-0 mt-2 w-64 bg-white rounded-md shadow-lg z-50 border border-gray-200 hidden">
                        <div class="py-2">
                            <a href="{{url('/food')}}" class="flex items-center px-4 py-3 text-sm text-gray-700 hover:bg-gray-50 hover:text-gray-900 transition-colors duration-150">
                                <svg class="w-5 h-5 mr-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"></path>
                                </svg>
                                Seasonal Fruits
                                <svg class="w-4 h-4 ml-auto text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                            
                            <a href="{{url('/pickles&condiments')}}" class="flex items-center px-4 py-3 text-sm text-gray-700 hover:bg-gray-50 hover:text-gray-900 transition-colors duration-150">
                                <svg class="w-5 h-5 mr-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                                Pickles & Condiments
                                <svg class="w-4 h-4 ml-auto text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                            
                            <a href="{{url('/fish&meat')}}" class="flex items-center px-4 py-3 text-sm text-gray-700 hover:bg-gray-50 hover:text-gray-900 transition-colors duration-150">
                                <svg class="w-5 h-5 mr-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z"></path>
                                </svg>
                                Fish & Meat
                                <svg class="w-4 h-4 ml-auto text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                            
                            <a href="{{url('/organicRoots')}}"  class="flex items-center px-4 py-3 text-sm text-gray-700 hover:bg-gray-50 hover:text-gray-900 transition-colors duration-150">
                                <svg class="w-5 h-5 mr-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                </svg>
                                Organic Roots
                                <svg class="w-4 h-4 ml-auto text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                            
                            <a href="{{url('/homemadeMasala')}}"  class="flex items-center px-4 py-3 text-sm text-gray-700 hover:bg-gray-50 hover:text-gray-900 transition-colors duration-150">
                                <svg class="w-5 h-5 mr-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                </svg>
                                Homemade Masala
                                <svg class="w-4 h-4 ml-auto text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                            
                            <a href="{{url('/beauty&care')}}" class="flex items-center px-4 py-3 text-sm text-gray-700 hover:bg-gray-50 hover:text-gray-900 transition-colors duration-150">
                                <svg class="w-5 h-5 mr-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                                Beauty & Care
                                <svg class="w-4 h-4 ml-auto text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                            
                            <a href="{{url('/cloths')}}" 
  class="flex items-center px-4 py-3 text-sm text-gray-700 hover:bg-gray-50 hover:text-gray-900 transition-colors duration-150">
                                <svg class="w-5 h-5 mr-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z"></path>
                                </svg>
                                Cloths & Apparels
                                <svg class="w-4 h-4 ml-auto text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                            
                            <a href="{{url('/craftItems')}}"  class="flex items-center px-4 py-3 text-sm text-gray-700 hover:bg-gray-50 hover:text-gray-900 transition-colors duration-150">
                                <svg class="w-5 h-5 mr-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                </svg>
                                Craft and Goods
                                <svg class="w-4 h-4 ml-auto text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                            
                            <a href="{{url('/home&kitchen')}}"  class="flex items-center px-4 py-3 text-sm text-gray-700 hover:bg-gray-50 hover:text-gray-900 transition-colors duration-150">
                                <svg class="w-5 h-5 mr-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h1.5a2.5 2.5 0 010 5H9m0-5.5V8a2 2 0 012-2h2a2 2 0 012 2v1.5M12 16v2a2 2 0 002 2h1a2 2 0 002-2v-2M5 12h14"></path>
                                </svg>
                                Home & Kitchen 
                                <svg class="w-4 h-4 ml-auto text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                            
                            <a href="{{url('/gift')}}"  class="flex items-center px-4 py-3 text-sm text-gray-700 hover:bg-gray-50 hover:text-gray-900 transition-colors duration-150">
                                <svg class="w-5 h-5 mr-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                </svg>
                                Flowers & Gifts
                                <svg class="w-4 h-4 ml-auto text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                            <a href="{{url('/cleaning&household')}}" class="flex items-center px-4 py-3 text-sm text-gray-700 hover:bg-gray-50 hover:text-gray-900 transition-colors duration-150">
                                <svg class="w-5 h-5 mr-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                </svg>
                                Eco- Friendly Cleaning Products
                                <svg class="w-4 h-4 ml-auto text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                            <a href="{{url('/vegetables')}}"  class="flex items-center px-4 py-3 text-sm text-gray-700 hover:bg-gray-50 hover:text-gray-900 transition-colors duration-150">
                                <svg class="w-5 h-5 mr-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                </svg>
                               Farm Fresh Vegetables
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
                    <a href="{{url('/meet_theMakers')}}"    class="text-gray-700 hover:text-gray-900 px-3 py-2 text-sm font-medium">Meet the Makers</a>
                    <a href="{{url('/fromTheSource')}}" class="text-gray-700 hover:text-gray-900 px-3 py-2 text-sm font-medium">From the Source</a>
                    <a href="{{url('/ethniPromise')}}" class="text-gray-700 hover:text-gray-900 px-3 py-2 text-sm font-medium">Ethni Promise</a>
                    <a href="{{url('/stories')}}" class="text-gray-700 hover:text-gray-900 px-3 py-2 text-sm font-medium">Stories</a>
                    <a href="{{url('/joinAsSeller')}}"  class="text-gray-700 hover:text-gray-900 px-3 py-2 text-sm font-medium">Join as Seller</a>
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
            {{-- Category 1: Fruits --}}
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
                            Seasonal Fruits
                        </h3>
                    </div>
                </a>
            </div>

            {{-- Category 2: Pickles & Condiments--}}
            <div class="group">
                <a href="{{url('/pickles&condiments')}}" class="block bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 overflow-hidden">
                    <div class="aspect-square relative">
                        <img 
                        src="{{ asset('images/pickles.jpg') }}"
                             alt="Food & Snacks" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-10 transition-all duration-300"></div>
                    </div>
                    <div class="p-3 md:p-4">
                        <h3 class="text-sm md:text-base lg:text-lg font-semibold text-gray-800 text-center">
                           Pickles & Condiments
                        </h3>
                    </div>
                </a>
            </div>

            {{-- Category 3:Fish&meat --}}
            <div class="group">
                <a href="{{url('/fish&meat')}}" class="block bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 overflow-hidden">
                    <div class="aspect-square relative">
                 
                        <img 
                        src="{{ asset('images/fish_meat.png') }}"
                        
                             alt="Fruits & Vegetables" 
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

            {{-- Category 4: Organic Roots --}}
            <div class="group">
                <a href="{{url('/organicRoots')}}" class="block bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 overflow-hidden">
                    <div class="aspect-square relative">
                        <img 
                         src="{{ asset('images/organicRoots.png') }}"
                             alt="Fish & Meat" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-10 transition-all duration-300"></div>
                    </div>
                    <div class="p-3 md:p-4">
                        <h3 class="text-sm md:text-base lg:text-lg font-semibold text-gray-800 text-center">
                            Organic Roots
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

            {{-- Category 6: Beauty & Care --}}
            <div class="group">
                <a href="{{url('/beauty&care')}}" class="block bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 overflow-hidden">
                    <div class="aspect-square relative">
                        <img src="images/beauty_items.png"
                             alt="Beauty & Care" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-10 transition-all duration-300"></div>
                    </div>
                    <div class="p-3 md:p-4">
                        <h3 class="text-sm md:text-base lg:text-lg font-semibold text-gray-800 text-center">
                           Beauty & Care
                        </h3>
                    </div>
                </a>
            </div>

            {{-- Category 7: cloths  --}}
            <div class="group">
                <a href="{{url('/cloths')}}" class="block bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 overflow-hidden">
                    <div class="aspect-square relative">
                        <img src="{{ asset('images/cloths&appreals.jpg') }}" alt="cloths"
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

            {{-- Category 8:Crafted Goods--}}
            <div class="group">
                <a href="{{url('/craftItems')}}" class="block bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 overflow-hidden">
                    <div class="aspect-square relative">
                        <img  src="{{ asset('images/crafts.jpg') }}"
                             alt="Frozen Item" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-10 transition-all duration-300"></div>
                    </div>
                    <div class="p-3 md:p-4">
                        <h3 class="text-sm md:text-base lg:text-lg font-semibold text-gray-800 text-center">
                            Crafted Goods

                        </h3>
                    </div>
                </a>
            </div>

            {{-- Category 9:Home & Kitchen  --}}
            <div class="group">
                <a href="{{url('/home&kitchen')}}" class="block bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 overflow-hidden">
                    <div class="aspect-square relative">
                        <img  src="{{ asset('images/home_kitchen.png') }}"

                             alt="Beauty & Personal Care" 
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

            {{-- Category 10: Flower & Gifts --}}
            <div class="group">
                <a href="{{url('/gift')}}" class="block bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 overflow-hidden">
                    <div class="aspect-square relative">
                        <img  src="{{ asset('images/gifts_flowers.jpg') }}"
                             alt="Health & Wellness" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-10 transition-all duration-300"></div>
                    </div>
                    <div class="p-3 md:p-4">
                        <h3 class="text-sm md:text-base lg:text-lg font-semibold text-gray-800 text-center">
                              Flower N Gifts
                        </h3>
                    </div>
                </a>
            </div>

            {{-- Category 11: Eco-Friendly Cleaning Products --}}
            <div class="group">
                <a href="{{url('/cleaning&household')}}" class="block bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 overflow-hidden">
                    <div class="aspect-square relative">
                        <img  src="{{ asset('images/cleaning.jpg') }}"
                             alt="Cleaning & Household" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-10 transition-all duration-300"></div>
                    </div>
                    <div class="p-3 md:p-4">
                        <h3 class="text-sm md:text-base lg:text-lg font-semibold text-gray-800 text-center">
                             Eco-Friendly Cleaning Products
                        </h3>
                    </div>
                </a>
            </div>

            {{-- Category 12: Farm Fresh Vegetables --}}
            <div class="babyCare">
                <a href="{{url('/vegetables')}}" class="block bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 overflow-hidden">
                    <div class="aspect-square relative">
                        <img  src="{{ asset('images/vegetables.jpg') }}"
                             alt="Baby Care" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-10 transition-all duration-300"></div>
                    </div>
                    <div class="p-3 md:p-4">
                        <h3 class="text-sm md:text-base lg:text-lg font-semibold text-gray-800 text-center">
                            Farm Fresh Vegetables
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
    [
        'id' => 5,
        'name' => 'Hilsha Fish (Padma River)',
        'description' => 'Freshly caught Ilish',
        'price' => '৳1200/kg',
        'image' => asset('images/product_images/05_hilsha.jpg')
    ],
    [
        'id' => 6,
        'name' => 'Organic Turmeric Powder',
        'description' => 'Hand-ground haldi from Rangpur',
        'price' => '৳120/100g',
        'image' => asset('images/product_images/06_termeric.jpg')
    ],
    [
        'id' => 7,
        'name' => 'Rosogolla (Dhaka Style)',
        'description' => 'Spongy, syrupy sweet',
        'price' => '৳240/box',
        'image' => asset('images/product_images/07_rosogolla.jpg')
    ],
    [
        'id' => 8,
        'name' => 'Neem Face Pack',
        'description' => 'Natural skin detox',
        'price' => '৳170',
        'image' => asset('images/product_images/08_neem.jpeg')
    ],
    [
        'id' => 9,
        'name' => 'Bamboo Toothbrush (Set of 2)',
        'description' => 'Eco-friendly dental hygiene',
        'price' => '৳150/set',
        'image' => asset('images/product_images/09_bambooBrush.jpg')
    ],
    [
        'id' => 10,
        'name' => 'Amloki Pickle',
        'description' => 'Sweet & tangy seasonal preserve',
        'price' => '৳130/200g',
        'image' => asset('images/product_images/10_amlokiPickle.jpg')
    ],
    [
        'id' => 11,
        'name' => 'Nakshi Kantha (Wall Frame)',
        'description' => 'Traditional embroidered art',
        'price' => '৳950',
        'image' => asset('images/product_images/nakshi_kantha.jpg')
    ],
    [
        'id' => 12,
        'name' => 'Dhakai Jamdani (Off-White)',
        'description' => 'Museum-grade Dhakai Jamdani',
        'price' => '৳6500',
        'image' => asset('images/product_images/jamdani.jpg')
    ],
    [
        'id' => 13,
        'name' => 'Mustard Oil (Cold Pressed)',
        'description' => 'Pure ghani mustard oil',
        'price' => '৳200/L',
        'image' => asset('images/product_images/mustard_oil.jpg')
    ],
    [
        'id' => 14,
        'name' => 'Coriander Powder',
        'description' => 'Stone-ground, aromatic',
        'price' => '৳90/100g',
        'image' => asset('images/product_images/coriander.jpg')
    ],
];
@endphp



<section class="bg-gradient-to-br from-gray-50 to-gray-100 min-h-screen">
    <!-- Header Section -->
    <div class="container mx-auto px-4 py-8">
        <div class="text-center mb-8">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-3">
                Ethnic<span class="text-[#6A9793]">Art</span> Collection
            </h1>
            <p class="text-base text-gray-600 max-w-2xl mx-auto">
                Discover our curated selection of beautiful handcrafted furniture and decor
            </p>
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
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 md:gap-6 lg:gap-8">
            @foreach($products as $index => $product)
            <div class="group relative bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden hover:-translate-y-2 border border-gray-100">
                <!-- Product Image Container -->
                <div class="relative overflow-hidden rounded-t-3xl">
                    <a href="{{ url('/product/' . $product['id']) }}" class="block">
                        <img src="{{ $product['image'] }}" 
                             alt="{{ $product['name'] }}" 
                             class="w-full h-72 object-cover group-hover:scale-110 transition-transform duration-700">
                    </a>
                    
                    <!-- Overlay with Quick Actions -->
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-20 transition-all duration-300 flex items-center justify-center">
                        <div class="transform translate-y-4 group-hover:translate-y-0 opacity-0 group-hover:opacity-100 transition-all duration-300">
                            <button class="bg-white p-3 rounded-full shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-110 mx-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-700" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                            </button>
                            <button class="bg-white p-3 rounded-full shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-110 mx-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    
                    <!-- Sale Badge -->
                    <div class="absolute top-4 left-4">
                        <span class="bg-red-500 text-white text-xs font-bold px-3 py-1 rounded-full">NEW</span>
                    </div>
                </div>

                <!-- Product Details -->
                <div class="p-7 space-y-4">
                    <div class="space-y-2">
                        <h3 class="text-lg font-bold text-gray-900 uppercase tracking-wide group-hover:text-[#6A9793] transition-colors">
                            {{ $product['name'] }}
                        </h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            {{ $product['description'] }}
                        </p>
                    </div>
                    
                    <!-- Price -->
                    <div class="flex items-center justify-between">
                        <span class="text-2xl font-bold text-gray-900">{{ $product['price'] }}</span>
                        <div class="flex items-center space-x-1">
                            @for($i = 1; $i <= 5; $i++)
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                                </svg>
                            @endfor
                        </div>
                    </div>

                    <!-- Add to Cart Button -->
                    <button class="w-full bg-[#6A9793] hover:bg-[#5a8480] text-white font-semibold py-4 px-6 rounded-2xl transition-all duration-300 transform hover:scale-105 hover:shadow-lg active:scale-95 flex items-center justify-center space-x-2 group">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 group-hover:rotate-12 transition-transform" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13l-1.293 2.707A1 1 0 007 17h10a1 1 0 001-1v-1M16 21a1 1 0 100-2 1 1 0 000 2zm-8 0a1 1 0 100-2 1 1 0 000 2z"/>
                        </svg>
                        <span>Add to Cart</span>
                    </button>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Load More Button -->
        <div class="text-center mt-16">
            <button class="bg-white hover:bg-gray-50 text-gray-700 font-semibold py-4 px-8 rounded-2xl border-2 border-gray-200 hover:border-[#6A9793] transition-all duration-300 hover:shadow-lg">
                Load More Products
            </button>
        </div>
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
                    <a href="https://github.com/mehedi-hridoy" target="_blank" class="w-10 h-10 bg-gray-700 hover:bg-green-600 rounded-full flex items-center justify-center transition-colors duration-300">
                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 0C4.477 0 0 4.484 0 10.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0110 4.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.203 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.942.359.31.678.921.678 1.856 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0020 10.017C20 4.484 15.522 0 10 0z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                    <a href="https://github.com/lamyea-salma016" target="_blank" class="w-10 h-10 bg-gray-700 hover:bg-green-600 rounded-full flex items-center justify-center transition-colors duration-300">
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

