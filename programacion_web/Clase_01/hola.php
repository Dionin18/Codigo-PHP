<?php

echo "Hola Mundo";
echo "<body style='background-color:red'>";

//Variables

$nombre = "Juan";
$apellido = "Perez";

//Concatenar
echo "<br/> <br/>" . $nombre . " " . $apellido;
echo "<br/> $nombre $apellido DAMN se puede asi pero es necesario que sea con comillas dobles";

//Constantes

define('PI',3.14159265);

echo "<br/>" . PI;

?>