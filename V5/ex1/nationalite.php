<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>TP5 - ex1</title>
  </head>
    <body>
        <?php
            require_once("objet.php");
            class Nationalite extends objet{
                $num;
                $nom;
                $nomAbrege;
            }

            function __constructeur($num, $nom, $nomAbrege){
                $this->num = $num;
                $this->nom = $nom;
                $this->nomAbrege = $nomAbrege;
            }

            function __toString() : string {
                $l = $this->nom;
                $n = $this->nomAbrege;
                return "Nationalite : $l, $n \n";
            }
        ?>
    </body>
</html>