@extends('layouts.layout')

@section('title')
  ARtículos
@endsection

@section('content')
  <div class="my-4 flex justify-between">
    <div>
      <h2 class="font-bold text-xl">Listado de Artículos</h2>
    </div>
    <div>
      <a href="{{ route('posts.create') }}" class="underline text-blue-600">Agregar Nuevo Artículo</a>
    </div>
  </div>

  <table class="table w-full border-collapse border border-gray-300">
    <thead>
      <tr class="bg-blue-300">
        <th class="border border-gray-300 px-4 py-2" style="width: 150px;">ID</th>
        <th class="border border-gray-300 px-4 py-2">Título</th>
        <th class="border border-gray-300 px-4 py-2">Categoría</th>
        <th class="border border-gray-300 px-4 py-2" style="width: 150px;">Puntos</th>
        <th class="border border-gray-300 px-4 py-2" style="width: 300px;">Acciones</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($posts as $post)
        <tr>
          <td class="border border-gray-300 px-4 py-2 text-center">
            <a href="{{ route('posts.show', $post) }}" class="underline text-blue-600">
              {{ Str::padLeft($post->id, 4, '0') }}
            </a>
          </td>
          <td class="border border-gray-300 px-4 py-2">{{ $post->title }}</td>
          <td class="border border-gray-300 px-4 py-2">{{ $post->category->name }}</td>
          <td class="border border-gray-300 px-4 py-2 text-center">{{ $post->points }}</td>
          <td class="border border-gray-300 px-4 py-2 text-center">
            <a href="{{ route('posts.edit', $post) }}" class="mx-4 p-2 rounded-md bg-blue-400 hover:bg-blue-600 text-white">Editar</a>
            <form action="{{ route('posts.destroy', $post) }}" method="post" class="inline">
              @csrf 
              @method('delete')
              <button type="submit" class="p-2 rounded-md bg-red-400 hover:bg-red-600 text-white">Eliminar</button>
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection
