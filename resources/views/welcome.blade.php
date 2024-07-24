<html>
<head>
  <title>Taller de Laravel</title>
  <!-- Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <!-- Styles -->
  @livewireStyles
</head>
<body>
  @include('layouts.header')

  <main>
    <h2>Bienvenido al Taller de Laravel</h2>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloremque expedita maiores id laborum reiciendis reprehenderit. Eius, deserunt veritatis. Ab et ducimus accusamus ipsum unde quis autem aliquid ad cumque accusantium!</p>
  </main>
  
  @include('layouts.footer')

  @livewireScripts
</body>
</html>