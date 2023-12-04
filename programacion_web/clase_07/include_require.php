<?php

/*
include y require nos permitiran incrustar un archivo dentro de otro
*/





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        //include
        include_once "proceso.php";

        //require
        require_once "proceso.php";

        
        include_once "header.php";
        echo suma(15,5) . "<br>";
        echo "<img src='https://pqs.pe/wp-content/uploads/2018/07/pqs-biocombustible.jpg'>";
        include_once "footer.php";
    ?>
    

</body>
</html>