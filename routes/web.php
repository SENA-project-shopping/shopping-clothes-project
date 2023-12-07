<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalesController;

use App\Http\Controllers\ProductsControllerBodega;

use App\Http\Controllers\SalesVendedorController;

use App\Http\Controllers\CartController;
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

Route::view('/blocked', 'auth.blocked');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/* Rutas Administrador */

Route::name('admin.')->prefix('admin')->group(function() {
    Route::resources([
        'productos' => ProductsController::class,
        'usuarios' => UserController::class,
        'ventas' => SalesController::class,
        'clientes' => ClientsController::class,
    ]);
});

/* Rutas Vendedor */

Route::name('vendedor.')->prefix('vendedor')->group(function() {
    Route::post('cart/add', [App\Http\Controllers\CartController::class, 'add'])->name('add');
    Route::get('cart/checkout', [App\Http\Controllers\CartController::class, 'add'])->name('checkout');
    Route::get('cart/clear', [App\Http\Controllers\CartController::class, 'add'])->name('clear');
    Route::post('cart/removeitem', [App\Http\Controllers\CartController::class, 'add'])->name('removeitem');
    Route::resources([
        'ventas' => SalesVendedorController::class,
    ]);
});

/* Rutas Bodega */

Route::name('bodega.')->prefix('bodega')->group(function() {
    Route::resources([
        'productos' => ProductsControllerBodega::class,
    ]);
});