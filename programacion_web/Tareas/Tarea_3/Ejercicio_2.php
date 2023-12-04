<?php

// Obtener el protocolo de la solicitud (HTTP o HTTPS)

if ($_SERVER['HTTPS'] === 'on') {
    $tipo = 'https';
} else {
    $tipo = 'http';
}

// Obtener la dirección IP del cliente
$direccionIP = $_SERVER['REMOTE_ADDR'];

// Obtener la dirección IP del servidor
$serverIP = $_SERVER['SERVER_ADDR'];

// Verificar si la solicitud proviene de localhost
$lh = array($direccionIP, ['127.0.0.1', '::1']);

// Mostrar mensajes al usuario
echo "<h2>Información de Conexión</h2>";
echo "<p>Tipo de conexión: $tipo</p>";

if ($lh) {
    echo "<p>¡Estás accediendo localmente desde localhost ($direccionIP)!</p>";
} else {
    echo "<p>Estás accediendo desde una ubicación externa ($direccionIP).</p>";
}