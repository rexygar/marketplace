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
Route::get('/listaCategoria', [App\Http\Controllers\AdminController::class, 'listCategoria'])->name('list.categoria');
Route::get('/listaTienda', [App\Http\Controllers\AdminController::class, 'listTiendas'])->name('list.tienda');
Route::get('/listaProductos', [App\Http\Controllers\AdminController::class, 'listProductos'])->name('list.producto');
Route::get('/crearProducto', [App\Http\Controllers\AdminController::class, 'createProduct'])->name('create.product');
Route::get('/editarProducto', [App\Http\Controllers\AdminController::class, 'createProduct'])->name('edit.product');
Route::POST('/proudctoAgregado', [App\Http\Controllers\AdminController::class, 'addProduct'])->name('add.product');
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
