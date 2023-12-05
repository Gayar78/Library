<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>TP2 - ex2b</title>
    <link rel="stylesheet" href="ex2b_style.css">
  </head>
  <body>
    <h2>Tableau des capiteaux successifs</h2>
    <?php
    $capital = array();
    $capital[] = 10000;
    $taux = 0.05;
    $argent = array_values($capital)[0];
    for ($i = 0; $i < 11; $i++) {
        $capital[] = round($capital[$i] * (1 + $taux));
        $argent = array_values($capital)[$i];
    }
    echo "<table>";
    echo "<tr class=un><th>Année</th><th>Capital</th></tr>";
    for ($i = 0; $i < 11; $i++) {
        $argent = array_values($capital)[$i];
        echo "<tr class=deux><td class=trois>$i</td><td>$argent €</td></tr>";
    }
    echo "</table>";
    ?>

  </body>
</html>
