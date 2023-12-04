<?php

//Estructura de control switch

$dia = "ola";

switch ($dia) {
    case "Lunes":
        echo "<h1>Hoy es Lunes</h1>";
        break;
        
    case "Martes":
        echo "<h1>Hoy es Martes</h1>";
        break;
        
    case "Miercoles":
        echo "<h1>Hoy es Miercoles</h1>";
        break;
        
    case "Jueves":
        echo "<h1>Hoy es Jueves</h1>";
        break;
        
    case "Viernes":
        echo "<h1>Hoy es Viernes</h1>";
        break;
        
    case "Sabado":
        echo "<h1>Hoy es Sabado</h1>";
        break;
        
    case "Domingo":
        echo "<h1>Hoy es Domingo</h1>";
        break;
    default:
        echo "<h1 style='color:navy;'>No es un dia de la semana</h1>";
        break;
}

