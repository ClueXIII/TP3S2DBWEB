<html>
 <head>
  <meta charset="UTF-8">
 </head>
 <body>
  exo 2.1
  <br>
  <?php 
    $i = 10;
    $j = 50;
    $result = $i*$j;
    echo ("<h1>le résultat du produit de i = $i et j = $j est $result</h1>");
    $k = $i;
    $i = $j;
    $j = $k;
    $result = $i*$j;
    echo ("<h1>le résultat du produit de i = $i et j = $j est $result</h1>");
  ?>
 </body>
</html>