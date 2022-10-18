<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\peliculaController;

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
Route::post('/movie/register',[peliculaController::class,'store'])->name('pelicula.store');

require __DIR__.'/auth.php';
