@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-between align-items-center">
        <div class="col-4">
            <a href="{{ route('admin.ventas.index') }}" class="btn btn-block btn-outline-secondary">
                <i class="fa-solid fa-arrow-left"></i>
                {{ __('Volver') }}
            </a>
        </div>
        <div class="col-4 text-end">
            <h1>{{ __('Detalle factura') }}</h1>
        </div>
    </div>
    <hr>
    <form action="" method="get">
        @csrf
        @method('GET')
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- Main content -->
                    <div class="invoice p-3 mb-3">
                        <!-- title row -->
                        <div class="row">
                            <div class="col">
                                <h4>Factura Electrónica</h4>
                            </div>
                            <div class="col float-right">
                                <h5 class="text-end">Fecha impresión: {{ $ldate = date('d/m/Y, H:i:s a'); }} </h5>
                            </div>
                            <div class="col-12"></div>
                        <!-- /.col -->
                        </div>
                        <!-- info row -->
                        <div class="row invoice-info">
                            <div class="col-sm-4 invoice-col">
                                De
                                <address>
                                    <strong>Cloneth Blend</strong><br>
                                    Dirección SENA<br>
                                    Neiva, Huila<br>
                                    Phone: (+57) 300-1234567<br>
                                    Email: info@clonethblend.com
                                </address>
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4 invoice-col">
                                Para
                                <address>
                                    <strong>Nombre Cliente</strong><br>
                                    Dirección cliente<br>
                                    Ciudad, Colombia<br>
                                    Phone: (+57) numero cliente<br>
                                    Email: correo.cliente@example.com
                                </address>
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4 invoice-col">
                                <b>Invoice: </b># {{ $venta->codigo_venta }}<br>
                                <b>{{ __('Fecha de venta: ') }}</b>{{ $venta->fecha_facturacion }}<br>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                        <!-- Table row -->
                        <div class="row">
                            <div class="col-12 table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Cantidad</th>
                                            <th>Producto</th>
                                            <th>Color</th>
                                            <th>Talla</th>
                                            <th>Código del producto</th>
                                            <th>Subtotal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Call of Duty</td>
                                            <td>455-981-221</td>
                                            <td>fd</td>
                                            <td>El snort testosterone trophy driving gloves handsome</td>
                                            <td>$64.50</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Need for Speed IV</td>
                                            <td>247-925-726</td>
                                            <td>adsf</td>
                                            <td>Wes Anderson umami biodiesel</td>
                                            <td>$50.00</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Monsters DVD</td>
                                            <td>735-845-642</td>
                                            <td>dfs</td>
                                            <td>Terry Richardson helvetica tousled street art master</td>
                                            <td>$10.70</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Grown Ups Blue Ray</td>
                                            <td>422-568-642</td>
                                            <td>asdf</td>
                                            <td>Tousled lomo letterpress</td>
                                            <td>$25.99</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                        <div class="row">
                            <!-- accepted payments column -->
                            <div class="col-6">
                                <p class="lead">Metodo de pago:</p>
                                <h2 class="text-muted well well-sm shadow-none" style="margin-top: 10px;">{{ $venta->formaPago->descripcion_forma_pago }}</h2>
                            </div>
                            <!-- /.col -->
                            <div class="col-6">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tr>
                                            <th style="width:50%">Subtotal:</th>
                                            <td>$250.30</td>
                                        </tr>
                                        <tr>
                                            <th>IVA (19%)</th>
                                            <td>$10.34</td>
                                        </tr>
                                        <tr>
                                            <th>Total:</th>
                                            <td>$ {{ number_format($venta->precio_total, 2, ',', '.') }}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                        <div class="row no-print">
                            <div class="col-12">
                                <a href="{{ route('admin.ventas.generarPDF', $venta->id) }}" class="btn btn-success float-right" type="button" target="_black">
                                    <i class="fas fa-print"></i>
                                    Imprimir
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /.invoice -->
                </div><!-- /.col -->
            </div><!-- /.row -->
      </section>
      <!-- /.content -->
    </form>
</div>
@endsection