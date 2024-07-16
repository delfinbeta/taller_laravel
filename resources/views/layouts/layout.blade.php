<html>
<head>
  <title>@yield('title')</title>
  <!-- Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <!-- Styles -->
  @livewireStyles
</head>
<body>
  @include('layouts.header')

  <main>
    @yield('content')
  </main>
  
  @include('layouts.footer')

  @livewireScripts
</body>
</html>