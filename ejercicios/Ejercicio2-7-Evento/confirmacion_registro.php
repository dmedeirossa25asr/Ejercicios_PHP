<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){

    if (isset($_POST['nombre'])){
        $nombre = $_POST['nombre'];
    } else {
        $nombre = '';
    }

    if (isset($_POST['correo'])) {
      $correo = $_POST['correo'];  
    } else {
        $correo = '';
    }

    if (isset($_POST['evento'])) {
        $evento = $_POST['evento'];
  
    } else {
        $evento = '';
    }

    if (isset($_POST['asistentes'])) {
      $asistentes = $_POST['asistentes'];  
    } else {
        $asistentes = '';
    }
    
    if (isset($_POST['comentarios'])) {
      $comentarios = $_POST['comentarios'];  
    } else {
        $comentarios = '';
    }

if ($asistentes <= 0) {
    echo "El numero de asistentes debe ser mayor que 0.";
    exit;
}

$precio_base = 50;
switch ($evento){
    case "Taller":
        $precio_persona = 50;
    break;
    case "Conferencia":
        $precio_persona = 30;
    break;
    case "Seminario":
        $precio_persona = 40;
    break;
    default: 
        $precio_persona = 0;
}

$precio_total = $precio_base + ($precio_persona * $asistentes);

header("Location: agradecimiento.php?nombre=$nombre&correo=$correo&evento=$evento&asistentes=$asistentes&comentarios=$comentarios&precio_total=$precio_total");
exit;

}
?>