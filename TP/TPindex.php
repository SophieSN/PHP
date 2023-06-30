
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP PHP</title>
    <link rel="stylesheet" href="https://fonts.google.com/specimen/Permanent+Marker">
    <link rel="stylesheet" href="TP.css">
    
    
</head>
<body>
    
    <?php
        
        $x = $_GET['x'] ?? 2;

        $library = [
            "Je dois répéter cette phrase.",
            "Je dois ouvrir mon micro en distanciel.",
            "Je dois travailler pendant les vacances.",
            "Je dois répéter que je vais y arriver.",
            "Je dois y croire et le répéter."
        ];

        count($library);
        $index = rand(0,count($library)-1);
        $choix= $library[$index];
    ?>   
        <form action="" method="get">
        <div class="section">
                <label for="$x">Nombre de répétitions</label>
                <input type="text" name="x" id="x" value="<?= $x; ?>">
            </div>
        </form>
    <div class = "container">
        
        <?php if ($x !==null) {
            for ($i = 0; $i<=$x;$i++ ) {
                echo "<p>$choix</p>";
            }
        }
        ?>
        <img id="bart" src="bart.png" alt="Bart">

        
    </div>  
</body>
</html>

