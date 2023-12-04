<?php


//for each

$colores = ["red","green","blue","purple","navy"];
/*
foreach($colores as $color){
    echo "<p style='color: $color;'>$color</p>";
}
*/

$nombres = ["Emilia","Alejandra","Roberto","Choko","Benjamin"];

$numero = 0;
foreach($nombres as $name){
    echo "<h2 style='color: $colores[$numero];'>Hola <i><u>$name</u></i></h2>";
    $numero++;
}