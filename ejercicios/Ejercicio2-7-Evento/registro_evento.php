<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ejercicio</title>
</head>
<body>
<h2>Registro de evento</h2>

<form action="confirmacion_registro.php" method="POST">
    Nombre: <input type="text" name="nombre" required><br></br>
    Correo Electronico: <input type="email" name="correo" required><br></br>
    Selecciona un Evento: 
    <select name="evento">
        <option value="Taller">Taller</option>
        <option value="Conferencia">Conferencia</option>
        <option value="Seminario">Seminario</option>

    </select><br></br>
    Numero de Asistentes: <input type="number" name="asistentes" required><br></br>
    
    Comentarios: <textarea name="comentarios" rows="5" cols="40"></textarea><br>
    <button type="submit">Registrar</button>
</form>
</body>
</html>