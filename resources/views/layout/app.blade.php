<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Chotu | @yield('title')</title>

  <link rel="shortcut icon" href="{{ asset('images/brand.png') }}" type="image/x-icon">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <script defer src="https://unpkg.com/alpinejs@3.2.4/dist/cdn.min.js"></script>
</head>

<body class="bg-gray-900 text-gray-400">
  @yield('content')

  <script src="{{ asset('js/app.js') }}"></script>
  <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js" defer></script>
  @yield('scripts')
</body>

</html>
