@extends('layouts.app')

@section('title', 'EthniCart | Stories - Tales from the Heart')
<link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-emerald-900 via-teal-800 to-green-900 py-24 overflow-hidden">
    <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="80" height="80" viewBox="0 0 80 80" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="%23ffffff" fill-opacity="0.03" fill-rule="evenodd"%3E%3Cpath d="M40 40c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20zm20 0c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20z"/%3E%3C/g%3E%3C/svg%3E')] opacity-20"></div>
    
    <!-- Animated Story Elements -->
    <div class="absolute top-16 left-8 w-24 h-24 text-emerald-300/20 animate-pulse">📜</div>
    <div class="absolute top-32 right-12 w-20 h-20 text-teal-300/20 animate-bounce delay-300">✨</div>
    <div class="absolute bottom-20 left-16 w-28 h-28 text-green-300/20 animate-pulse delay-500">🎨</div>
    <div class="absolute bottom-32 right-20 w-16 h-16 text-lime-300/20 animate-bounce">📖</div>
    
    <div class="relative max-w-7xl mx-auto px-4 text-center">
        <div class="inline-block mb-8">
            <div class="bg-white/20 backdrop-blur-sm rounded-full px-10 py-5 border border-emerald-300/30 shadow-2xl">
                <span class="text-white font-medium text-lg">📚 গল্পের ঝুড়ি • Tales from Heritage 🌿</span>
            </div>
        </div>
        
        <h1 class="text-6xl md:text-8xl font-bold text-white mb-8 leading-tight">
            <span class="bg-gradient-to-r from-lime-300 via-emerald-300 to-teal-300 bg-clip-text text-transparent">Ethni</span>
            <span class="text-white">Stories</span>
        </h1>
        
        <p class="text-2xl md:text-3xl text-emerald-100 max-w-5xl mx-auto mb-16 leading-relaxed">
            Where every thread tells a tale, every grain holds history, and every artisan's hand weaves magic. 
            Discover the heartbeats behind Bangladesh's most treasured crafts.
        </p>
        
        <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
            <div class="bg-white/15 backdrop-blur-sm rounded-2xl px-8 py-4 border border-emerald-300/20">
                <div class="flex items-center space-x-3">
                    <span class="text-2xl">📈</span>
                    <div class="text-left">
                        <div class="text-white font-bold text-lg">50+ Stories</div>
                        <div class="text-emerald-200 text-sm">And counting...</div>
                    </div>
                </div>
            </div>
            <div class="bg-white/15 backdrop-blur-sm rounded-2xl px-8 py-4 border border-emerald-300/20">
                <div class="flex items-center space-x-3">
                    <span class="text-2xl">🎭</span>
                    <div class="text-left">
                        <div class="text-white font-bold text-lg">8 Districts</div>
                        <div class="text-emerald-200 text-sm">Stories covered</div>
                    </div>
                </div>
            </div>
            <div class="bg-white/15 backdrop-blur-sm rounded-2xl px-8 py-4 border border-emerald-300/20">
                <div class="flex items-center space-x-3">
                    <span class="text-2xl">⏱️</span>
                    <div class="text-left">
                        <div class="text-white font-bold text-lg">New Story</div>
                        <div class="text-emerald-200 text-sm">Every Friday</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Story Section -->
