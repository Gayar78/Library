<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>TP4 - ex4</title>
  </head>
    <body>
        <?php
            require_once("objet.php");
              class Auteur extends objet {
                $numAuteur;
                $nomAuteur;
                $prenomAuteur;
                $nationalite;

                function __constructeur($num, $nom, $prenom, $nationalite) {
                  $this->numAuteur = $num;
                  $this->nomAuteur = $nom;
                  $this->prenomAuteur = $prenom;
                  $this->nationalite = $nationalite;
                }

                function __toString() : string {
                  $l = $this->nomAuteur;
                  $n = $this->prenomAuteur;
                  $p = $this->nationalite;
                  return "Auteur : $l $n, $p \n";
                }
              }
        ?>
    </body>
</html>