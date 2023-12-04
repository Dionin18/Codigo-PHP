<?php

//Ejercicio 1
//Crear un programa que imprima el nombre del mes dependiendo del numero utiizando un switch

//echo '<script id:"echo"> prompt("Ingrese un numero de un mes: "); </script>';

$mes = 7;

switch ($mes) {
    case 1:
        echo "<h1>Estamos en el mes de Enero</h1>";
        break;
    case 2:
        echo "<h1>Estamos en el mes de Febrero</h1>";
        break;
    case 3:
        echo "<h1>Estamos en el mes de Marzo</h1>";
        break;
    case 4:
        echo "<h1>Estamos en el mes de Abril</h1>";
        break;
    case 5:
        echo "<h1>Estamos en el mes de Mayo</h1>";
        break;
    case 6:
        echo "<h1>Estamos en el mes de Junio</h1>";
        break;
    case 7:
        echo "<h1>Estamos en el mes de Julio</h1>";
        break;
    case 8:
        echo "<h1>Estamos en el mes de Agosto</h1>";
        break;
    case 9:
        echo "<h1>Estamos en el mes de Septiembre</h1>";
        break;
    case 10:
        echo "<h1>Estamos en el mes de Octubre</h1>";
        break;
    case 11:
        echo "<h1>Estamos en el mes de Noviembre</h1>";
        break;
    case 12:
        echo "<h1>Estamos en el mes de Diciembre</h1>";
        break;
    default:
        echo "<h1>No corresponde a un mes</h1>";
        
}


//Ejercicio 2
//Escribir una tabla de multiplicar del 1 al 10 en formato tabla

echo "<style> table {border:2px solid black; margin:5px;}</style>";
echo "<style> th, td {text-align:center; border:1px solid black;}</style>";

echo "<h1>Tablas de Multiplicar</h1>";
echo "<table>";


echo "<tr>";
echo "<th>1</th>";
echo "<th>2</th>";
echo "<th>3</th>";
echo "<th>4</th>";
echo "<th>5</th>";
echo "<th>6</th>";
echo "<th>7</th>";
echo "<th>8</th>";
echo "<th>9</th>";
echo "<th>10</th>";
echo "</tr>";


echo "<tr>";
echo "<td><b>2</b></td>";
echo "<td>4</td>";
echo "<td>6</td>";
echo "<td>8</td>";
echo "<td>10</td>";
echo "<td>12</td>";
echo "<td>14</td>";
echo "<td>16</td>";
echo "<td>18</td>";
echo "<td>20</td>";
echo "</tr>";


echo "<tr>";
echo "<td><b>3</b></td>";
echo "<td>6</td>";
echo "<td>9</td>";
echo "<td>12</td>";
echo "<td>15</td>";
echo "<td>18</td>";
echo "<td>21</td>";
echo "<td>24</td>";
echo "<td>27</td>";
echo "<td>30</td>";
echo "</tr>";


echo "<tr>";
echo "<td><b>4</b></td>";
echo "<td>8</td>";
echo "<td>12</td>";
echo "<td>16</td>";
echo "<td>20</td>";
echo "<td>24</td>";
echo "<td>28</td>";
echo "<td>32</td>";
echo "<td>36</td>";
echo "<td>40</td>";
echo "</tr>";


echo "<tr>";
echo "<td><b>5</b></td>";
echo "<td>10</td>";
echo "<td>15</td>";
echo "<td>20</td>";
echo "<td>25</td>";
echo "<td>30</td>";
echo "<td>35</td>";
echo "<td>40</td>";
echo "<td>45</td>";
echo "<td>50</td>";
echo "</tr>";


echo "<tr>";
echo "<td><b>6</b></td>";
echo "<td>12</td>";
echo "<td>18</td>";
echo "<td>24</td>";
echo "<td>30</td>";
echo "<td>36</td>";
echo "<td>42</td>";
echo "<td>48</td>";
echo "<td>54</td>";
echo "<td>60</td>";
echo "</tr>";


echo "<tr>";
echo "<td><b>7</b></td>";
echo "<td>14</td>";
echo "<td>21</td>";
echo "<td>28</td>";
echo "<td>35</td>";
echo "<td>42</td>";
echo "<td>49</td>";
echo "<td>56</td>";
echo "<td>63</td>";
echo "<td>70</td>";
echo "</tr>";


echo "<tr>";
echo "<td><b>8</b></td>";
echo "<td>16</td>";
echo "<td>24</td>";
echo "<td>32</td>";
echo "<td>40</td>";
echo "<td>48</td>";
echo "<td>56</td>";
echo "<td>64</td>";
echo "<td>72</td>";
echo "<td>80</td>";
echo "</tr>";



echo "<tr>";
echo "<td><b>9</b></td>";
echo "<td>18</td>";
echo "<td>27</td>";
echo "<td>36</td>";
echo "<td>45</td>";
echo "<td>54</td>";
echo "<td>63</td>";
echo "<td>72</td>";
echo "<td>81</td>";
echo "<td>90</td>";
echo "</tr>";


echo "<tr>";
echo "<td><b>10</b></td>";
echo "<td>20</td>";
echo "<td>30</td>";
echo "<td>40</td>";
echo "<td>50</td>";
echo "<td>60</td>";
echo "<td>70</td>";
echo "<td>80</td>";
echo "<td>90</td>";
echo "<td>100</td>";
echo "</tr>";


echo "</table>";



?>