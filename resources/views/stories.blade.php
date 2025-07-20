@extends('layouts.app')

@section('title', 'EthnicArt | Stories from the Heart')
<link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">

@section('content')

<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-emerald-50 via-green-50 to-teal-50 py-20 overflow-hidden">
    <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23065f46" fill-opacity="0.03"%3E%3Ccircle cx="30" cy="30" r="4"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-40"></div>
    <div class="container mx-auto px-4 lg:px-6">
        <div class="text-center">
            <div class="inline-flex items-center justify-center w-20 h-20 bg-emerald-100 rounded-full mb-6">
                <span class="text-4xl">📜</span>
            </div>
            <h1 class="text-5xl md:text-6xl font-bold text-emerald-900 mb-6 leading-tight">
                Stories from the <span class="text-emerald-600">Heart</span>
            </h1>
            <p class="text-xl text-gray-700 max-w-3xl mx-auto leading-relaxed">
                Discover the rich tapestry of Bengali culture through authentic stories of tradition, craftsmanship, and heritage. From earth to you - every product has a story worth telling.
            </p>
            <div class="mt-8 flex justify-center">
                <div class="h-1 w-32 bg-gradient-to-r from-emerald-400 to-teal-400 rounded-full"></div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Story Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4 lg:px-6">
        <div class="bg-gradient-to-r from-emerald-600 to-teal-600 rounded-3xl overflow-hidden shadow-2xl">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-0">
                <div class="relative">
                    <img class="w-full h-96 lg:h-full object-cover" 
                         src="{{ asset('images/jamdani.jpeg') }}" 
                         alt="Featured Story">
                    <div class="absolute top-4 left-4 bg-white text-emerald-600 px-4 py-2 rounded-full text-sm font-bold">
                        ✨ Featured Story
                    </div>
                </div>
                <div class="p-8 lg:p-12 text-white flex flex-col justify-center">
                    <h2 class="text-3xl lg:text-4xl font-bold mb-4">The Legacy of Jamdani</h2>
                    <p class="text-emerald-100 text-lg mb-6 leading-relaxed">
                        "আমার দাদিমা আমাকে বলেছিলেন, জামদানি শুধু একটা শাড়ি নয়, এটা আমাদের ইতিহাস।" - Afsana Begum shares her journey of keeping the 300-year-old art alive.
                    </p>
                    <a href="#" class="inline-flex items-center text-white hover:text-emerald-200 font-semibold transition-colors duration-300">
                        Read Full Story
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stories Categories -->
<section class="py-16 bg-gradient-to-br from-gray-50 to-emerald-50">
    <div class="container mx-auto px-4 lg:px-6">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-emerald-900 mb-4">Explore by Category</h2>
            <p class="text-gray-600 text-lg">Choose what inspires you most</p>
        </div>
        
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-16">
            <button class="category-btn active bg-emerald-600 text-white px-6 py-3 rounded-full font-semibold transition-all duration-300 hover:bg-emerald-700 hover:shadow-lg" data-category="all">
                All Stories
            </button>
            <button class="category-btn bg-white text-emerald-600 border-2 border-emerald-200 px-6 py-3 rounded-full font-semibold transition-all duration-300 hover:bg-emerald-50" data-category="artisan">
                🧑‍🎨 Artisan Diaries
            </button>
            <button class="category-btn bg-white text-emerald-600 border-2 border-emerald-200 px-6 py-3 rounded-full font-semibold transition-all duration-300 hover:bg-emerald-50" data-category="culture">
                🏛️ Cultural Spotlight
            </button>
            <button class="category-btn bg-white text-emerald-600 border-2 border-emerald-200 px-6 py-3 rounded-full font-semibold transition-all duration-300 hover:bg-emerald-50" data-category="customer">
                ❤️ Customer Stories
            </button>
        </div>
    </div>
</section>

