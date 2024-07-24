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
    <h2>Post ID = {{ $post->id }}</h2>
    <h3>{{ $post->title }}</h3>
    <p>Puntos: {{ $post->points }}</p>
    <p>{{ $post->content }}</p>
  </main>
  
  @include('layouts.footer')

  @livewireScripts
</body>
</html>