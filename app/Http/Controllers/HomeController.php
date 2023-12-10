<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use App\Models\Products;
use App\Models\Sales;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $totalProductos = Products::count();
        $totalVentas = Sales::count();
        $totalUsuarios = User::count();
        $totalClientes = Clients::count();
        return view('home', compact('totalProductos', 'totalVentas', 'totalUsuarios', 'totalClientes'));
    }
}
