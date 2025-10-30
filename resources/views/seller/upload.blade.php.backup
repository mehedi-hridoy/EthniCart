<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EthniCart - Upload Product</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div class="bg-gray-900 text-white w-64 flex-shrink-0">
            <!-- Logo -->
            <div class="p-6 border-b border-gray-700">
                <h1 class="text-2xl font-bold text-orange-400">EthniCart</h1>
                <p class="text-sm text-gray-400">Seller Panel</p>
            </div>
            
            <!-- Navigation -->
            <nav class="mt-6">
                <a href="{{ route('seller.dashboard') }}" class="block px-6 py-3 hover:bg-gray-800 transition-colors">
                    <i class="fas fa-tachometer-alt mr-3"></i>
                    <span>Dashboard</span>
                </a>
                <div class="px-6 py-3 bg-gray-800 border-r-4 border-orange-400">
                    <i class="fas fa-plus mr-3"></i>
                    <span class="font-medium">Add Product</span>
                </div>
                <div class="px-6 py-3 hover:bg-gray-800 transition-colors cursor-pointer">
                    <i class="fas fa-box mr-3"></i>
                    <span>Products</span>
                </div>
                <div class="px-6 py-3 hover:bg-gray-800 transition-colors cursor-pointer">
                    <i class="fas fa-shopping-cart mr-3"></i>
                    <span>Orders</span>
                </div>
                <div class="px-6 py-3 hover:bg-gray-800 transition-colors cursor-pointer">
                    <i class="fas fa-chart-line mr-3"></i>
                    <span>Analytics</span>
                </div>
                <div class="px-6 py-3 hover:bg-gray-800 transition-colors cursor-pointer">
                    <i class="fas fa-cog mr-3"></i>
                    <span>Settings</span>
                </div>
            </nav>
            
            <!-- User Info & Logout -->
            <div class="absolute bottom-0 w-64 p-6 border-t border-gray-700">
                <div class="flex items-center mb-4">
                    <div class="w-10 h-10 bg-orange-400 rounded-full flex items-center justify-center">
                        <i class="fas fa-user text-white"></i>
                    </div>
                    <div class="ml-3">
                        <p class="font-medium">{{ Auth::guard('seller')->user()->name }}</p>
                        <p class="text-sm text-gray-400">Seller</p>
                    </div>
                </div>
                <form method="POST" action="{{ route('seller.logout') }}">
                    @csrf
                    <button type="submit" class="w-full bg-red-600 hover:bg-red-700 px-4 py-2 rounded transition-colors">
                        <i class="fas fa-sign-out-alt mr-2"></i>
                        Logout
                    </button>
                </form>
            </div>
        </div>
        
        <!-- Main Content -->
        <div class="flex-1 overflow-auto">
            <!-- Header -->
            <header class="bg-white shadow-sm border-b border-gray-200 px-6 py-4">
                <div class="flex items-center justify-between">
                    <div>
                        <h2 class="text-2xl font-bold text-gray-800">Upload New Product</h2>
                        <p class="text-gray-600">Add a new product to your EthniCart store</p>
                    </div>
                    <div class="text-right">
                        <a href="{{ route('seller.dashboard') }}" class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded-lg transition-colors">
                            <i class="fas fa-arrow-left mr-2"></i>
                            Back to Dashboard
                        </a>
                    </div>
                </div>
            </header>
            
            <!-- Form Content -->
            <div class="p-6">
                <div class="max-w-4xl mx-auto">
                    <!-- Progress Indicator -->
                    <div class="mb-8">
                        <div class="flex items-center">
                            <div class="flex items-center text-orange-600">
                                <div class="rounded-full bg-orange-600 w-8 h-8 flex items-center justify-center text-white text-sm font-medium">1</div>
                                <span class="ml-2 text-sm font-medium">Product Details</span>
                            </div>
                            <div class="flex-1 h-1 bg-orange-200 mx-4"></div>
                            <div class="flex items-center text-gray-400">
                                <div class="rounded-full bg-gray-300 w-8 h-8 flex items-center justify-center text-gray-600 text-sm font-medium">2</div>
                                <span class="ml-2 text-sm font-medium">Review & Publish</span>
                            </div>
                        </div>
                    </div>

                    <form action="{{ route('seller.product.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                        @csrf
                        
                        <!-- Product Information Card -->
                        <div class="bg-white rounded-lg shadow-sm border border-gray-200">
                            <div class="px-6 py-4 border-b border-gray-200">
                                <h3 class="text-lg font-semibold text-gray-800 flex items-center">
                                    <i class="fas fa-info-circle text-orange-500 mr-2"></i>
                                    Product Information
                                </h3>
                            </div>
                            <div class="p-6 space-y-6">
                                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                                    <!-- Product Name -->
                                    <div>
                                        <label class="block text-sm font-semibold text-gray-700 mb-2">
                                            Product Name <span class="text-red-500">*</span>
                                        </label>
                                        <input type="text" name="name" required
                                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition-colors"
                                            placeholder="Enter product name">
                                    </div>
                                    
                                    <!-- Price -->
                                    <div>
                                        <label class="block text-sm font-semibold text-gray-700 mb-2">
                                            Price (৳) <span class="text-red-500">*</span>
                                        </label>
                                        <div class="relative">
                                            <span class="absolute left-3 top-3 text-gray-500">৳</span>
                                            <input type="number" name="price" step="0.01" required
                                                class="w-full pl-8 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition-colors"
                                                placeholder="0.00">
                                        </div>
                                    </div>
                                </div>
                                <!-- Unit Selection -->
