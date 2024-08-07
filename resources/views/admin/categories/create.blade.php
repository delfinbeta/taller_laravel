@extends('layouts.layout')

@section('title')
  Crear Categoría
@endsection

@section('content')
  <h2 class="font-bold text-xl">Crear Categoría</h2>

  <form action="{{ route('categories.store') }}" method="post">
    @csrf
    <div class="my-4">
      <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Nombre:</label>
      <input type="text" name="name" id="name" value="" class="block flex-1 border border-gray-600 rounded-md bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" required />
      @error('name')
        <div class="text-sm bg-red-300 text-red-600">{{ $message }}</div>
      @enderror
    </div>
    <div class="my-4">
      <label for="description" class="block text-sm font-medium leading-6 text-gray-900">Description:</label>
      <textarea name="description" id="description" class="block flex-1 border border-gray-600 rounded-md bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"></textarea>
      @error('description')
        <div class="text-sm bg-red-300 text-red-600">{{ $message }}</div>
      @enderror
    </div>
    <div class="my-4">
      <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Guardar</button>
    </div>
  </form>
@endsection