<header class="bg-blue-500 p-4 flex">
  <h1 class="mr-6">Taller de Laravel</h1>
  <ul class="flex items-center">
    <li><a href="{{ route('users') }}" class="p-3 mx-2 border border-red-600">Usuarios</a></li>
    <li><a href="{{ route('categories.index') }}" class="p-3 mx-2 border border-red-600">Categorias</a></li>
    <li><a href="{{ route('posts.index') }}" class="p-3 mx-2 border border-red-600">Posts</a></li>
  </ul>
</header>