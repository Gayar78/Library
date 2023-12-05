<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>TP4 - ex4</title>
  </head>
    <body>
        <?php
          require_once("objet.php");
          class Bd extends objet{
            $numBD;
            $titre;
            $anneeParution;
            $serie;
            $rang;
            $etat;
            $emprunteur;

            function __constructeur($num, $titre, $anneeParution, $serie, $rang, $etat, $emprunteur){
              $this->numBD = $num;
              $this->titre = $titre;
              $this->anneeParution = $anneeParution;
              $this->serie = $serie;
              $this->rang = $rang;
              $this->etat = $etat;
              $this->emprunteur = $emprunteur;
            }

            function __toString() : string {
              $l = $this->titre;
              $n = $this->anneeParution;
              $p = $this->serie;
              return "Bd : [$l, $n, $p]  \n";
            }
          }

        ?>
    </body>
</html>