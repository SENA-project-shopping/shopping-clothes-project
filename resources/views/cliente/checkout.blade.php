@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-between align-items-center">
        <div class="card">
            <div class="card-body">
                @if (Cart::count())
                <table class="table table-striped">
                    <thead>
                        <th>Código producto</th>
                        <th>Nombre producto</th>
                        <th>Cantidad</th>
                        <th>Precio producto</th>
                    </thead>
                    <tbody>
                        @foreach (Cart::content() as $item)
                        <tr class="align-middle">
                            <td>{{ $item->codigo_producto }}</td>
                            <td>{{ $item->nombre_producto }}</td>
                            <td>{{ $item->cantidad_producto }}</td>
                            <td>{{ $item->precio_producto }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection