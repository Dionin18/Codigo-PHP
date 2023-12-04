<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Formulario</h1>
    <form action="Ejercicio_3.3.php" method="get">
        <label for="numeros">Ingrese los numeros a operar:</label><br>
        <input type="number" name="num_1" id="num_1"><br>
        <input type="number" name="num_2" id="num_2"><br>
        <select name="operacion" id="operacion">
            <option selected disabled>Seleccione una operación</option>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="x">x</option>
            <option value="/">/</option>
        </select>
        <br>

        <input type="submit" value="Enviar">
    </form>

</body>
</html>