@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-between align-items-center">
        <div class="col-4">
            <a href="{{ route('home') }}" class="btn btn-block btn-outline-secondary">
                <i class="fa-solid fa-house"></i>
                {{ __('Volver al incio') }}
            </a>
        </div>
        <div class="col-4 text-end">
            <h1>{{ __('Ventas') }}</h1>
        </div>
    </div>
    <hr>
    <div class="row justify-content-center">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Código Venta</th>
                    <th>Usuario Venta</th>
                    <th>Nombre Cliente</th>
                    <th>Fecha Venta</th>
                    <th>Ver Detalles</th>
                </tr>
            </thead>
            <tbody id="venta">
                @if (count($salesHys) > 0)
                    @foreach ($salesHys as $item)
                        <tr id="AppModelsSales{{ $item->id }}">
                            <td>{{ $item->codigo_venta }}</td>
                            <td>Fulano perez</td>
                            <td>Cliente prueba</td>
                            <td>{{ $item->fecha_facturacion }}</td>
                            <td>
                                <a href="{{ route('admin.ventas.show', $item->id) }}">
                                    <i class="fa-regular fa-eye"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
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

    if ($('#venta tr').length === 1) {
        var colCount = $('#venta tr td').length;
        table.columns().visible(false);
        table.column(0).visible(true);
    }
</script>
@endsection