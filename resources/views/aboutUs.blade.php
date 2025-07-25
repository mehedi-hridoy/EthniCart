@extends('layouts.app')

@section('title', 'About Us | EthniCart - From The Source')
<link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">

@section('content')
  <!-- Hero Section -->
<section class="relative bg-gradient-to-br from-emerald-900 via-emerald-800 to-green-700 py-20 overflow-hidden">
    <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23ffffff" fill-opacity="0.05"%3E%3Cpath d="M30 30c0-11.046-8.954-20-20-20s-20 8.954-20 20 8.954 20 20 20 20-8.954 20-20zm0 0c0 11.046 8.954 20 20 20s20-8.954 20-20-8.954-20-20-20-20 8.954-20 20z"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-30"></div>
    
    <div class="relative max-w-7xl mx-auto px-4 text-center">
        <div class="inline-block mb-6">
            <div class="bg-white/20 backdrop-blur-sm rounded-full px-6 py-3 border border-white/30">
                <span class="text-white font-medium">🤝 আমাদের সম্পর্কে • About Us</span>
            </div>
        </div>
        
        <h1 class="text-5xl md:text-7xl font-bold text-white mb-6 leading-tight">
            আমাদের গল্প<br>
            <span class="text-yellow-300">About Us</span>
        </h1>
        
        <p class="text-xl md:text-2xl text-white/90 max-w-4xl mx-auto mb-12 leading-relaxed">
            Meet the passionate minds behind EthniCart — a team rooted in culture, driven by purpose, and committed to making local products global.
        </p>
    </div>
</section>

<!-- About EthniCart Section -->
<section class="bg-gradient-to-b from-green-50 to-white py-16">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-emerald-900 mb-4">
                EthniCart সম্পর্কে
            </h2>
            <p class="text-xl text-gray-700 max-w-3xl mx-auto">
                Where tradition meets technology, preserving Bangladesh's rich cultural heritage through authentic products
            </p>
        </div>

        <div class="bg-white rounded-3xl shadow-xl p-8 mb-16">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h3 class="text-3xl font-bold text-emerald-900 mb-6">Our Mission</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed text-lg">
                        EthniCart bridges the gap between traditional Bangladeshi artisans and modern consumers. 
                        We believe every handcrafted product tells a story of generations of skill, passion, and cultural heritage.
                    </p>
                    <div class="space-y-4">
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 bg-emerald-100 rounded-full flex items-center justify-center">
                                <span class="text-emerald-600 text-sm">🌱</span>
                            </div>
                            <span class="text-gray-700 font-medium">Preserve traditional craftsmanship</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 bg-emerald-100 rounded-full flex items-center justify-center">
                                <span class="text-emerald-600 text-sm">🤝</span>
                            </div>
                            <span class="text-gray-700 font-medium">Support local artisan communities</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 bg-emerald-100 rounded-full flex items-center justify-center">
                                <span class="text-emerald-600 text-sm">🌍</span>
                            </div>
                            <span class="text-gray-700 font-medium">Connect Bangladesh with the world</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 bg-emerald-100 rounded-full flex items-center justify-center">
                                <span class="text-emerald-600 text-sm">💚</span>
                            </div>
                            <span class="text-gray-700 font-medium">Promote sustainable practices</span>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <div class="bg-gradient-to-br from-emerald-400 to-green-500 rounded-3xl p-8 text-white text-center">
                        <div class="grid grid-cols-2 gap-6">
                            <div class="bg-white/20 backdrop-blur-sm rounded-2xl p-4">
                                <div class="text-3xl font-bold">500+</div>
                                <div class="text-sm opacity-90">Artisans</div>
                            </div>
                            <div class="bg-white/20 backdrop-blur-sm rounded-2xl p-4">
                                <div class="text-3xl font-bold">64</div>
                                <div class="text-sm opacity-90">Districts</div>
                            </div>
                            <div class="bg-white/20 backdrop-blur-sm rounded-2xl p-4">
                                <div class="text-3xl font-bold">1000+</div>
                                <div class="text-sm opacity-90">Products</div>
                            </div>
                            <div class="bg-white/20 backdrop-blur-sm rounded-2xl p-4">
                                <div class="text-3xl font-bold">100%</div>
                                <div class="text-sm opacity-90">Authentic</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Instructor Section -->
