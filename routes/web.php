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

use App\Http\Controllers\ClientsBuyController;
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
    Route::get('ventas/generarPDF/{venta}', [SalesController::class, 'generarPDF'])->name('ventas.generarPDF');
    Route::resources([
        'productos' => ProductsController::class,
        'usuarios' => UserController::class,
        'ventas' => SalesController::class,
        'clientes' => ClientsController::class,
    ]);
});

/* Rutas: Rol Bodega */

Route::get('/bodega', [App\Http\Controllers\ProductsBodegaController::class, 'index'])->name('bodega.index');
Route::get('/bodega/show/{producto}', [App\Http\Controllers\ProductsBodegaController::class, 'show'])->name('bodega.show');
Route::get('/bodega/edit/{producto}', [App\Http\Controllers\ProductsBodegaController::class, 'edit'])->name('bodega.edit');
Route::put('/bodega/update/{producto}', [App\Http\Controllers\ProductsBodegaController::class, 'update'])->name('bodega.update');

/* Rutas: Cliente */

Route::get('/cliente', [App\Http\Controllers\ClientsBuyController::class, 'index'])->name('cliente.index');
Route::get('/cliente/show/{id}', [App\Http\Controllers\ClientsBuyController::class, 'show'])->name('cliente.show');
Route::post('cart/add', [App\Http\Controllers\CartController::class, 'add'])->name('add');
Route::get('cart/checkout', [App\Http\Controllers\CartController::class, 'checkout'])->name('cliente.checkout');
Route::get('cart/confirmBuy', [App\Http\Controllers\CartController::class, 'confirmBuy'])->name('confirmBuy');
Route::get('cart/clear', [App\Http\Controllers\CartController::class, 'clear'])->name('clear');
Route::post('cart/removeItem', [App\Http\Controllers\CartController::class, 'removeItem'])->name('removeItem');

Route::post('cart/increaseQuantity', [App\Http\Controllers\CartController::class, 'increaseQuantity'])->name('increaseQuantity');
Route::post('cart/decreaseQuantity', [App\Http\Controllers\CartController::class, 'decreaseQuantity'])->name('decreaseQuantity');