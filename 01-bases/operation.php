<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>operations</title>
</head>
<body>


<?php 
$a = 15;
$b = 5;
$c = 8;

$sum = $a + $b + $c;
echo "$a + $b + $c = $sum \n";

$calcul = $a * ($b - $c);
echo " $a * ($b - $c) = $calcul \n";


$calcul2 = ($c + $b) / $a;
echo "($c + $b) / $a = $calcul2 \n";

if ($sum<20 or $calcul<20 or $calcul2 <20) {
    echo"Une des opérations renvoie moins de 20";
}
?>
    
</body>
</html>