<?php

function nCompleto($nomb, $apell){
    if(!empty($nomb) and !empty($apell)){
        echo "El nombre completo es $nomb $apell.";
    }else{
        echo "Falta el nombre o el apellido.";
    }
}



$persona = array(
    "Nombre" => $_GET["Nombre"],
    "Apellido" => $_GET["Apellido"],
    "Edad" => $_GET["Edad"],
    "Email" => $_GET["Email"]
);

if(!empty($persona["Nombre"])){
    echo "Nombre: ". $persona["Nombre"] ." <br>";
}else{
    echo "No se ingreso un nombre <br>";
}

if(!empty($persona["Apellido"])){
    echo "Apellido: ". $persona["Apellido"] ."<br>";
}else{
    echo "No se ingreso un apellido <br>";
}

if(!empty($persona["Edad"]) and $persona["Edad"] > 0){
    echo "Edad: ".$persona['Edad']." <br>";
}else{
    echo "No se ingreso un edad o es invalida <br>";
}

if(!empty($persona["Email"])){
    echo "Email: ".$persona["Email"]." <br>";
}else{
    echo "No se ingreso un email <br>";
}



echo nCompleto($persona["Nombre"], $persona["Apellido"]);
