<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductsRequest;
use App\Models\products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Products::paginate(25);
        return view('admin.productos.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.productos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductsRequest $request)
    {
        $producto = Products::create($request->all());
        $producto->save();
        return redirect()->route('admin.productos.edit', $producto->id)->with('success', 'Producto creado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(products $products)
    {
        return view('admin.productos.show', compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(products $products)
    {
        return view('admin.productos.edit', compact('products'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, products $products)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(products $products)
    {
        //
    }
}
