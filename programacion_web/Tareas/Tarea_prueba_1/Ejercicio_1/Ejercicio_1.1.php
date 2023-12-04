<?php

$segundos = $_GET["Segundos"];

echo $segundos . " segundos equivalen a: ";
if(($segundos / 86400) < 0){
    echo "0 dias, ";
}else{
    echo floor($segundos / 86400) . " dia(s), ";
}

$horas = $segundos % 86400;

if(($horas / 3600) < 0){
    echo "0 horas, y ";
}else{
    echo floor($horas / 3600) . " hora(s), y ";
}

$minutos = $horas % 3600;

if(($minutos / 60) < 0){
    echo "0 minutos";
}else{
    echo floor($minutos / 60) . " minuto(s)";
}