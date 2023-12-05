<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>TP5 - ex3</title>
  </head>
    <body>
        <?php
            require_once("objet.php");
              class Auteur extends objet {
                protected static string $classe = "auteur";
                protected $numAuteur;
                protected $nomAuteur;
                protected $prenomAuteur;
                protected $nationalite;

                function __construct($num=NULL, $nom=NULL, $prenom=NULL, $nationalite=NULL) {
                  if(!is_null($num)){
                    $this->numAuteur = $num;
                    $this->nomAuteur = $nom;
                    $this->prenomAuteur = $prenom;
                    $this->nationalite = $nationalite;
                  }
                }

                function __toString() : string {
                  $l = $this->nomAuteur;
                  $n = $this->prenomAuteur;
                  return "Auteur : $l $n,";
                }
              }
        ?>
    </body>
</html>