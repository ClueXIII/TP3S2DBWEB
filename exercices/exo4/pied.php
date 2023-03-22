<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>pied</title>
    <meta name = "viewport" content = "width =  device-width, initial-scale = 1">
    <link rel = "stylesheet" href = "https://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-cyan.css">
</head>
<body>
<footer class="w3-footer w3-width w3-theme w3-container" >
    <?php
    echo '<p  style="margin:0;" class="w3-padding-32 w3-right">cette page a été modifiée le ';
    echo date("d/m/Y H:i:s", filemtime("index.php"));
    echo '</p>';
    ?>
</footer>
</body>
</html>

