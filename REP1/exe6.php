<!DOCTYPE html>
<html>
<head>
    <title>Calculatrice d'addition</title>
</head>
<body>
    <h1>Calculatrice d'addition</h1>
    <form method="post">
        <label >Valeur 1:</label>
        <input name="v1" id="v1" required>
        <br>
        <label >Valeur 2:</label>
        <input name="v2" id="v2" required>
        <br>
        <input type="submit" name="calculer" value="Calculer">
    </form>

    <?php
    if (isset($_POST['calculer'])) {
        $valeur1 = $_POST['v1'];
        $valeur2 = $_POST['v2'];
        $res = $valeur1 + $valeur2;
        echo "<h2>Résultat :</h2>";
        echo "<p>$valeur1 + $valeur2 = $res</p>";
    }
    ?>
</body>
</html>