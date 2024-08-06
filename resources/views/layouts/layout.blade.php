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

  <main class="p-4">
    <div class="container mx-auto p-4">
      @yield('content')
    </div>
  </main>
  
  @include('layouts.footer')

  @livewireScripts
</body>
</html>