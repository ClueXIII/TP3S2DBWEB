<?php
    // Declaration 1
    $tab_a[0] = "G";
    $tab_a[1] = "A";
    $tab_a[2] = "R";
    $tab_a[3] = "N";
    $tab_a[4] = "I";
    $tab_a[5] = "E";
    $tab_a[6] = "R";
    echo "<p>Tableau A = ";
    print_r($tab_a);
    echo "</p>";
	
    // Declaration 2 
    $tab_b = array("Q", "U", "E", "N", "T","I","N");
    echo "<p>Tableau B = ";
    print_r($tab_b);
    echo "</p>";
	
    // Declaration 3
    $tab_c[] = "G";
    $tab_c[] = "R";
    $tab_c[] = "A";
    $tab_c[] = "N";
    $tab_c[] = "I";
    $tab_c[] = "E";
    $tab_c[] = "R";
    echo "<P>Tableau C = ";
    print_r($tab_c);

?>