<section class="bg-white py-16">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-emerald-900 mb-4">
                Our Mentor
            </h2>
            <p class="text-xl text-gray-700 max-w-3xl mx-auto">
                Under the expert guidance of our esteemed instructor from Daffodil International University
            </p>
        </div>

        <div class="max-w-4xl mx-auto">
            <div class="bg-gradient-to-br from-emerald-50 to-green-50 rounded-3xl shadow-xl overflow-hidden">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-0">
                    <div class="relative overflow-hidden h-96 lg:h-full flex items-center justify-center bg-gradient-to-br from-emerald-100 to-green-100">
                        <div class="w-64 h-64 rounded-full overflow-hidden border-4 border-white shadow-lg">
                            <img src="{{ asset('images/zionsir.jpg') }}" 
                                 class="w-full h-full object-cover" 
                                 alt="Md. Mezbaul Islam Zion">
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-emerald-900/20 to-transparent"></div>
                    </div>
                    <div class="p-8 lg:p-12 flex flex-col justify-center">
                        <h3 class="text-3xl font-bold text-emerald-900 mb-4">
                            Md. Mezbaul Islam Zion 
                        </h3>
                        <div class="text-lg text-emerald-600 font-semibold mb-2">
                            Lecturer
                        </div>
                        <div class="text-gray-600 mb-6 font-medium">
                            Daffodil International University
                        </div>
                        <p class="text-gray-700 leading-relaxed mb-6">
                            We sincerely thank our mentor, Md. Mezbaul Islam Zion, whose guidance helped us build EthniCart. With his support, we gained strong knowledge in web development, PHP, and Laravel, and stayed focused through his rigorous standards.
                        </p>
                        <div class="space-y-3">
                            <div class="flex items-center space-x-3">
                                <div class="w-6 h-6 bg-emerald-100 rounded-full flex items-center justify-center">
                                    <span class="text-emerald-600 text-sm">🎯</span>
                                </div>
                                <span class="text-gray-700">Project Vision & Strategy</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <div class="w-6 h-6 bg-emerald-100 rounded-full flex items-center justify-center">
                                    <span class="text-emerald-600 text-sm">💡</span>
                                </div>
                                <span class="text-gray-700">Technical Architecture Guidance</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <div class="w-6 h-6 bg-emerald-100 rounded-full flex items-center justify-center">
                                    <span class="text-emerald-600 text-sm">🌟</span>
                                </div>
                                <span class="text-gray-700">Cultural Heritage Preservation</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contributors Section -->
