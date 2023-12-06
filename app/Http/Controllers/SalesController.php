<?php

namespace App\Http\Controllers;

use App\Models\Sales;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\PDF;

class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salesHys = Sales::all();
        return view('admin.ventas.index', compact('salesHys'));
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
        return view('admin.ventas.show', compact('venta'));
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

    public function generarPDF($ventaId)
    {
        // Obtén la información de la venta, por ejemplo:
        $venta = Sales::find($ventaId);

        // Carga la vista en una variable
        $html = view('admin.ventas.show', compact('venta'))->render();

        // Configura el PDF con Dompdf
        $pdf = PDF::loadHtml($html);

        // Opcional: Personaliza la configuración del PDF
        $pdf->setOptions(['isHtml5ParserEnabled' => true, 'isPhpEnabled' => true]);
        
        // Guarda o descarga el PDF
        return $pdf->download('detalle_factura.pdf');
    }
}
