<?php

$numero1 = $_GET["num_1"];
$numero2 = $_GET["num_2"];
$op = $_GET["operacion"];

if($op == "+"){
    echo "La suma de los numeros es: " . $numero1 + $numero2;
}else if($op == "-"){
    echo "La resta de los numeros es: " . $numero1 - $numero2;
}else if($op == "x"){
    echo "La multiplicacion de los numeros es: " . $numero1 * $numero2;
}else if($op == "/"){
    echo "La division de los numeros es: " . floor($numero1 / $numero2);
}