<?php

namespace App\Http\Controllers;

use App\Models\Cart as ModelsCart;
use App\Models\Products;
use Illuminate\Http\Request;
use Cart;

class CartController extends Controller
{
    public function add(Request $request)
    {
        $producto = Products::find($request->id);
        if (empty($productos))
            return redirect('cliente');

        Cart::add(
            $producto->id,
            $producto->nombre_producto,
            1,
            $producto->precio_producto,
            array($producto->categoryProduct->descripcion_categoria_producto),
        );
        return redirect()->back()->with('success', '$producto->nombre_producto ¡Agregago al carrito!');
    }

    public function checkout() {
        return view('cliente.checkout');
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