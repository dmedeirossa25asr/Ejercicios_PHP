<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ejercicio</title>
</head>
<body>
<h2>Ejercicio</h2>

<form action="" method="post">
    <label for="tareas">Introduce tus tareas (separadas por coma):</label><br>
    <input type="text" id="tareas" name="tareas"><br><br>

    <label for="completadas">¿Completadas?</label>
    <input type="checkbox" id="completadas" name="completadas" value="1"><br><br>

    <input type="submit" value="Enviar">
</form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener las tareas ingresadas por el usuario
    $tareas = $_POST['tareas'];

    // Obtener el estado del checkbox (si está marcado o no)
    $completadas = isset($_POST['completadas']);

    // Dividir la lista de tareas por comas
    $lista_tareas = explode(',', $tareas);

    // Recorrer las tareas y mostrar su estado
    echo "<h2>Lista de Tareas</h2>";
    foreach ($lista_tareas as $tarea) {
        $tarea = trim($tarea); // quitar espacios extra
        echo $tarea;
        if ($completadas) {
            echo " - Completada<br>";
        } else {
            echo " - Pendiente<br>";
        }
    }
} else {
    echo "No se han enviado datos.";
}
?>
</body>
</html>