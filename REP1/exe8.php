<!DOCTYPE html>
<html>
<head>
    <title>Vérifier si un nombre est pair ou impair</title>
</head>
<body>
    <h1>Vérifier si un nombre est pair ou impair</h1>
    <form method="post">
        Entrez un nombre : <input type="text" name="nombre">
        <input type="submit" value="Vérifier">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST["nombre"];

        if (is_numeric($nombre)) {
            if ($nombre % 2 == 0) {
                echo "<p>Le nombre est pair.</p>";
            } else {
                echo "<p>Le nombre est impair.</p>";
            }
        } else {
            echo "<p>Entrez un nombre valide.</p>";
        }
    }
    ?>
</body>
</html>
