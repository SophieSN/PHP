<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Major</title>
</head>
<body>

<?php
$age = 12;

if ($age>18) {
    echo "A $age, vous pouvez entrer";
    }

elseif($age<=18 and $age>=16) {
    echo "Entree interdite. A $age  ans, vous êtes presque majeur";
}

elseif($age<16 and $age>14) {
    echo "Entrée interdite. A $age  ans, vous êtes jeune";
}

else {
  echo  "Entrée interdite. A $age  ans, vous êtes trop jeune";
}
?>
    
</body>
</html>