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
            <h1>{{ __('Usuarios') }}</h1>
        </div>
    </div>
    <hr>
    <div class="row justify-content-center">
        <a href="{{ route('admin.usuarios.create') }}" class="btn btn-block btn-success btn-lg mb-3">{{ __('Crear Usuario') }}</a>
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Nombre Usuario</th>
                    <th>Correo</th>
                    <th>Ver Detalles</th>
                    <th>Editar</th>
                </tr>
            </thead>
            <tbody id="usuarios">
                @if (count($usuarios) > 0)
                    @foreach ($usuarios as $item)
                        <tr id="AppModelsUser{{ $item->id}}">
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>
                                <a href="{{ route('admin.usuarios.show', $item->id) }}">
                                    <i class="bi bi-eye"></i>
                                </a>
                            <td>
                                <a href="{{ route('admin.usuarios.edit', $item->id) }}">
                                    <i class="bi bi-pencil-square"></i>
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

    if ($('#productos tr').length === 1) {
        var colCount = $('#productos tr td').length;
        table.columns().visible(false);
        table.column(0).visible(true);
    }
</script>
@endsection