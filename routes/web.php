<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\SalesController;

// use 

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/* Rutas Administrador: Productos */

Route::get('/admin/productos', [App\Http\Controllers\ProductsController::class, 'index'])->name('admin.productos.index');
Route::get('/admin/productos/crear-producto', [App\Http\Controllers\ProductsController::class, 'create'])->name('admin.productos.create');
Route::get('/admin/productos/editar-producto', [App\Http\Controllers\ProductsController::class, 'edit'])->name('admin.productos.edit');

/* Rutas Administrador: Usuarios */

Route::get('/admin/usuarios', [App\Http\Controllers\UsersController::class, 'index'])->name('admin.usuarios.index');

/* Rutas Administrador: Clientes */

Route::get('/admin/clientes', [App\Http\Controllers\ClientsController::class, 'index'])->name('admin.clientes.index');

/* Rutas Administrador: Categoria Productos */

Route::get('/admin/categoria-productos', [App\Http\Controllers\ProductCategoryController::class, 'index'])->name('admin.categoriaproductos.index');

/* Rutas Administrador: Ventas */