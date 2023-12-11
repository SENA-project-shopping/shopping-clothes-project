<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use App\Models\Products;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Clients::all();
        return view('admin.clientes.index', compact('clientes'));
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
     * @param  \App\Models\Clients $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Clients $cliente)
    {
        return view('admin.clientes.show', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Clients $clients)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Clients $clients)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Clients $clients)
    {
        //
    }
}
