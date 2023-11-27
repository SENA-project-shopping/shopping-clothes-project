<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductsRequest;
use App\Models\ProductCategory;
use App\Models\products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Products::paginate(15);
        $categoriasProducto = ProductCategory::all();
        return view('admin.productos.index', compact('productos', 'categoriasProducto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoryProduct = ProductCategory::all();
        return view('admin.productos.create', compact('categoryProduct'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductsRequest $request)
    {
        $codigoProductoUnico = mt_rand(100, 999999);

        $request->merge(['codigo_producto' => $codigoProductoUnico]);

        $producto = Products::create($request->all());
        $producto->save();
        return redirect()->route('admin.productos.show', $producto->id)->with('success', 'Producto creado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @param  \App\Models\ProductCategory $categoryProduct
     * @return \Illuminate\Http\Response
     */
    public function show(Products $producto)
    {
        $categoryProduct = ProductCategory::all();
        return view('admin.productos.show', compact('producto', 'categoryProduct'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Products $producto)
    {
        $categoryProduct = ProductCategory::all();
        return view('admin.productos.edit', compact('producto', 'categoryProduct'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Products $producto)
    {
        $producto->update($request->all());
        return redirect()->route('admin.productos.show', $producto->id)->with('success', 'Producto creado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(products $products)
    {
        //
    }
}
