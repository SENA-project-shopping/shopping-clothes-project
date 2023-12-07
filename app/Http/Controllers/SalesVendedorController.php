<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Sales;
use Illuminate\Http\Request;

class SalesVendedorController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Products::all();
        return view('vendedor.ventas.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     * 
     * @param  \App\Models\Sales $sales
     * @param  \Illuminate\Http\Response
     */
    public function show(Sales $venta)
    {
        // dd($venta->toArray());
        // return view('admin.ventas.show', compact('venta'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sales $sales)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sales $sales)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sales $sales)
    {
        //
    }
}
