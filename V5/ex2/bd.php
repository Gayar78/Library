<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>TP5 - ex2</title>
  </head>
    <body>
        <?php
          require_once("objet.php");
          class bd extends objet{
            protected $numBD;
            protected $titre;
            protected $anneeParution;
            protected $serie;
            protected $rang;
            protected $etat;
            protected $emprunteur;
          }

          function __construct($num=NULL, $titre=NULL, $anneeParution = NULL, $serie = NULL, $rang = NULL, $etat = NULL, $emprunteur = NULL){
            if(!is_null($num)){
              $this->num = $num;
              $this->titre = $titre;
              $this->anneeParution = $anneeParution;
              $this->serie = $serie;
              $this->rang = $rang;
              $this->etat = $etat;
              $this->emprunteur = $emprunteur;
            }
          }

          function __toString() : string {
            $l = $this->titre;
            $n = $this->anneeParution;
            return "$l (parue en $n)";
        }        
        ?>
    </body>
</html>