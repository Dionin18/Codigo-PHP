<?php

/*
$_REQUEST recoje datos de $_GET $_POST $_COOKIE
*/

echo $_REQUEST["nombre"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <form action="request.php" method="get">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre">
    </form>
</head>
<body>
    
</body>
</html>