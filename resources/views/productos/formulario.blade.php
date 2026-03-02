<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/producto" method="post">
        @csrf
        <label for="nombre">Nombre:</label><br>
        <input type="text" name="nombre" placeholder="Nombre del producto"><br>
        <label for="unidad">Unidad de medida:</label><br>
        <input type="text" name="unidad" placeholder="Unidad de medida del producto"><br>
        <label for="nombre">Precio de venta:</label><br>
        <input type="text" name="precio_venta" placeholder="Precio de venta del producto"><br>
        <label for="nombre">Precio de compra:</label><br>
        <input type="text" name="precio_compra" placeholder="Precio de compra del producto"><br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>