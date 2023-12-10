<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalesController;

use App\Http\Controllers\ProductsBodegaController;

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

/* Rutas: Rol Administrador */

Route::name('admin.')->prefix('admin')->group(function() {
    Route::resources([
        'productos' => ProductsController::class,
        'usuarios' => UserController::class,
        'ventas' => SalesController::class,
        'clientes' => ClientsController::class,
    ]);
});

/* Rutas: Rol Vendedor */

Route::name('vendedor.')->prefix('vendedor')->group(function() {
    // Route::post('cart/add', [App\Http\Controllers\CartController::class, 'add'])->name('add');
    // Route::get('cart/checkout', [App\Http\Controllers\CartController::class, 'checkout'])->name('checkout');
    // Route::get('cart/clear', [App\Http\Controllers\CartController::class, 'clear'])->name('clear');
    // Route::post('cart/removeitem', [App\Http\Controllers\CartController::class, 'removeitem'])->name('removeitem');
    Route::resources([
        'ventas' => SalesVendedorController::class,
        'cart' => CartController::class,
    ]);
});

/* Rutas: Rol Bodega */

Route::name('bodega.')->prefix('bodega')->group(function() {
    Route::resources([
        'productos' => ProductsBodegaController::class,
    ]);
});

/* Rutas: Cliente */

Route::name('cliente.')->prefix('cliente')->group(function() {
    Route::resources([
        'productos' => ProductsBodegaController::class,
    ]);
});