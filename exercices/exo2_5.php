<html>
 <head>
  <meta charset="UTF-8">
 </head>
 <body>
  exo 2.5
  <br>
  <?php
    for($i=0; $i <36;$i++){
        if ($i%9==0){
            $a = rand(0,255);
            $b = rand(0,255);
            $c = rand(0,255);
            $couleur = $a.",".$b.",".$c;
        };
        echo '<h1 style="color:rgb('.$couleur.')">Ce texte change toutes les 9 fois qu\'il apparait</h1>';
    }
?>
 </body>
</html>