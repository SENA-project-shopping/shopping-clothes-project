<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Request $requst)
    {
        $producto = Products::find($requst->id);
        if (empty($producto))
            return redirect('/');

        Cart::add(
            $producto->id,
            $producto->nombre_producto,
            1,
            $producto->precio_producto,
            $producto->categoryProduct->descripcion_categoria_producto,
        );

        return redirect()->back()->with('success', 'Producto agregado' . $producto->nombre_producto);
    }
}