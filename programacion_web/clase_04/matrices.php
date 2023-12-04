<?php

$frutas = array(
    "manzana",
    "pera",
    "naranja"
);
//empece a grabar

//acceder al elemento
echo $frutas[1];

//modificar un elemento de la matriz
echo "<br>";
$frutas[0] = "uva";
echo $frutas[0];

//agregar un elemento
$frutas[] = "manzana";

echo "<br><pre>";
print_r($frutas);
echo "</pre>";

/*
matriz asociativa
*/

$persona = array(
    "nombre" => "Juan",
    "apellido" => "Perez",
    "edad" => 25
);

//acceder al elemento
echo "<br>";
echo $persona["nombre"];

//modificar el contenido
$persona["nombre"] = "Pedro";
echo "<br>";
echo $persona["nombre"];

//añadir un elemento
$persona["telefono"] = 9999999;

echo "<br><pre>";
print_r($persona);
echo "</pre>";

//tarea: como ordenar una matriz en php y como eliminar un elemento de la matriz

/*

*/