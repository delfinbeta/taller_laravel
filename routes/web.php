<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hola', function () {
    return view('hola');
});

Route::get('/saludo/{name}', function (string $name) {
    $data = ['name' => $name, 'age' => 38, 'date' => date('d/m/Y')];
    $data2 = ['A', 'B', 'C'];

    return view('admin.saludo')->with('name', $name)->with('age', 10)->with('data', $data)->with('data2', $data2);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
