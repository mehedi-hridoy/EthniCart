<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings - EthniCart Seller</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-slate-50 text-slate-800">
  <div class="flex h-screen">
    <!-- Sidebar (dark) -->
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
        <a class="flex items-center gap-3 px-6 py-3 hover:bg-white/5 transition-colors" href="{{ route('seller.product.create') }}"><i class="fa-solid fa-plus"></i><span>Add Product</span></a>
        <a class="flex items-center gap-3 px-6 py-3 hover:bg-white/5 transition-colors" href="{{ route('seller.products.index') }}"><i class="fa-solid fa-box"></i><span>Products</span></a>
        <a class="flex items-center gap-3 px-6 py-3 hover:bg-white/5 transition-colors" href="{{ route('seller.orders.index') }}"><i class="fa-solid fa-receipt"></i><span>Orders</span></a>
        <a class="flex items-center gap-3 px-6 py-3 hover:bg-white/5 transition-colors" href="{{ route('seller.analytics.index') }}"><i class="fa-solid fa-chart-line"></i><span>Analytics</span></a>
        <a class="flex items-center gap-3 px-6 py-3 bg-white/10 rounded-r-full mr-4" href="{{ route('seller.settings.edit') }}"><i class="fa-solid fa-gear"></i><span class="font-medium">Settings</span></a>
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
              <h2 class="text-2xl font-semibold text-slate-900">Settings</h2>
              <p class="text-xs text-slate-500">Manage your account and profile</p>
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
        <div class="max-w-4xl mx-auto space-y-6">
          <!-- Profile Card -->
          <div class="rounded-2xl bg-white border border-slate-200 shadow-sm overflow-hidden">
            <div class="bg-gradient-to-r from-neutral-900 to-neutral-800 px-8 py-6 flex items-center gap-6">
              <div class="relative">
                <div class="w-24 h-24 rounded-full overflow-hidden ring-4 ring-white/20 bg-white/10 flex items-center justify-center">
                  @if($seller->seller_image)
                    <img src="{{ asset('storage/' . $seller->seller_image) }}" class="w-24 h-24 object-cover" id="previewAvatar" />
                  @else
                    <i class="fas fa-user text-4xl text-white/60" id="placeholderIcon"></i>
                    <img src="" class="w-24 h-24 object-cover hidden" id="previewAvatar" />
                  @endif
                </div>
              </div>
              <div class="flex-1 text-white">
                <h3 class="text-2xl font-bold">{{ $seller->name }}</h3>
                <p class="text-white/70 text-sm">{{ $seller->email }}</p>
                <div class="mt-3 inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-emerald-500/20 border border-emerald-400/30 text-emerald-200 text-xs font-medium">
                  <i class="fa-solid fa-circle-check"></i>
                  <span>Verified Seller</span>
                </div>
              </div>
            </div>

            <form action="{{ route('seller.settings.update') }}" method="POST" enctype="multipart/form-data" class="p-8">
              @csrf
              @method('PUT')

              @if(session('success'))
                <div class="mb-6 p-4 rounded-xl bg-emerald-50 border border-emerald-200 text-emerald-800 flex items-start gap-3">
                  <i class="fa-solid fa-circle-check text-emerald-600 mt-0.5"></i>
                  <div>
                    <p class="font-medium">Success!</p>
                    <p class="text-sm">{{ session('success') }}</p>
                  </div>
                </div>
              @endif

              <div class="mb-6">
                <h4 class="text-lg font-semibold text-slate-900 mb-1">Basic Information</h4>
                <p class="text-sm text-slate-500">Update your personal details and contact information.</p>
              </div>

              <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div>
                  <label class="block text-sm font-medium text-slate-700 mb-2">
                    <i class="fa-solid fa-user text-slate-400 mr-2"></i>Full Name
                  </label>
                  <input type="text" name="name" value="{{ old('name', $seller->name) }}" 
                    class="w-full px-4 py-3 rounded-xl border border-slate-200 bg-slate-50 text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-emerald-200 focus:border-emerald-400 transition-all" 
                    placeholder="Enter your full name" required>
                  @error('name')<p class="text-sm text-red-600 mt-2 flex items-center gap-1"><i class="fa-solid fa-circle-exclamation"></i>{{ $message }}</p>@enderror
                </div>

                <div>
                  <label class="block text-sm font-medium text-slate-700 mb-2">
                    <i class="fa-solid fa-envelope text-slate-400 mr-2"></i>Email Address
                  </label>
                  <input type="email" name="email" value="{{ old('email', $seller->email) }}" 
                    class="w-full px-4 py-3 rounded-xl border border-slate-200 bg-slate-50 text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-emerald-200 focus:border-emerald-400 transition-all" 
                    placeholder="your.email@example.com" required>
                  @error('email')<p class="text-sm text-red-600 mt-2 flex items-center gap-1"><i class="fa-solid fa-circle-exclamation"></i>{{ $message }}</p>@enderror
                </div>

                <div>
                  <label class="block text-sm font-medium text-slate-700 mb-2">
                    <i class="fa-solid fa-phone text-slate-400 mr-2"></i>Phone Number
                  </label>
                  <input type="text" name="phone" value="{{ old('phone', $seller->phone) }}" 
                    class="w-full px-4 py-3 rounded-xl border border-slate-200 bg-slate-50 text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-emerald-200 focus:border-emerald-400 transition-all" 
                    placeholder="+880 1234567890">
                  @error('phone')<p class="text-sm text-red-600 mt-2 flex items-center gap-1"><i class="fa-solid fa-circle-exclamation"></i>{{ $message }}</p>@enderror
                </div>

                <div>
                  <label class="block text-sm font-medium text-slate-700 mb-2">
                    <i class="fa-solid fa-image text-slate-400 mr-2"></i>Profile Photo
                  </label>
                  <div class="relative">
                    <input type="file" name="seller_image" accept="image/*" id="photoInput"
                      class="w-full px-4 py-3 rounded-xl border border-slate-200 bg-slate-50 text-slate-900 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-neutral-900 file:text-white hover:file:bg-neutral-800 file:cursor-pointer focus:outline-none focus:ring-2 focus:ring-emerald-200 focus:border-emerald-400 transition-all">
                  </div>
                  @error('seller_image')<p class="text-sm text-red-600 mt-2 flex items-center gap-1"><i class="fa-solid fa-circle-exclamation"></i>{{ $message }}</p>@enderror
                </div>
              </div>

              <div class="pt-6 border-t border-slate-200 flex items-center justify-between">
                <div class="text-sm text-slate-500">
                  <i class="fa-solid fa-circle-info text-slate-400 mr-2"></i>
                  Sensitive documents (NID, proofs) cannot be changed here.
                </div>
                <div class="flex items-center gap-3">
                  <a href="{{ route('seller.dashboard') }}" class="px-6 py-3 rounded-xl border border-slate-200 text-slate-700 hover:bg-slate-50 font-medium transition-colors">
                    Cancel
                  </a>
                  <button type="submit" class="px-6 py-3 rounded-xl bg-neutral-900 text-white hover:bg-neutral-800 font-medium transition-colors flex items-center gap-2">
                    <i class="fa-solid fa-floppy-disk"></i>
                    Save Changes
                  </button>
                </div>
              </div>
            </form>
          </div>

          <!-- Security Section -->
          <div class="rounded-2xl bg-white border border-slate-200 shadow-sm p-8">
            <div class="flex items-start gap-4">
              <div class="w-12 h-12 rounded-xl bg-red-100 text-red-600 flex items-center justify-center flex-shrink-0">
                <i class="fa-solid fa-shield-halved text-xl"></i>
              </div>
              <div class="flex-1">
                <h4 class="text-lg font-semibold text-slate-900 mb-1">Account Security</h4>
                <p class="text-sm text-slate-500 mb-4">Manage your password and security settings to keep your account safe.</p>
                <a href="#" class="inline-flex items-center gap-2 px-4 py-2 rounded-lg bg-slate-100 hover:bg-slate-200 text-slate-700 text-sm font-medium transition-colors">
                  <i class="fa-solid fa-key"></i>
                  Change Password
                </a>
              </div>
            </div>
          </div>

          <!-- Danger Zone -->
          <div class="rounded-2xl bg-red-50 border border-red-200 shadow-sm p-8">
            <div class="flex items-start gap-4">
              <div class="w-12 h-12 rounded-xl bg-red-200 text-red-700 flex items-center justify-center flex-shrink-0">
                <i class="fa-solid fa-triangle-exclamation text-xl"></i>
              </div>
              <div class="flex-1">
                <h4 class="text-lg font-semibold text-red-900 mb-1">Danger Zone</h4>
                <p class="text-sm text-red-700 mb-4">Permanently delete your account and all associated data. This action cannot be undone.</p>
                <button class="inline-flex items-center gap-2 px-4 py-2 rounded-lg bg-red-600 hover:bg-red-700 text-white text-sm font-medium transition-colors">
                  <i class="fa-solid fa-trash"></i>
                  Delete Account
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>

  <script>
    // Live photo preview
    const photoInput = document.getElementById('photoInput');
    const previewAvatar = document.getElementById('previewAvatar');
    const placeholderIcon = document.getElementById('placeholderIcon');
    
    if (photoInput) {
      photoInput.addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (file) {
          const reader = new FileReader();
          reader.onload = function(e) {
            previewAvatar.src = e.target.result;
            previewAvatar.classList.remove('hidden');
            if (placeholderIcon) placeholderIcon.classList.add('hidden');
          };
          reader.readAsDataURL(file);
        }
      });
    }
  </script>
</body>
</html>
