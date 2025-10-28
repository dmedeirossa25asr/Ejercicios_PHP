<?php
// Inicio del programa: Vamos a trabajar con diferentes tipos de datos y hacer algunas operaciones aritméticas
echo "Este programa demostrará el uso de diferentes tipos de datos y operaciones aritméticas en PHP.<br><br>";

// Definimos una variable de tipo entero (integer)
$numero1 = 10;
$numero2 = 5;
// Definimos una variable de tipo float (número con decimales)
$numero3 = 4.2;
// Operaciones aritméticas básicas
$suma = ($numero1 + $numero2);
$resta = ($numero1 - $numero2);
$multiplicacion = ($numero1 * $numero2);
$division = ($numero1 / $numero2);
$modulo = ($numero1 % $numero2);// Resto de la división
$operacionMixta = ($numero1 + $numero3 - $resta * $division);
// Usamos echo para mostrar los resultados de las operaciones

echo "$suma", "<br>";
echo "$resta", "<br>";
echo "$multiplicacion", "<br>";
echo "$division", "<br>";
echo "$modulo", "<br>";
echo "$operacionMixta", "<br>";

?>