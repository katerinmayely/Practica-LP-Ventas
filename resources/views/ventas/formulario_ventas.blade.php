<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>--Nueva Compra--</title>
</head>
<body>
    <h1 style="color: blueviolet">Ingrese la informacion de la compra:</h1>

    <form method="POST" action=" {{ route('venta.guardar') }} ">
        @csrf
        <div>
            <label for="codigo">Codigo:</label>
            <input type="text" name="codigo">
        </div>
        <div>
            <label for="fecha">Fecha:</label>
            <input type="text" name="fecha">
        </div>
        <div>
            <label for="codigop">Codigo del Producto:</label>
            <input type="text" name="codigop">
        </div>
        <div>
            <label for="cantidad">Cantidad:</label>
            <input type="text" name="cantidad">
        </div>

        <input type="submit">
    </form>
</body>
</html>