<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>TP4 - ex4</title>
  </head>
    <body>
        <?php
          require_once("objet.php");
          class Serie extends ojbet{
            $numSerie;
            $nomSerie;
            $categorie;

            function __constructeur($num, $nom, $categorie){
              $this->numSerie = $num;
              $this->nomSerie = $nom;
              $this->categorie = $categorie;
            }

            function __toString() : string {
              $l = $this->nomSerie;
              $n = $this->categorie;
              return "Serie : $l, $n \n";
            }
          }
        ?>
    </body>
</html>