<?php

function clp($dolarucos){
    $dolarucos = $dolarucos * 931;
    echo "El precio de las ventas finales en pesos chilenos es: $dolarucos CLP";
}

$productos = array(
    $monitor = [150,3],//450
    $teclados = [30,15],//450
    $disco_duro = [45,7],//315
    $microfono = [175,4],//700
);//total 1915

$money = 0;

foreach ($productos as $item) {
    $money = $money + ($item[0]*$item[1]);  
}

echo "El promedio de las ventas iniciales es: " . $money . " Dolares<br><br>";

$productos[0][1] = 9;

$ratones = [15,15];
$productos[] = $ratones;//225

$camara_web = [55,1];
$productos[] = $camara_web;//55
//nuevo total 3095

$money = 0;
foreach ($productos as $item) {
    $money = $money + ($item[0]*$item[1]);  
}

echo "El promedio de las ventas finales es: " . $money . " Dolares<br><br>";

echo clp($money);