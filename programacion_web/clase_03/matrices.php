<?php

//Matrices - Arreglo

//Matriz indexa

$matriz = array("Juan","Pedro","Maria");

echo $matriz[1];

//Matriz asociativa

$matriz2 = array(
    "Nombre" => "Diana", 
    "Apellido" => "Perez",
    "Edad" => 30
);//si hay mas de una variable con el mismo indice, se toma en cuenta la ultima

echo "<br>";
echo "Hola ";
echo $matriz2["Nombre"] . " ";
echo $matriz2["Apellido"] . " ";
echo "de " . $matriz2["Edad"] . " años";

//Matriz multidimensional

$matriz3 = [
    array("Juan","Pedro","Maria"),
    array("Ernesto","Pablo","Carlos")
];


echo "<br>";
echo $matriz3[1][0];

//Matriz multidimensional asociativa

$matriz4 = [
    'Persona_1' => [
        "Nombre" => "Diana", 
        "Apellido" => "Perez",
        "Edad" => 30
    ],
    'Persona_2' => [
        "Nombre" => "Ivan", 
        "Apellido" => "Silva",
        "Edad" => 34
    ],
    'Persona_3' => [
        "Nombre" => "Emilia", 
        "Apellido" => "Gálvez",
        "Edad" => 19
    ],
];

echo "<br>";
echo "Hola " . $matriz4["Persona_3"]["Nombre"] . " " . $matriz4["Persona_3"]["Apellido"] . " de " . $matriz4["Persona_3"]["Edad"] . " años";

//Otra forma de imprimirla

echo "<br>";
echo "<pre>";
print_r($matriz4);
echo "</pre>";

//recorrer una matriz

echo "<br>";
foreach ($matriz as $value){
    echo $value . " ";
}


echo "<br>";
echo "<br>";
foreach ($matriz4 as $value){
    foreach ($value as $key => $invalue){
        echo $key . ": " .$invalue;
        echo "<br>";
    }
    echo "<br>";
}