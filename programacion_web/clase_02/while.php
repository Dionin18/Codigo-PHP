<?php

//while

$numero = 7;

echo $numero;
echo "<br>";

$numero++;
echo $numero;
echo "<br>";

$numero--;
$numero--;
echo $numero;
echo "<br>";
echo "<br>";

$numero = 1;

while($numero <= 15){
   
    echo "<li>$numero</li>";
    echo "<br>";
    $numero++;
}


echo "<br>";
echo "<br>";
$numero = 1;


do{
   
    echo "<li>$numero</li>";
    echo "<br>";
    $numero++;
}while($numero <= 15);
