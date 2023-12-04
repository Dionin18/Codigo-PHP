<?php

$nombre = $_POST["nombre"];

if($_POST["nota_1"] < 1 or $_POST["nota_1"] > 7){
    $nota_1 = 1;
}else{
    $nota_1 = $_POST["nota_1"];
}

if($_POST["nota_2"] < 1 or $_POST["nota_2"] > 7){
    $nota_2 = 1;
}else{
    $nota_2 = $_POST["nota_2"];
}

if($_POST["nota_3"] < 1 or $_POST["nota_3"] > 7){
    $nota_3 = 1;
}else{
    $nota_3 = $_POST["nota_3"];
}

if($_POST["nota_4"] < 1 or $_POST["nota_4"] > 7){
    $nota_4 = 1;
}else{
    $nota_4 = $_POST["nota_4"];
}

if($_POST["nota_5"] < 1 or $_POST["nota_5"] > 7){
    $nota_5 = 1;
}else{
    $nota_5 = $_POST["nota_5"];
}

$promedio = ($nota_1 + $nota_2 + $nota_3 + $nota_4 + $nota_5) / 5;

echo "Nombre del estudiante: " . $nombre . "<br><br>";

echo "Nota de Lenguaje: " . $nota_1 . "<br>";

echo "Nota de Matematicas: " . $nota_2 . "<br>";

echo "Nota de Historia: " . $nota_3 . "<br>";

echo "Nota de Ciencias: " . $nota_4 . "<br>";

echo "Nota de Arte: " . $nota_5 . "<br><br>";

echo "Promedio: " . $promedio . "<br>";

if($promedio < 4){
    echo "<h1 style='color:red'>Ha reprobado</h1>";
}else{
    echo "<h1 style='color:green'>Ha aprobado</h1>";
}