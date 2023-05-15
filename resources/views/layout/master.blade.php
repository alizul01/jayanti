<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jayanti | JTI Kaya Akan Prestasi</title>
  {{-- Link Font --}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
  {{-- Link CSS & JS --}}
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
  @include('sweetalert::alert')
  @yield('layout')
</body>

</html>
