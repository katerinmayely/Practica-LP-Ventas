<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>--Ventas--</title>
</head>
<body>
    <h1 style="color: blueviolet">Estas son las ventas:</h1>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <th>Código</th>
                <th>Fecha</th>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Subtotal</th>
                <th>ISV</th>
                <th>Total</th>
            </thead>
            <tbody>
                @foreach ($ventas as $venta)
                    <tr>
                        <th>{{$venta->codigo}}</th>
                        <th>{{$venta->fecha}}</th>
                        <th>{{$venta->codigoProducto}}</th>
                        <th>{{$venta->cantidad}}</th>
                        <th>{{$venta->subtotal}}</th>
                        <th>{{$venta->ISV}}</th>
                        <th>{{$venta->total}}</th>
                    </tr>
                    
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>