<div>
    <label class="block text-sm font-semibold text-gray-700 mb-2">
        Unit <span class="text-red-500">*</span>
    </label>
    <select name="unit" required
        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition-colors">
        <option value="">Select unit</option>
        <option value="kg">kg</option>
        <option value="g">g</option>
        <option value="ltr">ltr</option>
        <option value="ml">ml</option>
        <option value="pc">pc</option>
        <option value="bundle">bundle</option>
        <!-- Add more units if needed -->
    </select>
</div>

                                
                                <!-- Stock Quantity -->
                                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                                    <div>
                                        <label class="block text-sm font-semibold text-gray-700 mb-2">
                                            Stock Quantity <span class="text-red-500">*</span>
                                        </label>
                                        <input type="number" name="stock" required min="0"
                                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition-colors"
                                            placeholder="Available quantity">
                                    </div>
                                    
                                    <!-- Category (Optional - you can add this field) -->
                                    <div>
                                        <label class="block text-sm font-semibold text-gray-700 mb-2">
                                            Category
                                        </label>
                                       <select name="display_page" required
    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition-colors">
    <option value="home">Home</option>
    <option value="foods">Foods</option>
    <option value="A1_foods_fruits">Fruits</option>
    <option value="A2_foods_sweets">Sweets</option>
    <option value="A3_foods_snacks">Snacks</option>
    <option value="A4_foods_dairy">Dairy</option>
    <option value="vegetables">Vegetables</option>
    <option value="fish&meat">Fish&Meat</option>

    <option value="C1_Fish&Meat_fish">Fish</option>
    <option value="C2_Fish&Meat_Meat">Meat</option>
    <option value="homemadeMasala">Homemade Masala</option>
    <option value="pickles&condiments">Pickles & Condiments</option>
    <option value="home&kitchen">Home & Kitchen</option>
    <option value="organicRoots">Organic Roots</option>
    <option value="beauty&care">Beauty & Care</option>
    <option value="F1_Beauty&Care_SkinCare">Skin Care</option>
    <option value="F2_Beauty&Care_HairCare">Hair Care</option>
    <option value="Clothing&Apparels">Clothing & Apparels</option>
    <option value="I1_Clothings_WomenWear">Womens Wear</option>
    <option value="I2_Clothings_MenWear">Men Wear</option>
    <option value="craftItems">Craft Items</option>

    <option value="gift">Flower & Gifts</option>

    <option value="ecoFriendlyProducts">Eco Friendly Products</option>

    <!-- add more pages -->
