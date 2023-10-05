<!DOCTYPE html>
<html>
<head>
    <title>Test de multiples de 3 et 5</title>
</head>
<body>
    <h1>Test de multiples de 3 et 5</h1>
    <form method="post">
        Entrez un nombre : <input type="text" name="nombre">
        <input type="submit" value="Tester">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST["nombre"];

        if (is_numeric($nombre) && $nombre % 3 == 0 && $nombre % 5 == 0) {
            echo "<p>Le nombre est à la fois un multiple de 3 et de 5.</p>";
        } else {
            echo "<p>Le nombre n'est pas à la fois un multiple de 3 et de 5 ou n'est pas un nombre valide.</p>";
        }
    }
    ?>
</body>
</html>
