<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Lista de tareas</title>
</head>
<body>
<h2>Tarea</h2>

<?php
// Inicio del programa: trabajar con arrays y for
$suma = 0;
$promedio = 0;

// Crear un array de 10 elementos, con valores aleatorios entre 1 y 30
for ($i = 0; $i < 10; $i++){
    $array_nums [$i] = rand(1, 30);
}

// Imprimir todos los valores que se almacenan en el array
for ($i = 0; $i < count($array_nums); $i++){
    echo "Numero: ". $array_nums[$i] . "<br>";
    $suma += $array_nums[$i];
}

// Calcular el valor medio de los valores del array
$promedio = $suma / count($array_nums);

// Mostrar el valor medio que se ha calculado
    echo "Promedio: " . $promedio . "<br>";
?>
</body>
</html>