{{-- @dd($venta); --}}
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte - Factura N°{{ $venta->codigo_venta }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
    crossorigin="anonymous">
    <style>
        table,
        th,
        td {
            border: 1px solid;
        }

        tr {
            text-align: center;
        }

        .title-table th {
            padding: 10px 0;
        }

        .second-table {
            text-align: right;
        }
    </style>
</head>
<body>
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
                            <img src="images/cloneth_blend_logo.jpeg" style="width: 150px;">
                            <div class="col float-right">
                                <h5 class="text-end">Fecha impresión: {{ $ldate = date('d/m/Y - H:i:s a'); }} </h5>
                            </div>
                            <div class="col">
                                <h2>Factura Electrónica</h2>
                            </div>
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
                                <b>Número de factura: </b># {{ $venta->codigo_venta }}<br>
                                <b>{{ __('Fecha de venta: ') }}</b>{{ $venta->fecha_facturacion }}<br>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                        <br>
                        <!-- Table row -->
                        <div class="row">
                            <div class="col-12 table-responsive">
                                <table id="example1" class="table table-bordered" style="border-collapse: collapse;">
                                    <thead>
                                        <tr class="title-table">
                                            <th>Cantidad</th>
                                            <th>Producto</th>
                                            <th>Color</th>
                                            <th>Talla</th>
                                            <th>Código del producto</th>
                                            <th>Precio producto</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Producto 1</td>
                                            <td>Blanco</td>
                                            <td>XS</td>
                                            <td>156489</td>
                                            <td>$64.50</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Producto 10</td>
                                            <td>Gris</td>
                                            <td>M</td>
                                            <td>65436</td>
                                            <td>$50.00</td>
                                        </tr>
                                        <tr>
                                            <td>20</td>
                                            <td>Producto 5</td>
                                            <td>Verde</td>
                                            <td>L</td>
                                            <td>987624</td>
                                            <td>$10.70</td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td>Producto 17</td>
                                            <td>Rosado</td>
                                            <td>XL</td>
                                            <td>6894</td>
                                            <td>$25.99</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                        <div class="row justify-content-end">
                            <div class="col-4"></div>
                            <!-- accepted payments column -->
                            <!-- /.col -->
                            <div class="col-4">
                                <div class="table-responsive">
                                    <table class="table ">
                                        <tr class="second-table">
                                            <th style="width:50%">Subtotal:</th>
                                            <td>$250.30</td>
                                        </tr>
                                        <tr class="second-table">
                                            <th>IVA (19%)</th>
                                            <td>$10.34</td>
                                        </tr>
                                        <tr class="second-table">
                                            <th>Total:</th>
                                            <td>$ {{ number_format($venta->precio_total, 2, ',', '.') }}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-6">
                                <p class="lead">Metodo de pago:</p>
                                <h2 class="text-muted well well-sm shadow-none" style="margin-top: 10px;">{{ $venta->formaPago->descripcion_forma_pago }}</h2>
                            </div>
                        </div>
                    </div>
                    <!-- /.invoice -->
                </div><!-- /.col -->
            </div><!-- /.row -->
      </section>
      <!-- /.content -->
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" 
    crossorigin="anonymous"></script>
</body>
{{-- @endforeach --}}