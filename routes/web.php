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

Route::get('/', [App\Http\Controllers\MainController::class, 'index'])->name('index');
Route::get('/home', [App\Http\Controllers\MainController::class, 'index2'])->name('home');



// ADMINISTRADOR
Route::get('/ADM', [App\Http\Controllers\AdminController::class, 'getCategoria'])->name('admin.index');

Route::get('/tests1', function () {
    return view('Vistas.index');
});

Route::get('/tests2', function () {
    return view('Vistas.Cats');
});

Route::get('/tests3', function () {
    return view('Vistas.Tienda');
});
Route::get('/tests4', function () {
    return view('Vistas.productos');
});
