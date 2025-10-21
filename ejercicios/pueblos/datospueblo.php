<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['nombre'])){
        $nombre = $_POST['nombre'];
    } else {
        $nombre = '';
    }

    if (isset($_POST['provincia'])) {
        $provincia = $_POST['provincia'];
    } else {
        $provincia = '';
    }

    if (isset($_POST['playa'])) {
        $playas = "y tiene playa.";
    } else  {
        $playas = "y no tiene playa.";
    }

    if (isset($_POST['bus'])) {
        $bus = $_POST['bus'];
    } else {
        $bus = '';
    }

    if (isset($_POST['tren'])) {
        $tren = $_POST['tren'];
    } else {
        $tren = '';
    }

    if (isset($_POST['topo'])) {
        $topo = $_POST['topo'];
    } else {
        $topo = '';
    }

    if (isset($_POST['metro'])) {
        $metro = $_POST['metro'];
    } else {
        $metro = '';
    }

    if (isset($_POST['servicio'])) {
        $servicio = $_POST['servicio'];
    } else {
        $servicio = '';
    }

    $transportes = "";

    if ($bus != '') {
        $transportes .= "Bus, ";
    }
    if ($tren != '') {
        $transportes .= "Tren, ";
    }
    if ($topo != '') {
        $transportes .= "Topo, ";
    }
    if ($metro != '') {
        $transportes .= "Metro, ";
    }

    $transportes = rtrim($transportes, ", ");

    if ($transportes != "") {
        $frasesTransportes = "El transporte que tiene es : <b>$transportes</b>";
    } else {
        $frasesTransportes = "No tiene transporte público";
    }

    // Mostramos los datos
    echo "El pueblo <b>$nombre</b> pertenece a la provincia de <b>$provincia</b> $playas<br>";
    echo "$frasesTransportes y entre los servicios que tiene esta $servicio <br>";
    echo "<a href='pueblos.html'>Volver</a>";
}
?>