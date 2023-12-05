<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset ="utf-8">
        <title>les adherents</title>
    </head>
    <body>
        <h2> Les Adherents </h2>
        <ul>
            <?php
                foreach ($tableauAdherents as $unAdherent){
                    echo "<li>";
                    echo $unAdherent;
                    echo "</li>";
                }
            ?>
        </ul>
    </body>
</html>