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
// Funciones
function calcularPromedio ($calificaciones){
    $totalNotas = array_sum($calificaciones);
    $promedio = $totalNotas / count($calificaciones);

    return $promedio;
}

function esAprobado ($promedio){
    if ($promedio >= 70){
        return "Aprobado";
    } else {
        return "No suficiente";
    }
}

function aplicarBonificacion ($promedio){
    if ($promedio >= 90){
        return $promedio + 5;
    } elseif ($promedio < 50){
        return $promedio + 10;
    } else {
        return $promedio;
    }
}

function calcularResultadoEstudiante ($nombre, $calificaciones){
    calcularPromedio(80,75,88);
}

?>
</body>
</html>