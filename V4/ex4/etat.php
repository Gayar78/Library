<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>TP4 - ex4</title>
  </head>
    <body>
        <?php
            require_once("objet.php");
            class Etat extends objet{
                protected $numEtat;
                protected $nomEtat;
                
                public function __construct($num, $nom)
                {
                    $this->numEtat = $num;
                    $this->nomEtat = $nom;
                }

                public function __toString() : string {
                    $l = $this->nomEtat;
                    return "Etat : $l, \n";
                } 

            }
        ?>
    </body>
</html>