<!-- Stories Grid -->
<section class="pb-20 bg-gradient-to-br from-gray-50 to-emerald-50">
    <div class="container mx-auto px-4 lg:px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="stories-grid">
            
            <!-- Story 1 - Artisan Diary -->
            <article class="story-card bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden border border-gray-100 group" data-category="artisan">
                <div class="relative overflow-hidden">
                    <img class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-700" 
                         src="{{ asset('images/mango_garden.png') }}" 
                         alt="Naogaon Mango Garden">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="absolute top-4 left-4 bg-emerald-500 text-white px-3 py-1 rounded-full text-sm font-medium">
                        🥭 Artisan Diary
                    </div>
                    <div class="absolute bottom-4 right-4 bg-white/90 text-emerald-600 px-3 py-1 rounded-full text-sm font-medium opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        5 min read
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center text-sm text-emerald-600 mb-3">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                        </svg>
                        December 15, 2024
                    </div>
                    <h3 class="text-xl font-bold text-emerald-900 mb-3 group-hover:text-emerald-600 transition-colors duration-300">
                        A Day in Naogaon's Mango Garden
                    </h3>
                    <p class="text-gray-700 mb-4 leading-relaxed">
                        "ভোর ৫টায় উঠে আম বাগানে যাই। প্রতিটা আমের গাছ আমার সন্তানের মতো।" Abdul Karim takes us through his daily routine in Bangladesh's mango capital.
                    </p>
                    <a href="#" class="inline-flex items-center text-emerald-600 font-semibold hover:text-emerald-700 transition-colors duration-300">
                        Read More
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            </article>

            <!-- Story 2 - Cultural Spotlight -->
            <article class="story-card bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden border border-gray-100 group" data-category="culture">
                <div class="relative overflow-hidden">
                    <img class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-700" 
                         src="{{ asset('images/jamdani_heritage.jpg') }}" 
                         alt="Jamdani Heritage">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="absolute top-4 left-4 bg-purple-500 text-white px-3 py-1 rounded-full text-sm font-medium">
                        🏛️ Cultural Spotlight
                    </div>
                    <div class="absolute bottom-4 right-4 bg-white/90 text-purple-600 px-3 py-1 rounded-full text-sm font-medium opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        8 min read
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center text-sm text-purple-600 mb-3">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                        </svg>
                        December 10, 2024
                    </div>
                    <h3 class="text-xl font-bold text-emerald-900 mb-3 group-hover:text-emerald-600 transition-colors duration-300">
                        Why Handmade Jamdani is Heritage, Not Trend
                    </h3>
                    <p class="text-gray-700 mb-4 leading-relaxed">
                        UNESCO recognized it as Intangible Cultural Heritage. But what makes Jamdani more than just beautiful fabric? Discover the 300-year legacy woven into every thread.
                    </p>
                    <a href="#" class="inline-flex items-center text-purple-600 font-semibold hover:text-purple-700 transition-colors duration-300">
                        Read More
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            </article>

            <!-- Story 3 - Customer Story -->
            <article class="story-card bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden border border-gray-100 group" data-category="customer">
                <div class="relative overflow-hidden">
                    <img class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-700" 
                         src="{{ asset('images/swals.jpg') }}" 
                         alt="Customer Story">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="absolute top-4 left-4 bg-pink-500 text-white px-3 py-1 rounded-full text-sm font-medium">
                        ❤️ Customer Story
                    </div>
                    <div class="absolute bottom-4 right-4 bg-white/90 text-pink-600 px-3 py-1 rounded-full text-sm font-medium opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        3 min read
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center text-sm text-pink-600 mb-3">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                        </svg>
                        December 8, 2024
                    </div>
                    <h3 class="text-xl font-bold text-emerald-900 mb-3 group-hover:text-emerald-600 transition-colors duration-300">
                        Why Tanjina Gifts Handmade Shawls Every Eid
                    </h3>
                    <p class="text-gray-700 mb-4 leading-relaxed">
                        "আমার মা যখন প্রথম হাতে বোনা শাল পেলেন, তার চোখে জল এসে গিয়েছিল।" A heartwarming tale of tradition, love, and meaningful gifting.
                    </p>
                    <a href="#" class="inline-flex items-center text-pink-600 font-semibold hover:text-pink-700 transition-colors duration-300">
                        Read More
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            </article>

            <!-- Story 4 - Artisan Diary -->
            <article class="story-card bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden border border-gray-100 group" data-category="artisan">
                <div class="relative overflow-hidden">
                    <img class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-700" 
                         src="{{ asset('images/aklima_apa.png') }}" 
                         alt="Clay Artist Story">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="absolute top-4 left-4 bg-emerald-500 text-white px-3 py-1 rounded-full text-sm font-medium">
                        🏺 Artisan Diary
                    </div>
                    <div class="absolute bottom-4 right-4 bg-white/90 text-emerald-600 px-3 py-1 rounded-full text-sm font-medium opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        6 min read
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center text-sm text-emerald-600 mb-3">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                        </svg>
                        December 5, 2024
                    </div>
                    <h3 class="text-xl font-bold text-emerald-900 mb-3 group-hover:text-emerald-600 transition-colors duration-300">
                        Meet Aklima Apa: Clay Artisan from Jamalpur
                    </h3>
                    <p class="text-gray-700 mb-4 leading-relaxed">
                        "মাটি দিয়ে যা কিছু বানাই, সবেতেই আমার মনের ভালোবাসা মিশে থাকে।" Follow Aklima's journey from a homemaker to Bangladesh's celebrated pottery artist.
                    </p>
                    <a href="#" class="inline-flex items-center text-emerald-600 font-semibold hover:text-emerald-700 transition-colors duration-300">
                        Read More
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            </article>

            <!-- Story 5 - Cultural Spotlight -->
            <article class="story-card bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden border border-gray-100 group" data-category="culture">
                <div class="relative overflow-hidden">
                    <img class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-700" 
                         src="{{ asset('images/gorurGari.jpg') }}" 
                         alt="Bullock Cart Tradition">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="absolute top-4 left-4 bg-purple-500 text-white px-3 py-1 rounded-full text-sm font-medium">
                        🐂 Cultural Spotlight
                    </div>
                    <div class="absolute bottom-4 right-4 bg-white/90 text-purple-600 px-3 py-1 rounded-full text-sm font-medium opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        7 min read
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center text-sm text-purple-600 mb-3">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                        </svg>
                        December 1, 2024
                    </div>
                    <h3 class="text-xl font-bold text-emerald-900 mb-3 group-hover:text-emerald-600 transition-colors duration-300">
                        গরুর গাড়ির ঐতিহ্য — গ্রাম বাংলার চিরায়ত চিত্র
                    </h3>
                    <p class="text-gray-700 mb-4 leading-relaxed">
                        কংক্রিটের জঙ্গলে হারিয়ে যাওয়া এক ঐতিহ্যের গল্প। কীভাবে গরুর গাড়ি ছিল আমাদের পূর্বপুরুষদের জীবনযাত্রার অবিচ্ছেদ্য অংশ।
                    </p>
                    <a href="#" class="inline-flex items-center text-purple-600 font-semibold hover:text-purple-700 transition-colors duration-300">
                        Read More
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            </article>

            <!-- Story 6 - Customer Story -->
            <article class="story-card bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden border border-gray-100 group" data-category="customer">
                <div class="relative overflow-hidden">
                    <img class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-700" 
                         src="{{ asset('images/ethnic_rug.jpg') }}" 
                         alt="Home Decor Story">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="absolute top-4 left-4 bg-pink-500 text-white px-3 py-1 rounded-full text-sm font-medium">
                        🏠 Customer Story
                    </div>
                    <div class="absolute bottom-4 right-4 bg-white/90 text-pink-600 px-3 py-1 rounded-full text-sm font-medium opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        4 min read
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center text-sm text-pink-600 mb-3">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                        </svg>
                        November 28, 2024
                    </div>
                    <h3 class="text-xl font-bold text-emerald-900 mb-3 group-hover:text-emerald-600 transition-colors duration-300">
                        How My First Ethnic Rug Changed My Home
                    </h3>
                    <p class="text-gray-700 mb-4 leading-relaxed">
                        "I never realized how much character a single handwoven piece could add to my living space." Sarah's transformation story from modern minimalist to cultural maximalist.
                    </p>
                    <a href="#" class="inline-flex items-center text-pink-600 font-semibold hover:text-pink-700 transition-colors duration-300">
                        Read More
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            </article>

        </div>

        <!-- Load More Button -->
        <div class="text-center mt-12">
            <button class="bg-emerald-600 text-white px-8 py-4 rounded-full font-semibold hover:bg-emerald-700 transition-colors duration-300 shadow-lg hover:shadow-xl">
                Load More Stories
            </button>
        </div>
    </div>
