@extends('layouts.app')

@section('title', 'EthniCart | Ethni Promise')
<link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-emerald-900 via-green-800 to-teal-900 py-20 overflow-hidden">
    <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="%23ffffff" fill-opacity="0.05" fill-rule="evenodd"%3E%3Cpath d="M30 30c0-8.3-6.7-15-15-15s-15 6.7-15 15 6.7 15 15 15 15-6.7 15-15zm15 0c0-8.3-6.7-15-15-15s-15 6.7-15 15 6.7 15 15 15 15-6.7 15-15z"/%3E%3C/g%3E%3C/svg%3E')] opacity-30"></div>
    
    <!-- Floating Nature Elements -->
    <div class="absolute top-20 left-10 w-20 h-20 text-green-300/20 animate-pulse">🌿</div>
    <div class="absolute top-32 right-20 w-16 h-16 text-emerald-300/20 animate-bounce">🍃</div>
    <div class="absolute bottom-20 left-20 w-24 h-24 text-teal-300/20 animate-pulse">🌱</div>
    
    <div class="relative max-w-7xl mx-auto px-4 text-center">
        <div class="inline-block mb-6">
            <div class="bg-white/20 backdrop-blur-sm rounded-full px-8 py-4 border border-emerald-300/30 shadow-lg">
                <span class="text-white font-medium text-lg">🌱 আমাদের অঙ্গীকার • Our Sacred Promise 🌿</span>
            </div>
        </div>
        
        <h1 class="text-5xl md:text-7xl font-bold text-white mb-6 leading-tight">
            <span class="bg-gradient-to-r from-lime-300 via-emerald-300 to-teal-300 bg-clip-text text-transparent">Ethni</span>
            <span class="text-white">Promise</span>
        </h1>
        
        <p class="text-xl md:text-2xl text-emerald-100 max-w-4xl mx-auto mb-12 leading-relaxed">
            Rooted in tradition, growing with purpose. Our promise flows from the earth to your home, 
            connecting you with authentic, eco-friendly treasures that honor both nature and culture.
        </p>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-4xl mx-auto">
            <div class="bg-white/15 backdrop-blur-sm rounded-3xl p-8 border border-emerald-300/20 hover:bg-white/20 hover:border-emerald-300/40 transition-all duration-500 hover:scale-105">
                <div class="text-5xl mb-4">🌱</div>
                <div class="text-2xl font-bold text-white mb-3">Rooted Trust</div>
                <div class="text-emerald-100">Deep as our heritage</div>
            </div>
            <div class="bg-white/15 backdrop-blur-sm rounded-3xl p-8 border border-emerald-300/20 hover:bg-white/20 hover:border-emerald-300/40 transition-all duration-500 hover:scale-105">
                <div class="text-5xl mb-4">🍃</div>
                <div class="text-2xl font-bold text-white mb-3">Natural Quality</div>
                <div class="text-emerald-100">Pure excellence</div>
            </div>
            <div class="bg-white/15 backdrop-blur-sm rounded-3xl p-8 border border-emerald-300/20 hover:bg-white/20 hover:border-emerald-300/40 transition-all duration-500 hover:scale-105">
                <div class="text-5xl mb-4">🌿</div>
                <div class="text-2xl font-bold text-white mb-3">Green Care</div>
                <div class="text-emerald-100">Sustainable love</div>
            </div>
        </div>
    </div>
</section>

