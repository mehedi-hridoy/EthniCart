@extends('layouts.app')

@section('title', 'EthniCart | About Us')
<link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">

@section('content')

<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-emerald-50 via-green-50 to-teal-50 py-20 overflow-hidden">
    <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23065f46" fill-opacity="0.03"%3E%3Ccircle cx="30" cy="30" r="4"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-40"></div>
    <div class="container mx-auto px-4 lg:px-6">
        <div class="text-center">
            <div class="inline-flex items-center justify-center w-20 h-20 bg-emerald-100 rounded-full mb-6">
                <span class="text-4xl">🌿</span>
            </div>
            <h1 class="text-5xl md:text-6xl font-bold text-emerald-900 mb-6 leading-tight">
                About <span class="text-emerald-600">EthniCart</span>
            </h1>
            <p class="text-xl text-gray-700 max-w-3xl mx-auto leading-relaxed">
                Bridging tradition with innovation, connecting authentic Bengali heritage with the world through sustainable commerce and meaningful relationships.
            </p>
            <div class="mt-8 flex justify-center">
                <div class="h-1 w-32 bg-gradient-to-r from-emerald-400 to-teal-400 rounded-full"></div>
            </div>
        </div>
    </div>
</section>

<!-- Our Story Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4 lg:px-6">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-emerald-900 mb-6">Our Story & Vision</h2>
                <div class="h-1 w-24 bg-gradient-to-r from-emerald-400 to-teal-400 rounded-full mx-auto mb-8"></div>
            </div>
            
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                <div class="space-y-6">
                    <div class="bg-gradient-to-br from-emerald-50 to-teal-50 rounded-2xl p-8 border border-emerald-100">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-emerald-500 rounded-full flex items-center justify-center mr-4">
                                <span class="text-white text-xl">🎯</span>
                            </div>
                            <h3 class="text-2xl font-bold text-emerald-900">Our Mission</h3>
                        </div>
                        <p class="text-gray-700 leading-relaxed">
                            EthniCart exists to preserve and celebrate Bangladesh's rich cultural heritage while empowering local artisans and farmers. We believe that every handcrafted product tells a story of tradition, skill, and passion that deserves to reach every corner of the world.
                        </p>
                    </div>
                    
                    <div class="bg-gradient-to-br from-teal-50 to-cyan-50 rounded-2xl p-8 border border-teal-100">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-teal-500 rounded-full flex items-center justify-center mr-4">
                                <span class="text-white text-xl">👁️</span>
                            </div>
                            <h3 class="text-2xl font-bold text-teal-900">Our Vision</h3>
                        </div>
                        <p class="text-gray-700 leading-relaxed">
                            To become the global bridge connecting authentic Bengali craftsmanship with conscious consumers worldwide, creating sustainable livelihoods for artisans while preserving cultural traditions for future generations.
                        </p>
                    </div>
                </div>
                
                <div class="space-y-6">
                    <div class="bg-white rounded-2xl shadow-lg p-8 border border-gray-100 hover:shadow-xl transition-shadow duration-300">
                        <h3 class="text-2xl font-bold text-emerald-900 mb-4">Why Choose EthniCart?</h3>
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <div class="w-6 h-6 bg-emerald-500 rounded-full flex items-center justify-center mr-4 mt-1 flex-shrink-0">
                                    <span class="text-white text-sm">✓</span>
                                </div>
                                <p class="text-gray-700"><strong class="text-emerald-700">Authentic Heritage:</strong> Every product carries the genuine essence of Bengali craftsmanship, verified directly from source.</p>
                            </div>
                            <div class="flex items-start">
                                <div class="w-6 h-6 bg-emerald-500 rounded-full flex items-center justify-center mr-4 mt-1 flex-shrink-0">
                                    <span class="text-white text-sm">✓</span>
                                </div>
                                <p class="text-gray-700"><strong class="text-emerald-700">Direct Impact:</strong> Your purchase directly supports rural artisans and farmers, ensuring fair compensation and sustainable livelihoods.</p>
                            </div>
                            <div class="flex items-start">
                                <div class="w-6 h-6 bg-emerald-500 rounded-full flex items-center justify-center mr-4 mt-1 flex-shrink-0">
                                    <span class="text-white text-sm">✓</span>
                                </div>
                                <p class="text-gray-700"><strong class="text-emerald-700">Quality Assurance:</strong> Rigorous quality control ensures you receive products that meet international standards while maintaining traditional authenticity.</p>
                            </div>
                            <div class="flex items-start">
                                <div class="w-6 h-6 bg-emerald-500 rounded-full flex items-center justify-center mr-4 mt-1 flex-shrink-0">
                                    <span class="text-white text-sm">✓</span>
                                </div>
                                <p class="text-gray-700"><strong class="text-emerald-700">Cultural Preservation:</strong> By choosing EthniCart, you become part of a movement to preserve centuries-old traditions and craftsmanship techniques.</p>
                            </div>
                            <div class="flex items-start">
                                <div class="w-6 h-6 bg-emerald-500 rounded-full flex items-center justify-center mr-4 mt-1 flex-shrink-0">
                                    <span class="text-white text-sm">✓</span>
                                </div>
                                <p class="text-gray-700"><strong class="text-emerald-700">Sustainable Commerce:</strong> Our eco-friendly practices and ethical sourcing contribute to environmental conservation and community development.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-gradient-to-r from-emerald-500 to-teal-500 rounded-2xl p-8 text-white">
                        <h3 class="text-2xl font-bold mb-4">Our Commitment</h3>
                        <p class="leading-relaxed">
                            EthniCart is more than an e-commerce platform; it's a cultural bridge, an economic empowerment tool, and a preservation initiative. We're committed to authentic storytelling, fair trade practices, and creating lasting relationships between makers and consumers across the globe.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Meet Our Team Section -->
