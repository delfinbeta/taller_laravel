@extends('layouts.layout')

@section('title')
  Detalles de la Categoría
@endsection

@section('content')
  <h2 class="font-bold text-xl">Detalles de la Categoría</h2>

  <p>Nombre: {{ $category->name }}</p>
  <p>Descripción: {{ $category->description }}</p>
  <p>Fecha de creación: {{ optional($category->created_at)->format('d/m/Y') }}</p>

  <p>Artículos:</p>
  <ul>
    @foreach ($category->posts as $post)
      <li>- {{ $post->title }}</li>
    @endforeach
  </ul>
  @if ($category->image)
  <img src="{{ asset('storage/categories/'.$category->image) }}" alt="Imagen" title="Imagen" width="200" />
  @endif
@endsection