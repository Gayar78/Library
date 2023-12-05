<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset ="utf-8">
        <title>les series</title>
    </head>
    <body>
        <h2> Les Series </h2>
        <ul>
            <?php
                foreach ($tableauSeries as $uneSerie){
                    echo "<li>";
                    echo $uneSerie;
                    echo "</li>";
                }
            ?>
        </ul>
    </body>
</html>