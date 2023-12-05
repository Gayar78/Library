<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>TP4 - ex1</title>
  </head>
    <body>
        <?php
            require_once("adherent.php");
            $adherent1 = new Adherent("speedy", null, "Dupont", "Antoine", "antoine.dupont@yopmail.com", null);
            $adherent2 = new Adherent("thebest", null, "Chabal", "Sébastien", null, "07 88 51 12 00");

            echo "<h1>Voici la liste de nos adherents</h1>";
            echo "<ul><li>$adherent1</li><li>$adherent2</li></ul>";
            echo "<h1>Quelque Détails</h1>";
            echo "<ul><li>L'email de l'adhérent ".$adherent1->getattribut('login')." est ".$adherent1->getattribut('email')."</li>";
            echo "<li>Le numéro de telephone de l'adhérent ".$adherent2->getattribut('login')." est ".$adherent2->getattribut('telephone')."</li></ul>";
        ?>
    </body>
</html>
