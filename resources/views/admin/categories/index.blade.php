@extends('layouts.layout')

@section('title')
  Categorías
@endsection

@section('content')
  <h2>Listado de Categorias</h2>
  <p>
    <a href="{{ route('categories.create') }}" class="underline text-blue-600">Agregar Nueva Categoría</a>
  </p>
  <table class="table w-2/3 border-collapse border border-slate-500">
    <thead>
      <tr>
        <th class="border border-slate-700">ID</th>
        <th class="border border-slate-700">Nombre</th>
        <th class="border border-slate-700">Acciones</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($categories as $category)
        <tr>
          <td class="border border-slate-700">{{ $category->id }}</td>
          <td class="border border-slate-700">{{ $category->name }}</td>
          <td class="border border-slate-700">---</td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection
