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
Route::get('/ADM/listaCategoria', [App\Http\Controllers\AdminController::class, 'listCategoria'])->name('list.categoria');
Route::get('/ADM/listaTienda', [App\Http\Controllers\AdminController::class, 'listTiendas'])->name('list.tienda');
Route::get('/ADM/listaProductos', [App\Http\Controllers\AdminController::class, 'listProductos'])->name('list.producto');
Route::get('/ADM/crearProducto', [App\Http\Controllers\AdminController::class, 'createProduct'])->name('create.product');
Route::get('/ADM/editarProducto', [App\Http\Controllers\AdminController::class, 'createProduct'])->name('edit.product');
Route::POST('/ADM/proudctoAgregado', [App\Http\Controllers\AdminController::class, 'addProduct'])->name('add.product');
Route::get('/ADM/editarTienda', [App\Http\Controllers\AdminController::class, 'editTienda'])->name('edit.tienda');
Route::POST('/ADM/tiendaEditada', [App\Http\Controllers\AdminController::class, 'updateTienda'])->name('update.tienda');
Route::POST('/ADM/productoEliminado', [App\Http\Controllers\AdminController::class, 'deleteProducto'])->name('delete.producto');
Route::get('/ADM', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index');
Route::get('/ADM/allClear', [App\Http\Controllers\AdminController::class, 'allClear']);

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

Route::get('/About', function () {
    return view('Vistas.About');
});

Route::get('/Blog', function () {
    return view('Vistas.Blog');
});
Route::get('/', function () {
    return view('Vistas.Index');
});


//User
Route::get('/Categorias', [App\Http\Controllers\MainController::class, 'show_Tiendas']);
Route::get('/Categorias/{id}', [App\Http\Controllers\MainController::class, 'show_Categorias']);
Route::get('/Tienda/{id}', [App\Http\Controllers\MainController::class, 'show_Tienda']);
Route::get('/Product/{sku}', [App\Http\Controllers\MainController::class, 'getProduct']);
