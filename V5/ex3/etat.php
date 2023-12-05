<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>TP5 - ex3</title>
  </head>
    <body>
        <?php
            require_once("objet.php");
            class Etat extends objet{
                protected $num;
                protected $nom;
                
                public function __construct($num, $nom)
                {
                    $this->num = $num;
                    $this->nom = $nom;
                }

                public function __toString() : string {
                    $l = $this->nom;
                    return "Etat : $l, \n";
                } 

            }
        ?>
    </body>
</html>

