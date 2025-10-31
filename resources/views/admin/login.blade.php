{{-- resources/views/admin/login.blade.php --}}
@extends('layouts.app')

@section('title', 'Admin Login - EthniCart')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-emerald-600 via-green-700 to-emerald-900">
    <div class="backdrop-blur-sm bg-white/10 border border-white/20 shadow-2xl rounded-2xl p-8 w-full max-w-md text-white">
        <h2 class="text-3xl font-bold mb-6 text-center">Admin Login</h2>

        @if(session('status'))
            <div class="mb-4 p-3 bg-emerald-500/30 text-white rounded-lg">
                <p class="text-sm">{{ session('status') }}</p>
            </div>
        @endif

        @if($errors->any())
            <div class="mb-4 p-3 bg-red-500/30 text-white rounded-lg">
                @foreach($errors->all() as $error)
                    <p class="text-sm">{{ $error }}</p>
                @endforeach
            </div>
        @endif

    <form method="POST" action="{{ route('admin.login') }}" class="space-y-5">
            @csrf
            @php($loginToken = config('admin.login_token'))
            @if(request()->query('token') || $loginToken)
                <input type="hidden" name="token" value="{{ request()->query('token') ?? $loginToken }}">
            @endif

            <div>
        <label for="email" class="block mb-1 text-sm font-semibold">Email</label>
        <input type="email" id="email" name="email" placeholder="admin@example.com"
                    class="w-full px-4 py-2 rounded-lg bg-white/10 border border-white/30 text-white focus:outline-none focus:ring-2 focus:ring-emerald-300 placeholder-white/70" required>
            </div>

            <div>
                <label for="password" class="block mb-1 text-sm font-semibold">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter password"
                    class="w-full px-4 py-2 rounded-lg bg-white/10 border border-white/30 text-white focus:outline-none focus:ring-2 focus:ring-emerald-300 placeholder-white/70" required>
            </div>

            <button type="submit"
                class="w-full bg-emerald-500 hover:bg-emerald-600 transition duration-300 text-white font-semibold py-2 rounded-lg shadow-lg backdrop-blur-lg">
                Login
            </button>
        </form>

        @php($hasAdmin = \App\Models\User::where('role','admin')->exists())
        @if(!$hasAdmin)
            <div class="mt-6 text-center">
                @if(app()->environment('local'))
                    <a href="{{ route('admin.register') }}" class="underline text-white/90 hover:text-white">Create first admin</a>
                @else
                    <p class="text-sm text-white/80">Admin setup is available with a one-time token. Contact the deployer to obtain the secure link.</p>
                @endif
            </div>
        @endif
    </div>
</div>
@endsection
