@extends('layouts.app')

@section('title', 'EthniCart | Seller Registration')
<link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-50 py-10 px-4">
    <div class="w-full max-w-3xl bg-white shadow-lg rounded-2xl p-8 md:p-12">

        <h2 class="text-3xl font-bold text-green-700 text-center mb-2">Become an EthniCart Seller</h2>
        <p class="text-center text-gray-500 mb-8">Register to sell authentic products directly from your region.</p>

        <form method="POST" action="{{ route('seller.register') }}" enctype="multipart/form-data" class="space-y-6">
            @csrf

            {{-- Profile & Personal Info --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700">Full Name</label>
                    <input type="text" name="name" value="{{ old('name') }}" required
                        class="mt-1 block w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-green-500 focus:outline-none @error('name') border-red-500 ring-red-300 @enderror" />
                    @error('name')<p class="text-red-600 text-xs mt-1">{{ $message }}</p>@enderror
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Email Address</label>
                    <input type="email" name="email" value="{{ old('email') }}" required
                        class="mt-1 block w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-green-500 focus:outline-none @error('email') border-red-500 ring-red-300 @enderror" />
                    @error('email')<p class="text-red-600 text-xs mt-1">{{ $message }}</p>@enderror
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Phone Number</label>
                    <input type="text" name="phone" value="{{ old('phone') }}" required
                        class="mt-1 block w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-green-500 focus:outline-none @error('phone') border-red-500 ring-red-300 @enderror" />
                    @error('phone')<p class="text-red-600 text-xs mt-1">{{ $message }}</p>@enderror
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Profile Image</label>
                    <input type="file" name="seller_image" accept="image/*"
                        class="mt-1 block w-full rounded-lg border border-gray-300 px-3 py-2" />
                </div>
            </div>

            {{-- Account Password --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" name="password" required
                        class="mt-1 block w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-green-500 focus:outline-none @error('password') border-red-500 ring-red-300 @enderror" />
                    @error('password')<p class="text-red-600 text-xs mt-1">{{ $message }}</p>@enderror
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Confirm Password</label>
                    <input type="password" name="password_confirmation" required
                        class="mt-1 block w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-green-500 focus:outline-none @error('password_confirmation') border-red-500 ring-red-300 @enderror" />
                    @error('password_confirmation')<p class="text-red-600 text-xs mt-1">{{ $message }}</p>@enderror
                </div>
            </div>

            {{-- Identity Verification --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700">NID / Birth Reg. Number</label>
                    <input type="text" name="nid" value="{{ old('nid') }}" required
                        class="mt-1 block w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-green-500 focus:outline-none @error('nid') border-red-500 ring-red-300 @enderror" />
                    @error('nid')<p class="text-red-600 text-xs mt-1">{{ $message }}</p>@enderror
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Upload NID / Birth Cert</label>
                    <input type="file" name="nid_file" accept="image/*,application/pdf" required
                        class="mt-1 block w-full rounded-lg border border-gray-300 px-3 py-2" />
                </div>
            </div>

            {{-- Production Info --}}
            <div>
                <label class="block text-sm font-medium text-gray-700">Production Area / Region</label>
                <input type="text" name="production_area" value="{{ old('production_area') }}" required
                    class="mt-1 block w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-green-500 focus:outline-none @error('production_area') border-red-500 ring-red-300 @enderror" />
                @error('production_area')<p class="text-red-600 text-xs mt-1">{{ $message }}</p>@enderror
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Type of Business / Product</label>
                <input type="text" name="business_type" value="{{ old('business_type') }}" required
                    class="mt-1 block w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-green-500 focus:outline-none @error('business_type') border-red-500 ring-red-300 @enderror" />
                @error('business_type')<p class="text-red-600 text-xs mt-1">{{ $message }}</p>@enderror
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Specialty Product Description</label>
                <textarea name="product_description" rows="3" required
                    class="mt-1 block w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-green-500 focus:outline-none @error('product_description') border-red-500 ring-red-300 @enderror">{{ old('product_description') }}</textarea>
                @error('product_description')<p class="text-red-600 text-xs mt-1">{{ $message }}</p>@enderror
            </div>

            {{-- Proof & Payment --}}
            <div>
                <label class="block text-sm font-medium text-gray-700">Proof of Authenticity (Optional)</label>
                <input type="file" name="proof_file" accept="image/*"
                    class="mt-1 block w-full rounded-lg border border-gray-300 px-3 py-2" />
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <input type="text" name="bank_account" placeholder="Bank Account Number" value="{{ old('bank_account') }}" required
                    class="mt-1 block w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-green-500 focus:outline-none @error('bank_account') border-red-500 ring-red-300 @enderror" />
                <input type="text" name="bank_name" placeholder="Bank Name" value="{{ old('bank_name') }}" required
                    class="mt-1 block w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-green-500 focus:outline-none @error('bank_name') border-red-500 ring-red-300 @enderror" />
                <input type="text" name="mobile_wallet" placeholder="Mobile Banking / eWallet ID" value="{{ old('mobile_wallet') }}"
                    class="mt-1 block w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-green-500 focus:outline-none @error('mobile_wallet') border-red-500 ring-red-300 @enderror" />
            </div>

            {{-- Submit Button --}}
            <button type="submit" class="w-full bg-green-700 hover:bg-green-800 text-white font-semibold py-3 rounded-lg mt-4 transition duration-300">
                Register as Seller
            </button>
        </form>

        <p class="text-center text-sm text-gray-500 mt-6">
            Already a seller? <a href="{{ route('seller.login') }}" class="text-green-700 font-semibold hover:underline">Log in here</a>
        </p>
    </div>
</div>
@endsection
