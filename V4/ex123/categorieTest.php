<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>TP4 - ex2</title>
  </head>
    <body>
        <?php
            require_once("categorie.php");
            $categorie1 = new Categorie(1, "western", "On y retrouve les mêmes éléments que dans les films du même genre. Cow-boys, Indiens, shérifs, saloons, Ouest américains, colts, et stetsons en font partie intégrante.");
            $categorie2 = new Categorie(2, "humoristique", "Les auteurs de ce genre déploient le comique de situation, la parodie, l'autodérision, l'humour noir, le délire.");
            echo "<h1>Voici la liste de nos categories</h1>";
            echo "<ul><li>$categorie1</li><li>$categorie2</li></ul>";
        ?>
    </body>
</html>