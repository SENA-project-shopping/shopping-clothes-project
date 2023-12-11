<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use App\Http\Requests\ProductsRequest;
use App\Models\ColorCategory;
use App\Models\GeneroCategory;
use App\Models\ProductCategory;
use App\Models\Products;
use App\Models\TallaCategory;
use Illuminate\Http\Request;
use Cart;

class ClientsBuyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Products::all();
        return view('cliente.index', compact('productos'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Products $productos
     * @param  \App\Models\ProductCategory $categoryProduct
     * @param  \App\Models\TallaCategory $tallaCategoryProduct
     * @param  \App\Models\ColorCategory $colorCategoryProduct
     * @param  \App\Models\GeneroCategory $generoCategoryProduct
     * @return \Illuminate\Http\Response
     */
    public function show(Products $productos, $id)
    {
        $productos = Products::find($id);
        return view('cliente.show', compact('productos'));
    }
}

