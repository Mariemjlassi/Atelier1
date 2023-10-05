<!DOCTYPE html>
<html>
    <head>
    <?php
$nom="jlassi";
$prenom="mariem";
echo"$nom $prenom <br>";
echo"$nom <br> $prenom";
?>
</head>
<body>
    
<table border='1'>
  <thead>
    <tr>
      <th >nom</th>
      <th >prenom</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?=$nom?></td>
      <td><?=$prenom?></td>
    </tr>
</tbody>
</table>
</body>
</html>