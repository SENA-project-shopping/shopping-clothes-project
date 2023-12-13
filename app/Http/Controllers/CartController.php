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
        $productos = Products::find($request->id);

        if (empty($productos))
            return redirect('cliente');

        Cart::add(
            $productos->id,
            $productos->nombre_producto,
            1,
            $productos->precio_producto,
            array($productos->categoryProduct->descripcion_categoria_producto),
        );
        return back()->with('success', 'Producto: ' . $productos->nombre_producto . '¡Agregado al carrito!');
    }

    public function checkout() 
    {
        return view('cliente.checkout');
    }

    public function removeItem(Request $request) 
    {
        Cart::remove($request->rowId);
        return back()->with('success', '¡Producto eliminado del carrito!');
    }

    public function confirmBuy()
    {
        Cart::destroy();
        return back()->with('success', 'Gracias por comprar nuestros productos!. En un momento uno de nuestros asesores empacara tu pedido.');
    }

    public function clear() 
    {
        Cart::destroy();
        return back()->with('success', '¡Carrito vacio!');
    }

    public function increaseQuantity(Request $request)
    {
        $item = Cart::get($request->rowId);
        $qty = $item->qty + 1;
        Cart::update($request->rowId, $qty);

        return redirect()->back();
    }

    public function decreaseQuantity(Request $request)
    {
        $item = Cart::get($request->rowId);
        $qty = $item->qty - 1;
        Cart::update($request->rowId, $qty);

        return redirect()->back();
    }
}