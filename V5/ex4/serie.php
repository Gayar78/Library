<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>TP5 - ex3</title>
  </head>
    <body>
        <?php
          require_once("objet.php");
          class Serie extends objet{
            protected static string $classe = "serie";
            protected $numSerie;
            protected $nomSerie;
            protected $categorie;
          
            function __construct($num=NULL, $nom=NULL, $categorie=NULL){
              if(!is_null($num)){
                $this->numSerie = $num;
                $this->nomSerie = $nom;
                $this->categorie = $categorie;
              }
            }

            function __toString() : string {
              $l = $this->nomSerie;
              $n = $this->categorie;
              return "Serie : $l | $n \n";
            }
          }

        ?>
    </body>
</html>