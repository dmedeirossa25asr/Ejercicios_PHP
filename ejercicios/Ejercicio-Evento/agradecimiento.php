<h1>Agradecimiento</h1>

<?php
if (isset($_GET['nombre'], $_GET['correo'], $_GET['evento'], $_GET['asistentes'], $_GET['comentarios'], $_GET['precio_total'])) {
    $nombre = $_GET['nombre'];
    $correo = $_GET['correo'];
    $evento = $_GET['evento'];
    $asistentes = $_GET['asistentes'];
    $comentarios = $_GET['comentarios'];
    $precio_total = $_GET['precio_total'];

    echo "Gracias, $nombre, por organizar el evento:<br></br>";
    echo "Correo Electronico: $correo<br></br>";
    echo "Evento: $evento<br></br>";
    echo "Número de Asistentes: $asistentes<br></br>";
    echo "Comentarios: $comentarios<br></br>";
    echo "El precio del evento: $precio_total<br></br>";


}

?>

