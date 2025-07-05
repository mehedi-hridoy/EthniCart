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
    

  <!-- // css need to be added  -->



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
    <style>
       
    </style>
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



 
          
       


























 
    <script src="{{ asset('assets/js/script.js') }}"></script>

</body>
</html>