<section class="py-20 bg-gradient-to-b from-green-50 to-emerald-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-16">
            <div class="inline-flex items-center space-x-3 bg-emerald-100 rounded-full px-6 py-3 mb-6">
                <span class="text-2xl">🌟</span>
                <span class="text-emerald-800 font-semibold">Featured This Week</span>
            </div>
            <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">Story of the Week</h2>
        </div>
        
        <div class="bg-white rounded-3xl shadow-2xl overflow-hidden hover:shadow-3xl transition-all duration-700">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-0">
                <div class="relative group overflow-hidden">
                    <div class="aspect-[4/3] bg-gradient-to-br from-emerald-200 to-teal-300 flex items-center justify-center">
                        <div class="text-center text-emerald-700">
                            <div class="text-8xl mb-4">👩‍🎨</div>
                            <div class="text-xl font-medium">Featured Image</div>
                            <div class="text-sm opacity-75">Rashida's Workshop</div>
                        </div>
                    </div>
                    <div class="absolute top-4 left-4 bg-emerald-500 text-white px-4 py-2 rounded-full text-sm font-semibold">
                        New Story
                    </div>
                </div>
                
                <div class="p-12">
                    <div class="flex items-center space-x-3 mb-6">
                        <span class="text-3xl">🧵</span>
                        <div>
                            <div class="text-emerald-600 text-sm font-semibold uppercase tracking-wide">Handloom Heritage</div>
                            <div class="text-gray-500 text-sm">December 22, 2024 • 5 min read</div>
                        </div>
                    </div>
                    
                    <h3 class="text-3xl font-bold text-gray-800 mb-6 leading-tight">
                        The Golden Threads of Rashida: Weaving Dreams in Tangail
                    </h3>
                    
                    <p class="text-gray-600 text-lg leading-relaxed mb-8">
                        In the heart of Tangail, where morning mist dances with golden sunlight, 
                        Rashida Begum sits at her ancestral loom. For 30 years, her fingers have 
                        danced across threads, creating sarees that carry the soul of Bengal. 
                        Each pattern tells a story of resilience, tradition, and dreams woven into reality...
                    </p>
                    
                    <div class="flex flex-wrap gap-3 mb-8">
                        <span class="bg-emerald-100 text-emerald-800 px-4 py-2 rounded-full text-sm font-medium">#Tangail</span>
                        <span class="bg-teal-100 text-teal-800 px-4 py-2 rounded-full text-sm font-medium">#Handloom</span>
                        <span class="bg-green-100 text-green-800 px-4 py-2 rounded-full text-sm font-medium">#WomenArtisan</span>
                    </div>
                    
                    <button class="inline-flex items-center space-x-3 bg-gradient-to-r from-emerald-600 to-teal-600 text-white px-8 py-4 rounded-2xl font-semibold text-lg hover:from-emerald-700 hover:to-teal-700 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                        <span>Read Full Story</span>
                        <span class="text-xl">📖</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Story Categories -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-6">Explore by Categories</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Dive deep into different aspects of Bangladesh's rich cultural tapestry
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Artisan Stories -->
            <div class="group cursor-pointer">
                <div class="bg-gradient-to-br from-emerald-500 to-teal-600 rounded-3xl p-8 text-white text-center hover:scale-105 transition-all duration-500 shadow-xl hover:shadow-2xl">
                    <div class="text-5xl mb-6 group-hover:scale-110 transition-transform duration-300">👥</div>
                    <h3 class="text-2xl font-bold mb-4">Artisan Chronicles</h3>
                    <p class="text-emerald-100 mb-6">Meet the hands behind the magic</p>
                    <div class="bg-white/20 rounded-full px-4 py-2 text-sm font-semibold">
                        12 Stories
                    </div>
                </div>
            </div>
            
            <!-- Craft Techniques -->
            <div class="group cursor-pointer">
                <div class="bg-gradient-to-br from-teal-500 to-green-600 rounded-3xl p-8 text-white text-center hover:scale-105 transition-all duration-500 shadow-xl hover:shadow-2xl">
                    <div class="text-5xl mb-6 group-hover:scale-110 transition-transform duration-300">🎨</div>
                    <h3 class="text-2xl font-bold mb-4">Craft Secrets</h3>
                    <p class="text-teal-100 mb-6">Ancient techniques, modern relevance</p>
                    <div class="bg-white/20 rounded-full px-4 py-2 text-sm font-semibold">
                        15 Stories
                    </div>
                </div>
            </div>
            
            <!-- Regional Heritage -->
            <div class="group cursor-pointer">
                <div class="bg-gradient-to-br from-green-500 to-lime-600 rounded-3xl p-8 text-white text-center hover:scale-105 transition-all duration-500 shadow-xl hover:shadow-2xl">
                    <div class="text-5xl mb-6 group-hover:scale-110 transition-transform duration-300">🏛️</div>
                    <h3 class="text-2xl font-bold mb-4">Regional Tales</h3>
                    <p class="text-green-100 mb-6">Stories from every corner of Bengal</p>
                    <div class="bg-white/20 rounded-full px-4 py-2 text-sm font-semibold">
                        18 Stories
                    </div>
                </div>
            </div>
            
            <!-- Behind the Scenes -->
            <div class="group cursor-pointer">
                <div class="bg-gradient-to-br from-lime-500 to-emerald-600 rounded-3xl p-8 text-white text-center hover:scale-105 transition-all duration-500 shadow-xl hover:shadow-2xl">
                    <div class="text-5xl mb-6 group-hover:scale-110 transition-transform duration-300">🎬</div>
                    <h3 class="text-2xl font-bold mb-4">Behind Scenes</h3>
                    <p class="text-lime-100 mb-6">The journey from craft to cart</p>
                    <div class="bg-white/20 rounded-full px-4 py-2 text-sm font-semibold">
                        8 Stories
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Recent Stories Grid -->
<section class="py-20 bg-gradient-to-b from-green-50 to-emerald-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-6">Recent Stories</h2>
            <p class="text-xl text-gray-600">Fresh tales from our vibrant community</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
            
            <!-- Story 1 -->
            <article class="bg-white rounded-3xl shadow-xl hover:shadow-2xl transition-all duration-500 overflow-hidden group hover:-translate-y-2">
                <div class="relative">
                    <div class="aspect-[4/3] bg-gradient-to-br from-teal-200 to-emerald-300 flex items-center justify-center">
                        <div class="text-center text-teal-700">
                            <div class="text-6xl mb-2">🏺</div>
                            <div class="text-lg font-medium">Clay Magic</div>
                        </div>
                    </div>
                    <div class="absolute top-4 right-4 bg-teal-500 text-white px-3 py-1 rounded-full text-xs font-semibold">
                        3 days ago
                    </div>
                </div>
                <div class="p-8">
                    <div class="flex items-center space-x-2 mb-4">
                        <span class="text-xl">🏺</span>
                        <span class="text-teal-600 text-sm font-semibold uppercase tracking-wide">Pottery</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4 group-hover:text-teal-600 transition-colors">
                        The Potter's Dawn: Manik's Clay Dreams
                    </h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Before sunrise paints Dhamrai's sky, Manik is already shaping clay into poetry. His pottery wheel spins stories of generations...
                    </p>
                    <div class="flex items-center justify-between">
                        <div class="flex space-x-2">
                            <span class="bg-teal-100 text-teal-800 px-3 py-1 rounded-full text-xs">#Dhamrai</span>
                            <span class="bg-emerald-100 text-emerald-800 px-3 py-1 rounded-full text-xs">#Pottery</span>
                        </div>
                        <span class="text-sm text-gray-500">4 min read</span>
                    </div>
                </div>
            </article>

            <!-- Story 2 -->
            <article class="bg-white rounded-3xl shadow-xl hover:shadow-2xl transition-all duration-500 overflow-hidden group hover:-translate-y-2">
                <div class="relative">
                    <div class="aspect-[4/3] bg-gradient-to-br from-green-200 to-lime-300 flex items-center justify-center">
                        <div class="text-center text-green-700">
                            <div class="text-6xl mb-2">🌾</div>
                            <div class="text-lg font-medium">Golden Harvest</div>
                        </div>
                    </div>
                    <div class="absolute top-4 right-4 bg-green-500 text-white px-3 py-1 rounded-full text-xs font-semibold">
                        1 week ago
                    </div>
                </div>
                <div class="p-8">
                    <div class="flex items-center space-x-2 mb-4">
                        <span class="text-xl">🌾</span>
                        <span class="text-green-600 text-sm font-semibold uppercase tracking-wide">Agriculture</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4 group-hover:text-green-600 transition-colors">
                        Seeds of Tradition: Organic Farming Renaissance
                    </h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        In Bogura's fertile fields, Abdur Rahman is revolutionizing farming by going back to his grandfather's organic methods...
                    </p>
                    <div class="flex items-center justify-between">
                        <div class="flex space-x-2">
                            <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-xs">#Bogura</span>
                            <span class="bg-lime-100 text-lime-800 px-3 py-1 rounded-full text-xs">#Organic</span>
                        </div>
                        <span class="text-sm text-gray-500">6 min read</span>
                    </div>
                </div>
            </article>

            <!-- Story 3 -->
            <article class="bg-white rounded-3xl shadow-xl hover:shadow-2xl transition-all duration-500 overflow-hidden group hover:-translate-y-2">
                <div class="relative">
                    <div class="aspect-[4/3] bg-gradient-to-br from-emerald-200 to-teal-300 flex items-center justify-center">
                        <div class="text-center text-emerald-700">
                            <div class="text-6xl mb-2">🧺</div>
                            <div class="text-lg font-medium">Woven Dreams</div>
                        </div>
                    </div>
                    <div class="absolute top-4 right-4 bg-emerald-500 text-white px-3 py-1 rounded-full text-xs font-semibold">
                        2 weeks ago
                    </div>
                </div>
                <div class="p-8">
                    <div class="flex items-center space-x-2 mb-4">
                        <span class="text-xl">🧺</span>
                        <span class="text-emerald-600 text-sm font-semibold uppercase tracking-wide">Handicrafts</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4 group-hover:text-emerald-600 transition-colors">
                        Basket Weaving: Art That Carries Life
                    </h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Fatima's fingers dance through bamboo strips, creating not just baskets but vessels of heritage that carry forward centuries...
                    </p>
                    <div class="flex items-center justify-between">
                        <div class="flex space-x-2">
                            <span class="bg-emerald-100 text-emerald-800 px-3 py-1 rounded-full text-xs">#Sylhet</span>
                            <span class="bg-teal-100 text-teal-800 px-3 py-1 rounded-full text-xs">#Bamboo</span>
                        </div>
                        <span class="text-sm text-gray-500">5 min read</span>
                    </div>
                </div>
            </article>
        </div>
        
        <div class="text-center mt-16">
            <button class="inline-flex items-center space-x-3 bg-gradient-to-r from-emerald-600 to-teal-600 text-white px-10 py-4 rounded-2xl font-semibold text-lg hover:from-emerald-700 hover:to-teal-700 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                <span>Load More Stories</span>
                <span class="text-xl">📚</span>
            </button>
        </div>
    </div>
</section>

<!-- Newsletter Signup -->
<section class="py-20 bg-gradient-to-r from-emerald-800 to-teal-900 relative overflow-hidden">
    <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="%23ffffff" fill-opacity="0.05" fill-rule="evenodd"%3E%3Cpath d="M30 30c0-8.3-6.7-15-15-15s-15 6.7-15 15 6.7 15 15 15 15-6.7 15-15zm15 0c0-8.3-6.7-15-15-15s-15 6.7-15 15 6.7 15 15 15 15-6.7 15-15z"/%3E%3C/g%3E%3C/svg%3E')] opacity-30"></div>
    
    <div class="absolute top-10 right-10 w-20 h-20 text-emerald-400/20 animate-pulse">📬</div>
    <div class="absolute bottom-10 left-10 w-24 h-24 text-teal-400/20 animate-bounce delay-300">✉️</div>
    
    <div class="relative max-w-4xl mx-auto px-4 text-center">
        <div class="text-6xl mb-8">📫</div>
        <h2 class="text-4xl md:text-5xl font-bold text-white mb-8">
            Never Miss a Story
        </h2>
        <p class="text-xl text-emerald-100 mb-12 leading-relaxed">
            Get fresh tales from Bangladesh's heartlands delivered to your inbox every Friday. 
            Stories that inspire, educate, and connect you to authentic culture.
        </p>
        
        <div class="bg-white/10 backdrop-blur-sm rounded-3xl p-8 border border-emerald-300/30 max-w-2xl mx-auto">
            <div class="flex flex-col sm:flex-row gap-4">
                <input 
                    type="email" 
                    placeholder="Enter your email for weekly stories..."
                    class="flex-1 px-6 py-4 rounded-2xl bg-white/90 text-gray-800 font-medium placeholder-gray-500 focus:outline-none focus:ring-4 focus:ring-emerald-300/50 transition-all"
                >
                <button class="bg-gradient-to-r from-lime-500 to-emerald-600 text-white px-8 py-4 rounded-2xl font-bold hover:from-lime-600 hover:to-emerald-700 transition-all duration-300 transform hover:scale-105 shadow-lg whitespace-nowrap">
                    Join Story Circle 📖
                </button>
            </div>
            <p class="text-emerald-200 text-sm mt-4">
                ✨ Join 5,000+ story lovers • Unsubscribe anytime • No spam, just stories
            </p>
        </div>
    </div>
</section>

<!-- Story Archive -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-6">Story Archive</h2>
            <p class="text-xl text-gray-600">Browse stories by month and discover hidden gems</p>
        </div>
        
        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-6">
            <div class="bg-emerald-50 border-2 border-emerald-200 rounded-2xl p-6 text-center hover:bg-emerald-100 hover:border-emerald-300 transition-all duration-300 cursor-pointer group">
                <div class="text-2xl mb-2 group-hover:scale-110 transition-transform">📅</div>
                <div class="font-bold text-emerald-800 mb-1">Dec 2024</div>
                <div class="text-sm text-emerald-600">4 Stories</div>
            </div>
            
            <div class="bg-teal-50 border-2 border-teal-200 rounded-2xl p-6 text-center hover:bg-teal-100 hover:border-teal-300 transition-all duration-300 cursor-pointer group">
                <div class="text-2xl mb-2 group-hover:scale-110 transition-transform">📅</div>
                <div class="font-bold text-teal-800 mb-1">Nov 2024</div>
                <div class="text-sm text-teal-600">5 Stories</div>
            </div>
            
            <div class="bg-green-50 border-2 border-green-200 rounded-2xl p-6 text-center hover:bg-green-100 hover:border-green-300 transition-all duration-300 cursor-pointer group">
                <div class="text-2xl mb-2 group-hover:scale-110 transition-transform">📅</div>
                <div class="font-bold text-green-800 mb-1">Oct 2024</div>
                <div class="text-sm text-green-600">4 Stories</div>
            </div>
            
            <div class="bg-lime-50 border-2 border-lime-200 rounded-2xl p-6 text-center hover:bg-lime-100 hover:border-lime-300 transition-all duration-300 cursor-pointer group">
                <div class="text-2xl mb-2 group-hover:scale-110 transition-transform">📅</div>
                <div class="font-bold text-lime-800 mb-1">Sep 2024</div>
                <div class="text-sm text-lime-600">6 Stories</div>
            </div>
            
            <div class="bg-emerald-50 border-2 border-emerald-200 rounded-2xl p-6 text-center hover:bg-emerald-100 hover:border-emerald-300 transition-all duration-300 cursor-pointer group">
                <div class="text-2xl mb-2 group-hover:scale-110 transition-transform">📅</div>
                <div class="font-bold text-emerald-800 mb-1">Aug 2024</div>
                <div class="text-sm text-emerald-600">5 Stories</div>
            </div>
            
            <div class="bg-teal-50 border-2 border-teal-200 rounded-2xl p-6 text-center hover:bg-teal-100 hover:border-teal-300 transition-all duration-300 cursor-pointer group">
                <div class="text-2xl mb-2 group-hover:scale-110 transition-transform">📅</div>
                <div class="font-bold text-teal-800 mb-1">Jul 2024</div>
                <div class="text-sm text-teal-600">4 Stories</div>
            </div>
        </div>
    </div>
</section>
@endsection