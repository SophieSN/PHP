<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo fonctions</title>
</head>
<body>

<?php

function carre(int $nbre) : int {
    return $nbre*$nbre;
}

function airerecange(int $nbre1, int $nbre2) : int {
    return $nbre1*$nbre2;
}

function airecercle(int $rayon) : float {
    return 3.14*$rayon*$rayon;
}

function calculTTC(float $prixht, int $tva) : float {
    return round($prixht*$tva,2);
}
?>
</body>
</html>