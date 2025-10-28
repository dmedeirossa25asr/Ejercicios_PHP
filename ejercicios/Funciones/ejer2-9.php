<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Notas de los alumnos</title>
</head>
<body>
<h1>Notas de los alumnos</h1>

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
$promedio = calcularPromedio($calificaciones);
$promedioConBonificacion = aplicarBonificacion($promedio);
$estado = esAprobado($promedioConBonificacion);

echo "Estudiante: " . $nombre . "<br>";
echo "Promedio inicial: " . $promedio . "<br>";
echo "Promedio con bonificación: " . $promedioConBonificacion . "<br>";
echo "Estado: " . $estado . "<br><br>";
}

// Estudiantes
$estudiantes = ['Ana'=>[80,75,88],
'Luis'=>[45,50,48],
'Pedro'=>[92,94,96],];

foreach ($estudiantes as $nombre => $calificaciones){
    calcularResultadoEstudiante($nombre, $calificaciones);
}

?>
</body>
</html>