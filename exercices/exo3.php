<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>3</title>
</head>
<body>
exo 3
<br>
<?php
    echo "<h1>Tableaux simples</h1>";
    // Declaration 1
    $NOM[0] = "G";
    $NOM[1] = "A";
    $NOM[2] = "R";
    $NOM[3] = "N";
    $NOM[4] = "I";
    $NOM[5] = "E";
    $NOM[6] = "R";
    echo "<p>Tableau A = ";
    print_r($NOM);
    echo "</p>";

    // Declaration 2
    $PRENOM = array("Q", "U", "E", "N", "T","I","N");
    echo "<p>Tableau B = ";
    print_r($PRENOM);
    echo "</p>";

    // Declaration 3
    $SURNOM[] = "G";
    $SURNOM[] = "R";
    $SURNOM[] = "A";
    $SURNOM[] = "N";
    $SURNOM[] = "I";
    $SURNOM[] = "E";
    $SURNOM[] = "R";
    echo "<P>Tableau C = ";
    print_r($SURNOM);

    echo "<h1>Tableaux associatifs</h1>";
    $sites = array (
        "github" => "https://github.com/ClueXIII",
        "youtube" => "https://www.youtube.com",
        "discord" => "https://discord.com",
        "ENT" => "https://ent.univ-avignon.fr" );
    echo "Tableau de sites = ";
    print_r($sites);
    echo '<br><a style="color:green"> La case github du tableau de sites contient ';
    echo "le site ", $sites["github"], "</a>";

    echo "<h1>Parcours des tableaux simples</h1>";
    echo "<p>" . implode("-", $NOM) . "_" . implode("-", $PRENOM) . "_" . implode("-", $SURNOM) . "</p>";

    echo "<h1>Parcours des tableaux associatifs<h1>";
    $sports = array(
        "Football" => "https://www.fifa.com/",
        "Basketball" => "https://www.nba.com/",
        "Escalade" => "https://www.ffme.fr/",
        "Natation" => "https://www.fina.org/",
        "Tennis" => "https://www.atptour.com/",
    );
    echo "<h3>Version 1 d'affichage</h3>";
    while (list($sport, $url) = each($sports)) {
        echo "$sport (<a HREF=\"$url\">$url</a>)<br/>\n";
    }
    echo "<h3>Version 2 d'affichage</h3>";
    foreach ($sports as $sport => $url) {
        echo "$sport (<a HREF=\"$url\">$url</a>)<br/>\n";
    }

    echo "<h3>Affichage du tableau trié selon les clés</h3>";
    ksort($sports);
    while (list($sport, $url) = each($sports)) {
        echo "$sport (<a HREF=\"$url\">$url</a>)<br/>\n";
    }
?>
</body>
</html>
