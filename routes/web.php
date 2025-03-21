<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibrosController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/libros/crear', [LibrosController::class, 'crear'])->name('libros.crear');
Route::post('/libros/store', [LibrosController::class, 'store'])->name('libros.store');