<section class="py-20 bg-gradient-to-br from-gray-50 to-blue-50">
    <div class="container mx-auto px-4 lg:px-6">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-6">Meet Our Team</h2>
            <p class="text-xl text-gray-700 max-w-3xl mx-auto leading-relaxed">
                The passionate minds behind EthniCart, dedicated to bridging tradition with technology and creating meaningful impact through innovation.
            </p>
            <div class="h-1 w-32 bg-gradient-to-r from-blue-400 to-teal-400 rounded-full mx-auto mt-8"></div>
        </div>

        <!-- Course Instructor -->
        <div class="mb-16 lg:mb-24">
            <div class="max-w-6xl mx-auto">
                <div class="bg-white rounded-3xl shadow-2xl border border-gray-100 overflow-hidden hover:shadow-3xl transition-all duration-500">
                    <div class="p-8 sm:p-12 lg:p-16">
                        <div class="flex flex-col lg:flex-row items-center gap-8 lg:gap-16">
                            <div class="flex-shrink-0">
                                <div class="relative">
                                    <div class="w-40 h-40 sm:w-48 sm:h-48 lg:w-56 lg:h-56 rounded-full overflow-hidden shadow-2xl hover:scale-105 transition-transform duration-500">
                                        <img src="{{ asset('images/team/zion.jpg') }}" alt="Md. Mezbaul Islam Zion" class="w-full h-full object-cover">
                                    </div>
                                    <div class="absolute -bottom-4 -right-4 w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-full flex items-center justify-center shadow-lg">
                                        <span class="text-white text-2xl">👨‍🏫</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="flex-1 text-center lg:text-left">
                                <div class="inline-block mb-4">
                                    <span class="text-xs sm:text-sm font-semibold text-blue-600 uppercase tracking-wider px-4 py-2 bg-blue-50 rounded-full border border-blue-200">Course Instructor</span>
                                </div>
                                <h3 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900 mb-4 leading-tight">
                                    Md. Mezbaul Islam <span class="text-blue-600">Zion</span>
                                </h3>
                                <p class="text-xl sm:text-2xl text-blue-600 font-semibold mb-4">Web Engineering Course • CSE415</p>
                                <div class="text-gray-600 space-y-2 text-lg mb-6">
                                    <p>Lecturer, Department of Computer Science & Engineering</p>
                                    <p class="font-semibold text-xl text-emerald-600">Daffodil International University</p>
                                </div>
                                <p class="text-gray-700 leading-relaxed text-base sm:text-lg">
                                    Guiding students through the complexities of modern web development, fostering innovation and technical excellence in the next generation of software engineers.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Project Developers -->
        <div class="grid lg:grid-cols-2 gap-8 lg:gap-12">
            <!-- Mehedi Hasan Hridoy -->
            <div class="bg-white rounded-3xl shadow-2xl border border-gray-100 hover:shadow-3xl transition-all duration-500 hover:-translate-y-2 overflow-hidden group">
                <div class="p-8 sm:p-10 lg:p-12">
                    <div class="text-center">
                        <div class="relative mb-8">
                            <div class="w-32 h-32 sm:w-40 sm:h-40 lg:w-48 lg:h-48 rounded-full overflow-hidden mx-auto shadow-2xl group-hover:scale-105 transition-transform duration-500">
                                <img src="{{ asset('images/team/mehedi.jpg') }}" alt="Mehedi Hasan Hridoy" class="w-full h-full object-cover">
                            </div>
                            <div class="absolute -bottom-4 left-1/2 transform -translate-x-1/2 w-16 h-16 bg-gradient-to-br from-emerald-500 to-emerald-600 rounded-full flex items-center justify-center shadow-lg">
                                <span class="text-white text-2xl">👨‍💻</span>
                            </div>
                        </div>
                        
                        <h4 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-gray-900 mb-4 leading-tight">
                            Mehedi Hasan <span class="text-emerald-600">Hridoy</span>
                        </h4>
                        
                        <p class="text-gray-600 mb-8 leading-relaxed text-base sm:text-lg">
                            Full-stack developer passionate about scalable solutions, cloud architecture, and security. Aspiring DevOps engineer with expertise in problem-solving and innovation.
                        </p>
                        
                        <div class="bg-gradient-to-br from-emerald-50 to-teal-50 rounded-2xl lg:rounded-3xl p-6 lg:p-8 border border-emerald-200 hover:border-emerald-300 transition-colors duration-300">
                            <div class="flex items-center justify-center mb-6">
                                <div class="w-12 h-12 lg:w-16 lg:h-16 bg-gradient-to-br from-emerald-500 to-emerald-600 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                    <svg class="w-6 h-6 lg:w-8 lg:h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                                    </svg>
                                </div>
                            </div>
                            <h5 class="text-emerald-800 font-bold text-lg lg:text-xl mb-4">Back-End Development Lead</h5>
                            <div class="space-y-3 text-sm sm:text-base text-gray-700">
                                <div class="flex items-center">
                                    <div class="w-2 h-2 bg-emerald-500 rounded-full mr-3 flex-shrink-0"></div>
                                    <span>Project Leadership & Architecture</span>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-2 h-2 bg-emerald-500 rounded-full mr-3 flex-shrink-0"></div>
                                    <span>Database Design & Management</span>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-2 h-2 bg-emerald-500 rounded-full mr-3 flex-shrink-0"></div>
                                    <span>Authentication & Security Systems</span>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-2 h-2 bg-emerald-500 rounded-full mr-3 flex-shrink-0"></div>
                                    <span>Strategic Planning & Innovation</span>
                                </div>
                            </div>
                        </div>
                        
                        <p class="text-gray-500 text-sm sm:text-base mt-6 font-medium">Computer Science & Engineering • DIU</p>
                    </div>
                </div>
            </div>

            <!-- Umme Salma Lamyea -->
            <div class="bg-white rounded-3xl shadow-2xl border border-gray-100 hover:shadow-3xl transition-all duration-500 hover:-translate-y-2 overflow-hidden group">
                <div class="p-8 sm:p-10 lg:p-12">
                    <div class="text-center">
                        <div class="relative mb-8">
                            <div class="w-32 h-32 sm:w-40 sm:h-40 lg:w-48 lg:h-48 rounded-full overflow-hidden mx-auto shadow-2xl group-hover:scale-105 transition-transform duration-500">
                                <img src="{{ asset('images/team/salma.jpg') }}" alt="Umme Salma Lamyea" class="w-full h-full object-cover">
                            </div>
                            <div class="absolute -bottom-4 left-1/2 transform -translate-x-1/2 w-16 h-16 bg-gradient-to-br from-rose-500 to-rose-600 rounded-full flex items-center justify-center shadow-lg">
                                <span class="text-white text-2xl">👩‍🎨</span>
                            </div>
                        </div>
                        
                        <h4 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-gray-900 mb-4 leading-tight">
                            Umme Salma <span class="text-rose-600">Lamyea</span>
                        </h4>
                        
                        <p class="text-gray-600 mb-8 leading-relaxed text-base sm:text-lg">
                            Creative designer passionate about crafting intuitive digital experiences. Aspiring UI/UX specialist with keen attention to user-centered design principles and innovation.
                        </p>
                        
                        <div class="bg-gradient-to-br from-rose-50 to-pink-50 rounded-2xl lg:rounded-3xl p-6 lg:p-8 border border-rose-200 hover:border-rose-300 transition-colors duration-300">
                            <div class="flex items-center justify-center mb-6">
                                <div class="w-12 h-12 lg:w-16 lg:h-16 bg-gradient-to-br from-rose-500 to-rose-600 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                    <svg class="w-6 h-6 lg:w-8 lg:h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM21 5a2 2 0 00-2-2h-4a2 2 0 00-2 2v12a4 4 0 004 4h4a2 2 0 002-2V5z"></path>
                                    </svg>
                                </div>
                            </div>
                            <h5 class="text-rose-800 font-bold text-lg lg:text-xl mb-4">Front-End UI/UX Lead</h5>
                            <div class="space-y-3 text-sm sm:text-base text-gray-700">
                                <div class="flex items-center">
                                    <div class="w-2 h-2 bg-rose-500 rounded-full mr-3 flex-shrink-0"></div>
                                    <span>User Experience Design</span>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-2 h-2 bg-rose-500 rounded-full mr-3 flex-shrink-0"></div>
                                    <span>Front-End Development</span>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-2 h-2 bg-rose-500 rounded-full mr-3 flex-shrink-0"></div>
                                    <span>Quality Assurance & Testing</span>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-2 h-2 bg-rose-500 rounded-full mr-3 flex-shrink-0"></div>
                                    <span>Creative Direction & Innovation</span>
                                </div>
                            </div>
                        </div>
                        
                        <p class="text-gray-500 text-sm sm:text-base mt-6 font-medium">Computer Science & Engineering • DIU</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Values Section -->
