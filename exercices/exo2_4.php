<html>
 <head>
  <meta charset="UTF-8">
 </head>
 <body>
  exo 2.4
  <br>
  <?php
$color = "blue"; // Couleur initiale (bleu)
$time = time() % 60; // Temps écoulé depuis la dernière requête (en secondes)
echo("Secondes : ".$time);
if ($time >= 0 && $time < 20) {
    $color = "blue"; // Bleu
} elseif ($time >= 20 && $time < 40) {
    $color = "yellow"; // Jaune
} elseif ($time >= 40 && $time < 60) {
    $color = "red"; // Rouge
}
echo '<h1 style="color:'. $color .'">Ce texte change de couleur toutes les 20s</h1>'
?>
 </body>
</html>