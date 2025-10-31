{{-- resources/views/admin/register.blade.php --}}
@extends('layouts.app')

@section('title', 'Create Admin - EthniCart')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-emerald-600 via-green-700 to-emerald-900">
    <div class="backdrop-blur-sm bg-white/10 border border-white/20 shadow-2xl rounded-2xl p-8 w-full max-w-md text-white">
        <h2 class="text-3xl font-bold mb-6 text-center">Create First Admin</h2>
        <p class="text-sm text-white/80 mb-4 text-center">This page is available only when no admin exists.</p>

        @if($errors->any())
            <div class="mb-4 p-3 bg-red-500/30 text-white rounded-lg">
                @foreach($errors->all() as $error)
                    <p class="text-sm">{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form method="POST" action="{{ route('admin.register') }}" class="space-y-5">
            @csrf
            @if(request()->query('token'))
                <input type="hidden" name="token" value="{{ request()->query('token') }}">
            @endif

            <div>
                <label for="name" class="block mb-1 text-sm font-semibold">Name</label>
                <input type="text" id="name" name="name" placeholder="Admin Name"
                       class="w-full px-4 py-2 rounded-lg bg-white/10 border border-white/30 text-white focus:outline-none focus:ring-2 focus:ring-emerald-300 placeholder-white/70" required>
            </div>

            <div>
                <label for="email" class="block mb-1 text-sm font-semibold">Email</label>
                <input type="email" id="email" name="email" placeholder="admin@example.com"
                       class="w-full px-4 py-2 rounded-lg bg-white/10 border border-white/30 text-white focus:outline-none focus:ring-2 focus:ring-emerald-300 placeholder-white/70" required>
            </div>

            <div>
                <label for="password" class="block mb-1 text-sm font-semibold">Password</label>
                <input type="password" id="password" name="password" placeholder="At least 8 characters"
                       class="w-full px-4 py-2 rounded-lg bg-white/10 border border-white/30 text-white focus:outline-none focus:ring-2 focus:ring-emerald-300 placeholder-white/70" required>
            </div>

            <div>
                <label for="password_confirmation" class="block mb-1 text-sm font-semibold">Confirm Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Repeat password"
                       class="w-full px-4 py-2 rounded-lg bg-white/10 border border-white/30 text-white focus:outline-none focus:ring-2 focus:ring-emerald-300 placeholder-white/70" required>
            </div>

            <button type="submit"
                    class="w-full bg-emerald-500 hover:bg-emerald-600 transition duration-300 text-white font-semibold py-2 rounded-lg shadow-lg backdrop-blur-lg">
                Create Admin
            </button>
        </form>

        <div class="mt-6 text-center">
            <a href="{{ route('admin.login') }}" class="underline text-white/90 hover:text-white">Back to Login</a>
        </div>
    </div>
</div>
@endsection
