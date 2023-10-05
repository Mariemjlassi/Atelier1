<!DOCTYPE html>
<html>
<body>
<?php
$a = 5.7;
$b = 11.5;
$res = $a <=> $b;
switch ($res) {
    case 1:
        echo "$a est plus grand que $b";
        break;
    case -1:
        echo "$a est plus petit que $b";
        break;
    case 0:
        echo "$a est égal à $b";
        break;
    default:
        echo "Impossible de comparer $a et $b";
}
?>
</body>
</html>