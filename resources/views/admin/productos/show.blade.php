@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>{{ __('Detalles producto') }}</h1>
            <form action="{{ route('admin.productos.store') }}" method="post">
                @csrf
                @method('GET')
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" id="exampleInputEmail1" class="form-label">{{ __('Código producto:') }}</label>
                            <input type="text" class="form-control" id="codigo_producto" name="codigo_producto" value="{{ $producto->codigo_producto }}" aria-describedby="textHelp" disabled>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">{{ __('Nombre producto:') }}</label>
                            <input type="text" class="form-control" id="nombre_producto" name="nombre_producto" value="{{ $producto->nombre_producto }}" aria-describedby="textHelp" disabled>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">{{ __('Cantidad actual:')}}</label>
                            <input type="text" class="form-control" id="cantidad_producto" name="cantidad_producto" value="{{ $producto->cantidad_producto}}" aria-describedby="textHelp" disabled>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">{{ __('Precio producto:')}}</label>
                            <input type="text" class="form-control" id="precio_producto" name="precio_producto" value="$ {{ $producto->precio_producto }}" aria-describedby="textHelp" disabled>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">{{ __('Categoria producto:') }}</label>
                            <input type="text" class="form-control" id="product_categories_id" name="product_categories_id" value="{{ $producto->categoriesProducts->descripcion_categoria_producto }}" aria-describedby="textHelp" disabled>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">{{ __('Talla:') }}</label>
                            <input type="text" class="form-control" id="" name="" value="" aria-describedby="texhHelp" disabled>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">{{ __('Color:') }}</label>
                            <input type="text" class="form-control" id="" name="" value="" aria-describedby="textHelp" disabled>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">{{ __('Genero:') }}</label>
                            <input type="text" class="form-control" id="" name="" value="" aria-describedby="textHelp" disabled>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col">    
                        <h1>{{ __('Datos de control') }}</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">{{ __('Fecha de creación:') }}</label>
                            <input type="text" class="form-control" id="created_at" name="created_at" value="{{ $producto->created_at }}" aria-describedby="textHelp" disabled>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">{{ __('Ultima modificación:') }}</label>
                            <input type="text" class="form-control" id="updated_at" name="updated_at" value="{{ $producto->updated_at }}" aria-describedby="textHelp" disabled>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <a href="{{ route('admin.productos.index')}}" class="btn btn-outline-primary">Volver</a>
                        </div>
                    </div>
                </div>
            </form>
        
        </div>
    </div>
</div>
@endsection
