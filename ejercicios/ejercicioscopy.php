<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ejercicio</title>
</head>
<body>
<h2></h2>

<?php
// Array normal
$paises=['brasil','españa','francia'];

foreach ($paises as $valor){
    echo $valor. "<br>";
}
echo "<br>";
for ($i=0;$i<3;$i++){
    echo $paises[$i];
}
echo "<br>";
// Array asociativo doble
$estadios = [
        ["equipo"=>"Real Madrid","estadio","Bernabeu"],
        ["equipo"=>"Liverpol","estadio"=>"Anfield"],
        ["equipo"=>"Flamengo","estadio"=>"Maracana"],
];
foreach ($estadios as $datos){
    echo $datos["equipo"]. " ". $datos["estadio"]. "<br>";
}
echo "<br>";
// Array multi
$precios = ["peras"=>[2.5,4],
            "melocoton"=>[4.8,7],
            "banana"=>[4,8.9]                
]
foreach ($precios as $indice => $valor){
    echo ;

}


?>
</body>
</html>