<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
    Route::get('/imc', function () {
        return view('imc');
    })->name('imc');

    Route::get('/mapa', function () {
        return view('mapaN');
    })->name('mapa');

    Route::get('contacto', function () {
        return view('contacto');
    });

    Route::get('recetas', function () {
        return view('recetas');
    });

    Route::get('progreso', function () {
        return view('progreso');
    });
});
