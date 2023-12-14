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
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
@endsection
