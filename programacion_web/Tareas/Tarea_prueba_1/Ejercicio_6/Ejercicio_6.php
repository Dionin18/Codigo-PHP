<?php

session_start();

$min = 1;
$max = 100;

if(empty($_SESSION['aux'])){
    $aux = rand($min, $max);
    $_SESSION['aux'] = $aux;
}
else{
    $aux = $_SESSION['aux'];
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Formulario</h1>
    <form action="Ejercicio_6.php" method="get">
        <label for="numeros">Ingrese un numero a adivinar:</label><br>
        <input type="number" name="numero" id="numero"><br>
        <br>

        <input type="submit" value="Enviar">
    </form>

</body>
</html>


<?php

if(empty($_GET["numero"])){
    echo "";
}else{
    $num = $_GET["numero"];
    if($aux == $num){
        echo "¡Felicidades!";
    }else{
        if($aux < $num){
            echo "El numero es menor";
        } else if($aux > $num){
            echo "El numero es mayor";
        } 
    }
}

