@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-between align-items-center">
        <div class="row justify-content-center">
            <div class="col">
                @include('cliente.partials.msg')
            </div>
            <div class="col-2">
                <a href="{{ route('cliente.index') }}" class="btn btn-outline-primary"> 
                    Volver a los productos
                </a>
            </div>
            <hr>
        </div>
        <div class="card">
            <div class="card-body">
                @if (Cart::count())
                <table class="table table-striped">
                    <thead>
                        <th>ID</th>
                        <th>Nombre producto</th>
                        <th>Cantidad</th>
                        <th>Precio producto</th>
                        <th>Importe</th>
                    </thead>
                    <tbody>
                        @foreach (Cart::content() as $item)
                        <tr class="align-middle">
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td style="position: relative; display: flex; flex-direction: row; align-content: center; align-items: center;">
                                <form action="{{ route('decreaseQuantity') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="rowId" value="{{ $item->rowId }}">
                                    <input type="submit" class="btn btn-danger btn-sn" value="-">
                                </form>
                                <h5>{{ $item->qty }}</h5>
                                <form action="{{ route('increaseQuantity') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="rowId" value="{{ $item->rowId }}">
                                    <input type="submit" class="btn btn-danger btn-sn" value="+">
                                </form>
                            </td>
                            <td>${{ number_format($item->price, 2, ',', '.') }}</td>
                            <td>${{ number_format($item->qty * $item->price, 2) }}</td>
                            <td>
                                <form action="{{ route('removeItem') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="rowId" value="{{ $item->rowId }}">
                                    <input type="submit" name="btn" class="btn btn-danger btn-success" value="X">
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr class="fw-bolder">
                            <td colspan="3"></td>
                            <td class="text-end">Subtotal</td>
                            <td class="text-end">${{ number_format(Cart::Subtotal(), 2, ',', '.') }}</td>
                        </tr>
                        <tr class="fw-bolder">
                            <td colspan="3"></td>
                            <td class="text-end">IVA</td>
                            <td class="text-end">${{ number_format(Cart::tax(), 2, ',', '.') }}</td>
                        </tr>
                        <tr class="fw-bolder">
                            <td colspan="3"></td>
                            <td class="text-end">Total</td>
                            <td class="text-end">${{ number_format(Cart::total(), 2, ',', '.') }}</td>
                        </tr>
                    </tfoot>
                </table>
                <div class="row">
                    <div class="col">
                        <a href="{{ route('clear') }}" type="button" class="btn btn-outline-danger text-center">Vaciar Carrito</a>
                    </div>
                    <div class="col-2">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Confirmar compra
                        </button>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Confirmación de compra</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>¿Esta seguro de adquirir los productos?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <a href="{{ route('confirmBuy') }}" type="button" class="btn btn-primary">Comprar productos</a>
                        </div>
                    </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection