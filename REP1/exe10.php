<!DOCTYPE html>
<html>
<head>
    <title>Tirage aléatoire d'un entier pair</title>
</head>
<body>
    <h1>Tirage aléatoire d'un entier pair</h1>
    <?php
    $entierpair = null;

    while ($entierpair === null || $entierpair % 2 !== 0) {
        $entierAleatoire = rand(1, 100); 

        if ($entierAleatoire % 2 === 0) {
            $entierpair = $entierAleatoire;
        }
    }

    echo "<p>Le premier entier pair obtenu par tirage aléatoire est : $entierpair</p>";
    ?>
</body>
</html>
