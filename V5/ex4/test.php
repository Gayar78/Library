<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>TP5 - ex3</title>
    </head>
    <body>
        <?php
            require_once("bd.php");
            require_once("adherent.php");
            require_once("serie.php");
            require_once("etat.php");
            require_once("auteur.php");
            require_once("connexion.php");
            require_once("categorie.php");
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