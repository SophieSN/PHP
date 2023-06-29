<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercices</title>
</head>
<body>

1. Ecrire une boucle qui affiche les nombres de 10 à 1
<br>
<?php
for ($i=10; $i>=0; $i--) {
    echo" $i ";
}
?>
<br>
2. Ecrire une boucle qui affiche uniquement les nombres pairs entre 1 et 100
<br>
<?php
for ($i=1; $i<=100; $i++) {
   if ($i%2 == 0) {
    echo" $i ";}
   }
?>
<br>
3. Ecrire le code permettant de trouver le PGCD de 2 nombres
<br>
<?php
$a = rand(1,100);
$b = rand(1,100);

echo "Le PGCD de $a et $b est : ";
while ($b != 0) {
$r = $a % $b;
$a = $b; // a revoir
$b = $r;
}
echo $t;

?>
<br>
<?php
$a = rand(1,100);
$b = rand(1,100);

echo "Le PGCD de $a et $b est : ";
while ($a != $b) {
if ($a>$b) {
    $a = $a - $b;
} else {
    $b = $b -$a;
    }
}
?>
<br>
4. Coder le jeu du FizzBuzz
<br>
<?php

for ($i=0; $i<=100; $i++){
if($i%15 == 0) {
    echo"FizzBuzz";}
elseif($i%5 == 0){
    echo"Buzz";}
elseif($i%3 == 0) {
    echo"Fizz";}
else {
    echo"$i";}
}
?>
<br>
5.etoiles ligne, carré, triangle
<br>
<?php
for ($i = 0; $i<10; $i++){ 
    echo"*";}
?>
<br>
<br>
<?php
for ($i = 0; $i<10; $i++){ 
    for($j = 0; $j<10; $j++){
    echo"*";
    }
    ?>
    <br>
    <?php
    }
?>
<br>

<?php
for ($i = 0; $i<10; $i++){ 
    for($j = 0; $j<$i+1; $j++){
    echo"*";
    }
    ?>
    <br>
    <?php
    }
?>
<br>

</body>
</html>