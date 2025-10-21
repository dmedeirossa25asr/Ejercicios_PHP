<?php
// Inicio del programa: Vamos a definir variables de distintos tipos y mostrar su contenido

echo "Este programa demostrará el uso de diferentes tipos de datos en PHP.<br><br>";
// Definimos una variable de tipo string (cadena de texto)
$nombre = "Juan";
// Definimos una variable de tipo entero (integer)
$edad = 30;
// Definimos una variable de tipo float (número con decimales)
$altura = 1.75;
// Definimos una variable de tipo booleano
$esEstudiante = "Sí";
// Usamos echo para mostrar los datos y su tipo
echo "Nombre (String): $nombre", "<br>";
echo "Edad (integer): $edad", "<br>";
echo "Altura (float): $altura metros", "<br>";
echo "Es estudiante (boolean): $esEstudiante", "<br>";

// Mostramos la descripción de cada tipo de datos
echo "Descripción de los tipos de datos:<br><br>";
var_dump($nombre);
var_dump($edad);
var_dump($altura);
var_dump($esEstudiante);

?>