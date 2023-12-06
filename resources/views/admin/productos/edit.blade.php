@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="{{ route('admin.productos.index') }}" class="btn btn-block btn-outline-secondary">
                <i class="fa-solid fa-arrow-left"></i>
                {{ __('Volver') }}
            </a>
            <hr>
            <h1>{{ __('Editar producto: #' . $producto->codigo_producto) }}</h1>
            <form action="{{ route('admin.productos.update', $producto->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">{{ __('Nombre producto:') }}</label>
                            <input type="text" class="form-control" id="nombre_producto" name="nombre_producto" aria-describedby="textHelp" maxlength="50" autocomplete="off" value="{{ $producto->nombre_producto }}">
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">{{ __('Cantidad:')}}</label>
                            <input type="text" class="form-control" id="cantidad_producto" name="cantidad_producto" aria-describedby="textHelp" maxlength="5" autocomplete="off" value="{{ $producto->cantidad_producto }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">{{ __('Precio producto:')}}</label>
                            <input type="text" class="form-control" id="precio_producto" name="precio_producto" aria-describedby="textHelp" maxlength="7" autocomplete="off" value="{{ $producto->precio_producto }}">
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">{{ __('Categoria producto:') }}</label>
                            <select name="product_categories_id" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                @foreach ($categoryProduct as $item)
                                    <option value="{{ $item->id }}" {{ $item->id == $producto->product_categories_id ? 'selected' : '' }}>
                                        {{ $item->descripcion_categoria_producto }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">{{ __('Talla:') }}</label>
                            <select name="talla_categories_id" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                @foreach ($tallaCategoryProduct as $item)
                                    <option value="{{ $item->id }}" {{ $item->id == $producto->talla_categories_id ? 'selected' : '' }}>
                                        {{ $item->descripcion_talla_categoria }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">{{ __('Color:') }}</label>
                            <select name="color_categories_id" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                @foreach ($colorCategoryProduct as $item)
                                    <option value="{{ $item->id }}" {{ $item->id == $producto->color_categories_id ? 'selected' : '' }}>
                                        {{ $item->descripcion_color_categoria }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">{{ __('Genero:') }}</label>
                            <select name="genero_categories_id" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                @foreach ($generoCategoryProduct as $item)
                                    <option value="{{ $item->id }}" {{ $item->id == $producto->genero_categories_id ? 'selected' : '' }}>
                                        {{ $item->descripcion_genero_categoria }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="exampleInputPassword1" class="form-label">{{ __('Descripción detalla del producto:') }}</label>
                        <textarea name="descripcion_detallada" id="descripcion_detallada" class="form-control" rows="5">{{ $producto->descripcion_detallada }}</textarea>
                    </div>
                </div>
                <br>
                <input type="submit" value="{{ __('Editar producto') }}" class="btn btn-primary">
            </form>
        </div>
    </div>
</div>
@endsection
