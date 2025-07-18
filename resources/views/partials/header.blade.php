



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
                            <img class="h-auto max-h-16 w-auto object-contain" src="{{ asset('images/site_logo.png') }}" alt="EthniCart Logo" />
                        </a>
                    </div>

                    <!-- Search Bar -->
                    <div class="hidden md:flex flex-1 max-w-2xl mx-8">
                        <form method="GET" action="{{ url('/search') }}" class="w-full">
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
                        
                        <a href="{{ url('/cart') }}" class="relative text-gray-700 hover:text-primary transition-colors">
                            <i class="fa-solid fa-basket-shopping text-xl md:text-2xl" style="color: #90c552;"></i>
                            <span class="absolute -top-2 -right-2 bg-red-500 text-white text-xs rounded-full h-5 w-5 flex items-center justify-center">3</span>
                        </a>
                        
                        <a href="{{ url('/account') }}" class="text-gray-700 hover:text-primary transition-colors">
                            <i class="fa-solid fa-user text-xl md:text-2xl"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile Search Bar -->
        <div class="md:hidden bg-white border-t border-gray-200 px-4 py-3">
            <form method="GET" action="{{ url('/search') }}" class="w-full">
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

<!-- Bottom Navigation -->
<nav class="bg-white shadow-sm border-b">
    <div class="max-w-7xl mx-auto pl-0 pr-4 sm:pr-6 lg:pr-8">
        <div class="flex justify-between items-center h-16">
            <!-- Shop by Category Button -->
            <div class="relative -ml-2">
                <button id="categoryBtn" class="flex items-center space-x-2 text-gray-700 hover:text-gray-900 py-2 rounded-md text-sm font-medium transition-colors duration-200">
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
                    <a href="{{url('/craftItems')}}"    class="text-gray-700 hover:text-gray-900 px-3 py-2 text-sm font-medium">Meet the Makers</a>
                    <a href="#" class="text-gray-700 hover:text-gray-900 px-3 py-2 text-sm font-medium">From the Source</a>
                    <a href="#" class="text-gray-700 hover:text-gray-900 px-3 py-2 text-sm font-medium">Ethni Promise</a>
                    <a href="#" class="text-gray-700 hover:text-gray-900 px-3 py-2 text-sm font-medium">Stories</a>
                    <a href="#" class="text-gray-700 hover:text-gray-900 px-3 py-2 text-sm font-medium">Join as Seller</a>
                </div>
        </div>
    </div>
</nav>