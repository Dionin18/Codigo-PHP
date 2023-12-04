<?php

//Funciones
function saludar($nombre){
    echo "Hola  $nombre";
}

saludar("Emi");

function sumar($a = 20, $b = 10){
    $resultado = $a + $b;
    return $resultado;
}

$res = sumar(4, 10);

echo "<br>";
echo $res;

echo "<br>";
echo sumar();


echo "<br>";