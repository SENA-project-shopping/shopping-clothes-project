@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-between align-items-center">
        <div class="col-4">
            <h1>{{ __('Productos venta') }}</h1>
        </div>
        <div class="col-4 text-end">
            <a href="" class="btn btn-block btn-outline-secondary">
                <i class="fa-solid fa-bag-shopping"></i>
                {{ __('Ver carrito ventas') }}
            </a>
        </div>
    </div>
    <hr>
    <div class="row justify-content-center">
        @include('vendedor.layout.msg')
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Codigo Producto</th>
                    <th>Nombre Producto</th>
                    <th>Categoria Producto</th>
                    <th>Agregar</th>
                </tr>
            </thead>
            <tbody id="productos">
                @if (count($productos) > 0)
                    @foreach ($productos as $item)
                    <tr id="AppModelsProducts{{ $item->id }}">
                        <td>{{ $item->codigo_producto }}</td>
                        <td>{{ $item->nombre_producto }}</td>
                        <td>{{ $item->categoryProduct->descripcion_categoria_producto }}</td>
                        <td>
                            <form action="" method="POST">
                            @csrf
                                <input type="hidden" name="product_id" value="{{ $item->id }}">
                                <input type="submit" name="btn" class=""><i class="fa-solid fa-plus"></i>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                @else
                    <tr class="px-4 py-2 text-center">
                        <td colspan="7">No hay productos registrados</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.5.0/js/responsive.bootstrap5.min.js"></script>
<script>
    $(document).ready(function() {
        $('#example1').DataTable({
            responsive: true,
        });
    });

    if ($('#productos tr').length === 1) {
        var colCount = $('#productos tr td').length;
        table.columns().visible(false);
        table.column(0).visible(true);
    }
</script>
@endsection