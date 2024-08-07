@extends('layouts.layout')

@section('title')
  Editar Artículo
@endsection

@section('content')
  <h2 class="font-bold text-xl">Editar Artículo</h2>

  @if ($errors->any())
    <div class="p-4 font-medium text-sm bg-red-300 text-red-600">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
  @endif

  <form action="{{ route('posts.update', $post) }}" method="post">
    @csrf
    @method('PUT')
    <div class="my-4">
      <label for="title" class="block text-sm font-medium leading-6 text-gray-900">Título:</label>
      <input type="text" name="title" id="title" value="{{ $post->title }}" class="block flex-1 border border-gray-600 rounded-md bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" required />
    </div>
    <div class="my-4">
      <label for="content" class="block text-sm font-medium leading-6 text-gray-900">Contenido:</label>
      <textarea name="content" id="content" class="block flex-1 border border-gray-600 rounded-md bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6">{{ $post->content }}</textarea>
    </div>
    <div class="my-4">
      <label for="points" class="block text-sm font-medium leading-6 text-gray-900">Puntos:</label>
      <input type="text" name="points" id="points" value="{{ $post->points }}" class="block flex-1 border border-gray-600 rounded-md bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" required />
    </div>
    <div class="my-4">
      <label for="category_id" class="block text-sm font-medium leading-6 text-gray-900">Categoría:</label>
      <select name="category_id" id="category_id" class="block flex-1 border border-gray-600 rounded-md bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" required >
        <option value="">Seleccione...</option>
        @foreach ($categories as $category)
          <option value="{{ $category->id }}" {{ ($category->id == $post->category_id) ? 'selected' : '' }}>{{ $category->name }}</option>
        @endforeach
      </select>
    </div>
    <div class="my-4">
      <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Actualizar</button>
    </div>
  </form>
@endsection