</section>

<!-- Newsletter Section -->
<section class="py-20 bg-gradient-to-br from-emerald-900 to-teal-800 text-white">
    <div class="container mx-auto px-4 lg:px-6">
        <div class="text-center">
            <h2 class="text-4xl font-bold mb-6">Never Miss a Story</h2>
            <p class="text-xl text-emerald-100 mb-8 max-w-2xl mx-auto">
                Subscribe to our newsletter and get the latest stories, cultural insights, and artisan features delivered to your inbox.
            </p>
            <form class="max-w-md mx-auto flex flex-col sm:flex-row gap-4">
                <input type="email" placeholder="Enter your email" 
                       class="flex-1 px-6 py-4 rounded-full text-gray-900 focus:outline-none focus:ring-4 focus:ring-emerald-300">
                <button type="submit" 
                        class="bg-emerald-500 text-white px-8 py-4 rounded-full font-semibold hover:bg-emerald-400 transition-colors duration-300 shadow-lg">
                    Subscribe
                </button>
            </form>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Category filtering functionality
    const categoryButtons = document.querySelectorAll('.category-btn');
    const storyCards = document.querySelectorAll('.story-card');
    
    categoryButtons.forEach(button => {
        button.addEventListener('click', function() {
            const category = this.getAttribute('data-category');
            
            // Update active button
            categoryButtons.forEach(btn => {
                btn.classList.remove('active', 'bg-emerald-600', 'text-white');
                btn.classList.add('bg-white', 'text-emerald-600', 'border-2', 'border-emerald-200');
            });
            
            this.classList.add('active', 'bg-emerald-600', 'text-white');
            this.classList.remove('bg-white', 'text-emerald-600', 'border-2', 'border-emerald-200');
            
            // Filter stories
            storyCards.forEach(card => {
                if (category === 'all' || card.getAttribute('data-category') === category) {
                    card.style.display = 'block';
                    // Add fade-in animation
                                            card.style.opacity = '0';
                    setTimeout(() => {
                        card.style.opacity = '1';
                        card.style.transform = 'translateY(0)';
                    }, 100);
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });
    
    // Smooth scroll for anchor links
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
    
    // Add loading animation for story cards
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);
    
    // Initially hide cards for animation
    storyCards.forEach(card => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(20px)';
        card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(card);
    });
    
    // Newsletter form submission
    const newsletterForm = document.querySelector('form');
    if (newsletterForm) {
        newsletterForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const email = this.querySelector('input[type="email"]').value;
            
            if (email) {
                // Here you would typically send the email to your backend
                alert('ধন্যবাদ! আপনার সাবস্ক্রিপশন সফল হয়েছে।');
                this.querySelector('input[type="email"]').value = '';
            }
        });
    }
    
    // Load more functionality
    const loadMoreBtn = document.querySelector('button:contains("Load More Stories")');
    if (loadMoreBtn) {
        loadMoreBtn.addEventListener('click', function() {
            // Here you would typically load more stories via AJAX
            this.textContent = 'Loading...';
            this.disabled = true;
            
            setTimeout(() => {
                this.textContent = 'Load More Stories';
                this.disabled = false;
                // Add your AJAX logic here
            }, 2000);
        });
    }
});

