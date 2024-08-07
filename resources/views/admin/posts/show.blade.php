@extends('layouts.layout')

@section('title')
  Detalles del Artículo
@endsection

@section('content')
  <h2 class="font-bold text-xl">Detalles del Artículo</h2>

  <p>Título: {{ $post->title }}</p>
  <p>Contenido: {{ $post->content }}</p>
  <p>Puntos: {{ $post->points }}</p>
  <p>Categoría: {{ $category->name }}</p>
  <p>Fecha de creación: {{ optional($post->created_at)->format('d/m/Y') }}</p>
@endsection