<section class="py-20 bg-gradient-to-br from-emerald-900 to-teal-800 text-white">
    <div class="container mx-auto px-4 lg:px-6">
        <div class="text-center">
            <h2 class="text-4xl font-bold mb-8">Our Core Values</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-16">
                <div class="text-center">
                    <div class="w-16 h-16 bg-emerald-300 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-emerald-900 text-2xl">🤝</span>
                    </div>
                    <h3 class="text-2xl font-bold text-emerald-300 mb-2">Authenticity</h3>
                    <p class="text-lg">Preserving genuine cultural heritage through authentic products and honest storytelling.</p>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 bg-emerald-300 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-emerald-900 text-2xl">💚</span>
                    </div>
                    <h3 class="text-2xl font-bold text-emerald-300 mb-2">Sustainability</h3>
                    <p class="text-lg">Promoting eco-friendly practices and sustainable livelihoods for artisan communities.</p>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 bg-emerald-300 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-emerald-900 text-2xl">✨</span>
                    </div>
                    <h3 class="text-2xl font-bold text-emerald-300 mb-2">Excellence</h3>
                    <p class="text-lg">Delivering exceptional quality in every product and service we provide.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4 lg:px-6">
        <div class="text-center">
            <h2 class="text-4xl font-bold text-emerald-900 mb-6">Join Our Journey</h2>
            <p class="text-xl text-gray-700 mb-8 max-w-3xl mx-auto">
                Be part of a movement that celebrates tradition, supports communities, and creates meaningful change through conscious commerce.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{url('/vegetables')}}" class="inline-flex items-center px-8 py-4 bg-emerald-600 text-white font-semibold rounded-full hover:bg-emerald-700 transition-colors duration-300 shadow-lg hover:shadow-xl">
                    Explore Products
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
                <a href="{{url('/makers')}}" class="inline-flex items-center px-8 py-4 bg-white text-emerald-600 font-semibold rounded-full border-2 border-emerald-600 hover:bg-emerald-50 transition-colors duration-300 shadow-lg hover:shadow-xl">
                    Meet the Makers
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
