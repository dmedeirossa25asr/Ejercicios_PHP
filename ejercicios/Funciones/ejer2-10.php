<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Rutas</title>
</head>
<body>
<h1>Rutas de entrega</h1>

<?php

// Funciones
    include "funciones.php";


    function compararRutas ($rutas, $pesoPaquete){
        $menorCosto = 0;
        $rutaBarata = "";

        foreach ($rutas as $indice => $distancia){
            $costo = calcularCostoEnvio($pesoPaquete,$distancia);
            
            if ($indice == 0){
                $menorCosto = $costo;
                $rutaBarata = $indice;
            } else {
                if ($costo < $menorCosto){
                $menorCosto = $costo;
                $rutaBarata = $indice;
            } 
            }

            echo "Ruta " . $indice+1 . ": Distancia de $distancia km, Costo: $$costo. <br>";
        }
        echo "<br>La ruta más económica es la " . $rutaBarata+1 . " con un costo de $menorCosto";

    }

    // Simulación
    $rutas = [120,300,450];
    $pesoPaquete = 12;

    compararRutas($rutas, $pesoPaquete);
?>
</body>
</html>