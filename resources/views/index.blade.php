<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    @stack('style')


    <script src="https://cdn.tailwindcss.com"></script>
  <!-- IconFinder or use Heroicons/FontAwesome as fallback -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>



    @yield('main-content')




</body>

</html>