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
    Route::get('ventas/generarPDF', [SalesController::class, 'generarPDF'])->name('ventas.generarPDF');
    Route::resources([
        'productos' => ProductsController::class,
        'usuarios' => UserController::class,
        'ventas' => SalesController::class,
        'clientes' => ClientsController::class,
    ]);
});

/* Rutas: Rol Vendedor */

Route::name('vendedor.')->prefix('vendedor')->group(function() {
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

Route::get('/cliente', [App\Http\Controllers\ClientsBuyController::class, 'index'])->name('cliente.index');
Route::get('/cliente/show/{id}', [App\Http\Controllers\ClientsBuyController::class, 'show'])->name('cliente.show');
Route::post('cart/add', [App\Http\Controllers\CartController::class, 'add'])->name('add');
Route::get('cart/checkout', [App\Http\Controllers\CartController::class, 'checkout'])->name('cliente.checkout');
Route::get('cart/clear', [App\Http\Controllers\CartController::class, 'clear'])->name('clear');
Route::post('cart/removeitem', [App\Http\Controllers\CartController::class, 'removeItem'])->name('removeitem');