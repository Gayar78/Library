<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>TP5 - ex2</title>
    </head>
    <body>
        <?php
            require_once("adherent.php");
            require_once("connexion.php");
            connexion::connect();

            $requete = "SELECT * FROM adherent LIMIT 5;";

            $resultat = connexion::pdo()->query($requete);

            $resultat->setFetchMode(PDO::FETCH_CLASS, "adherent");

            $tableau = $resultat->fetchAll();

            echo "<h2>Les 5 premieres adherent</h2>";
            echo "<ul>";
            foreach ($tableau as $unA){
                echo "<li>";
                echo $unA;
                echo "</li>";
            }
            echo "</ul>";
        ?>
    </dody>
</html>