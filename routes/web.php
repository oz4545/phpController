<?php

use App\Http\Controllers\Controlador;
use Illuminate\Support\Facades\Route;

Route::get('/formulario-amigos', [Controlador::class, 'amigosFormulario']);
Route::get('/formulario-primos', [Controlador::class, 'primosFormulario']);
Route::get('/formulario-promedio', [Controlador::class, 'promedioFormulario']);
Route::get('/formulario-cuadratica', [Controlador::class, 'cuadraticaFormulario']);

Route::post('/formulario-amigos', [Controlador::class, 'amigos'])->name('amigos');
Route::post('/formulario-primos', [Controlador::class, 'primos'])->name('primos');
Route::post('/formulario-promedio', [Controlador::class, 'promedio'])->name('promedio');
Route::post('/formulario-cuadratica', [Controlador::class, 'cuadratica'])->name('cuadratica');
