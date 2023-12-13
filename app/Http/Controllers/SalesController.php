<?php

namespace App\Http\Controllers;

use App\Models\Sales;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Illuminate\Http\Request;

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
     * Display the specified resource.
     * 
     * @param  \App\Models\Sales $sales
     * @param  \Illuminate\Http\Response
     */
    public function show(Sales $venta)
    {
        return view('admin.ventas.show', compact('venta'));
    }

    /**
     * Display the PDF.
     * 
     * @param  \App\Models\Sales $venta
     * @param  \Illuminate\Http\Response
     */
    public function generarPDF(Sales $venta)
    {
        $dateDownload = date('d/m/Y_H:i:s');
        $pdf = FacadePdf::loadView('admin.ventas.generarPDF', compact('venta'));
        return $pdf->stream();
    }
}
