<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>calcular costos de envío</title>
</head>
<body>
<h1>Calculadora de costos de envío</h1>

<?php
    echo "<p>Este programa calculará el costo de envío de varios paquetes.</p>";

    include "funciones.php";
    //calcularCostoEnvio(7, 150);


    $paquetes = [
        ['peso'=>3,'distancia'=>50],
        ['peso'=>7,'distancia'=>150],
        ['peso'=>12,'distancia'=>250],
        ['peso'=>4,'distancia'=>500],
        ['peso'=>15,'distancia'=>600],
    ];

    $numero = 2;

    foreach ($paquetes as $indice => $paquete){
        echo "<p>Envio Nº: $indice</p>";
        $total = calcularCostoEnvio($paquete['peso'], $paquete['distancia']);
        echo $total;
    }
?>
</body>
</html>