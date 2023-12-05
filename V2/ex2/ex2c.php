<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>TP2 - ex2c</title>
    <link rel="stylesheet" href="ex2c_style.css">
  </head>
  <body>
    <h2>Tableau des capiteaux successifs</h2>
    <?php
    $capital = array();
    $val_dep = 11000;
    $capital[] = $val_dep;
    $chiffre = 7;
    $taux = $chiffre / 100;
    $seuil = 13000;
    $argent = array_values($capital)[0];
    for ($i = 0; $i < 11; $i++) {
        $capital[] = round($capital[$i] * (1 + $taux));
        $argent = array_values($capital)[$i];
    }
    /*liste html <li>*/
    echo "<ul>";
    echo "<li>capital initial = $val_dep €</li>";
    echo "<li>taux = $chiffre %</li>";
    echo "<li>seuil = $seuil €</li>";
    echo "</ul>";
    echo "<table>";
    echo "<tr><th class=un>Année</th><th class=un>Capital</th></tr>";

    $i = 0;
    while(array_values($capital)[$i] < $seuil) {
        $argent = array_values($capital)[$i];
        echo "<tr><td class=deux>$i</td><td class=deux>$argent €</td></tr>";
        $i++;
    } 
    $argent = array_values($capital)[$i+1];
    echo "<tr><td>$i</td><td class=trois>$argent €</td></tr>";
    
    echo "</table>";
    ?>

  </body>
</html>
