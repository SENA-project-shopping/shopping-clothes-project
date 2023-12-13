@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="{{ route('bodega.index') }}" class="btn btn-block btn-outline-secondary">
                <i class="fa-solid fa-arrow-left"></i>
                {{ __('Volver') }}
            </a>
            <hr>
            <h1>{{ __('Editar producto: #' . $producto->codigo_producto) }}</h1>
            <form action="{{ route('bodega.update', $producto->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">{{ __('Cantidad:')}}</label>
                            <input type="text" class="form-control" id="cantidad_producto" name="cantidad_producto" aria-describedby="textHelp" maxlength="5" autocomplete="off">
                        </div>
                    </div>
                </div>
                <br>
                <input type="submit" value="{{ __('Editar producto') }}" class="btn btn-primary">
            </form>
        </div>
    </div>
</div>
@endsection
