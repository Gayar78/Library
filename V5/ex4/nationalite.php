<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>TP5 - ex3</title>
  </head>
    <body>
        <?php
            require_once("objet.php");
            class Nationalite extends objet{
                protected static string $classe = "nationalite";
                protected $numNationalite;
                protected $nomNationalite;
                protected $nomAbrege;
            

                function __construct($num=NULL, $nom=NULL, $nomAbrege=NULL){
                    if(!is_null($num)){
                        $this->numNationalite = $num;
                        $this->nomNationalite = $nom;
                        $this->nomAbrege = $nomAbrege;
                    }
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