</select>
                                    </div>
                                </div>
                                
                                <!-- Description -->
                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                                        Product Description <span class="text-red-500">*</span>
                                    </label>
                                    <textarea name="description" rows="4" required
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition-colors resize-none"
                                        placeholder="Describe your product in detail..."></textarea>
                                    <p class="text-sm text-gray-500 mt-1">
                                        <i class="fas fa-info-circle mr-1"></i>
                                        Provide detailed information about your product to help customers make informed decisions
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Product Image Card -->
                        <div class="bg-white rounded-lg shadow-sm border border-gray-200">
                            <div class="px-6 py-4 border-b border-gray-200">
                                <h3 class="text-lg font-semibold text-gray-800 flex items-center">
                                    <i class="fas fa-image text-orange-500 mr-2"></i>
                                    Product Image
                                </h3>
                            </div>
                            <div class="p-6">
                                <div class="border-2 border-dashed border-gray-300 rounded-lg p-8 text-center hover:border-orange-400 transition-colors">
                                    <div class="space-y-4">
                                        <div class="mx-auto w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center">
                                            <i class="fas fa-cloud-upload-alt text-gray-400 text-2xl"></i>
                                        </div>
                                        <div>
                                            <label for="image" class="cursor-pointer">
                                                <span class="text-orange-600 font-semibold hover:text-orange-700">Click to upload</span>
                                                <span class="text-gray-600"> or drag and drop</span>
                                            </label>
                                            <input type="file" name="image" id="image" class="hidden" accept="image/*" required>
                                        </div>
                                        <p class="text-sm text-gray-500">PNG, JPG, JPEG up to 5MB</p>
                                    </div>
                                </div>
                                <div class="mt-4 flex items-start space-x-2 text-sm text-gray-600">
                                    <i class="fas fa-lightbulb text-yellow-500 mt-0.5"></i>
                                    <div>
                                        <strong>Tips for great product photos:</strong>
                                        <ul class="list-disc list-inside mt-1 space-y-1">
                                            <li>Use good lighting and clear background</li>
                                            <li>Show product from multiple angles if possible</li>
                                            <li>Ensure image is high resolution (at least 800px wide)</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Form Actions -->
                        <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-info-circle mr-2"></i>
                                    All fields marked with <span class="text-red-500">*</span> are required
                                </div>
                                <div class="flex space-x-3">
                                    <a href="{{ route('seller.dashboard') }}" 
                                        class="px-6 py-3 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors">
                                        Cancel
                                    </a>
                                    <button type="submit" 
                                        class="px-8 py-3 bg-orange-600 hover:bg-orange-700 text-white rounded-lg font-semibold transition-colors flex items-center">
                                        <i class="fas fa-upload mr-2"></i>
                                        Upload Product
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        // File upload preview
        document.getElementById('image').addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const preview = document.createElement('div');
                    preview.className = 'mt-4 p-4 border border-gray-200 rounded-lg';
                    preview.innerHTML = `
                        <div class="flex items-center space-x-3">
                            <img src="${e.target.result}" alt="Preview" class="w-16 h-16 object-cover rounded">
                            <div>
                                <p class="text-sm font-medium text-gray-900">${file.name}</p>
                                <p class="text-sm text-gray-500">${(file.size / 1024 / 1024).toFixed(2)} MB</p>
                            </div>
                        </div>
                    `;
                    
                    // Remove existing preview
                    const existingPreview = document.querySelector('.file-preview');
                    if (existingPreview) {
                        existingPreview.remove();
                    }
                    
                    preview.className += ' file-preview';
                    e.target.closest('.border-dashed').parentNode.appendChild(preview);
                };
                reader.readAsDataURL(file);
            }
        });
    </script>
</body>
</html>