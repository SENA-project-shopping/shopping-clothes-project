@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="{{ route('admin.productos.index') }}" class="btn btn-block btn-outline-secondary">
                <i class="bi bi-house"></i>
                {{ __('Volver al incio') }}
            </a>
            <hr>
            <h1>{{ __('Editar producto: #' . $producto->codigo_producto) }}</h1>
            <form action="{{ route('admin.productos.update', $producto->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">{{ __('Nombre producto:') }}</label>
                    <input type="text" class="form-control" id="nombre_producto" name="nombre_producto" aria-describedby="textHelp" maxlength="50" autocomplete="off" value="{{ $producto->nombre_producto }}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">{{ __('Cantidad:')}}</label>
                    <input type="text" class="form-control" id="cantidad_producto" name="cantidad_producto" aria-describedby="textHelp" maxlength="5" autocomplete="off" value="{{ $producto->cantidad_producto }}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">{{ __('Precio producto:')}}</label>
                    <input type="text" class="form-control" id="precio_producto" name="precio_producto" aria-describedby="textHelp" maxlength="7" autocomplete="off" value="{{ $producto->precio_producto }}">
                </div>
                <input type="submit" value="{{ __('Editar producto') }}" class="btn btn-primary">
            </form>
        </div>
    </div>
</div>
@endsection
