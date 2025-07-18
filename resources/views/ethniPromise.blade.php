@extends('layouts.app')

@section('title', 'EthniCart | Ethni Promise')
<link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-indigo-900 via-purple-900 to-pink-900 py-20 overflow-hidden">
    <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="40" height="40" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="%23ffffff" fill-opacity="0.03" fill-rule="evenodd"%3E%3Cpath d="M20 20c0-5.5-4.5-10-10-10s-10 4.5-10 10 4.5 10 10 10 10-4.5 10-10zm10 0c0-5.5-4.5-10-10-10s-10 4.5-10 10 4.5 10 10 10 10-4.5 10-10z"/%3E%3C/g%3E%3C/svg%3E')] opacity-50"></div>
    
    <div class="relative max-w-7xl mx-auto px-4 text-center">
        <div class="inline-block mb-6">
            <div class="bg-white/20 backdrop-blur-sm rounded-full px-6 py-3 border border-white/30">
                <span class="text-white font-medium">✨ আমাদের অঙ্গীকার • Our Sacred Promise</span>
            </div>
        </div>
        
        <h1 class="text-5xl md:text-7xl font-bold text-white mb-6 leading-tight">
            <span class="bg-gradient-to-r from-yellow-300 via-orange-300 to-pink-300 bg-clip-text text-transparent">Ethni</span>
            <span class="text-white">Promise</span>
        </h1>
        
        <p class="text-xl md:text-2xl text-white/90 max-w-4xl mx-auto mb-12 leading-relaxed">
            More than just words, our promise is woven into every interaction, every product, and every relationship we build. 
            This is our commitment to you, our artisans, and our beautiful Bangladesh.
        </p>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-4xl mx-auto">
            <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/20 hover:bg-white/20 transition-all duration-300">
                <div class="text-4xl mb-4">🤝</div>
                <div class="text-2xl font-bold text-white mb-2">Trust</div>
                <div class="text-white/80">Built on transparency</div>
            </div>
            <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/20 hover:bg-white/20 transition-all duration-300">
                <div class="text-4xl mb-4">💎</div>
                <div class="text-2xl font-bold text-white mb-2">Quality</div>
                <div class="text-white/80">Authentic excellence</div>
            </div>
            <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/20 hover:bg-white/20 transition-all duration-300">
                <div class="text-4xl mb-4">❤️</div>
                <div class="text-2xl font-bold text-white mb-2">Care</div>
                <div class="text-white/80">Beyond transactions</div>
            </div>
        </div>
    </div>
</section>

<!-- Main Promise Section -->
<section class="bg-gradient-to-b from-gray-50 to-white py-16">
    <div class="max-w-7xl mx-auto px-4">
        
        <!-- Core Promises Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-20">
            
            <!-- Fair Pricing Promise -->
            <div class="group relative bg-white rounded-3xl shadow-xl hover:shadow-2xl transition-all duration-500 overflow-hidden">
                <div class="absolute top-0 left-0 w-full h-2 bg-gradient-to-r from-green-400 to-emerald-500"></div>
                <div class="p-8">
                    <div class="relative mb-6">
                        <div class="w-20 h-20 bg-gradient-to-br from-green-400 to-emerald-500 rounded-2xl flex items-center justify-center mx-auto group-hover:scale-110 transition-transform duration-300">
                            <span class="text-3xl text-white">💰</span>
                        </div>
                        <div class="absolute -top-2 -right-2 w-8 h-8 bg-yellow-400 rounded-full flex items-center justify-center">
                            <span class="text-lg">✨</span>
                        </div>
                    </div>
                    
                    <h3 class="text-2xl font-bold text-gray-900 mb-4 text-center">Fair Pricing Always</h3>
                    <p class="text-gray-600 text-center mb-6 leading-relaxed">
                        No hidden costs, no surprise fees. What you see is what you pay. We believe in honest pricing that respects both your budget and our artisans' worth.
                    </p>
                    
                    <div class="space-y-4">
                        <div class="flex items-center space-x-3">
                            <div class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center">
                                <span class="text-green-600 text-sm">✓</span>
                            </div>
                            <span class="text-sm text-gray-700">Transparent pricing structure</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center">
                                <span class="text-green-600 text-sm">✓</span>
                            </div>
                            <span class="text-sm text-gray-700">No hidden charges or fees</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center">
                                <span class="text-green-600 text-sm">✓</span>
                            </div>
                            <span class="text-sm text-gray-700">Fair compensation to artisans</span>
                        </div>
                    </div>
                    
                    <div class="mt-6 p-4 bg-green-50 rounded-xl border border-green-200">
                        <div class="text-center">
                            <div class="text-2xl font-bold text-green-700">70%</div>
                            <div class="text-sm text-green-600">Goes directly to artisans</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Original Products Promise -->
            <div class="group relative bg-white rounded-3xl shadow-xl hover:shadow-2xl transition-all duration-500 overflow-hidden">
                <div class="absolute top-0 left-0 w-full h-2 bg-gradient-to-r from-blue-400 to-indigo-500"></div>
                <div class="p-8">
                    <div class="relative mb-6">
                        <div class="w-20 h-20 bg-gradient-to-br from-blue-400 to-indigo-500 rounded-2xl flex items-center justify-center mx-auto group-hover:scale-110 transition-transform duration-300">
                            <span class="text-3xl text-white">🏆</span>
                        </div>
                        <div class="absolute -top-2 -right-2 w-8 h-8 bg-yellow-400 rounded-full flex items-center justify-center">
                            <span class="text-lg">✨</span>
                        </div>
                    </div>
                    
                    <h3 class="text-2xl font-bold text-gray-900 mb-4 text-center">100% Original Products</h3>
                    <p class="text-gray-600 text-center mb-6 leading-relaxed">
                        Every product carries the authentic touch of its maker. We guarantee originality and provide detailed stories about each item's creation and cultural significance.
                    </p>
                    
                    <div class="space-y-4">
                        <div class="flex items-center space-x-3">
                            <div class="w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center">
                                <span class="text-blue-600 text-sm">✓</span>
                            </div>
                            <span class="text-sm text-gray-700">Authenticity certificate included</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center">
                                <span class="text-blue-600 text-sm">✓</span>
                            </div>
                            <span class="text-sm text-gray-700">Detailed artisan stories</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center">
                                <span class="text-blue-600 text-sm">✓</span>
                            </div>
                            <span class="text-sm text-gray-700">Quality inspection guarantee</span>
                        </div>
                    </div>
                    
                    <div class="mt-6 p-4 bg-blue-50 rounded-xl border border-blue-200">
                        <div class="text-center">
                            <div class="text-2xl font-bold text-blue-700">0%</div>
                            <div class="text-sm text-blue-600">Machine-made products</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Direct Sourcing Promise -->
            <div class="group relative bg-white rounded-3xl shadow-xl hover:shadow-2xl transition-all duration-500 overflow-hidden">
                <div class="absolute top-0 left-0 w-full h-2 bg-gradient-to-r from-purple-400 to-pink-500"></div>
                <div class="p-8">
                    <div class="relative mb-6">
                        <div class="w-20 h-20 bg-gradient-to-br from-purple-400 to-pink-500 rounded-2xl flex items-center justify-center mx-auto group-hover:scale-110 transition-transform duration-300">
                            <span class="text-3xl text-white">🌍</span>
                        </div>
                        <div class="absolute -top-2 -right-2 w-8 h-8 bg-yellow-400 rounded-full flex items-center justify-center">
                            <span class="text-lg">✨</span>
                        </div>
                    </div>
                    
                    <h3 class="text-2xl font-bold text-gray-900 mb-4 text-center">Direct from Source</h3>
                    <p class="text-gray-600 text-center mb-6 leading-relaxed">
                        No middlemen, no compromises. We work directly with artisans and farmers, ensuring freshness, quality, and fair compensation throughout the supply chain.
                    </p>
                    
                    <div class="space-y-4">
                        <div class="flex items-center space-x-3">
                            <div class="w-6 h-6 bg-purple-100 rounded-full flex items-center justify-center">
                                <span class="text-purple-600 text-sm">✓</span>
                            </div>
                            <span class="text-sm text-gray-700">Direct artisan partnerships</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="w-6 h-6 bg-purple-100 rounded-full flex items-center justify-center">
                                <span class="text-purple-600 text-sm">✓</span>
                            </div>
                            <span class="text-sm text-gray-700">Shortest supply chain</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="w-6 h-6 bg-purple-100 rounded-full flex items-center justify-center">
                                <span class="text-purple-600 text-sm">✓</span>
                            </div>
                            <span class="text-sm text-gray-700">Fresh from source guarantee</span>
                        </div>
                    </div>
                    
                    <div class="mt-6 p-4 bg-purple-50 rounded-xl border border-purple-200">
                        <div class="text-center">
                            <div class="text-2xl font-bold text-purple-700">24h</div>
                            <div class="text-sm text-purple-600">From harvest to dispatch</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Additional Promises Section -->
        <div class="bg-white rounded-3xl shadow-xl p-8 mb-16">
            <h3 class="text-3xl font-bold text-gray-900 mb-8 text-center">আরও যা আমরা প্রতিশ্রুতি দিচ্ছি • More We Promise</h3>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="text-center group">
                    <div class="w-16 h-16 bg-gradient-to-br from-orange-400 to-red-500 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                        <span class="text-2xl text-white">🚚</span>
                    </div>
                    <h4 class="text-lg font-bold text-gray-900 mb-2">Safe Delivery</h4>
                    <p class="text-sm text-gray-600">Secure packaging with tracking and insurance for every order</p>
                </div>
                
                <div class="text-center group">
                    <div class="w-16 h-16 bg-gradient-to-br from-teal-400 to-cyan-500 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                        <span class="text-2xl text-white">🔄</span>
                    </div>
                    <h4 class="text-lg font-bold text-gray-900 mb-2">Easy Returns</h4>
                    <p class="text-sm text-gray-600">7-day hassle-free return policy with full refund guarantee</p>
                </div>
                
                <div class="text-center group">
                    <div class="w-16 h-16 bg-gradient-to-br from-rose-400 to-pink-500 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                        <span class="text-2xl text-white">💬</span>
                    </div>
                    <h4 class="text-lg font-bold text-gray-900 mb-2">24/7 Support</h4>
                    <p class="text-sm text-gray-600">Always here to help with questions, concerns, or guidance</p>
                </div>
                
                <div class="text-center group">
                    <div class="w-16 h-16 bg-gradient-to-br from-amber-400 to-yellow-500 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                        <span class="text-2xl text-white">🌱</span>
                    </div>
                    <h4 class="text-lg font-bold text-gray-900 mb-2">Eco-Friendly</h4>
                    <p class="text-sm text-gray-600">Sustainable packaging and environmentally conscious practices</p>
                </div>
            </div>
        </div>

        <!-- Trust Indicators -->
        <div class="bg-gradient-to-r from-gray-900 to-gray-800 rounded-3xl p-8 text-white mb-16">
            <h3 class="text-3xl font-bold mb-8 text-center">Why Customers Trust Us</h3>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center">
                    <div class="text-5xl font-bold text-yellow-400 mb-2">4.9★</div>
                    <div class="text-xl font-semibold mb-2">Customer Rating</div>
                    <div class="text-gray-300">Based on 2,500+ reviews</div>
                </div>
                
                <div class="text-center">
                    <div class="text-5xl font-bold text-green-400 mb-2">99.8%</div>
                    <div class="text-xl font-semibold mb-2">Satisfaction Rate</div>
                    <div class="text-gray-300">Happy customers worldwide</div>
                </div>
                
                <div class="text-center">
                    <div class="text-5xl font-bold text-blue-400 mb-2">50K+</div>
                    <div class="text-xl font-semibold mb-2">Orders Delivered</div>
                    <div class="text-gray-300">With love and care</div>
                </div>
            </div>
        </div>

        <!-- Promise Guarantee -->
        <div class="bg-gradient-to-br from-emerald-500 to-teal-600 rounded-3xl p-8 text-white text-center">
            <div class="max-w-4xl mx-auto">
                <div class="text-6xl mb-6">🤝</div>
                <h3 class="text-4xl font-bold mb-6">Our Solemn Promise</h3>
                <p class="text-xl mb-8 leading-relaxed">
                    "আমাদের প্রতিটি পণ্য একটি গল্প বলে, প্রতিটি অর্ডার একটি সম্পর্ক তৈরি করে। আমরা প্রতিশ্রুতি দিচ্ছি যে আপনার বিশ্বাসের যোগ্য থাকব।"
                </p>
                <p class="text-lg mb-8 text-emerald-100">
                    "Every product tells a story, every order builds a relationship. We promise to be worthy of your trust."
                </p>
                
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/20">
                    <div class="text-2xl font-bold mb-4">If We Ever Fall Short</div>
                    <p class="text-emerald-100 mb-4">
                        We'll make it right immediately. No questions asked. No hassle. Just honest resolution and renewed commitment.
                    </p>
                    <div class="inline-flex items-center space-x-2 bg-white/20 rounded-full px-4 py-2">
                        <span class="text-yellow-300">✨</span>
                        <span class="font-semibold">Guaranteed by the EthniCart Team</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
