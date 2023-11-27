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
      <h1>{{ __('Productos') }}</h1>
    </div>
  </div>
  <hr>
  <div class="row justify-content-center">
    <a href="{{ route('admin.productos.create') }}" class="btn btn-block btn-success btn-lg mb-3">Crear Producto</a>
    <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>Codigo Producto</th>
            <th>Nombre Producto</th>
            <th>Cantidad Producto</th>
            <th>Precio Producto</th>
            <th>Categoria Producto</th>
            <th>Ver Detalles</th>
            <th>Editar</th>
          </tr>
        </thead>
        <tbody id="productos">
          @forelse ($productos as $item)
          <tr id="AppModelsproducts{{ $item->id }}">
            <td>{{ $item->codigo_producto }}</td>
            <td>{{ $item->nombre_producto }}</td>
            <td>{{ $item->cantidad_producto }}</td>
            <td>$ {{ $item->precio_producto }}</td>
            <td>{{ $item->categoryProduct->descripcion_categoria_producto }}</td>
            <td>
              <a href="{{ route('admin.productos.show', $item->id) }}">
                <i class="fa-light fa-eye"></i>
                <i class="bi bi-eye"></i>
              </a>
            </td>
            <td>
              <a href="{{ route('admin.productos.edit', $item->id) }}">
                <i class="bi bi-pencil-square"></i>
              </a>
            </td>
          </tr>
          @empty
          <tr class="px-4 py-2 text-center">
            <td colspan="6">No hay productos registrados</td>
          </tr>
          @endforelse
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
      responsive: true
    });
  });
</script>
@endsection
