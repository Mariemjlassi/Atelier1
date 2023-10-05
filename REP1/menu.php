<?php
function display_menu() {
 echo '<ul>';
 for ($i = 4; $i <= 11; $i++) {
 echo '<li><a href="ex' . $i . '.php">Exercice ' . $i . '</a></li>';
 }
 echo '</ul>';
}
?>