<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Formulario</h1>
    <form action="Ejercicio_1.1.php" method="POST">
        <label for="nombre">Ingrese el nombre del alumno:</label><br>
        <input type="text" name="nombre" id="nombre"><hr>
        <label>Ingrese las notas del alumno (entre 1 y 7):</label><br><br>
        <label for="nota_1">Nota de Lenguaje:</label><br><input type="number" name="nota_1" id="nota_1"><br>
        <label for="nota_2">Nota de Matematicas:</label><br><input type="number" name="nota_2" id="nota_2"><br>
        <label for="nota_3">Nota de Historia:</label><br><input type="number" name="nota_3" id="nota_3"><br>
        <label for="nota_4">Nota de Ciencias:</label><br><input type="number" name="nota_4" id="nota_4"><br>
        <label for="nota_5">Nota de Arte:</label><br><input type="number" name="nota_5" id="nota_5"><br>
        <br>

        <input type="submit" value="Enviar">
    </form>

</body>
</html>