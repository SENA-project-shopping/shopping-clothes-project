@extends('layouts.app')

@section('content')
<div class="container text-center">
    <div class="row align-items-center">
        <div class="col">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Productos
                    <i class="fa-solid fa-cart-flatbed"></i>
                </h5>
                <a href="{{ route('admin.productos.index') }}" class="btn btn-primary">Ver Productos</a>
              </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body">
                <h5 class="card-title">Usuarios
                    <i class="fa-solid fa-house-user"></i>
                </h5>
                <a href="{{ route('admin.usuarios.index') }}" class="btn btn-primary">Ver Usuarios</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body">
                <h5 class="card-title">Ventas
                    <i class="fa-solid fa-money-bill"></i>
                </h5>
                <a href="{{ route('admin.ventas.index') }}" class="btn btn-primary">Ver Ventas</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body">
                <h5 class="card-title">Clientes
                    <i class="fa-solid fa-users"></i>
                </h5>
                <a href="{{ route('admin.clientes.index') }}" class="btn btn-primary">Ver Clientes</a>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="card">
        <a href="{{ route('bodega.productos.index') }}" class="btn btn-primary">Ir a la pagina de bodega vista</a>
    </div>
    <br>
    <div class="card">
        <a href="{{ route('vendedor.ventas.index') }}" class="btn btn-primary">Ir a la pagina del vendedor vista</a>
    </div>
    <br>
    <div class="card">
        {{-- <a href="{{ route('cliente.index') }}" class="btn btn-primary">Ir a la pagina del cliente vista</a> --}}
        <a href="" class="btn btn-primary">Ir a la pagina del cliente vista</a>
    </div>
</div>
@endsection
