@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="row justify-content-center">
            <div class="col">
                @include('cliente.partials.msg')
            </div>
            <div class="col ">
                <a href="{{ route('cliente.checkout') }}" class="btn btn-outline-primary"> 
                    <i class="fa-solid fa-cart-shopping"></i> Productos en el carrito:
                    <span class="badge bg-danger">{{ \Cart::count() }}</span>
                </a>
            </div>
            <hr>
        </div>
        @foreach($productos as $item)
            <div class="col-3">
                <div class="card">
                    <div class="card-body text-center">
                        <h1>{{ $item->id }}</h1>
                        <h3>{{ $item->nombre_producto }}</h3>
                        <h5>{{ number_format($item->precio_producto, 2, ',', '.') }}</h5>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col">
                                <a href="{{ route('cliente.show', $item->id) }}" class="btn btn-outline-info"><i class="fas fa-eye"></i> Ver detalles</a>
                            </div>
                            <div class="col">
                                <form action="{{ route('add') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $item->id }}">
                                    <input type="submit" name="btn" class="btn btn-outline-success w-100" value="Agregar">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
            </div>
        @endforeach
    </div>
</div>
@endsection