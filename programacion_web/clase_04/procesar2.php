<?php

if($_SERVER["REQUEST_METHOD"] == "GET"){
    $Shrek = $_GET["Shrek"];
    $Toy_Story = $_GET["Toy_Story"];
    $Avengers = $_GET["Avengers"];
    $Iron_Man = $_GET["Iron_Man"];
    $John_Wick = $_GET["John_Wick"];

    $peliculas = array(
        "shrek" => $Shrek,
        "toy_story" => $Toy_Story,
        "avengers" => $Avengers,
        "iron_man" => $Iron_Man,
        "john_wick" => $John_Wick
    );

    foreach($peliculas as $peli){
        if($peli < 4){
        echo ("$peli")
        }
    }
}