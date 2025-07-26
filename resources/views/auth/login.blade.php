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
