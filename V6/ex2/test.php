<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>TP5 - ex3</title>
    </head>
    <body>
        <?php
            require("./model/adherent.php");
            require("./model/auteur.php");
            require("./model/bd.php");
            require("./model/categorie.php");
            require("./model/etat.php");
            require("./model/serie.php");
            connexion::connect();

            $tableau = bd::getAll();

            echo "<h2>Les BD</h2>";
            echo "<ul>";
            foreach ($tableau as $uneCase){
                echo "<li>";
                echo $uneCase;
                echo "</li>";
            }
            echo "</ul>";

            $tableau = adherent::getAll();

            echo "<h2>Les Adherents</h2>";
            echo "<ul>";
            foreach ($tableau as $uneCase){
                echo "<li>";
                echo $uneCase;
                echo "</li>";
            }
            echo "</ul>";

            $tableau = serie::getAll();

            echo "<h2>Les Series</h2>";
            echo "<ul>";
            foreach ($tableau as $uneCase){
                echo "<li>";
                echo $uneCase;
                echo "</li>";
            }
            echo "</ul>";

            $tableau = etat::getAll();

            echo "<h2>Les Etats</h2>";
            echo "<ul>";
            foreach ($tableau as $uneCase){
                echo "<li>";
                echo $uneCase;
                echo "</li>";
            }
            echo "</ul>";

            $tableau = auteur::getAll();

            echo "<h2>Les Auteurs</h2>";
            echo "<ul>";
            foreach ($tableau as $uneCase){
                echo "<li>";
                echo $uneCase;
                echo "</li>";
            }
            echo "</ul>";

            $tableau = categorie::getAll();

            echo "<h2>Les Categories</h2>";
            echo "<ul>";
            foreach ($tableau as $uneCase){
                echo "<li>";
                echo $uneCase;
                echo "</li>";
            }
            echo "</ul>";
        ?>
    </dody>
</html>