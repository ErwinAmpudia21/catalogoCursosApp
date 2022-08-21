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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('landing');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
Route::get('/verCurso/{curso}', [App\Http\Controllers\HomeController::class, 'verCurso'])->name('verCurso');
Route::post('/addtoDeseos', [App\Http\Controllers\HomeController::class, 'addtoDeseos'])->name('addtoDeseos')->middleware('auth');
Route::post('/removeFromDeseos', [App\Http\Controllers\HomeController::class, 'removeFromDeseos'])->name('removeFromDeseos')->middleware('auth');
Route::get('/listadeseos/{user}', [App\Http\Controllers\HomeController::class, 'listaDeseos'])->name('listaDeseos')->middleware('auth');
Route::resource('categorias', App\Http\Controllers\CategoriaController::class)->middleware('auth');
Route::resource('docentes', App\Http\Controllers\DocenteController::class)->middleware('auth');
Route::resource('cursos', App\Http\Controllers\CursoController::class)->middleware('auth');
