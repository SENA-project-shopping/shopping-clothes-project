@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-between align-items-center">
        <div class="col-4">
            <a href="{{ route('home') }}" class="btn btn-block btn-outline-secondary">
                <i class="bi bi-house"></i>
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
            <tbody>
                <tr>
                    <td># 18282</td>
                    <td>Fulano perez</td>
                    <td>Cliente prueba</td>
                    <td>2023-11-29 00:00:00</td>
                    <td>
                        <a href="{{ route('admin.ventas.show'), $item->id }}">
                            <i class="bi bi-eye"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td># 18283</td>
                    <td>Fulana perez</td>
                    <td>Cliente prueba 1</td>
                    <td>2023-11-29 00:00:01</td>
                    <td><i class="bi bi-eye"></i></td>
                </tr>
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