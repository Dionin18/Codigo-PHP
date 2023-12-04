<?php

# datos de conexion a la base de datos

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

//obtener datos de la tabla

$sql = "SELECT * FROM alumnos;";

//ejecutar la consulta

$resultado = mysqli_query($conexion,$sql);

//print_r($resultado);

//verificar si hay resultados
/*
if(mysqli_num_rows($resultado) > 0){
    //mostrar datos de cada fila
    while($row = mysqli_fetch_assoc($resultado)){
        echo "Id: " . $row["id"] . "<br>";
        echo "Nombre: " . $row["nombre"] . "<br>";
        echo "Apellido: " . $row["apellido"] . "<br>";
        echo "Edad: " . $row["edad"];
    }
}else{
    echo "o resulltados";
}






//crear conexion de manera orientada a objetos

$conn = new mysqli($db_host,$db_user,$db_pass,$db_name);

//verificar la conexion

//verificar conexion

if($conn->connect_error){
    die("Conexion fallida: " . mysqli_connect_error());
}


//ejecutar la consulta

$result = $conn->query($sql);

//verificar si hay resultados

if($result->num_rows > 0){
    foreach ($result as $row) {
        echo "<br>Id: " . $row["id"] . "<br>";
        echo "Nombre: " . $row["nombre"] . "<br>";
        echo "Apellido: " . $row["apellido"] . "<br>";
        echo "Edad: " . $row["edad"];
    }
}else{
    echo "0 resultados";
}
*/