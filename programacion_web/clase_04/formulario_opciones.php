<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Formulario Opciones</h1>
    <form action="procesar.php" method="POST">
        
    <select name="fruta" id="fruta">
        <option selected disabled>Seleccione una opcion</option><!-- disabled para que no se pueda seleccionar y selected para que salga por defecto cuando cargue la pagina -->
        <?php
            $frutas = array(
                "manzana",
                "naranja",
                "sandia",
            );

            foreach($frutas as $fruta){//se puede ocupar as y AS
                /*
                if($fruta == "naranja"){
                echo '<option selected value=" '. $fruta . ' ">'. $fruta .'</option>';comentado ya que no puede haber mas de un selected
                }else if($fruta == "sandia"){
                echo '<option disabled value=" '. $fruta . ' ">'. $fruta .'</option>';se puede desabilitar mas de una
                }
                */
                echo "<br>";
                echo '<option value=" '. $fruta . ' ">'. $fruta .'</option>';
            }//se pueden sacar las llaves cuando es una linea de codigo
        ?>
    </select>
    
        <br>

        <input type="submit" value="Enviar">
    </form>

</body>
</html>