@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-between align-items-center">
        <div class="col">
            <a href="{{ route('cliente.index') }}" class="btn btn-block btn-outline-secondary">
                <i class="fa-solid fa-arrow-left"></i>
                {{ __('Volver') }}
            </a>
        </div>
        <div class="col">
            <h1 class="text-end">{{ __('Detalle producto') }}</h1>
        </div>
    </div>
    <hr>
    <section class="content">
        <!-- Default box -->
        <div class="card card-solid">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <div class="col-12">
                        <img src="{{ asset('cart/camisa-clasica.jpg') }}" class="product-image" alt="Product Image" style="width: 500px">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <h3 class="my-3">{{ $productos->nombre_producto }}</h3>
                        <hr>
                        <h4>Colores disponibles</h4>
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-default text-center">
                                Verde
                                <br>
                                <i class="fas fa-circle fa-2x text-green"></i>
                            </label>
                            <label class="btn btn-default text-center">
                                Azul
                                <br>
                                <i class="fas fa-circle fa-2x text-blue"></i>
                            </label>
                            <label class="btn btn-default text-center">
                                Rosa
                                <br>
                                <i class="fas fa-circle fa-2x text-purple"></i>
                            </label>
                            <label class="btn btn-default text-center">
                                Rojo
                                <br>
                                <i class="fas fa-circle fa-2x text-red"></i>
                            </label>
                            <label class="btn btn-default text-center">
                                Naraja
                                <br>
                                <i class="fas fa-circle fa-2x text-orange"></i>
                            </label>
                        </div>
            
                        <h4 class="mt-3">Tamaños disponibles</h4>
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-default text-center">
                                <input type="radio" name="color_option" id="color_option_b1" autocomplete="off">
                                <span class="text-xl">S</span>
                                <br>
                            </label>
                            <label class="btn btn-default text-center">
                                <input type="radio" name="color_option" id="color_option_b2" autocomplete="off">
                                <span class="text-xl">M</span>
                                <br>
                            </label>
                            <label class="btn btn-default text-center">
                                <input type="radio" name="color_option" id="color_option_b3" autocomplete="off">
                                <span class="text-xl">L</span>
                                <br>
                            </label>
                            <label class="btn btn-default text-center">
                                <input type="radio" name="color_option" id="color_option_b4" autocomplete="off">
                                <span class="text-xl">XL</span>
                                <br>
                            </label>
                        </div>
                        <h4 class="mt-3">Estilo</h4>
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-default text-center">
                                <input type="radio" name="color_option" id="color_option_b1" autocomplete="off">
                                <span class="text-xl">Femenino</span>
                                <br>
                            </label>
                            <label class="btn btn-default text-center">
                                <input type="radio" name="color_option" id="color_option_b2" autocomplete="off">
                                <span class="text-xl">Masculino</span>
                                <br>
                            </label>
                            <label class="btn btn-default text-center">
                                <input type="radio" name="color_option" id="color_option_b3" autocomplete="off">
                                <span class="text-xl">Unisex</span>
                                <br>
                            </label>
                        </div>
                        <div class="bg-gray py-2 px-3 mt-4">
                            <h2>Precio: ${{  number_format($productos->precio_producto, 2, ',', '.') }}</h2>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <nav class="w-100">
                        <div class="nav nav-tabs" id="product-tab" role="tablist">
                        <a class="nav-item nav-link active" id="product-desc-tab" role="tab" aria-controls="product-desc" aria-selected="true">Descripción del producto</a>
                        </div>
                    </nav>
                    <div class="tab-content p-3" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab">{{ $productos->descripcion_detallada }}</div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </section>
</div>

@endsection