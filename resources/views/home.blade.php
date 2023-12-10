@extends('layouts.app')

@section('content')
<div class="container text-center">
    <div class="row align-items-center">
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3 class="info-home">{{ $totalProductos }}</h3>
                    <p class="info-home">Productos</p>
                </div>
                <div class="icon">
                    <i class="fas fa-shopping-cart icons-home"></i>
                </div>
                <a href="{{ route('admin.productos.index') }}" class="small-box-footer">
                    Más Información <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3 class="info-home">{{ $totalVentas }}</h3>
                    <p class="info-home">Ventas realizadas</p>
                </div>
                <div class="icon">
                    <i class="fa-solid fa-chart-line icons-home"></i>
                </div>
                <a href="{{ route('admin.ventas.index') }}" class="small-box-footer">
                    Más Información <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>{{ $totalUsuarios }}</h3>
                    <p>Usuarios creados</p>
                </div>
                <div class="icon">
                    <i class="fas fa-user-plus icons-home"></i>
                </div>
                <a href="{{ route('admin.usuarios.index') }}" class="small-box-footer footer-info-home">
                    Más Información <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3 class="info-home">{{ $totalClientes }}</h3>
                    <p class="info-home">Clientes registrados</p>
                </div>
                <div class="icon">
                    <i class="fas fa-users icons-home"></i>
                </div>
                <a href="{{ route('admin.clientes.index') }}" class="small-box-footer">
                    Más Información <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <!-- ./col -->
    </div>
    <div class="row">
        <div class="col">
            <!-- PIE CHART -->
            <div class="card card-danger">
                <div class="card-header">
                  <h3 class="card-title">Pie Chart</h3>
  
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body">
                    <canvas id="pieChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
        </div>
        <div class="col">
            <!-- STACKED BAR CHART -->
            <div class="card card-success">
                <div class="card-header">
                  <h3 class="card-title">Stacked Bar Chart</h3>
  
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body">
                  <div class="chart">
                    <canvas id="stackedBarChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
        </div>
    </div>
    <hr>
    <div class="card">
        <a href="{{ route('bodega.productos.index') }}" class="btn btn-primary">Ir a la pagina de bodega vista</a>
    </div>
    <br>
    <div class="card">
        <a href="{{ route('vendedor.ventas.index') }}" class="btn btn-primary">Ir a la pagina del vendedor vista</a>
    </div>
    <br>
    <div class="card">
        {{-- <a href="{{ route('clientes.comprar.index') }}" class="btn btn-primary">Ir a la pagina del cliente vista</a> --}}
        <a href="" class="btn btn-primary">Ir a la pagina del cliente vista</a>
    </div>
</div>
@endsection
