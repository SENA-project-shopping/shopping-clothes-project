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
     * Show the form for creating a new resource.
     */
    public function create()
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
        return view('admin.ventas.show', compact('venta'));
    }

    /**
     * Display the PDF.
     * 
     * @param  \App\Models\Sales $sales
     * @param  \Illuminate\Http\Response
     */
    public function generarPDF(Sales $sales)
    {
        // $sales = Sales::all();
        $dateDownload = date('d/m/Y_H:i:s');

        $pdf = FacadePdf::loadView('admin.ventas.generarPDF', compact('sales'));
        return $pdf->stream();
        // return $pdf->download('reporte_venta_' . $dateDownload . '.pdf');
    }
}
