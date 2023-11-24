@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1>{{ __('Productos') }}</h1>
        <a href="{{ route('admin.productos.create') }}" class="btn btn-success">Crear Producto</a>
        <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nombre Producto</th>
                <th>Cantidad Producto</th>
                <th>Ver Detalles</th>
                <th>Editar</th>
              </tr>
            </thead>
            <tbody id="productos">
              @forelse ($productos as $item)
              <tr id="AppModelsproducts{{ $item->id }}">
                <td>{{ $item->id }}</td>
                <td>{{ $item->nombre_producto }}</td>
                <td>{{ $item->cantidad_producto }}</td>
                <td>
                  <a href="{{ route('admin.productos.edit', $item->id) }}">
                    <i class="fas fa-eye"></i>
                  </a>
                </td>
                <td>
                  <a href="">
                    <i class="fas fa-pencil"></i>
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
<script>
  function productoData(item) {
    window.Echo.private("App.Models.Producto." + item.id)
    .listen(".ProductoUpdated", (e) => {
      document.getElementById('AppModelsProducto' + e.model.id + 'id').innerText = e.model.id;
    });
    return { data: item }
  }
</script>
@endsection
