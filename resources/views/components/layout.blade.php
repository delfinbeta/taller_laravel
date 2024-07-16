<html>
<head>
  <title>{{ $title }}</title>
  <!-- Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <!-- Styles -->
  @livewireStyles
</head>
<body>
  @include('layouts.header')

  <main>
    {{ $slot }}
  </main>
  
  @include('layouts.footer')

  @livewireScripts
</body>
</html>