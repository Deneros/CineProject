<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\peliculaController;
use App\Http\Controllers\alimentoController;
use App\Http\Controllers\comprasController;

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
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/movie/form', [peliculaController::class, 'create'])->name('pelicula.create');
Route::get('/movie/list', [peliculaController::class, 'index'])->name('pelicula.list');
Route::get('/movie/{pelicula}/edit', [peliculaController::class, 'edit'])->name('pelicula.edit');
Route::put('/movie/{pelicula}/update', [peliculaController::class, 'update'])->name('pelicula.update');
Route::delete('/movie/delete', [peliculaController::class, 'destroy'])->name('pelicula.destroy');
Route::post('/movie/register',[peliculaController::class,'store'])->name('pelicula.store');

Route::get('/food/form',[alimentoController::class,'create'])->name('alimento.create');
Route::get('/food/list',[alimentoController::class,'index'])->name('alimento.list');
Route::post('/food/register',[alimentoController::class,'store'])->name('alimento.store');
Route::post('/pucharses/register',[comprasController::class,'store'])->name('compra.store');

require __DIR__.'/auth.php';
