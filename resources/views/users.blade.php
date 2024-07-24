<html>
<head>
  <title>Users</title>
  <!-- Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <!-- Styles -->
  @livewireStyles
</head>
<body>
  @include('layouts.header')

  <main>
    <h2>Listado de Usuarios</h2>
    <ul>
      @foreach ($users as $user)
        <li>{{ $user->id }} - {{ $user->name }} - {{ $user->email }}</li>
      @endforeach
    </ul>
  </main>
  
  @include('layouts.footer')

  @livewireScripts
</body>
</html>