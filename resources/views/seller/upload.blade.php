<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Product - EthniCart Seller</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="bg-slate-50 text-slate-800">
  <div class="flex h-screen">
    <!-- Sidebar (dark) - matching dashboard -->
    <aside class="bg-neutral-900 text-white w-72 flex-shrink-0 border-r border-black/10 relative">
      <div class="p-6 border-b border-white/10 flex items-center gap-3">
        <div class="w-9 h-9 rounded-lg bg-white/10 text-white flex items-center justify-center"><i class="fas fa-store"></i></div>
        <div>
          <h1 class="text-xl font-bold tracking-wide">EthniCart</h1>
          <p class="text-xs text-white/60">Seller Panel</p>
        </div>
      </div>
      <nav class="mt-3 text-sm">
        <a class="flex items-center gap-3 px-6 py-3 hover:bg-white/5 transition-colors" href="{{ route('seller.dashboard') }}"><i class="fa-solid fa-gauge-high"></i><span>Dashboard</span></a>
        <a class="flex items-center gap-3 px-6 py-3 bg-white/10 rounded-r-full mr-4" href="{{ route('seller.product.create') }}"><i class="fa-solid fa-plus text-white"></i><span class="font-medium">Add Product</span></a>
        <a class="flex items-center gap-3 px-6 py-3 hover:bg-white/5 transition-colors" href="{{ route('seller.products.index') }}"><i class="fa-solid fa-box"></i><span>Products</span></a>
        <a class="flex items-center gap-3 px-6 py-3 hover:bg-white/5 transition-colors" href="{{ route('seller.orders.index') }}"><i class="fa-solid fa-receipt"></i><span>Orders</span></a>
        <a class="flex items-center gap-3 px-6 py-3 hover:bg-white/5 transition-colors" href="{{ route('seller.analytics.index') }}"><i class="fa-solid fa-chart-line"></i><span>Analytics</span></a>
        <a class="flex items-center gap-3 px-6 py-3 hover:bg-white/5 transition-colors" href="{{ route('seller.settings.edit') }}"><i class="fa-solid fa-gear"></i><span>Settings</span></a>
      </nav>
      <div class="absolute bottom-0 w-72 p-6 border-t border-white/10">
        <div class="flex items-center gap-3 mb-4">
          <div class="w-10 h-10 rounded-full overflow-hidden bg-white/20 flex items-center justify-center">
            @if(Auth::guard('seller')->user()->seller_image)
              <img src="{{ asset('storage/' . Auth::guard('seller')->user()->seller_image) }}" class="w-10 h-10 object-cover" />
            @else <i class="fas fa-user"></i> @endif
          </div>
          <div class="flex-1 min-w-0">
            <p class="text-sm font-semibold truncate">{{ Auth::guard('seller')->user()->name }}</p>
            <p class="text-xs text-white/60">Seller Account</p>
          </div>
        </div>
        <form method="POST" action="{{ route('seller.logout') }}">@csrf
          <button type="submit" class="group w-full flex items-center justify-center gap-2 px-4 py-2.5 rounded-lg bg-white/5 hover:bg-red-500/90 border border-white/10 hover:border-red-500 text-white/80 hover:text-white transition-all duration-200">
            <i class="fas fa-arrow-right-from-bracket group-hover:translate-x-0.5 transition-transform"></i>
            <span class="font-medium">Logout</span>
          </button>
        </form>
      </div>
    </aside>

    <!-- Main (light) -->
    <main class="flex-1 overflow-auto">
      <!-- Top bar -->
      <header class="px-8 py-5 border-b border-slate-200 bg-white sticky top-0 z-10">
        <div class="flex items-center justify-between">
          <div class="flex items-center gap-3">
            <a href="{{ route('seller.dashboard') }}" class="w-9 h-9 rounded-full hover:bg-slate-100 flex items-center justify-center text-slate-600 transition-colors"><i class="fa-solid fa-arrow-left"></i></a>
            <div>
              <h2 class="text-2xl font-semibold text-slate-900">Upload New Product</h2>
              <p class="text-xs text-slate-500">Add a new product to your store</p>
            </div>
          </div>
          <div class="flex items-center gap-4">
            <div class="w-9 h-9 rounded-full bg-emerald-100 text-emerald-700 flex items-center justify-center"><i class="fa-solid fa-bell"></i></div>
            <a href="{{ route('seller.settings.edit') }}" class="w-9 h-9 rounded-full overflow-hidden ring-2 ring-slate-200 block">
              @if(Auth::guard('seller')->user()->seller_image)
                <img src="{{ asset('storage/' . Auth::guard('seller')->user()->seller_image) }}" class="w-9 h-9 object-cover" />
              @else
                <div class="w-9 h-9 bg-slate-200"></div>
              @endif
            </a>
          </div>
        </div>
      </header>

      <div class="p-8">
        <div class="max-w-5xl mx-auto">
          <form action="{{ route('seller.product.store') }}" method="POST" enctype="multipart/form-data" id="productForm">
            @csrf
            
            <!-- Product Information Card -->
            <div class="rounded-2xl bg-white border border-slate-200 shadow-sm mb-6">
              <div class="px-8 py-5 border-b border-slate-200 flex items-center gap-3">
                <div class="w-10 h-10 rounded-xl bg-emerald-100 text-emerald-700 flex items-center justify-center">
                  <i class="fa-solid fa-box text-lg"></i>
                </div>
                <div>
                  <h3 class="text-lg font-semibold text-slate-900">Product Information</h3>
                  <p class="text-xs text-slate-500">Basic details about your product</p>
                </div>
              </div>
              
              <div class="p-8 space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                  <!-- Product Name -->
                  <div>
                    <label class="block text-sm font-medium text-slate-700 mb-2">
                      <i class="fa-solid fa-tag text-slate-400 mr-2"></i>Product Name <span class="text-red-500">*</span>
                    </label>
                    <input type="text" name="name" value="{{ old('name') }}" required
                      class="w-full px-4 py-3 rounded-xl border border-slate-200 bg-slate-50 text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-emerald-200 focus:border-emerald-400 transition-all"
                      placeholder="e.g., Organic Rice">
                    @error('name')<p class="text-sm text-red-600 mt-2 flex items-center gap-1"><i class="fa-solid fa-circle-exclamation"></i>{{ $message }}</p>@enderror
                  </div>

                  <!-- Price -->
                  <div>
                    <label class="block text-sm font-medium text-slate-700 mb-2">
                      <i class="fa-solid fa-bangladeshi-taka-sign text-slate-400 mr-2"></i>Price <span class="text-red-500">*</span>
                    </label>
                    <div class="relative">
                      <span class="absolute left-4 top-1/2 -translate-y-1/2 text-slate-500 font-medium">৳</span>
                      <input type="number" name="price" step="0.01" value="{{ old('price') }}" required
                        class="w-full pl-10 pr-4 py-3 rounded-xl border border-slate-200 bg-slate-50 text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-emerald-200 focus:border-emerald-400 transition-all"
                        placeholder="0.00">
                    </div>
                    @error('price')<p class="text-sm text-red-600 mt-2 flex items-center gap-1"><i class="fa-solid fa-circle-exclamation"></i>{{ $message }}</p>@enderror
                  </div>

                  <!-- Unit -->
                  <div>
                    <label class="block text-sm font-medium text-slate-700 mb-2">
                      <i class="fa-solid fa-scale-balanced text-slate-400 mr-2"></i>Unit <span class="text-red-500">*</span>
                    </label>
                    <select name="unit" required
                      class="w-full px-4 py-3 rounded-xl border border-slate-200 bg-slate-50 text-slate-900 focus:outline-none focus:ring-2 focus:ring-emerald-200 focus:border-emerald-400 transition-all">
                      <option value="">Select unit</option>
                      <option value="kg" {{ old('unit') == 'kg' ? 'selected' : '' }}>kg (Kilogram)</option>
                      <option value="g" {{ old('unit') == 'g' ? 'selected' : '' }}>g (Gram)</option>
                      <option value="ltr" {{ old('unit') == 'ltr' ? 'selected' : '' }}>ltr (Liter)</option>
                      <option value="ml" {{ old('unit') == 'ml' ? 'selected' : '' }}>ml (Milliliter)</option>
                      <option value="pc" {{ old('unit') == 'pc' ? 'selected' : '' }}>pc (Piece)</option>
                      <option value="bundle" {{ old('unit') == 'bundle' ? 'selected' : '' }}>bundle</option>
                      <option value="dozen" {{ old('unit') == 'dozen' ? 'selected' : '' }}>dozen</option>
                    </select>
                    @error('unit')<p class="text-sm text-red-600 mt-2 flex items-center gap-1"><i class="fa-solid fa-circle-exclamation"></i>{{ $message }}</p>@enderror
                  </div>

                  <!-- Stock Quantity -->
                  <div>
                    <label class="block text-sm font-medium text-slate-700 mb-2">
                      <i class="fa-solid fa-warehouse text-slate-400 mr-2"></i>Stock Quantity <span class="text-red-500">*</span>
                    </label>
                    <input type="number" name="stock" min="0" value="{{ old('stock') }}" required
                      class="w-full px-4 py-3 rounded-xl border border-slate-200 bg-slate-50 text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-emerald-200 focus:border-emerald-400 transition-all"
                      placeholder="Available quantity">
                    @error('stock')<p class="text-sm text-red-600 mt-2 flex items-center gap-1"><i class="fa-solid fa-circle-exclamation"></i>{{ $message }}</p>@enderror
                  </div>
                </div>

                <!-- Tag Selection (formerly Category) -->
                <div>
                  <label class="block text-sm font-medium text-slate-700 mb-2">
                    <i class="fa-solid fa-bookmark text-slate-400 mr-2"></i>Tag <span class="text-red-500">*</span>
                  </label>
                  <select name="display_page" required
                    class="w-full px-4 py-3 rounded-xl border border-slate-200 bg-slate-50 text-slate-900 focus:outline-none focus:ring-2 focus:ring-emerald-200 focus:border-emerald-400 transition-all">
                    <option value="">Select a tag for your product</option>
                    <optgroup label="Main Categories">
                      <option value="foods" {{ old('display_page') == 'foods' ? 'selected' : '' }}>Foods</option>
                      <option value="vegetables" {{ old('display_page') == 'vegetables' ? 'selected' : '' }}>Vegetables</option>
                      <option value="fish&meat" {{ old('display_page') == 'fish&meat' ? 'selected' : '' }}>Fish & Meat</option>
                      <option value="homemadeMasala" {{ old('display_page') == 'homemadeMasala' ? 'selected' : '' }}>Homemade Masala</option>
                      <option value="pickles&condiments" {{ old('display_page') == 'pickles&condiments' ? 'selected' : '' }}>Pickles & Condiments</option>
                      <option value="home&kitchen" {{ old('display_page') == 'home&kitchen' ? 'selected' : '' }}>Home & Kitchen</option>
                      <option value="organicRoots" {{ old('display_page') == 'organicRoots' ? 'selected' : '' }}>Organic Roots</option>
                      <option value="beauty&care" {{ old('display_page') == 'beauty&care' ? 'selected' : '' }}>Beauty & Care</option>
                      <option value="Clothing&Apparels" {{ old('display_page') == 'Clothing&Apparels' ? 'selected' : '' }}>Clothing & Apparels</option>
                      <option value="craftItems" {{ old('display_page') == 'craftItems' ? 'selected' : '' }}>Craft Items</option>
                      <option value="gift" {{ old('display_page') == 'gift' ? 'selected' : '' }}>Flower & Gifts</option>
                      <option value="ecoFriendlyProducts" {{ old('display_page') == 'ecoFriendlyProducts' ? 'selected' : '' }}>Eco Friendly Products</option>
                    </optgroup>
                    <optgroup label="Food Subcategories">
                      <option value="A1_foods_fruits" {{ old('display_page') == 'A1_foods_fruits' ? 'selected' : '' }}>└─ Fruits</option>
                      <option value="A2_foods_sweets" {{ old('display_page') == 'A2_foods_sweets' ? 'selected' : '' }}>└─ Sweets</option>
                      <option value="A3_foods_snacks" {{ old('display_page') == 'A3_foods_snacks' ? 'selected' : '' }}>└─ Snacks</option>
                      <option value="A4_foods_dairy" {{ old('display_page') == 'A4_foods_dairy' ? 'selected' : '' }}>└─ Dairy</option>
                    </optgroup>
                    <optgroup label="Fish & Meat Subcategories">
                      <option value="C1_Fish&Meat_fish" {{ old('display_page') == 'C1_Fish&Meat_fish' ? 'selected' : '' }}>└─ Fish</option>
                      <option value="C2_Fish&Meat_Meat" {{ old('display_page') == 'C2_Fish&Meat_Meat' ? 'selected' : '' }}>└─ Meat</option>
                    </optgroup>
                    <optgroup label="Beauty & Care Subcategories">
                      <option value="F1_Beauty&Care_SkinCare" {{ old('display_page') == 'F1_Beauty&Care_SkinCare' ? 'selected' : '' }}>└─ Skin Care</option>
                      <option value="F2_Beauty&Care_HairCare" {{ old('display_page') == 'F2_Beauty&Care_HairCare' ? 'selected' : '' }}>└─ Hair Care</option>
                    </optgroup>
                    <optgroup label="Clothing Subcategories">
                      <option value="I1_Clothings_WomenWear" {{ old('display_page') == 'I1_Clothings_WomenWear' ? 'selected' : '' }}>└─ Women's Wear</option>
                      <option value="I2_Clothings_MenWear" {{ old('display_page') == 'I2_Clothings_MenWear' ? 'selected' : '' }}>└─ Men's Wear</option>
                    </optgroup>
                  </select>
                  <p class="text-xs text-slate-500 mt-2 flex items-center gap-1.5">
                    <i class="fa-solid fa-circle-info"></i>
                    <span>Select the category/tag where your product will appear. Products automatically appear on the homepage too!</span>
                  </p>
                  @error('display_page')<p class="text-sm text-red-600 mt-2 flex items-center gap-1"><i class="fa-solid fa-circle-exclamation"></i>{{ $message }}</p>@enderror
                </div>

                <!-- Homepage Display Toggle -->
                <div class="p-4 rounded-xl bg-emerald-50 border border-emerald-200">
                  <label class="flex items-center gap-3 cursor-pointer">
                    <input type="hidden" name="show_homepage" value="0">
                    <input type="checkbox" name="show_homepage" value="1" checked 
                      class="w-5 h-5 rounded border-emerald-300 text-emerald-600 focus:ring-2 focus:ring-emerald-200">
                    <div class="flex-1">
                      <div class="flex items-center gap-2">
                        <i class="fa-solid fa-house text-emerald-600"></i>
                        <span class="font-medium text-slate-900">Display on Homepage</span>
                        <span class="text-xs px-2 py-0.5 rounded-full bg-emerald-200 text-emerald-800 font-medium">Recommended</span>
                      </div>
                      <p class="text-xs text-slate-600 mt-1">Show this product on the homepage for maximum visibility</p>
                    </div>
                  </label>
                </div>

                <!-- Description -->
                <div>
                  <label class="block text-sm font-medium text-slate-700 mb-2">
                    <i class="fa-solid fa-align-left text-slate-400 mr-2"></i>Product Description <span class="text-red-500">*</span>
                  </label>
                  <textarea name="description" rows="5" required
                    class="w-full px-4 py-3 rounded-xl border border-slate-200 bg-slate-50 text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-emerald-200 focus:border-emerald-400 transition-all resize-none"
                    placeholder="Describe your product in detail to help customers make informed decisions...">{{ old('description') }}</textarea>
                  @error('description')<p class="text-sm text-red-600 mt-2 flex items-center gap-1"><i class="fa-solid fa-circle-exclamation"></i>{{ $message }}</p>@enderror
                </div>
              </div>
            </div>

            <!-- Product Images Card -->
            <div class="rounded-2xl bg-white border border-slate-200 shadow-sm mb-6">
              <div class="px-8 py-5 border-b border-slate-200 flex items-center gap-3">
                <div class="w-10 h-10 rounded-xl bg-purple-100 text-purple-700 flex items-center justify-center">
                  <i class="fa-solid fa-images text-lg"></i>
                </div>
                <div>
                  <h3 class="text-lg font-semibold text-slate-900">Product Images</h3>
                  <p class="text-xs text-slate-500">Upload 1-5 images (first will be the cover)</p>
                </div>
              </div>
              
              <div class="p-8">
                <div id="images-dropzone" class="border-2 border-dashed border-slate-200 rounded-xl p-8 text-center hover:border-emerald-400 hover:bg-emerald-50/30 transition-all cursor-pointer">
                  <div class="space-y-4">
                    <div class="mx-auto w-20 h-20 bg-slate-100 rounded-full flex items-center justify-center">
                      <i class="fa-solid fa-cloud-arrow-up text-slate-400 text-3xl"></i>
                    </div>
                    <div>
                      <label for="images" class="cursor-pointer">
                        <span class="text-emerald-600 font-semibold hover:text-emerald-700">Click to upload</span>
                        <span class="text-slate-600"> or drag and drop</span>
                      </label>
                      <input type="file" name="images[]" id="images" class="hidden" accept="image/*" multiple required>
                    </div>
                    <p class="text-sm text-slate-500">PNG, JPG, JPEG up to 2MB each • Min 1, Max 5 images</p>
                  </div>
                </div>
                
                <!-- Preview container -->
                <div id="images-preview" class="mt-6 grid grid-cols-1 sm:grid-cols-2 gap-4"></div>
                @error('images')<p class="text-sm text-red-600 mt-2 flex items-center gap-1"><i class="fa-solid fa-circle-exclamation"></i>{{ $message }}</p>@enderror
                @error('images.*')<p class="text-sm text-red-600 mt-1 flex items-center gap-1"><i class="fa-solid fa-circle-exclamation"></i>{{ $message }}</p>@enderror
              </div>
            </div>

            <!-- Form Actions -->
            <div class="rounded-2xl bg-white border border-slate-200 shadow-sm p-6">
              <div class="flex items-center justify-between">
                <div class="text-sm text-slate-500">
                  <i class="fa-solid fa-circle-info text-slate-400 mr-2"></i>
                  All fields marked with <span class="text-red-500">*</span> are required
                </div>
                <div class="flex items-center gap-3">
                  <a href="{{ route('seller.dashboard') }}" 
                    class="px-6 py-3 rounded-xl border border-slate-200 text-slate-700 hover:bg-slate-50 font-medium transition-colors">
                    Cancel
                  </a>
                  <button type="submit" id="submitBtn"
                    class="px-8 py-3 rounded-xl bg-neutral-900 text-white hover:bg-neutral-800 font-medium transition-colors flex items-center gap-2">
                    <i class="fa-solid fa-upload"></i>
                    <span>Upload Product</span>
                  </button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </main>
  </div>

  <script>
    // Image upload with preview
    const imagesInput = document.getElementById('images');
    const dropzone = document.getElementById('images-dropzone');
    const previewContainer = document.getElementById('images-preview');
    const fileBuffer = new DataTransfer();

    function addFiles(newFiles) {
      const max = 5;
      for (const file of newFiles) {
        if (!file.type.startsWith('image/')) continue;
        if (fileBuffer.files.length >= max) {
          Swal.fire({
            icon: 'warning',
            title: 'Maximum Limit Reached',
            text: 'You can upload a maximum of 5 images.',
            confirmButtonColor: '#0f172a'
          });
          break;
        }
        const exists = Array.from(fileBuffer.files).some(f => f.name === file.name && f.size === file.size);
        if (exists) continue;
        fileBuffer.items.add(file);
      }
      imagesInput.files = fileBuffer.files;
      renderPreviews();
    }

    function removeAt(index) {
      const items = new DataTransfer();
      Array.from(fileBuffer.files).forEach((f, i) => { if (i !== index) items.items.add(f); });
      while (fileBuffer.items.length) fileBuffer.items.remove(0);
      Array.from(items.files).forEach(f => fileBuffer.items.add(f));
      imagesInput.files = fileBuffer.files;
      renderPreviews();
    }

    function renderPreviews() {
      previewContainer.innerHTML = '';
      if (fileBuffer.files.length === 0) return;
      
      Array.from(fileBuffer.files).forEach((file, idx) => {
        const reader = new FileReader();
        reader.onload = e => {
          const card = document.createElement('div');
          card.className = 'relative group rounded-xl overflow-hidden border-2 border-slate-200 bg-white';
          card.innerHTML = `
            <img src="${e.target.result}" alt="Preview ${idx + 1}" class="w-full h-48 object-cover">
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity">
              <div class="absolute bottom-0 left-0 right-0 p-4 text-white">
                <p class="text-sm font-medium truncate">${file.name}</p>
                <p class="text-xs text-white/80">${(file.size / 1024).toFixed(0)} KB${idx === 0 ? ' • Cover Image' : ''}</p>
              </div>
            </div>
            ${idx === 0 ? '<div class="absolute top-3 left-3 px-2 py-1 rounded-lg bg-emerald-500 text-white text-xs font-medium flex items-center gap-1"><i class="fa-solid fa-star"></i>Cover</div>' : ''}
            <button type="button" class="absolute top-3 right-3 w-8 h-8 rounded-lg bg-red-500 hover:bg-red-600 text-white opacity-0 group-hover:opacity-100 transition-all flex items-center justify-center remove-btn" data-index="${idx}">
              <i class="fa-solid fa-trash text-sm"></i>
            </button>
          `;
          previewContainer.appendChild(card);
          card.querySelector('.remove-btn').addEventListener('click', () => removeAt(idx));
        };
        reader.readAsDataURL(file);
      });
    }

    if (imagesInput) {
      imagesInput.addEventListener('click', () => { imagesInput.value = null; });
      imagesInput.addEventListener('change', (e) => {
        const incoming = Array.from(e.target.files || []);
        addFiles(incoming);
      });
    }

    if (dropzone) {
      ['dragenter', 'dragover'].forEach(evt => dropzone.addEventListener(evt, (e) => {
        e.preventDefault();
        e.stopPropagation();
        dropzone.classList.add('border-emerald-400', 'bg-emerald-50/30');
      }));
      ['dragleave', 'drop'].forEach(evt => dropzone.addEventListener(evt, (e) => {
        e.preventDefault();
        e.stopPropagation();
        dropzone.classList.remove('border-emerald-400', 'bg-emerald-50/30');
      }));
      dropzone.addEventListener('drop', (e) => {
        const files = Array.from(e.dataTransfer.files || []);
        addFiles(files);
      });
    }

    // Form submission with loading state
    const form = document.getElementById('productForm');
    const submitBtn = document.getElementById('submitBtn');
    
    if (form) {
      form.addEventListener('submit', (e) => {
        imagesInput.files = fileBuffer.files;
        submitBtn.disabled = true;
        submitBtn.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i><span>Uploading...</span>';
        submitBtn.classList.add('opacity-60', 'cursor-not-allowed');
      });
    }

    // Show success message if redirected with success
    @if(session('success'))
      Swal.fire({
        icon: 'success',
        title: 'Product Uploaded!',
        text: '{{ session('success') }}',
        confirmButtonText: 'Add Another Product',
        confirmButtonColor: '#0f172a',
        showCancelButton: true,
        cancelButtonText: 'View Products',
        cancelButtonColor: '#64748b'
      }).then((result) => {
        if (result.dismiss === Swal.DismissReason.cancel) {
          window.location.href = '{{ route('seller.products.index') }}';
        }
      });
    @endif
  </script>
</body>
</html>
