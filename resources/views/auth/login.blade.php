@extends('layouts.app')

@section('title', 'EthniCart | User Login')
<link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-green-50 via-green-100 to-green-200 px-4">
    <div class="w-full max-w-lg bg-white shadow-xl rounded-3xl p-10 md:p-12 relative">

        {{-- Floating EthniCart logo or letter --}}
        <div class="absolute top-0 left-0 right-0 mx-auto -translate-y-1/2 w-16 h-16 bg-green-600 rounded-full flex items-center justify-center text-white text-2xl font-bold shadow-md">
            <span class="font-serif">E</span>
        </div>

        <h2 class="text-3xl md:text-4xl font-bold text-center text-green-800 mt-6">User Login</h2>
        <p class="text-center text-green-600 text-sm mt-2 mb-6">
            Access your favorite products, track orders & more
        </p>

        <form method="POST" action="{{ route('login') }}" class="space-y-6">
            @csrf

            <div>
                <label for="email" class="block text-sm font-medium text-green-700 mb-1">Email address</label>
                <input type="email" id="email" name="email" required
                    class="w-full px-4 py-3 rounded-xl border border-green-300 shadow-sm focus:ring-2 focus:ring-green-400 focus:outline-none placeholder:text-green-400"
                    placeholder="you@example.com" />
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-green-700 mb-1">Password</label>
                <input type="password" id="password" name="password" required
                    class="w-full px-4 py-3 rounded-xl border border-green-300 shadow-sm focus:ring-2 focus:ring-green-400 focus:outline-none placeholder:text-green-400"
                    placeholder="••••••••" />
            </div>

            <button type="submit"
                class="w-full bg-green-600 hover:bg-green-700 text-white font-semibold py-3 rounded-xl transition duration-300">
                Sign In
            </button>
        </form>

        <div class="flex items-center my-6">
            <div class="flex-grow h-px bg-green-200"></div>
            <span class="px-4 text-green-400 text-sm">or</span>
            <div class="flex-grow h-px bg-green-200"></div>
        </div>

        <a href="{{ route('google.redirect') }}"
           class="w-full flex items-center justify-center gap-3 border border-green-300 hover:border-green-400 text-green-800 font-semibold py-3 rounded-xl transition duration-300">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="22" height="22">
                <path fill="#FFC107" d="M43.611 20.083H42V20H24v8h11.303C33.602 32.091 29.223 35 24 35c-6.627 0-12-5.373-12-12s5.373-12 12-12c3.059 0 5.842 1.154 7.961 3.039l5.657-5.657C34.875 5.1 29.702 3 24 3 12.955 3 4 11.955 4 23s8.955 20 20 20 20-8.955 20-20c0-1.341-.138-2.651-.389-3.917z"/>
                <path fill="#FF3D00" d="M6.306 14.691l6.571 4.819C14.533 16.189 18.916 13 24 13c3.059 0 5.842 1.154 7.961 3.039l5.657-5.657C34.875 5.1 29.702 3 24 3 16.318 3 9.656 7.337 6.306 14.691z"/>
                <path fill="#4CAF50" d="M24 43c5.166 0 9.86-1.977 13.409-5.192l-6.191-5.238C29.128 34.091 26.715 35 24 35c-5.202 0-9.568-2.888-11.287-7.019l-6.532 5.025C9.488 39.553 16.227 43 24 43z"/>
                <path fill="#1976D2" d="M43.611 20.083H42V20H24v8h11.303c-1.365 3.091-4.744 7-11.303 7-5.202 0-9.568-2.888-11.287-7.019l-6.532 5.025C9.488 39.553 16.227 43 24 43c7.732 0 19-5.5 19-20 0-1.341-.138-2.651-.389-3.917z"/>
            </svg>
            Continue with Google
        </a>

        <p class="text-center text-sm text-green-700 mt-6">
            Don’t have an account?
            <a href="{{ route('register') }}" class="font-semibold text-green-800 hover:underline">Create one</a>
        </p>

        {{-- Optional separator if needed later --}}
        {{-- <div class="flex items-center my-6">
            <div class="flex-grow h-px bg-green-200"></div>
            <span class="px-4 text-green-400 text-sm">or</span>
            <div class="flex-grow h-px bg-green-200"></div>
        </div> --}}
    </div>
</div>
@endsection
