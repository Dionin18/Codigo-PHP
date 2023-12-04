<?php

require_once("conexion.php");

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$edad = $_POST["edad"];
$archivo = $_FILES["archivo"];

function subir_archivo($archivo){
    $archivo_nombre = $archivo["name"];
    $directorio = "img/";
    $archivo_destino = $directorio . basename($archivo_nombre);

    if(move_uploaded_file($archivo["tmp_name"], $archivo_destino)){
        echo "<br>El archivo $archivo_nombre se ha subido correctamente<br>";
        return $archivo_destino
    }else{
        echo "Ocurrio un error al subir el archivo";
        return "";
    }
}

function crear_alumno($nombre, $apellido, $edad, $archivo){
    $sql = "INSERT INTO alumnos (nombre, apellido, edad) VALUES ('$nombre', '$apellido', $edad)";

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