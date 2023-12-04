<?php

//estructura if

/*
Operadores de comparacion

== Igual, compara valor
=== Identicos, compara valor y tipo de dato
!= o <> Diferente
!== No identico
< Menor que
> Mayor que
<= Menor o igual que
>= Mayor o igual que


Operadores logicos

&& o and o AND
|| o or o OR
! o not o NOT

*/

$nombre = "Juan";
$edad = 25;

if ($edad >= 18 && $nombre == "Juan"){
    echo "<h1>Es mayor de edad</h1>";
} else {
    echo "<h1>No es mayor de edad</h1>";
} 


echo "<br>";
/* */
echo "<br>";


$numero = 5;

if ($numero > 0){
    echo "El numero es mayor a 0";
} else if ($numero < 0){
    echo "El numero es menor a 0";
} else {
    echo "El numero es 0";
}



?>