<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Verificar número</title>
</head>
<body>
<h2>Ingrese un número entre 1 y 100</h2>

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

   // Validar que sea un número entero
   if (filter_var($numero, FILTER_VALIDATE_INT) === false){
       $mensaje = "Por favor, ingrese un número entero.";
   } else {
       $numero = (int)$numero;

       // Validar rango
       if ($numero < 1 || $numero > 100){
           $mensaje = "El número debe estar entre 1 y 100.";
       } else {
           if ($numero <= 50) {
               $mensaje = "El número $numero es menor o igual a 50.";
           } else {
               $mensaje = "El número $numero es mayor a 50.";
           }
       }
   }
}

// Mostrar el mensaje de resultado
if ($mensaje !== "") {
    echo "<p><strong>$mensaje</strong></p>";
}
?>

</body>
</html>
