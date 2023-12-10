<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Request $request)
    {
        $producto = Products::find($request->producto_id);

        Cart::add(
            $producto->id,
            $producto->nombre_producto,
            $producto->precio_producto,
            1,
            // $producto->categoryProduct->descripcion_categoria_producto,
        );
        return back()->with('success', '$producto->nombre_producto ¡Agregago al carrito!');
    }

    public function cart() {
        return view('checkout');
    }

    public function removeitem(Request $request) {
        Cart::remove([
            'id' => $request->id,
        ]);

        return back()->with('success', 'Producto eliminado del carrito');
    }

    public function clear() {
        Cart::clear();
        return back()->with('success', 'Carrito vacio!');
    }
}