<!DOCTYPE html>
<html>
    <head>
    <?php
    echo "<h1>calcul sur les variables</h1>";
    $TVA=0.2;
    $Prix=150;
    $nombre=10;
    $ht=$Prix/(1+$TVA);
    $TTC=$ht * $TVA;
    echo "HT=$ht <br> TTC=$TTC";
    ?>
</head>
<body>
    
    </body>
    </html>