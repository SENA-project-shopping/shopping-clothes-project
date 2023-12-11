<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductsRequest;
use App\Models\ColorCategory;
use App\Models\GeneroCategory;
use App\Models\ProductCategory;
use App\Models\Products;
use App\Models\TallaCategory;
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
        $productos = Products::all();
        $categoryProduct = ProductCategory::all();
        $tallaCategoryProduct = TallaCategory::all();
        $colorCategoryProduct = ColorCategory::all();
        $generoCategoryProduct = GeneroCategory::all();
        return view('admin.productos.index', compact('productos', 'categoryProduct', 'tallaCategoryProduct', 'colorCategoryProduct', 'generoCategoryProduct'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoryProduct = ProductCategory::all();
        $tallaCategoryProduct = TallaCategory::all();
        $colorCategoryProduct = ColorCategory::all();
        $generoCategoryProduct = GeneroCategory::all();
        return view('admin.productos.create', compact('categoryProduct', 'tallaCategoryProduct', 'colorCategoryProduct', 'generoCategoryProduct'));
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
        return view('admin.productos.show', compact('producto', 'categoryProduct', 'tallaCategoryProduct', 'colorCategoryProduct', 'generoCategoryProduct'));
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
        return view('admin.productos.edit', compact('producto', 'categoryProduct', 'tallaCategoryProduct', 'colorCategoryProduct', 'generoCategoryProduct'));
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
        $producto->update($request->all());
        return redirect()->route('admin.productos.show', $producto->id)->with('success', 'Producto editado con éxito');
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