<!-- Main Promise Section -->
<section class="bg-gradient-to-b from-green-50 to-emerald-50 py-20">
    <div class="max-w-7xl mx-auto px-4">
        
        <!-- Core Promises Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 mb-24">
            
            <!-- Fair Pricing Promise -->
            <div class="group relative bg-white rounded-3xl shadow-2xl hover:shadow-3xl transition-all duration-700 overflow-hidden hover:-translate-y-2">
                <div class="absolute top-0 left-0 w-full h-3 bg-gradient-to-r from-emerald-400 via-green-400 to-lime-400"></div>
                <div class="p-10">
                    <div class="relative mb-8">
                        <div class="w-24 h-24 bg-gradient-to-br from-emerald-500 to-green-600 rounded-3xl flex items-center justify-center mx-auto group-hover:scale-110 transition-transform duration-500 shadow-lg">
                            <span class="text-4xl text-white">🌱</span>
                        </div>
                        <div class="absolute -top-3 -right-3 w-10 h-10 bg-lime-400 rounded-full flex items-center justify-center shadow-lg">
                            <span class="text-xl">✨</span>
                        </div>
                    </div>
                    
                    <h3 class="text-2xl font-bold text-gray-800 mb-5 text-center">Fair Pricing Rooted in Values</h3>
                    <p class="text-gray-600 text-center mb-8 leading-relaxed text-lg">
                        Like nature's balance, our pricing is transparent and fair. We nurture both your trust and our artisans' livelihoods with honest, sustainable pricing.
                    </p>
                    
                    <div class="space-y-5">
                        <div class="flex items-center space-x-4">
                            <div class="w-8 h-8 bg-emerald-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-emerald-600 text-lg">✓</span>
                            </div>
                            <span class="text-gray-700 font-medium">Crystal clear pricing structure</span>
                        </div>
                        <div class="flex items-center space-x-4">
                            <div class="w-8 h-8 bg-emerald-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-emerald-600 text-lg">✓</span>
                            </div>
                            <span class="text-gray-700 font-medium">Zero hidden charges or surprises</span>
                        </div>
                        <div class="flex items-center space-x-4">
                            <div class="w-8 h-8 bg-emerald-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-emerald-600 text-lg">✓</span>
                            </div>
                            <span class="text-gray-700 font-medium">Sustainable artisan compensation</span>
                        </div>
                    </div>
                    
                    <div class="mt-8 p-6 bg-gradient-to-r from-emerald-50 to-green-50 rounded-2xl border-2 border-emerald-200">
                        <div class="text-center">
                            <div class="text-3xl font-bold text-emerald-700 mb-2">75%</div>
                            <div class="text-emerald-600 font-semibold">Directly supports our green artisans</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Original Products Promise -->
            <div class="group relative bg-white rounded-3xl shadow-2xl hover:shadow-3xl transition-all duration-700 overflow-hidden hover:-translate-y-2">
                <div class="absolute top-0 left-0 w-full h-3 bg-gradient-to-r from-teal-400 via-emerald-400 to-green-400"></div>
                <div class="p-10">
                    <div class="relative mb-8">
                        <div class="w-24 h-24 bg-gradient-to-br from-teal-500 to-emerald-600 rounded-3xl flex items-center justify-center mx-auto group-hover:scale-110 transition-transform duration-500 shadow-lg">
                            <span class="text-4xl text-white">🍃</span>
                        </div>
                        <div class="absolute -top-3 -right-3 w-10 h-10 bg-lime-400 rounded-full flex items-center justify-center shadow-lg">
                            <span class="text-xl">🌿</span>
                        </div>
                    </div>
                    
                    <h3 class="text-2xl font-bold text-gray-800 mb-5 text-center">100% Authentic & Natural</h3>
                    <p class="text-gray-600 text-center mb-8 leading-relaxed text-lg">
                        Each product carries the pure essence of its origin. Handcrafted with natural materials, every item tells a story of authentic tradition and sustainable craftsmanship.
                    </p>
                    
                    <div class="space-y-5">
                        <div class="flex items-center space-x-4">
                            <div class="w-8 h-8 bg-teal-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-teal-600 text-lg">✓</span>
                            </div>
                            <span class="text-gray-700 font-medium">Natural authenticity certificate</span>
                        </div>
                        <div class="flex items-center space-x-4">
                            <div class="w-8 h-8 bg-teal-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-teal-600 text-lg">✓</span>
                            </div>
                            <span class="text-gray-700 font-medium">Complete artisan heritage stories</span>
                        </div>
                        <div class="flex items-center space-x-4">
                            <div class="w-8 h-8 bg-teal-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-teal-600 text-lg">✓</span>
                            </div>
                            <span class="text-gray-700 font-medium">Eco-friendly quality assurance</span>
                        </div>
                    </div>
                    
                    <div class="mt-8 p-6 bg-gradient-to-r from-teal-50 to-emerald-50 rounded-2xl border-2 border-teal-200">
                        <div class="text-center">
                            <div class="text-3xl font-bold text-teal-700 mb-2">100%</div>
                            <div class="text-teal-600 font-semibold">Handcrafted with natural materials</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Direct Sourcing Promise -->
            <div class="group relative bg-white rounded-3xl shadow-2xl hover:shadow-3xl transition-all duration-700 overflow-hidden hover:-translate-y-2">
                <div class="absolute top-0 left-0 w-full h-3 bg-gradient-to-r from-green-400 via-lime-400 to-emerald-400"></div>
                <div class="p-10">
                    <div class="relative mb-8">
                        <div class="w-24 h-24 bg-gradient-to-br from-green-500 to-lime-600 rounded-3xl flex items-center justify-center mx-auto group-hover:scale-110 transition-transform duration-500 shadow-lg">
                            <span class="text-4xl text-white">🌿</span>
                        </div>
                        <div class="absolute -top-3 -right-3 w-10 h-10 bg-lime-400 rounded-full flex items-center justify-center shadow-lg">
                            <span class="text-xl">🌱</span>
                        </div>
                    </div>
                    
                    <h3 class="text-2xl font-bold text-gray-800 mb-5 text-center">Farm to Home Direct</h3>
                    <p class="text-gray-600 text-center mb-8 leading-relaxed text-lg">
                        Like a tree's roots to branches, we connect you directly to the source. No intermediaries, just pure connection between earth's bounty and your doorstep.
                    </p>
                    
                    <div class="space-y-5">
                        <div class="flex items-center space-x-4">
                            <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-green-600 text-lg">✓</span>
                            </div>
                            <span class="text-gray-700 font-medium">Direct farmer & artisan bonds</span>
                        </div>
                        <div class="flex items-center space-x-4">
                            <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-green-600 text-lg">✓</span>
                            </div>
                            <span class="text-gray-700 font-medium">Minimal carbon footprint path</span>
                        </div>
                        <div class="flex items-center space-x-4">
                            <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-green-600 text-lg">✓</span>
                            </div>
                            <span class="text-gray-700 font-medium">Garden-fresh guarantee</span>
                        </div>
                    </div>
                    
                    <div class="mt-8 p-6 bg-gradient-to-r from-green-50 to-lime-50 rounded-2xl border-2 border-green-200">
                        <div class="text-center">
                            <div class="text-3xl font-bold text-green-700 mb-2">12h</div>
                            <div class="text-green-600 font-semibold">From harvest to your hands</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Additional Promises Section -->
        <div class="bg-white rounded-3xl shadow-2xl p-12 mb-20 border border-emerald-100">
            <div class="text-center mb-12">
                <h3 class="text-4xl font-bold text-gray-800 mb-4">আরও যা আমরা প্রতিশ্রুতি দিচ্ছি • More We Promise</h3>
                <div class="w-24 h-1 bg-gradient-to-r from-emerald-400 to-green-400 rounded-full mx-auto"></div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center group hover:scale-105 transition-all duration-300">
                    <div class="w-20 h-20 bg-gradient-to-br from-emerald-500 to-teal-600 rounded-3xl flex items-center justify-center mx-auto mb-6 group-hover:rotate-6 transition-transform duration-300 shadow-lg">
                        <span class="text-3xl text-white">📦</span>
                    </div>
                    <h4 class="text-xl font-bold text-gray-800 mb-3">Eco-Safe Delivery</h4>
                    <p class="text-gray-600 leading-relaxed">Biodegradable packaging with carbon-neutral delivery and complete tracking</p>
                </div>
                
                <div class="text-center group hover:scale-105 transition-all duration-300">
                    <div class="w-20 h-20 bg-gradient-to-br from-teal-500 to-green-600 rounded-3xl flex items-center justify-center mx-auto mb-6 group-hover:rotate-6 transition-transform duration-300 shadow-lg">
                        <span class="text-3xl text-white">♻️</span>
                    </div>
                    <h4 class="text-xl font-bold text-gray-800 mb-3">Green Returns</h4>
                    <p class="text-gray-600 leading-relaxed">10-day sustainable return policy with eco-friendly refund process</p>
                </div>
                
                <div class="text-center group hover:scale-105 transition-all duration-300">
                    <div class="w-20 h-20 bg-gradient-to-br from-green-500 to-lime-600 rounded-3xl flex items-center justify-center mx-auto mb-6 group-hover:rotate-6 transition-transform duration-300 shadow-lg">
                        <span class="text-3xl text-white">🌱</span>
                    </div>
                    <h4 class="text-xl font-bold text-gray-800 mb-3">24/7 Care Support</h4>
                    <p class="text-gray-600 leading-relaxed">Always growing with you - support that nurtures your journey</p>
                </div>
                
                <div class="text-center group hover:scale-105 transition-all duration-300">
                    <div class="w-20 h-20 bg-gradient-to-br from-lime-500 to-emerald-600 rounded-3xl flex items-center justify-center mx-auto mb-6 group-hover:rotate-6 transition-transform duration-300 shadow-lg">
                        <span class="text-3xl text-white">🌍</span>
                    </div>
                    <h4 class="text-xl font-bold text-gray-800 mb-3">Planet Positive</h4>
                    <p class="text-gray-600 leading-relaxed">Every purchase plants a tree and supports environmental restoration</p>
                </div>
            </div>
        </div>

        <!-- Trust Indicators -->
        <div class="bg-gradient-to-r from-emerald-800 to-green-900 rounded-3xl p-12 text-white mb-20 relative overflow-hidden">
            <div class="absolute top-0 right-0 w-32 h-32 text-emerald-600/10 transform rotate-12">🌿</div>
            <div class="absolute bottom-0 left-0 w-28 h-28 text-green-600/10 transform -rotate-12">🍃</div>
            
            <div class="relative">
                <h3 class="text-4xl font-bold mb-12 text-center">Why Our Community Trusts Us</h3>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                    <div class="text-center">
                        <div class="text-6xl font-bold text-lime-300 mb-3">4.9★</div>
                        <div class="text-2xl font-semibold mb-3 text-emerald-100">Green Rating</div>
                        <div class="text-emerald-200">From 3,200+ eco-conscious reviews</div>
                    </div>
                    
                    <div class="text-center">
                        <div class="text-6xl font-bold text-green-300 mb-3">99.9%</div>
                        <div class="text-2xl font-semibold mb-3 text-emerald-100">Nature Satisfaction</div>
                        <div class="text-emerald-200">Happy earth-lovers worldwide</div>
                    </div>
                    
                    <div class="text-center">
                        <div class="text-6xl font-bold text-teal-300 mb-3">75K+</div>
                        <div class="text-2xl font-semibold mb-3 text-emerald-100">Green Deliveries</div>
                        <div class="text-emerald-200">Sustainably delivered with love</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Promise Guarantee -->
        <div class="bg-gradient-to-br from-emerald-600 to-green-700 rounded-3xl p-12 text-white text-center relative overflow-hidden">
            <div class="absolute top-10 left-10 w-20 h-20 text-emerald-400/20 animate-pulse">🌱</div>
            <div class="absolute bottom-10 right-10 w-16 h-16 text-green-400/20 animate-bounce">🍃</div>
            
            <div class="max-w-5xl mx-auto relative">
                <div class="text-7xl mb-8">🤝</div>
                <h3 class="text-5xl font-bold mb-8">Our Sacred Earth Promise</h3>
                <p class="text-2xl mb-10 leading-relaxed text-emerald-100">
                    "আমাদের প্রতিটি পণ্য প্রকৃতির গল্প বলে, প্রতিটি অর্ডার একটি সবুজ সম্পর্ক তৈরি করে। আমরা প্রতিশ্রুতি দিচ্ছি যে আপনার বিশ্বাসের মতো আমাদের পৃথিবীর যত্ন নেব।"
                </p>
                <p class="text-xl mb-12 text-emerald-50">
                    "Every product tells nature's story, every order builds a green relationship. We promise to care for our planet as deeply as we value your trust."
                </p>
                
                <div class="bg-white/15 backdrop-blur-sm rounded-3xl p-8 border border-emerald-300/30 shadow-2xl">
                    <div class="text-3xl font-bold mb-6">If Mother Earth or You Feel Let Down</div>
                    <p class="text-emerald-100 mb-6 text-lg leading-relaxed">
                        We'll plant new seeds of trust immediately. No questions asked. No compromises. Just honest care for both you and our beautiful planet.
                    </p>
                    <div class="inline-flex items-center space-x-3 bg-white/20 rounded-full px-8 py-4 shadow-lg">
                        <span class="text-lime-300 text-2xl">🌿</span>
                        <span class="font-semibold text-lg">Guaranteed by the EthniCart Green Family</span>
                        <span class="text-lime-300 text-2xl">🌱</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
