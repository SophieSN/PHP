<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau 10 par 10</title>
</head>
<body>
    <div class = "container">
        <div class = "flex">
            <div>
            <?php
            for ($i = 0; $i <= 10; $i++) {
                echo $i;
                }
                ?>
                <br>
                <?php
                for ($j = 0; $j <=10; $j++) {
                    $a = 0;
                    echo $a. $a*$j;
                }
                ?>
            </div>
            <?php
            $a = 1;
            for ($i = 0; $i <= 10; $i++)
                echo $a." * $i = ".($a * $i)."<br>";
            ?>
        </div>
    </div>
</body>
</html>