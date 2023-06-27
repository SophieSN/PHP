<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello</title>
</head>
<body>
    <?php
    $prenom = "Sophie";
    ?>

    <h1><?="Hello $prenom"; ?></h1>
    <h2><?php echo 'Hello toi ' .$prenom; ?></h2>
    <h3> Hello encore <?= $prenom; ?> </h3> 

</body>
</html>