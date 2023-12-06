@extends('layouts.app')

@section('content')
<div class="container text-center">
    <div class="row align-items-center">
        <div class="col">
            <div class="card">
                <a href="{{ route('admin.productos.index') }}" class="btn btn-primary">Ir a la pagina de Productos</a>
            </div>
            <br>
            <div class="card">
                <a href="{{ route('admin.usuarios.index') }}" class="btn btn-primary">Ir a la pagina de Usuarios</a>
            </div>
            <br>
            <div class="card">
                <a href="{{ route('admin.ventas.index') }}" class="btn btn-primary">Ir a la pagina de Ventas</a>
            </div>
            <br>
            <div class="card">
                <a href="{{ route('admin.clientes.index') }}" class="btn btn-primary">Ir a la pagina de Clientes</a>
            </div>
            <br>
            <hr>
            <br>
            <div class="card">
                <a href="" class="btn btn-primary">Ir a la pagina de bodega vista</a>
            </div>
            <br>
            <div class="card">
                <a href="" class="btn btn-primary">Ir a la pagina del vendedor vista</a>
            </div>
            <br>
            <div class="card">
                <a href="" class="btn btn-primary">Ir a la pagina del cliente vista</a>
            </div>
        </div>
    </div>
</div>
@endsection
