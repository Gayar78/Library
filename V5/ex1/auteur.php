<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>TP5 - ex1</title>
  </head>
    <body>
        <?php
            require_once("objet.php");
              class Auteur extends objet {
                $num;
                $nom;
                $prenom;
                $nationalite;
              }

              function __constructeur($num, $nom, $prenom, $nationalite) {
                $this->num = $num;
                $this->nom = $nom;
                $this->prenom = $prenom;
                $this->nationalite = $nationalite;
              }

              function __toString() : string {
                $l = $this->nom;
                $n = $this->prenom;
                $p = $this->nationalite;
                return "Auteur : $l $n, $p \n";
              }
        ?>
    </body>
</html>