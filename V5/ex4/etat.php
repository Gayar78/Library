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
                protected static string $classe = "etat";
                protected $numEtat;
                protected $nomEtat;
                
                function __construct($num=NULL, $nom=NULL)
                {
                    if(!is_null($num)){
                    	$this->numEtat = $num;
                        $this->nomEtat = $nom;
                    }
                }

                function __toString() : string {
                    $l = $this->nomEtat;
                    return "Etat : $l";
                } 

            }
        ?>
    </body>
</html>

