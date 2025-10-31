@extends('layouts.app')

@section('title', 'EthniCart | Sign Up')
<link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-green-50 via-green-100 to-green-200 px-4">
    <div class="w-full max-w-lg bg-white shadow-xl rounded-3xl p-10 md:p-12 relative">

        {{-- Floating brand mark --}}
        <div class="absolute top-0 left-0 right-0 mx-auto -translate-y-1/2 w-16 h-16 bg-green-600 rounded-full flex items-center justify-center text-white text-2xl font-bold shadow-md">
            <span class="font-serif">E</span>
        </div>

        <h2 class="text-3xl md:text-4xl font-bold text-center text-green-800 mt-6">Create Your EthniCart Account</h2>
        <p class="text-center text-green-600 text-sm mt-2 mb-6">
            Fast, free & easy – Shop your favorites with confidence
        </p>

        <form method="POST" action="{{ route('register') }}" class="space-y-5">
            @csrf

            <div>
                <label for="name" class="block text-sm font-medium text-green-700 mb-1">Full Name</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" required
                    class="w-full px-4 py-3 rounded-xl border border-green-300 focus:ring-2 focus:ring-green-400 focus:outline-none placeholder:text-green-400 @error('name') border-red-500 ring-red-300 @enderror"
                    placeholder="e.g. Sarah Ahmed" />
                @error('name')
                    <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-green-700 mb-1">Email Address</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required
                    class="w-full px-4 py-3 rounded-xl border border-green-300 focus:ring-2 focus:ring-green-400 focus:outline-none placeholder:text-green-400 @error('email') border-red-500 ring-red-300 @enderror"
                    placeholder="e.g. you@example.com" />
                @error('email')
                    <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-green-700 mb-1">Create Password</label>
                <input type="password" id="password" name="password" required
                    class="w-full px-4 py-3 rounded-xl border border-green-300 focus:ring-2 focus:ring-green-400 focus:outline-none placeholder:text-green-400 @error('password') border-red-500 ring-red-300 @enderror"
                    placeholder="At least 8 characters" />
                @error('password')
                    <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="password_confirmation" class="block text-sm font-medium text-green-700 mb-1">Confirm Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required
                    class="w-full px-4 py-3 rounded-xl border border-green-300 focus:ring-2 focus:ring-green-400 focus:outline-none placeholder:text-green-400 @error('password_confirmation') border-red-500 ring-red-300 @enderror"
                    placeholder="Re-type your password" />
                @error('password_confirmation')
                    <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit"
                class="w-full bg-green-600 hover:bg-green-700 text-white font-semibold py-3 rounded-xl transition duration-300">
                Sign Up
            </button>
        </form>

        <p class="text-center text-sm text-green-700 mt-6">
            Already have an account?
            <a href="{{ route('login') }}" class="font-semibold text-green-800 hover:underline">Log in here</a>
        </p>
    </div>
</div>
@endsection
