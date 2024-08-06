@extends('layouts.layout')

@section('title')
  Categorías
@endsection

@section('content')
  <div class="my-4 flex justify-between">
    <div>
      <h2 class="font-bold text-xl">Listado de Categorias</h2>
    </div>
    <div>
      <a href="{{ route('categories.create') }}" class="underline text-blue-600">Agregar Nueva Categoría</a>
    </div>
  </div>

  <table class="table w-full border-collapse border border-gray-300">
    <thead>
      <tr class="bg-blue-300">
        <th class="border border-gray-300 px-4 py-2" style="width: 150px;">ID</th>
        <th class="border border-gray-300 px-4 py-2">Nombre</th>
        <th class="border border-gray-300 px-4 py-2" style="width: 300px;">Acciones</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($categories as $category)
        <tr>
          <td class="border border-gray-300 px-4 py-2 text-center">
            <a href="{{ route('categories.show', $category) }}" class="underline text-blue-600">
              {{ Str::padLeft($category->id, 4, '0') }}
            </a>
          </td>
          <td class="border border-gray-300 px-4 py-2">{{ $category->name }}</td>
          <td class="border border-gray-300 px-4 py-2 text-center">
            <a href="{{ route('categories.edit', $category) }}" class="mx-4 p-2 rounded-md bg-blue-400 hover:bg-blue-600 text-white">Editar</a>
            <form action="{{ route('categories.destroy', $category) }}" method="post" class="inline">
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
