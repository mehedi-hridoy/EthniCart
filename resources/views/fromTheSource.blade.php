@extends('layouts.app')

@section('title', 'EthniCart | From The Source')
<link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">

@section('content')
  <!-- Hero Section -->
<section class="relative bg-gradient-to-br from-emerald-900 via-emerald-800 to-green-700 py-20 overflow-hidden">
    <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23ffffff" fill-opacity="0.05"%3E%3Cpath d="M30 30c0-11.046-8.954-20-20-20s-20 8.954-20 20 8.954 20 20 20 20-8.954 20-20zm0 0c0 11.046 8.954 20 20 20s20-8.954 20-20-8.954-20-20-20-20 8.954-20 20z"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-30"></div>
    
    <div class="relative max-w-7xl mx-auto px-4 text-center">
        <div class="inline-block mb-6">
            <div class="bg-white/20 backdrop-blur-sm rounded-full px-6 py-3 border border-white/30">
                <span class="text-white font-medium">🌾 আমাদের শেকড় থেকে • From Our Roots</span>
            </div>
        </div>
        
        <h1 class="text-5xl md:text-7xl font-bold text-white mb-6 leading-tight">
            মাটির কাছ থেকে<br>
            <span class="text-yellow-300">From the Source</span>
        </h1>
        
        <p class="text-xl md:text-2xl text-white/90 max-w-4xl mx-auto mb-12 leading-relaxed">
            Every thread, every grain, every craft piece tells a story of Bangladesh's rich heritage. 
            Journey with us through the lands where tradition meets your table.
        </p>
        
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 max-w-2xl mx-auto">
            <div class="bg-white/10 backdrop-blur-sm rounded-lg p-4 border border-white/20">
                <div class="text-3xl font-bold text-white">64</div>
                <div class="text-sm text-white/80">Districts</div>
            </div>
            <div class="bg-white/10 backdrop-blur-sm rounded-lg p-4 border border-white/20">
                <div class="text-3xl font-bold text-white">500+</div>
                <div class="text-sm text-white/80">Artisans</div>
            </div>
            <div class="bg-white/10 backdrop-blur-sm rounded-lg p-4 border border-white/20">
                <div class="text-3xl font-bold text-white">1000+</div>
                <div class="text-sm text-white/80">Products</div>
            </div>
            <div class="bg-white/10 backdrop-blur-sm rounded-lg p-4 border border-white/20">
                <div class="text-3xl font-bold text-white">100%</div>
                <div class="text-sm text-white/80">Authentic</div>
            </div>
        </div>
    </div>
</section>

