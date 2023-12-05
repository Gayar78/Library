<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>TP5 - ex1</title>
  </head>
    <body>
        <?php
          require_once("objet.php");
          class Bd extends objet{
            $num;
            $titre;
            $anneeParution;
            $serie;
            $rang;
            $etat;
            $emprunteur;
          }

          function __constructeur($num, $titre, $anneeParution, $serie, $rang, $etat, $emprunteur){
            $this->num = $num;
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

        ?>
    </body>
</html>