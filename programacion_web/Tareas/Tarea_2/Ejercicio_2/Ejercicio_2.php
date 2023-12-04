<?php

$monedas = array(
    "Soles" => 242.78,
    "Libra" => 1148,14
);

?>
<h1>Formulario</h1>
<form action="Ejercicio_2.php" method="get">

    <label for="moneda">Moneda (Libra o Soles): </label>
    <input type="text" name="Moneda" id="Moneda">
    
    <br>
    <br>

    <label for="valor">Cantidad a cambiar (CLP):</label>
    <input type="number" name="Valor" id="Valor">
    
    <br>
    <br>

    <input type="submit" value="Enviar">
</form>


<?php

function convertir($nombMoneda, $mon, $val){
    foreach($nombMoneda as $key => $monVal){
        if($key == $mon){
            $result = $val / $monVal;
            echo "La conversion resulta en ". $result . " " . $key . "(s)";
            break;
        }
    }
    
    
}



if(!empty($_GET["Moneda"])){
    $money = $_GET["Moneda"];
}else{
    echo "No hay un nombre de una moneda ingresado. <br>";
}

if(!empty($_GET["Valor"])){
    $value = $_GET["Valor"];
}else{
    echo "No hay un monto ingresado. <br>";
}

if(!empty($_GET["Valor"]) and !empty($_GET["Moneda"])){
    echo convertir($monedas, $money, $value);
}
