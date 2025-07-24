@extends('layouts.app')

@section('title', 'About Us | EthniCart - From The Source')
<link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">

@section('content')
  <!-- Hero Section -->
<section class="relative bg-gradient-to-br from-emerald-900 via-emerald-800 to-green-700 py-20 overflow-hidden">
    <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23ffffff" fill-opacity="0.05"%3E%3Cpath d="M30 30c0-11.046-8.954-20-20-20s-20 8.954-20 20 8.954 20 20 20 20-8.954 20-20zm0 0c0 11.046 8.954 20 20 20s20-8.954 20-20-8.954-20-20-20-20 8.954-20 20z/%3E%3C/g%3E%3C/g%3E%3C/svg%3E"] opacity-30></div>
    
    <div class="relative max-w-7xl mx-auto px-4 text-center">
       
        <h1 class="text-5xl md:text-7xl font-bold text-white mb-6 leading-tight">
            <br>
            <span class="text-yellow-300">About Us</span>
        </h1>
        
        <p class="text-xl md:text-2xl text-white/90 max-w-4xl mx-auto mb-12 leading-relaxed">
           Meet the passionate minds behind EthniCart — a team rooted in culture, driven by purpose, and committed to making local products global.
        </p>
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
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('images/zionsir.jpg') }}" 
                             class="w-full h-96 lg:h-full object-cover" 
                             alt="Project Instructor">
                        <div class="absolute inset-0 bg-gradient-to-t from-emerald-900/50 to-transparent"></div>
                        <div class="absolute bottom-6 left-6 text-white">
                            
                        </div>
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
                            We sincerely thank our mentor,  Md. Mezbaul Islam Zion , whose guidance helped us build EthniCart. With his support, we gained strong knowledge in web development, PHP, and Laravel, and stayed focused through his rigorous standards.
                        </p>
                        
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
                <div class="relative overflow-hidden">
                    <img src="{{ asset('images/mehedi.jpg') }}" 
                         class="w-full h-80 object-cover group-hover:scale-110 transition-transform duration-700" 
                         alt="Mehedi Hasan Hridoy">
                   
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-bold text-emerald-900 mb-2">Mehedi Hasan Hridoy</h3>
                    <div class="text-emerald-600 font-semibold mb-4">Full-Stack Developer & Project Lead</div>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Passionate about blending technology with cultural preservation. Led the technical architecture, 
                        backend development, and user experience design of EthniCart, ensuring seamless connection between 
                        artisans and customers.
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
            </div>

            <!-- Umme Salma Lamyea -->
            <div class="bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 overflow-hidden group">
                <div class="relative overflow-hidden">
                    <img src="{{ asset('images/lamyea.jpg') }}" 
                         class="w-full h-80 object-cover group-hover:scale-110 transition-transform duration-700" 
                         alt="Umme Salma Lamyea">
                    
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-bold text-emerald-900 mb-2">Umme Salma Lamyea</h3>
                    <div class="text-emerald-600 font-semibold mb-4">UI/UX Designer & Frontend Developer</div>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Creative mind behind EthniCart's beautiful and intuitive user interface. Specialized in creating 
                        engaging user experiences that honor Bangladesh's aesthetic traditions while maintaining modern usability standards.
                    </p>
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

        
                
            </div>
        </div>









        
       
       
                
               
                
                
            </div>
        </div>
    </div>
</section>







@endsection