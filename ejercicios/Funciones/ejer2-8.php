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

    calcularCostoEnvio(7, 150);

    // Funciones
    function calcularCostoBase ($peso) {
        if ($peso <= 5){
            return 10;
        }
        elseif ($peso > 5 && $peso <= 10){
            return 15;
        }
        else {
            return 20 + ($peso - 10) * 1;
        }
    }

    function calcularCostoDistancia ($distancia) {
        $costo = 0;

        if ($distancia <= 100){
            $costo = $distancia * 0.10;
        }
        elseif ($distancia > 100 && $distancia <= 400){
            $costo = 100 * 0.10;
            $costo += ($distancia - 100) * 0.08;
        }
        else {
            $costo = 100 * 0.10;
            $costo += 300 * 0.08;
            $costo += ($distancia - 400) * 0.05;
        }
        return $costo;
    }

    function aplicarDescuento ($envio, $distanciaEnvio) {
        if ($distanciaEnvio >= 100 && $distanciaEnvio <= 200){
            return $envio * 0.95;
        }
        elseif ($distanciaEnvio > 200) {
            return $envio * 0.90;
        } else {
            return $envio;
        }
    }

    function calcularCostoEnvio ($pesoPaquete, $distanciaEnvio){
        $costoTotal = 0;
        $costoFinal = 0;

        // Obtener el coste total
        $costoTotal = calcularCostoBase($pesoPaquete) + calcularCostoDistancia($distanciaEnvio); 
        // Obtener el coste una vez aplicado el descuento
        $costoFinal = aplicarDescuento($costoTotal, $distanciaEnvio);
        // Devolver el costo total del envío.
        echo "<p>El costo final del envio es: $costoFinal</p>";
    }

    $paquetes = [
        ['peso'=>3,'distancia'=>50],
        ['peso'=>7,'distancia'=>150],
        ['peso'=>12,'distancia'=>250],
        ['peso'=>4,'distancia'=>500],
        ['peso'=>15,'distancia'=>600],
    ];

    $numero = 2;

    foreach ($paquetes as $paquete){
        echo "<p>Envio Nº: $numero</p>";
        calcularCostoEnvio($paquete['peso'], $paquete['distancia']);
        $numero++;
    }
?>
</body>
</html>