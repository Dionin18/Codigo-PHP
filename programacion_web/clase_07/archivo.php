<?php


//leer archivo

$text = fopen("texto.txt", "r") or die("Imposible abrir el archivo");

//
echo fread($text, filesize("texto.txt"));

//leer linea a linea
while(!feof($text)){
    echo fgets($text) . "<br>";
}

fclose($text);

/*
escribir el archivo
*/

fopen("texto.txt", "w") or die("Imposible abrir el archivo");

fwrite($text, "hola");