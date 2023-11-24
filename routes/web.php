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

/* Rutas Administrador */

Route::name('admin.')->prefix('admin')->group(function() {
    Route::resources([
        'productos' => ProductsController::class,
        'usuarios' => UsersController::class,
        'clientes' => ClientsController::class,
        // 'categoria-producto' => ProductCategoryController::class,
        // 'ventas' => SalesController::class
    ]);    
});