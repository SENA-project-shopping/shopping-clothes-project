@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <a href="{{ route('admin.productos.index') }}" class="btn btn-primary">Ir a la pagina de Productos</a>
            </div>
        </div>
        <div class="col">
            <div class="card">
                {{-- <a href="{{ route('admin.usuarios.index') }}" class="btn btn-primary">Ir a la pagina de Usuarios</a> --}}
            </div>
        </div>
    </div>
    <br>
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                {{-- <a href="{{ route('admin.ventas.index') }}" class="btn btn-primary">Ir a la pagina de Ventas</a> --}}
            </div>
        </div>
        <div class="col">
            <div class="card">
                <a href="{{ route('admin.clientes.index') }}" class="btn btn-primary">Ir a la pagina de Clientes</a>
            </div>
        </div>
    </div>
</div>
@endsection
