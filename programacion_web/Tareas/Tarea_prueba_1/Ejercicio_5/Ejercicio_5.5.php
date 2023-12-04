<?php

$nota_1 = $_GET["nota_1"];
$nota_2 = $_GET["nota_2"];
$nota_3 = $_GET["nota_3"];
$nota_4 = $_GET["nota_4"];
$nota_5 = $_GET["nota_5"];

if(empty($nota_1) or empty($nota_2) or empty($nota_3) or empty($nota_4) or empty($nota_5)){
    echo "Faltan notas por ingresar";
}else{
    $promedio = ($nota_1 + $nota_2 + $nota_3 + $nota_4 + $nota_5) / 5;
    switch(true){
        case ($promedio < 4):
            echo "Tu promedio es de " . $promedio . ", deberías estudiar más.";
            break;
        case ($promedio >= 4 and $promedio < 5.5):
            echo "Tu promedio es de " . $promedio . ", estás cerca, sigue esforzándote.";
            break;
        case ($promedio >= 5.5):
            echo "Tu promedio es de " . $promedio . ", ¡Buen trabajo!";
            break;
    }
}