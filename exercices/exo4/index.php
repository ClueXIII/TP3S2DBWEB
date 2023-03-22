<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>exo 4</title>
</head>
<body>
<?php
    include "entete.php";
    include "menu.php";
    if (isset($_GET['page'])){
    include($_GET['page']);
    } else {
    include("intro.php");
    }
    include "pied.php";
?>
</body>
</html>
