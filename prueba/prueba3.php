<html>
<head>
    <title>Problema</title>
</head>

<body>

<?php
$num=rand(1,10);
$num2=$num;
echo $num. "<br>";
echo $num2. "<br>";

while ($num < 5){
    echo "Bucle while" . $num. "<br>";
    $num=$num+1;
}

do {
 echo "Bucle do while" . $num2. "<br>";
    $num2=$num2+1;
}
while ($num2 < 5);
?>

</body>
</html>