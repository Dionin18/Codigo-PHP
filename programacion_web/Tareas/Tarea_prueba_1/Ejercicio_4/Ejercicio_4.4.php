<?php

if($_SERVER["REQUEST_METHOD"] == "GET"){
    $nombre = $_GET["nombre"];
    $apellido = $_GET["apellido"];
    $edad = $_GET["edad"];
    $carrera = $_GET["carrera"];

    $alumno = array(
        "nombre" => $nombre,
        "apellido" => $apellido,
        "edad" => $edad,
        "carrera" => $carrera
    );
    
    if(!empty($alumno["nombre"])){
        echo "Nombre: ". $alumno["nombre"] ." <br>";
    }else{
        echo "No se ingreso un nombre <br>";
    }

    if(!empty($alumno["apellido"])){
        echo "Apellido: ". $alumno["apellido"] ." <br>";
    }else{
        echo "No se ingreso un apellido <br>";
    }

    if(!empty($alumno["edad"])){
        echo "Edad: ". $alumno["edad"] ." <br>";
    }else{
        echo "No se ingreso la edad <br>";
    }

    if(!empty($alumno["carrera"])){
        echo "Carrera: ". $alumno["carrera"] ." <br>";
    }else{
        echo "No se ingreso una carrera <br>";
    }
}