<html>
 <head>
  <meta charset="UTF-8">
 </head>
 <body>
  exo 2.3
  <br>
  <?php 
    $date_avant_hier = strftime('%A %d %B %Y', strtotime('-2 days'));
    echo ("<h1>$date_avant_hier </h1>");
  ?>
 </body>
</html>