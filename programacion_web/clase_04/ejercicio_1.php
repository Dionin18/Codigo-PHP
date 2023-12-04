<?php

/*
1)
Encuesta de películas:
Crea una matriz con nombres de películas. Muestrar estas películas en un formulario y permite al usuario calificar cada una en una escala del 1 al 5. 
Al enviar, muestra las películas que el usuario calificó con 4 o más.

*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    $peliculas = array(
        "Shrek",
        "Toy_Story",
        "Avengers",
        "Iron_Man",
        "John_Wick"
    );

    ?>
    <form action="procesar2.php" method="GET">
        
 
        <?php

            foreach($peliculas as $peli){
                echo "<p>
                        <h3>$peli</h3>
                        <input type='radio' id='$peli-1' name='$peli' value='1'>
                        <label for='$peli-1'>1</label><br>
                        
                        <input type='radio' id='$peli-2' name='$peli' value='2'>
                        <label for='$peli-2'>2</label><br>
                        
                        <input type='radio' id='$peli-3' name='$peli' value='3'>
                        <label for='$peli-3'>3</label><br>
                        
                        <input type='radio' id='$peli-4' name='$peli' value='4'>
                        <label for='$peli-4'>4</label><br>
                        
                        <input type='radio' id='$peli-5' name='$peli' value='5'>
                        <label for='$peli-5'>5</label><br>
                        
                    </p>";
            }
        ?>
    
        <br>

        <input type="submit" value="Enviar">
    </form>

</body>
</html>