@extends('layouts.app')

@section('title', 'EthniCart | Accounts & Login')
<link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">

@section('content')
  <!-- Account Management Page -->
<div class="min-h-screen bg-gradient-to-br from-blue-50 to-indigo-100 py-12 px-4 sm:px-6 lg:px-8">
  <div class="max-w-6xl mx-auto">
    <!-- Header -->
    <div class="text-center mb-12">
      <h1 class="text-4xl font-bold text-gray-900 mb-4">Account Management</h1>
      <p class="text-lg text-gray-600">Choose your role and access your account</p>
    </div>

    <!-- Role Cards -->
    <div class="grid md:grid-cols-3 gap-8 mb-12">
      <!-- User Card -->
      <div class="bg-white rounded-2xl shadow-xl p-8 text-center transform transition-all duration-300 hover:scale-105 hover:shadow-2xl border border-gray-100">
        <div class="bg-blue-100 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
          <svg class="w-10 h-10 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
          </svg>
        </div>
        <h3 class="text-2xl font-bold text-gray-900 mb-4">User</h3>
        <p class="text-gray-600 mb-6">Browse products, make purchases, and manage your orders</p>
        <div class="space-y-3">
          <button class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-300 shadow-md hover:shadow-lg" onclick="showUserOptions()">
            Get Started
          </button>
        </div>
      </div>

      <!-- Admin Card -->
      <div class="bg-white rounded-2xl shadow-xl p-8 text-center transform transition-all duration-300 hover:scale-105 hover:shadow-2xl border border-gray-100">
        <div class="bg-red-100 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
          <svg class="w-10 h-10 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
          </svg>
        </div>
        <h3 class="text-2xl font-bold text-gray-900 mb-4">Admin</h3>
        <p class="text-gray-600 mb-6">Manage the platform, users, and oversee all operations</p>
        <div class="space-y-3">
          <button class="w-full bg-red-600 hover:bg-red-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-300 shadow-md hover:shadow-lg" onclick="showAdminOptions()">
            Access Admin
          </button>
        </div>
      </div>

      <!-- Seller Card -->
      <div class="bg-white rounded-2xl shadow-xl p-8 text-center transform transition-all duration-300 hover:scale-105 hover:shadow-2xl border border-gray-100">
        <div class="bg-green-100 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
          <svg class="w-10 h-10 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
          </svg>
        </div>
        <h3 class="text-2xl font-bold text-gray-900 mb-4">Seller</h3>
        <p class="text-gray-600 mb-6">Sell your products, manage inventory, and grow your business</p>
        <div class="space-y-3">
          <button class="w-full bg-green-600 hover:bg-green-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-300 shadow-md hover:shadow-lg" onclick="showSellerOptions()">
            Start Selling
          </button>
        </div>
      </div>
    </div>

    <!-- Authentication Modal Overlay -->
    <div id="modal-overlay" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50">
      <div class="flex items-center justify-center min-h-screen px-4">
        <div class="bg-white rounded-2xl shadow-2xl max-w-md w-full p-8 relative">
          <!-- Close Button -->
          <button onclick="closeModal()" class="absolute top-4 right-4 text-gray-400 hover:text-gray-600 transition duration-200">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
          </button>

          <!-- Modal Content -->
          <div id="modal-content">
            <!-- Content will be dynamically inserted here -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  function showUserOptions() {
    const content = `
      <div class="text-center mb-8">
        <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
          <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
          </svg>
        </div>
        <h2 class="text-2xl font-bold text-gray-900 mb-2">User Access</h2>
        <p class="text-gray-600">Choose your preferred option</p>
      </div>
      <div class="space-y-4">
        <a href="/user/login" class="block w-full bg-blue-600 hover:bg-blue-700 text-white text-center font-semibold py-3 px-6 rounded-lg transition duration-300 shadow-md hover:shadow-lg">
          User Login
        </a>
        <a href="/user/register" class="block w-full bg-white hover:bg-gray-50 text-blue-600 border-2 border-blue-600 text-center font-semibold py-3 px-6 rounded-lg transition duration-300">
          User Registration
        </a>
      </div>
    `;
    showModal(content);
  }

  function showAdminOptions() {
    const content = `
      <div class="text-center mb-8">
        <div class="bg-red-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
          <svg class="w-8 h-8 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
          </svg>
        </div>
        <h2 class="text-2xl font-bold text-gray-900 mb-2">Admin Access</h2>
        <p class="text-gray-600">Secure administrative login</p>
      </div>
      <div class="space-y-4">
        <a href="/admin/login" class="block w-full bg-red-600 hover:bg-red-700 text-white text-center font-semibold py-3 px-6 rounded-lg transition duration-300 shadow-md hover:shadow-lg">
          Admin Login
        </a>
      </div>
    `;
    showModal(content);
  }

  function showSellerOptions() {
    const content = `
      <div class="text-center mb-8">
        <div class="bg-green-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
          <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
          </svg>
        </div>
        <h2 class="text-2xl font-bold text-gray-900 mb-2">Seller Access</h2>
        <p class="text-gray-600">Join our marketplace</p>
      </div>
      <div class="space-y-4">
        <a href="/seller/login" class="block w-full bg-green-600 hover:green-red-700 text-white text-center font-semibold py-3 px-6 rounded-lg transition duration-300 shadow-md hover:shadow-lg">
          Seller Login
        </a>
        <a href="/seller/register" class="block w-full bg-white hover:bg-gray-50 text-green-600 border-2 border-green-600 text-center font-semibold py-3 px-6 rounded-lg transition duration-300">
          Seller Registration
        </a>
      </div>
    `;
    showModal(content);
  }

  function showModal(content) {
    document.getElementById('modal-content').innerHTML = content;
    document.getElementById('modal-overlay').classList.remove('hidden');
    document.body.style.overflow = 'hidden';
  }

  function closeModal() {
    document.getElementById('modal-overlay').classList.add('hidden');
    document.body.style.overflow = 'auto';
  }

  // Close modal when clicking outside
  document.getElementById('modal-overlay').addEventListener('click', function(e) {
    if (e.target === this) {
      closeModal();
    }
  });

  // Close modal with Escape key
  document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
      closeModal();
    }
  });
</script>
@endsection
