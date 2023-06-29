<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo avec tableaux</title>
</head>
<body>

<p> Les capitales
<br>
<?php
$capitales = [
    'France' => 'Paris',
    'Espagne' => 'Madrid',
    'Italie' => 'Rome',
];

foreach($capitales as $country => $city)  {
   echo"La capitale de $country est $city.<br>";
}
?>

<p> Populations
<br>
<?php
$population = [
    'France' => 67595000,
    'Suede' => 9998000,
    'Suisse' => 8417000,
    'Kosovo' => 1820631,
    'Malte' => 434403,
    'Mexique' => 122273500,
    'Allemagne' => 82800000,
];

echo"Les pays dont la population est supérieure à 20 millions sont :";
foreach($population as $pays => $people)  {
       if ($people> 20000000) { 
            echo"<li> $pays </li>";
       }
}

?>
<br>
<?php

$europe = ['France', 'Suede','Suisse','Kosovo','Allemagne'];
$totalPopulation = 0;
echo "La population totale des pays européens est de :";
foreach($population as $pays => $people)  {
    if (in_array($pays, $europe)) {
         $totalPopulation += $people ;    
        }  
}
echo $totalPopulation;
?>
<br>
<br>
Les élèves
<br>
<?php

$eleves = [
    0 => [
        'nom' => 'Matthieu',
        'notes' => [10, 8, 16, 20, 17, 16, 15, 2]
    ],
    1 => [
        'nom' => 'Thomas',
        'notes' => [4, 18, 12, 15, 13, 7]
    ],
    2 => [
        'nom' => 'Jean',
        'notes' => [17, 14, 6, 2, 16, 18, 9]
    ],
    3 => [
        'nom' => 'Enzo',
        'notes' => [1, 14, 6, 2, 1, 8, 9]
    ]
];



//for ($i=0; i<=3; $i++) {
//    echo "$eleves[$i[nom]] a eu $eleves[$i[notes]]";


foreach($eleves as $eleve) {
    echo "$eleve[nom] a eu ";
        foreach ($eleve['notes'] as $notes) {
            echo $notes.", " ;
    }
    ?>
    <br>
<?php
}
?>
<br> 
<?php


$average = round((array_sum($eleves[2]['notes'])/count($eleves[2]['notes'])),2);
echo "La moyenne de $eleves[2]['nom'] est de $average";

?>



</body>
</html>