<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>TP4 - ex4</title>
  </head>
    <body>
        <?php
            require_once("objet.php");
            class Nationalite extends objet{
                $numNationalite;
                $nomNationalite;
                $nomAbrege;

                function __constructeur($num, $nom, $nomAbrege){
                    $this->numNationalite = $num;
                    $this->nomNationalite = $nom;
                    $this->nomAbrege = $nomAbrege;
                }

                function __toString() : string {
                    $l = $this->nomNationalite;
                    $n = $this->nomAbrege;
                    return "Nationalite : $l, $n \n";
                }
            }
        ?>
    </body>
</html>