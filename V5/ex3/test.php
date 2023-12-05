<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>TP5 - ex3</title>
    </head>
    <body>
        <?php
            require_once("bd.php");
            require_once("connexion.php");
            connexion::connect();

            $tableau = bd::getAll();

            echo "<h2>Les Adherents</h2>";
            echo "<ul>";
            foreach ($tableau as $unBD){
                echo "<li>";
                echo $unBD;
                echo "</li>";
            }
            echo "</ul>";
        ?>
    </dody>
</html>