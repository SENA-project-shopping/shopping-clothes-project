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
            <h1>{{ __('Crear producto') }}</h1>
            <form action="{{ route('admin.productos.store') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">{{ __('Nombre producto:') }}</label>
                            <input type="text" class="form-control" id="nombre_producto" name="nombre_producto" aria-describedby="textHelp" maxlength="50" autocomplete="off">
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">{{ __('Cantidad:')}}</label>
                            <input type="text" class="form-control" id="cantidad_producto" name="cantidad_producto" aria-describedby="textHelp" maxlength="5" autocomplete="off">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">{{ __('Precio producto:')}}</label>
                            <input type="text" class="form-control" id="precio_producto" name="precio_producto" aria-describedby="textHelp" maxlength="7" autocomplete="off">
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">{{ __('Categoria producto:') }}</label>
                            <select name="product_categories_id" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                @foreach ($categoryProduct as $item)
                                    <option value="{{ $item->id }}">
                                        {{ $item->descripcion_categoria_producto }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>                    
                </div>
                <input type="submit" value="{{ __('Guardar producto') }}" class="btn btn-primary">
            </form>
        </div>
    </div>
</div>
@endsection
