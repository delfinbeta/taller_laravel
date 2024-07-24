<html>
<head>
  <title>Categories</title>
  <!-- Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <!-- Styles -->
  @livewireStyles
</head>
<body>
  @include('layouts.header')

  <main>
    <h2>Listado de Categorias</h2>
    <ul>
      @foreach ($categories as $category)
        <li>{{ $category->id }} - {{ $category->name }}</li>
      @endforeach
    </ul>
  </main>
  
  @include('layouts.footer')

  @livewireScripts
</body>
</html>