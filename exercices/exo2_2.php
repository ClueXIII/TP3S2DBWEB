<html>
 <head>
  <meta charset="UTF-8">
 </head>
 <body>
  exo 2.2
  <br>
  <?php 
    $nbr_1 = 10;
    $nbr_2 = 74;
    $nbrmult = $nbr_1*$nbr_2;
    $nbradd = $nbr_1+$nbr_2;
    $nbrdiff = $nbr_2-$nbr_1;
    $a = "salut ! ";
    $b = "resultats (somme, différence et produit) de ". $nbr_1. " et ". $nbr_2. " : ";
    $msg = $a.$b;
    echo ("<h3>$msg $nbradd $nbrdiff $nbrmult</h3>\n");
  ?>
 </body>
</html>