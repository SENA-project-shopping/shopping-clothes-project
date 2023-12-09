<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductsRequest;
use App\Models\ColorCategory;
use App\Models\GeneroCategory;
use App\Models\ProductCategory;
use App\Models\products;
use App\Models\TallaCategory;
use Illuminate\Http\Request;

class ProductsBodegaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Products::all();
        $categoryProduct = ProductCategory::all();
        $tallaCategoryProduct = TallaCategory::all();
        $colorCategoryProduct = ColorCategory::all();
        $generoCategoryProduct = GeneroCategory::all();
        return view('bodega.productos.index', compact('productos', 'categoryProduct', 'tallaCategoryProduct', 'colorCategoryProduct', 'generoCategoryProduct'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Products $producto
     * @param  \App\Models\ProductCategory $categoryProduct
     * @param  \App\Models\TallaCategory $tallaCategoryProduct
     * @param  \App\Models\ColorCategory $colorCategoryProduct
     * @param  \App\Models\GeneroCategory $generoCategoryProduct
     * @return \Illuminate\Http\Response
     */
    public function show(Products $producto)
    {
        $categoryProduct = ProductCategory::all();
        $tallaCategoryProduct = TallaCategory::all();
        $colorCategoryProduct = ColorCategory::all();
        $generoCategoryProduct = GeneroCategory::all();
        return view('bodega.productos.show', compact('producto', 'categoryProduct', 'tallaCategoryProduct', 'colorCategoryProduct', 'generoCategoryProduct'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Products $producto
     * @param  \App\Models\ProductCategory $categoryProduct
     * @param  \App\Models\TallaCategory $tallaCategoryProduct
     * @param  \App\Models\ColorCategory $colorCategoryProduct
     * @param  \App\Models\GeneroCategory $generoCategoryProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(Products $producto)
    {
        $categoryProduct = ProductCategory::all();
        $tallaCategoryProduct = TallaCategory::all();
        $colorCategoryProduct = ColorCategory::all();
        $generoCategoryProduct = GeneroCategory::all();
        return view('bodega.productos.edit', compact('producto', 'categoryProduct', 'tallaCategoryProduct', 'colorCategoryProduct', 'generoCategoryProduct'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\Products $producto
     * @param  \App\Models\ProductCategory $categoryProduct
     * @param  \App\Models\TallaCategory $tallaCategoryProduct
     * @param  \App\Models\ColorCategory $colorCategoryProduct
     * @param  \App\Models\GeneroCategory $generoCategoryProduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Products $producto)
    {
        $cantidadActual = $producto->cantidad_producto;
        $cantidadNueva = $request->input('cantidad_producto');
        $nuevaCantidadTotal = $cantidadActual + $cantidadNueva;
        $producto->update(['cantidad_producto' => $nuevaCantidadTotal]);
        return redirect()->route('bodega.productos.show', $producto->id)->with('success', 'Producto editado con éxito');
    }
}