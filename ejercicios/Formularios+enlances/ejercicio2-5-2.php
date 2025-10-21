<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Verificar número</title>
</head>
<body>
<h2>Ingrese un número entre 1 y 7</h2>

<form method="POST" action="">
    Número: <input type="text" name="numero" value="<?php echo $numero; ?>"><br><br>
    <input type="submit" name="submit" value="Verificar"> 
</form>

<?php
$mensaje = "";
$numero = "";

if (isset($_POST['submit'])) {
   $numero = trim($_POST['numero']);
   $numero = htmlspecialchars($numero, ENT_QUOTES, 'UTF-8');

   if (is_numeric($numero) == false || strpos($numero, '.') !== false) {
       $mensaje = "Por favor, ingrese un número entero.";
   } else {
       $numero = (int)$numero;

       // Validar rango
       if ($numero >= 1 && $numero <= 7){
            $mensaje = "El número esta entre 1 y 7.";

            switch ($numero) {
                case 1:
                    $mensaje .= " Corresponde al día Lunes.";
                    break;
                case 2:
                    $mensaje .= " Corresponde al día Martes.";
                    break;
                case 3:
                    $mensaje .= " Corresponde al día Miércoles.";
                    break;
                case 4:
                    $mensaje .= " Corresponde al día Jueves.";
                    break;
                case 5:
                    $mensaje .= " Corresponde al día Viernes.";
                    break;
                case 6:
                    $mensaje .= " Corresponde al día Sábado.";
                    break;
                case 7:
                    $mensaje .= " Corresponde al día Domingo.";
                    break;
            }
       } else {
            $mensaje = "El número no esta entre 1 y 7.";
       }
   }
}

if ($mensaje !== "") {
    echo "<p><strong>$mensaje</strong></p>";
}
?>

</body>
</html>