<!-- Main Content Section -->
<section class="bg-gradient-to-b from-green-50 to-white py-16">
    <div class="max-w-7xl mx-auto px-4">
        <!-- Stories Introduction -->
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-emerald-900 mb-4">
                প্রতিটি পণ্যের গল্প
            </h2>
            <p class="text-xl text-gray-700 max-w-3xl mx-auto">
                Behind every product lies generations of craftsmanship, passed down through families who have perfected their art over centuries. These are their stories.
            </p>
        </div>

        <!-- Regional Products Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
           

            <!-- Jamuna Clay Pots -->
            <div class="bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 overflow-hidden group">
                <div class="relative overflow-hidden">
                   <img src="{{ asset('images/jamuna_river.jpg') }}" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-700" alt="Jamuna Clay Pots">
                    <div class="absolute top-4 left-4">
                        <span class="bg-gradient-to-r from-amber-600 to-orange-600 text-white px-4 py-2 rounded-full text-sm font-bold">যমুনা তীর</span>
                    </div>
                    <div class="absolute bottom-4 right-4">
                        <div class="bg-white/90 backdrop-blur-sm rounded-full px-3 py-1 text-sm font-medium text-gray-800">
                            🏺 Year-round
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-emerald-900 mb-3">Jamuna Belt – Clay Masters</h3>
                    <p class="text-gray-600 mb-4 leading-relaxed">
                        From the sacred river clay, master potters shape vessels that cool water naturally and enhance flavors. Each pot is blessed by generations of skilled hands and river wisdom.
                    </p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <div class="w-8 h-8 bg-amber-100 rounded-full flex items-center justify-center">
                                <span class="text-amber-600 text-sm">🏺</span>
                            </div>
                            <span class="text-sm text-gray-500">Handcrafted</span>
                        </div>
                        <div class="text-emerald-600 font-semibold">5 generations</div>
                    </div>
                </div>
            </div>

             <!-- Rajshahi Mangoes -->
            <div class="bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 overflow-hidden group">
                <div class="relative overflow-hidden">
                    <img src="{{ asset('images/rajshahi.jpg') }}" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-700" alt="Rajshahi Mangoes">
                    <div class="absolute top-4 left-4">
                        <span class="bg-gradient-to-r from-orange-400 to-red-500 text-white px-4 py-2 rounded-full text-sm font-bold">রাজশাহী</span>
                    </div>
                    <div class="absolute bottom-4 right-4">
                        <div class="bg-white/90 backdrop-blur-sm rounded-full px-3 py-1 text-sm font-medium text-gray-800">
                            🥭 May - July
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-emerald-900 mb-3">Rajshahi – The Mango Kingdom</h3>
                    <p class="text-gray-600 mb-4 leading-relaxed">
                        Where the mighty Padma River meets golden sunlight, Rajshahi's legendary Himsagar and Langra mangoes ripen to perfection. Each fruit carries the sweetness of 500 years of cultivation mastery.
                    </p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <div class="w-8 h-8 bg-orange-100 rounded-full flex items-center justify-center">
                                <span class="text-orange-600 text-sm">🌱</span>
                            </div>
                            <span class="text-sm text-gray-500">Hand-picked daily</span>
                        </div>
                        <div class="text-emerald-600 font-semibold">250+ varieties</div>
                    </div>
                </div>
            </div>

            <!-- Rangamati Bamboo -->
            <div class="bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 overflow-hidden group">
                <div class="relative overflow-hidden">
                   <img src="{{ asset('images/Rangamati.jpg') }}" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-700" alt="Rangamati Bamboo">
                    <div class="absolute top-4 left-4">
                        <span class="bg-gradient-to-r from-green-600 to-teal-600 text-white px-4 py-2 rounded-full text-sm font-bold">রাঙামাটি</span>
                    </div>
                    <div class="absolute bottom-4 right-4">
                        <div class="bg-white/90 backdrop-blur-sm rounded-full px-3 py-1 text-sm font-medium text-gray-800">
                            🎋 All seasons
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-emerald-900 mb-3">Rangamati – Bamboo Artistry</h3>
                    <p class="text-gray-600 mb-4 leading-relaxed">
                        In the mystical Chittagong Hill Tracts, tribal artisans weave bamboo into poetry. Each basket, mat, and utensil carries the forest's breath and indigenous wisdom spanning millennia.
                    </p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center">
                                <span class="text-green-600 text-sm">🎋</span>
                            </div>
                            <span class="text-sm text-gray-500">Tribal craft</span>
                        </div>
                        <div class="text-emerald-600 font-semibold">Eco-friendly</div>
                    </div>
                </div>
            </div>

           
            <!-- Jamdani Weaving -->
            <div class="bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 overflow-hidden group">
                <div class="relative overflow-hidden">
                   <img src="{{ asset('images/Dhaka.jpg') }}" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-700" alt="Jamdani Weaving">
                    <div class="absolute top-4 left-4">
                        <span class="bg-gradient-to-r from-purple-600 to-pink-600 text-white px-4 py-2 rounded-full text-sm font-bold">ঢাকা</span>
                    </div>
                    <div class="absolute bottom-4 right-4">
                        <div class="bg-white/90 backdrop-blur-sm rounded-full px-3 py-1 text-sm font-medium text-gray-800">
                            🧵 UNESCO Heritage
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-emerald-900 mb-3">Dhaka – Jamdani Dreams</h3>
                    <p class="text-gray-600 mb-4 leading-relaxed">
                        In the lanes of old Dhaka, master weavers create magic with threads. Each Jamdani saree takes months to complete, with patterns that seem to float on gossamer fabric like captured moonbeams.
                    </p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <div class="w-8 h-8 bg-purple-100 rounded-full flex items-center justify-center">
                                <span class="text-purple-600 text-sm">🧵</span>
                            </div>
                            <span class="text-sm text-gray-500">Hand-woven</span>
                        </div>
                        <div class="text-emerald-600 font-semibold">UNESCO listed</div>
                    </div>
                </div>
            </div>


             <!-- Sundarbans Honey -->
            <div class="bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 overflow-hidden group">
                <div class="relative overflow-hidden">
                    <img src="{{ asset('images/sundarban.jpg') }}" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-700" alt="Sundarbans Honey">
                    <div class="absolute top-4 left-4">
                        <span class="bg-gradient-to-r from-yellow-500 to-orange-500 text-white px-4 py-2 rounded-full text-sm font-bold">সুন্দরবন</span>
                    </div>
                    <div class="absolute bottom-4 right-4">
                        <div class="bg-white/90 backdrop-blur-sm rounded-full px-3 py-1 text-sm font-medium text-gray-800">
                            🍯 Dec - Feb
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-emerald-900 mb-3">Sundarbans – Tiger's Gold</h3>
                    <p class="text-gray-600 mb-4 leading-relaxed">
                        Deep in the mangrove forests where Royal Bengal tigers roam, brave honey collectors gather liquid gold from wild hives. Each drop carries the untamed spirit of the world's largest mangrove forest.
                    </p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <div class="w-8 h-8 bg-yellow-100 rounded-full flex items-center justify-center">
                                <span class="text-yellow-600 text-sm">🍯</span>
                            </div>
                            <span class="text-sm text-gray-500">Wild harvest</span>
                        </div>
                        <div class="text-emerald-600 font-semibold">100% raw</div>
                    </div>
                </div>
            </div>


            <!-- Bogura Sweets -->
            <div class="bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 overflow-hidden group">
                <div class="relative overflow-hidden">
                    <img src="{{ asset('images/Bogura.png') }}" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-700" alt="Bogura Sweets">
                    <div class="absolute top-4 left-4">
                        <span class="bg-gradient-to-r from-rose-500 to-pink-500 text-white px-4 py-2 rounded-full text-sm font-bold">বগুড়া</span>
                    </div>
                    <div class="absolute bottom-4 right-4">
                        <div class="bg-white/90 backdrop-blur-sm rounded-full px-3 py-1 text-sm font-medium text-gray-800">
                            🍮 Fresh daily
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-emerald-900 mb-3">Bogura – Sweet Symphony</h3>
                    <p class="text-gray-600 mb-4 leading-relaxed">
                        Home to Bangladesh's finest mishti, where legendary sweet makers have perfected their craft for centuries. Each rosogolla melts like clouds, each sandesh dissolves like sweet poetry on your tongue.
                    </p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <div class="w-8 h-8 bg-rose-100 rounded-full flex items-center justify-center">
                                <span class="text-rose-600 text-sm">🍮</span>
                            </div>
                            <span class="text-sm text-gray-500">Fresh made</span>
                        </div>
                        <div class="text-emerald-600 font-semibold">Since 1905</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Journey Timeline -->
        <div class="bg-white rounded-3xl shadow-xl p-8 mb-16">
            <h3 class="text-3xl font-bold text-emerald-900 mb-8 text-center">আমাদের যাত্রা • Our Journey</h3>
            
            <div class="relative">
                <div class="absolute left-8 top-0 bottom-0 w-0.5 bg-gradient-to-b from-emerald-400 to-emerald-600"></div>
                
                <div class="space-y-8">
                    <div class="flex items-start space-x-6">
                        <div class="relative">
                            <div class="w-4 h-4 bg-emerald-500 rounded-full border-4 border-white shadow-lg"></div>
                        </div>
                        <div class="flex-1">
                            <h4 class="text-xl font-bold text-gray-900 mb-2">Source Discovery</h4>
                            <p class="text-gray-600">We travel to remote villages, meeting artisans and farmers who have preserved traditional methods for generations.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-6">
                        <div class="relative">
                            <div class="w-4 h-4 bg-emerald-500 rounded-full border-4 border-white shadow-lg"></div>
                        </div>
                        <div class="flex-1">
                            <h4 class="text-xl font-bold text-gray-900 mb-2">Quality Partnership</h4>
                            <p class="text-gray-600">Building long-term relationships with local producers, ensuring fair trade and sustainable practices.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-6">
                        <div class="relative">
                            <div class="w-4 h-4 bg-emerald-500 rounded-full border-4 border-white shadow-lg"></div>
                        </div>
                        <div class="flex-1">
                            <h4 class="text-xl font-bold text-gray-900 mb-2">Authentic Delivery</h4>
                            <p class="text-gray-600">From harvest to your doorstep, maintaining the integrity and story of each product throughout the journey.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Impact Section -->
        <div class="bg-gradient-to-r from-emerald-600 to-green-600 rounded-3xl p-8 text-white text-center">
            <h3 class="text-3xl font-bold mb-6">Making a Difference Together</h3>
            <p class="text-xl mb-8 max-w-3xl mx-auto leading-relaxed">
                Every purchase supports rural communities, preserves traditional crafts, and brings authentic Bangladesh to your home. Join us in celebrating and sustaining our rich cultural heritage.
            </p>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-4xl mx-auto">
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/20">
                    <div class="text-4xl mb-4">🤝</div>
                    <h4 class="text-xl font-bold mb-2">Direct Partnership</h4>
                    <p class="text-white/90">Working directly with 500+ artisans and farmers across Bangladesh</p>
                </div>
                
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/20">
                    <div class="text-4xl mb-4">🌱</div>
                    <h4 class="text-xl font-bold mb-2">Sustainable Practices</h4>
                    <p class="text-white/90">Promoting eco-friendly methods and preserving traditional techniques</p>
                </div>
                
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/20">
                    <div class="text-4xl mb-4">❤️</div>
                    <h4 class="text-xl font-bold mb-2">Cultural Heritage</h4>
                    <p class="text-white/90">Keeping alive the stories, skills, and spirit of Bangladesh</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
