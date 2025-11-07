<?php 

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

        $costoTotal = calcularCostoBase($pesoPaquete) + calcularCostoDistancia($distanciaEnvio); 
        $costoFinal = aplicarDescuento($costoTotal, $distanciaEnvio);

        // echo "<p>El costo final del envio es: $costoFinal</p>";
        return $costoFinal;
    }
?>