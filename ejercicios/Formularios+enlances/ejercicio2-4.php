<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Verificar Palíndromo</title>
</head>
<body>
<h2>Ingresa una palabra para verificar si es un palíndromo</h2>
<form method="POST" action="">
    Palabra: <input type="text" name="palabra" value="<?php if(isset($_POST['palabra'])) echo htmlspecialchars($_POST['palabra']); ?>"><br>
    <input type="submit" name="submit" value="Verificar"> 
</form>
<?php
if (isset($_POST['submit'])) {
    $palabra = trim($_POST['palabra']) and ($_POST['palabra']!="");
    $palabra_minus = strtolower($palabra);
    $palabra_invertida = strrev($palabra_minus);

    if ($palabra_minus === $palabra_invertida){
        echo "<p> La palabra '$palabra' es un palíndromo.</p>";
    } else {
        echo "<p> La palabra '$palabra' no es un palíndromo.</p>";
 
    }
}
?>
</body>
</html>