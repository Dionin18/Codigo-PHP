<?php

//$_GET

echo "<br><br>";
echo "<pre>";
print_r($_GET);
echo "</pre>";

//$_POST

echo "<br><br>";
echo "<pre>";
print_r($_POST);
echo "</pre>";

//$_FILES
echo "<table style='border:1px solid black'>";
foreach($_FILES as $key => $value){
    echo "<tr style='border:1px solid black'> <td> $key </td>";
    echo "<td> $value </td></tr>";
}
echo "</table>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post" enctype="multipart/form-data">
        <label for="n_archivo">Nombre Archivo:</label>
        <input type="text" name="n_archivo" id="n_archivo">

        <br>

        <label for="fecha">Fecha:</label>
        <input type="date" name="fecha" id="fecha">

        <br>
        <label for="archivo">Archivo:</label>
        <input type="file" name="archivo" id="archivo">

        <br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>




averiguar como habilitar apache para ver una pagina web en otro pc
<br>
como crear un codigo qr en php
<br>
crear un script que recorra un $_SERVER
<br>
ver si se hizo la solicitud mediante http o https