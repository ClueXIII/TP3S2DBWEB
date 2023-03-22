<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>menu</title>
    <meta name = "viewport" content = "width =  device-width, initial-scale = 1">
    <link rel = "stylesheet" href = "https://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-cyan.css">
</head>
<body>
<ul class="w3.ul w3-theme" style="margin: 0;display: flex">
    <?php
    $TABPAGES = array("Page Intro"=>"intro.php","Page Formulaire"=>"form.php");
    foreach($TABPAGES as $key => $value){
        echo '<li style="display: inline" class="w3-padding-large" onmouseover="this.style.color=\'yellow\'" onmouseleave="this.style.color=\'white\'" ><a style="text-decoration: none" href="index.php?page='.$value.'" title="'.$key.'">'.$key.'</a></li>';
    }
    ?>
</ul>
</body>
</html>
