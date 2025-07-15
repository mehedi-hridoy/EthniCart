<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'EthniCart')</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
      <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

    {{-- Include Header --}}
    @include('partials.header')

    {{-- Page Content --}}
    <div class="container">
        @yield('content')
    </div>

    {{-- Include Footer --}}
    @include('partials.footer')
    <script src="{{ asset('assets/js/script.js') }}"></script>

</body>
</html>
