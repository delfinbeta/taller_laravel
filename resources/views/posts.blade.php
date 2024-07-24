<html>
<head>
  <title>Posts</title>
  <!-- Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <!-- Styles -->
  @livewireStyles
</head>
<body>
  @include('layouts.header')

  <main>
    <h2>Listado de Posts</h2>

    <ul>
      @foreach ($posts as $post)
        <li>
          <a href="{{ route('posts.show', $post->id) }}" class="text-blue-500 underline">
            {{ $post->id }} - {{ $post->title }} - Points: {{ $post->points }}
          </a>
        </li>
      @endforeach
    </ul>

    <p>El total de Posts es: {{ $total }}</p>
    <p>La cantidad de Posts Destacados es: {{ $destacados }}</p>
    <p>El máximo de puntos es: {{ $max }}</p>
    <p>El mínimo de puntos es: {{ $min }}</p>
    <p>El promedio de puntos es: {{ $avg }}</p>
    <p>La sumatoria de puntos es: {{ $sum }}</p>
  </main>
  
  @include('layouts.footer')

  @livewireScripts
</body>
</html>