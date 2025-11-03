@extends('layouts.app')

@section('title', 'About Us | EthniCart - Earth to you')
<link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-emerald-900 via-emerald-800 to-green-700 py-24 overflow-hidden">
    <div class="absolute inset-0">
        <div class="absolute inset-0 bg-black/20"></div>
        <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="100" height="100" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23ffffff" fill-opacity="0.08"%3E%3Cpath d="M50 50c0-16.569-13.431-30-30-30s-30 13.431-30 30 13.431 30 30 30 30-13.431 30-30zm0 0c0 16.569 13.431 30 30 30s30-13.431 30-30-13.431-30-30-30-30 13.431-30 30z"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')]"></div>
    </div>
    
    <div class="relative container mx-auto px-6 text-center">
        <div class="max-w-5xl mx-auto">
            <h1 class="text-6xl md:text-8xl font-black text-white mb-8 leading-tight tracking-tight">
                <span class="block text-white/90">Meet Our</span>
                <span class="text-yellow-300 bg-gradient-to-r from-yellow-300 to-amber-300 bg-clip-text text-transparent">Team</span>
            </h1>
            
            <p class="text-2xl md:text-3xl text-white/95 max-w-4xl mx-auto mb-16 leading-relaxed font-light">
                The passionate minds behind EthniCart — rooted in culture, driven by purpose, 
                and committed to making local products global.
            </p>

            <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                <div class="bg-white/10 backdrop-blur-sm border border-white/20 rounded-2xl px-8 py-4">
                    <div class="text-3xl font-bold text-yellow-300">2</div>
                    <div class="text-white/80">Team Members</div>
                </div>
                <div class="bg-white/10 backdrop-blur-sm border border-white/20 rounded-2xl px-8 py-4">
                    <div class="text-3xl font-bold text-yellow-300">1</div>
                    <div class="text-white/80">Vision</div>
                </div>
                <div class="bg-white/10 backdrop-blur-sm border border-white/20 rounded-2xl px-8 py-4">
                    <div class="text-3xl font-bold text-yellow-300">∞</div>
                    <div class="text-white/80">Possibilities</div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="py-24 bg-gradient-to-b from-slate-50/50 to-blue-50/30">
    <div class="container mx-auto px-6">
        <div class="text-center mb-20">
            <div class="inline-block bg-emerald-50 text-emerald-700 px-6 py-3 rounded-full text-lg font-semibold mb-6 shadow-sm">
                Our Team
            </div>
            <h2 class="text-5xl md:text-6xl font-bold text-slate-800 mb-6">
                Project Contributors
            </h2>
            <p class="text-2xl text-slate-600 max-w-4xl mx-auto leading-relaxed">
                Meet the dedicated team members who brought EthniCart to life through their passion and expertise
            </p>
        </div>

        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Mehedi Hasan Hridoy -->
                <div class="group">
                    <div class="bg-white/80 backdrop-blur-sm rounded-3xl shadow-lg hover:shadow-xl transition-all duration-700 hover:-translate-y-3 overflow-hidden border border-slate-200/30">
                        <!-- Image Section with Soft Gradient -->
                        <div class="relative overflow-hidden h-96 bg-gradient-to-br from-sky-300/70 to-blue-400/70 flex items-center justify-center p-8">
                            <div class="relative z-10">
                                <div class="w-72 h-72 rounded-3xl overflow-hidden border-6 border-white/40 shadow-xl group-hover:scale-105 transition-transform duration-700 backdrop-blur-sm">
                                    <img src="{{ asset('images/hridoy.png') }}" 
                                         class="w-full h-full object-cover" 
                                         alt="Mehedi Hasan Hridoy">
                                </div>
                            </div>
                            <!-- Soft animated background -->
                            <div class="absolute inset-0 opacity-15">
                                <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="40" height="40" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23ffffff" fill-opacity="0.6"%3E%3Ccircle cx="20" cy="20" r="1.5"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] animate-pulse"></div>
                            </div>
                            <div class="absolute top-8 right-8 bg-white/25 backdrop-blur-md rounded-2xl px-4 py-2 shadow-sm">
                                <span class="text-slate-700 font-semibold">Project Lead</span>
                            </div>
                        </div>
                        
                        <!-- Content Section -->
                        <div class="p-10 bg-gradient-to-b from-white to-slate-50/30">
                            <div class="text-center mb-8">
                                <h3 class="text-3xl font-bold text-slate-800 mb-3">Mehedi Hasan Hridoy</h3>
                                <div class="text-xl text-sky-600 font-semibold mb-6">Full-Stack Developer & Project Lead</div>
                                <p class="text-lg text-slate-600 leading-relaxed">
                                    Passionate about blending technology with cultural preservation. Led the technical architecture, 
                                    backend development, and user experience design of EthniCart.
                                </p>
                            </div>
                            
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div class="flex items-center space-x-4 p-4 bg-sky-50/70 rounded-2xl border border-sky-100/50 backdrop-blur-sm">
                                    <div class="w-12 h-12 bg-gradient-to-br from-sky-400 to-sky-500 rounded-xl flex items-center justify-center shadow-sm">
                                        <span class="text-white text-lg">⚙️</span>
                                    </div>
                                    <span class="text-slate-700 font-medium">Backend Development</span>
                                </div>
                                <div class="flex items-center space-x-4 p-4 bg-sky-50/70 rounded-2xl border border-sky-100/50 backdrop-blur-sm">
                                    <div class="w-12 h-12 bg-gradient-to-br from-indigo-400 to-indigo-500 rounded-xl flex items-center justify-center shadow-sm">
                                        <span class="text-white text-lg">🗄️</span>
                                    </div>
                                    <span class="text-slate-700 font-medium">Database Architecture</span>
                                </div>
                                <div class="flex items-center space-x-4 p-4 bg-sky-50/70 rounded-2xl border border-sky-100/50 backdrop-blur-sm">
                                    <div class="w-12 h-12 bg-gradient-to-br from-violet-400 to-violet-500 rounded-xl flex items-center justify-center shadow-sm">
                                        <span class="text-white text-lg">🔐</span>
                                    </div>
                                    <span class="text-slate-700 font-medium">Security Implementation</span>
                                </div>
                                <div class="flex items-center space-x-4 p-4 bg-sky-50/70 rounded-2xl border border-sky-100/50 backdrop-blur-sm">
                                    <div class="w-12 h-12 bg-gradient-to-br from-blue-400 to-blue-500 rounded-xl flex items-center justify-center shadow-sm">
                                        <span class="text-white text-lg">🛒</span>
                                    </div>
                                    <span class="text-slate-700 font-medium">E-commerce Integration</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Umme Salma Lamyea -->
                <div class="group">
                    <div class="bg-white/80 backdrop-blur-sm rounded-3xl shadow-lg hover:shadow-xl transition-all duration-700 hover:-translate-y-3 overflow-hidden border border-slate-200/30">
                        <!-- Image Section with Soft Gradient -->
                        <div class="relative overflow-hidden h-96 bg-gradient-to-br from-rose-300/60 to-pink-400/60 flex items-center justify-center p-8">
                            <div class="relative z-10">
                                <div class="w-72 h-72 rounded-3xl overflow-hidden border-6 border-white/40 shadow-xl group-hover:scale-105 transition-transform duration-700 backdrop-blur-sm">
                                    <img src="{{ asset('images/salmaa.jpg') }}" 
                                         class="w-full h-full object-cover" 
                                         alt="Umme Salma Lamyea">
                                </div>
                            </div>
                            <!-- Soft animated background -->
                            <div class="absolute inset-0 opacity-15">
                                <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="40" height="40" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23ffffff" fill-opacity="0.6"%3E%3Ccircle cx="20" cy="20" r="1.5"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] animate-pulse"></div>
                            </div>
                            <div class="absolute top-8 right-8 bg-white/25 backdrop-blur-md rounded-2xl px-4 py-2 shadow-sm">
                                <span class="text-slate-700 font-semibold">UI/UX Lead</span>
                            </div>
                        </div>
                        
                        <!-- Content Section -->
                        <div class="p-10 bg-gradient-to-b from-white to-rose-50/20">
                            <div class="text-center mb-8">
                                <h3 class="text-3xl font-bold text-slate-800 mb-3">Umme Salma Lamyea</h3>
                                <div class="text-xl text-rose-600 font-semibold mb-6">UI/UX Designer & Frontend Developer</div>
                                <p class="text-lg text-slate-600 leading-relaxed">
                                    Creative mind behind EthniCart's beautiful and intuitive user interface. Specialized in creating 
                                    engaging user experiences that honor Bangladesh's aesthetic traditions.
                                </p>
                            </div>
                            
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div class="flex items-center space-x-4 p-4 bg-rose-50/60 rounded-2xl border border-rose-100/50 backdrop-blur-sm">
                                    <div class="w-12 h-12 bg-gradient-to-br from-rose-400 to-rose-500 rounded-xl flex items-center justify-center shadow-sm">
                                        <span class="text-white text-lg">🎨</span>
                                    </div>
                                    <span class="text-slate-700 font-medium">UI/UX Design</span>
                                </div>
                                <div class="flex items-center space-x-4 p-4 bg-rose-50/60 rounded-2xl border border-rose-100/50 backdrop-blur-sm">
                                    <div class="w-12 h-12 bg-gradient-to-br from-pink-400 to-pink-500 rounded-xl flex items-center justify-center shadow-sm">
                                        <span class="text-white text-lg">📱</span>
                                    </div>
                                    <span class="text-slate-700 font-medium">Responsive Development</span>
                                </div>
                                <div class="flex items-center space-x-4 p-4 bg-rose-50/60 rounded-2xl border border-rose-100/50 backdrop-blur-sm">
                                    <div class="w-12 h-12 bg-gradient-to-br from-purple-400 to-purple-500 rounded-xl flex items-center justify-center shadow-sm">
                                        <span class="text-white text-lg">🌈</span>
                                    </div>
                                    <span class="text-slate-700 font-medium">Visual Branding</span>
                                </div>
                                <div class="flex items-center space-x-4 p-4 bg-rose-50/60 rounded-2xl border border-rose-100/50 backdrop-blur-sm">
                                    <div class="w-12 h-12 bg-gradient-to-br from-amber-400 to-amber-500 rounded-xl flex items-center justify-center shadow-sm">
                                        <span class="text-white text-lg">✨</span>
                                    </div>
                                    <span class="text-slate-700 font-medium">User Engagement</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-24 bg-gradient-to-br from-emerald-900 via-emerald-800 to-green-700 relative overflow-hidden">
    <div class="absolute inset-0 bg-black/20"></div>
    <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="100" height="100" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23ffffff" fill-opacity="0.05"%3E%3Cpath d="M50 50c0-16.569-13.431-30-30-30s-30 13.431-30 30 13.431 30 30 30 30-13.431 30-30zm0 0c0 16.569 13.431 30 30 30s30-13.431 30-30-13.431-30-30-30-30 13.431-30 30z"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')]"></div>
    
    <div class="relative container mx-auto px-6 text-center">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-5xl md:text-6xl font-bold text-white mb-8">
                Ready to explore <span class="text-yellow-300">EthniCart</span>?
            </h2>
            <p class="text-2xl text-white/90 mb-12 leading-relaxed">
                Discover authentic Bangladeshi products and support local artisans through our platform
            </p>
            <div class="flex flex-col sm:flex-row gap-6 justify-center">
                <a href="{{ route('home') }}" class="bg-yellow-400 hover:bg-yellow-300 text-emerald-900 px-12 py-4 rounded-2xl font-bold text-xl transition-all duration-300 hover:scale-105 hover:shadow-2xl">
                    Explore Products
                </a>
               
            </div>
        </div>
    </div>
</section>

@endsection