// CSS for better interactions
const style = document.createElement('style');
style.textContent = `
    .category-btn {
        transition: all 0.3s ease;
    }
    
    .category-btn:hover {
        transform: translateY(-2px);
    }
    
    .story-card {
        transition: all 0.5s ease;
    }
    
    .story-card:hover {
        transform: translateY(-8px);
    }
    
    .story-card img {
        transition: transform 0.7s ease;
    }
    
    .group:hover .group-hover\\:scale-105 {
        transform: scale(1.05);
    }
    
    .group:hover .group-hover\\:opacity-100 {
        opacity: 1;
    }
    
    .group:hover .group-hover\\:text-emerald-600 {
        color: #059669;
    }
    
    /* Custom scrollbar for better UX */
    ::-webkit-scrollbar {
        width: 8px;
    }
    
    ::-webkit-scrollbar-track {
        background: #f1f5f9;
    }
    
    ::-webkit-scrollbar-thumb {
        background: #059669;
        border-radius: 4px;
    }
    
    ::-webkit-scrollbar-thumb:hover {
        background: #047857;
    }
    
    /* Loading animation */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    .fade-in-up {
        animation: fadeInUp 0.6s ease forwards;
    }
    
    /* Responsive improvements */
    @media (max-width: 768px) {
        .grid-cols-2.md\\:grid-cols-4 {
            grid-template-columns: 1fr;
            gap: 0.5rem;
        }
        
        .category-btn {
            font-size: 0.875rem;
            padding: 0.75rem 1.5rem;
        }
        
        .text-5xl.md\\:text-6xl {
            font-size: 2.5rem;
        }
        
        .story-card .p-6 {
            padding: 1.25rem;
        }
    }
    
    /* Focus states for accessibility */
    .category-btn:focus,
    button:focus,
    input:focus {
        outline: 2px solid #059669;
        outline-offset: 2px;
    }
    
    /* Print styles */
    @media print {
        .story-card {
            break-inside: avoid;
            margin-bottom: 1rem;
        }
        
        .bg-gradient-to-br,
        .bg-gradient-to-r {
            background: #f9fafb !important;
            color: #111827 !important;
        }
    }
`;
document.head.appendChild(style);
</script>

@endsection