<section class="bg-gradient-to-b from-green-50 to-white py-16">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-emerald-900 mb-4">
                Project Contributors
            </h2>
            <p class="text-xl text-gray-700 max-w-3xl mx-auto">
                Meet the dedicated team members who brought EthniCart to life through their passion and expertise
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-6xl mx-auto">
            <!-- Mehedi Hasan Hridoy -->
            <div class="bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 overflow-hidden group">
                <div class="relative overflow-hidden h-64 flex items-center justify-center bg-gradient-to-br from-blue-50 to-purple-50">
                    <div class="w-48 h-48 rounded-full overflow-hidden border-4 border-white shadow-lg group-hover:scale-105 transition-transform duration-500">
                        <img src="{{ asset('images/mehedi.jpg') }}" 
                             class="w-full h-full object-cover" 
                             alt="Mehedi Hasan Hridoy">
                    </div>
                    <div class="absolute top-4 left-4">
                        <span class="bg-gradient-to-r from-blue-500 to-purple-600 text-white px-4 py-2 rounded-full text-sm font-bold">Lead Developer</span>
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-bold text-emerald-900 mb-2 text-center">Mehedi Hasan Hridoy</h3>
                    <div class="text-emerald-600 font-semibold mb-4 text-center">Full-Stack Developer & Project Lead</div>
                    <p class="text-gray-600 mb-6 leading-relaxed text-center">
                        Passionate about blending technology with cultural preservation. Led the technical architecture, 
                        backend development, and user experience design of EthniCart.
                    </p>
                    <div class="space-y-4">
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center">
                                <span class="text-blue-600 text-sm">⚙️</span>
                            </div>
                            <span class="text-gray-700 font-medium">Backend Development</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center">
                                <span class="text-blue-600 text-sm">🗄️</span>
                            </div>
                            <span class="text-gray-700 font-medium">Database Architecture</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center">
                                <span class="text-blue-600 text-sm">🔐</span>
                            </div>
                            <span class="text-gray-700 font-medium">Security Implementation</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center">
                                <span class="text-blue-600 text-sm">🛒</span>
                            </div>
                            <span class="text-gray-700 font-medium">E-commerce Integration</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Umme Salma Lamyea -->
            <div class="bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 overflow-hidden group">
                <div class="relative overflow-hidden h-64 flex items-center justify-center bg-gradient-to-br from-pink-50 to-rose-50">
                    <div class="w-48 h-48 rounded-full overflow-hidden border-4 border-white shadow-lg group-hover:scale-105 transition-transform duration-500">
                        <img src="{{ asset('images/salmaa.jpg') }}" 
                             class="w-full h-full object-cover" 
                             alt="Umme Salma Lamyea">
                    </div>
                    <div class="absolute top-4 left-4">
                        <span class="bg-gradient-to-r from-pink-500 to-rose-600 text-white px-4 py-2 rounded-full text-sm font-bold">Frontend Specialist</span>
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-bold text-emerald-900 mb-2 text-center">Umme Salma Lamyea</h3>
                    <div class="text-emerald-600 font-semibold mb-4 text-center">UI/UX Designer & Frontend Developer</div>
                    <p class="text-gray-600 mb-6 leading-relaxed text-center">
                        Creative mind behind EthniCart's beautiful and intuitive user interface. Specialized in creating 
                        engaging user experiences that honor Bangladesh's aesthetic traditions.
                    </p>
                    <div class="space-y-4">
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 bg-pink-100 rounded-full flex items-center justify-center">
                                <span class="text-pink-600 text-sm">🎨</span>
                            </div>
                            <span class="text-gray-700 font-medium">UI/UX Design</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 bg-pink-100 rounded-full flex items-center justify-center">
                                <span class="text-pink-600 text-sm">📱</span>
                            </div>
                            <span class="text-gray-700 font-medium">Responsive Development</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 bg-pink-100 rounded-full flex items-center justify-center">
                                <span class="text-pink-600 text-sm">🌈</span>
                            </div>
                            <span class="text-gray-700 font-medium">Visual Branding</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 bg-pink-100 rounded-full flex items-center justify-center">
                                <span class="text-pink-600 text-sm">✨</span>
                            </div>
                            <span class="text-gray-700 font-medium">User Engagement</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Project Contributions -->
        <div class="mt-16 bg-white rounded-3xl shadow-xl p-8">
            <h3 class="text-3xl font-bold text-emerald-900 mb-8 text-center">প্রকল্পে অবদান • Project Contributions</h3>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Mehedi's Contributions -->
                <div class="bg-gradient-to-br from-blue-50 to-purple-50 rounded-2xl p-6 border border-blue-100">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 rounded-full overflow-hidden mr-4 border-2 border-blue-200">
                            <img src="{{ asset('images/mehedi.png') }}" 
                                 class="w-full h-full object-cover" 
                                 alt="Mehedi">
                        </div>
                        <div>
                            <h4 class="text-lg font-bold text-gray-900">Mehedi Hasan Hridoy</h4>
                            <p class="text-sm text-gray-600">Technical Lead</p>
                        </div>
                    </div>
                    <div class="space-y-3">
                        <div class="flex items-center space-x-3">
                            <div class="w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center">
                                <span class="text-blue-600 text-xs">⚙️</span>
                            </div>
                            <span class="text-gray-700 text-sm">Laravel backend architecture & API development</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center">
                                <span class="text-blue-600 text-xs">🗄️</span>
                            </div>
                            <span class="text-gray-700 text-sm">Database design & optimization</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center">
                                <span class="text-blue-600 text-xs">🔐</span>
                            </div>
                            <span class="text-gray-700 text-sm">Authentication & security implementation</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center">
                                <span class="text-blue-600 text-xs">🛒</span>
                            </div>
                            <span class="text-gray-700 text-sm">E-commerce functionality & payment integration</span>
                        </div>
                    </div>
                </div>

                <!-- Lamyea's Contributions -->
                <div class="bg-gradient-to-br from-pink-50 to-rose-50 rounded-2xl p-6 border border-pink-100">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 rounded-full overflow-hidden mr-4 border-2 border-pink-200">
                            <img src="{{ asset('images/salmaa.jpg') }}" 
                                 class="w-full h-full object-cover" 
                                 alt="Lamyea">
                        </div>
                        <div>
                            <h4 class="text-lg font-bold text-gray-900">Umme Salma Lamyea</h4>
                            <p class="text-sm text-gray-600">Design Lead</p>
                        </div>
                    </div>
                    <div class="space-y-3">
                        <div class="flex items-center space-x-3">
                            <div class="w-6 h-6 bg-pink-100 rounded-full flex items-center justify-center">
                                <span class="text-pink-600 text-xs">🎨</span>
                            </div>
                            <span class="text-gray-700 text-sm">UI/UX design & user experience optimization</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="w-6 h-6 bg-pink-100 rounded-full flex items-center justify-center">
                                <span class="text-pink-600 text-xs">📱</span>
                            </div>
                            <span class="text-gray-700 text-sm">Responsive frontend development</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="w-6 h-6 bg-pink-100 rounded-full flex items-center justify-center">
                                <span class="text-pink-600 text-xs">🌈</span>
                            </div>
                            <span class="text-gray-700 text-sm">Visual branding & cultural design elements</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="w-6 h-6 bg-pink-100 rounded-full flex items-center justify-center">
                                <span class="text-pink-600 text-xs">✨</span>
                            </div>
                            <span class="text-gray-700 text-sm">Interactive animations & user engagement features</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Vision Section -->
        <div class="mt-16 bg-gradient-to-r from-emerald-600 to-green-600 rounded-3xl p-8 text-white text-center">
            <h3 class="text-3xl font-bold mb-6">আমাদের দৃষ্টিভঙ্গি • Our Vision</h3>
            <p class="text-xl mb-8 max-w-4xl mx-auto leading-relaxed">
                Together, we envision a world where Bangladesh's rich cultural heritage thrives in the digital age, 
                where every artisan's story is heard, and where authentic craftsmanship finds its rightful place in modern commerce.
            </p>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-4xl mx-auto">
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/20">
                    <div class="text-4xl mb-4">🌍</div>
                    <h4 class="text-xl font-bold mb-2">Global Reach</h4>
                    <p class="text-white/90 text-sm">Connecting Bangladesh's heritage with customers worldwide</p>
                </div>
                
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/20">
                    <div class="text-4xl mb-4">💡</div>
                    <h4 class="text-xl font-bold mb-2">Innovation</h4>
                    <p class="text-white/90 text-sm">Bridging traditional crafts with modern technology</p>
                </div>
                
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/20">
                    <div class="text-4xl mb-4">🤝</div>
                    <h4 class="text-xl font-bold mb-2">Community</h4>
                    <p class="text-white/90 text-sm">Building sustainable partnerships with local artisans</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection