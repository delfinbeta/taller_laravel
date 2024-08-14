@extends('layouts.layout')

@section('title')
  Editar Categoría
@endsection

@section('content')
  <h2 class="font-bold text-xl">Editar Categoría</h2>

  @if ($errors->any())
    <div class="p-4 font-medium text-sm bg-red-300 text-red-600">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
  @endif

  <form action="{{ route('categories.update', $category) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="my-4">
      <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Nombre:</label>
      <input type="text" name="name" id="name" value="{{ old('name', $category->name) }}" class="block flex-1 border border-gray-600 rounded-md bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" required />
    </div>
    <div class="my-4">
      <label for="description" class="block text-sm font-medium leading-6 text-gray-900">Description:</label>
      <textarea name="description" id="description" class="block flex-1 border border-gray-600 rounded-md bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6">{{ old('description', $category->description) }}</textarea>
    </div>
    <div class="my-4">
      <label for="image" class="block text-sm font-medium leading-6 text-gray-900">Imagen:</label>
      <input type="file" name="image" id="image" value="" class="block flex-1 border border-gray-600 rounded-md bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" />
    </div>
    <div class="my-4">
      <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Actualizar</button>
    </div>
  </form>
@endsection