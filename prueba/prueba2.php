<html>
<head>
    <title>Problema</title>
</head>

<body>

<?php
$num=rand(1,10);
echo $num. "<br>";
switch ($num){
    case 1:
    case 2:
    case 3:
    case 4: echo "insuficiente";
    break;
    case 5: echo "suficiente";
    break;
    case 6: echo "bien";
    break;
    case 7:
    case 8: echo "notable";
    break;
    case 9:
    case 10: echo "sobresaliente";
    break;

}
?>

</body>
</html>