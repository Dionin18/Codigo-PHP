<?php

//datos de conexion a la base de datos

$db_host = "localhost";
$db_name = "escuela";
$db_user = "root";
$db_pass = "";

//crear conexion de manera procedural

$conexion = mysqli_connect($db_host,$db_user,$db_pass,$db_name);

//verificar conexion

if(!$conexion){
    die("Conexion fallida: " . mysqli_connect_error());
}


$nombre = $_POST["nombre"];
$apellidoP = $_POST["apellidop"];
$apellidoM = $_POST["apellidom"];
$nacionalidad = $_POST["nacionalidad"];
$rut = $_POST["rut"];
$lugar = $_POST["lugar"];
$profesion = $_POST["profesion"];
$fecha = $_POST["fecha"];
$sexo = $_POST["sexo"];
$discapacidad = $_POST["discapacidad"];
$donante = $_POST["donante"];
$foto = $_FILES["foto"];


function crear_alumno($nombre, $apellidoP, $apellidoM, $nacionalidad, $rut, $lugar, $profesion, $fecha, $sexo, $discapacidad, $donante, $foto){
    $sql = "INSERT INTO alumnos (nombre, apellidop, apellidom, nacionalidad, rut, lugar, profesion, fecha, sexo, discapacidad, donante) 
    VALUES ('$nombre', '$apellidoP', '$apellidoM', '$nacionalidad', '$rut', '$lugar', '$profesion', '$fecha', '$sexo', '$discapacidad', '$donante')";

    // ejecutar la consulta
    
    $resultado = mysqli_query($conexion, $sql);
    
    if($resultado){
        echo "<br>Se inserto correctamente el alumno.<br>";
        return True;
    }else{
        echo "<br>Error al insertar el alumno.<br>";
        echo "<br>La consulta $sql - Fallo: " + mysqli_error($conexion);
        return False;
    }
}
//cerrar la conexion
mysqli_close($conexion);