<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>TP2 - ex3a</title>
    <link rel="stylesheet" href="ex3c_style.css">
  </head>
  <body>
    <h2>Tableau des capiteaux successifs</h2>
    <?php      
    if (isset($_GET["capital_initial"]) && isset($_GET["taux"]) && isset($_GET["seuil"])) {
        $val_dep = floatval($_GET["capital_initial"]);
        $chiffre = floatval($_GET["taux"]);
        $seuil = floatval($_GET["seuil"]);
      } else {
        $val_dep = 10000;
        $chiffre = 5;
        $seuil = 13000;
      }

        $capital = array();
        $capital[] = $val_dep;
        $taux = $chiffre * 0.01;

        $argent = $val_dep;
        echo "<ul>";
        echo "<li>capital initial = $val_dep €</li>";
        echo "<li>taux = $chiffre %</li>";
        echo "<li>seuil = $seuil €</li>";
        echo "</ul>";
        echo "<table>";
        echo "<tr><th class='un'>Année</th><th class='un'>Capital</th></tr>";

        $i = 0;
        while ($argent < $seuil) {
            echo "<tr><td class='deux'>" . $i . "</td><td class='deux'>$argent €</td></tr>";
            $argent = round($argent * (1 + $taux));
            $i++;
        } 

        echo "<tr><td>" . $i . "</td><td class='trois'>$argent €</td></tr>";
        
        echo "</table>";
        /*lien faire le formulair.html*/
        echo "<a href='formulair.html'>Faire un autre calcul</a>";

    ?>
  </body>
</html>
