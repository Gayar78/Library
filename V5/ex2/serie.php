<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>TP5 - ex2</title>
  </head>
    <body>
        <?php
          require_once("objet.php");
          class Serie extends ojbet{
            protected $num;
            protected $nom;
            protected $categorie;
          }

          public function __construct($num, $nom, $categorie){
            $this->num = $num;
            $this->nom = $nom;
            $this->categorie = $categorie;
          }

          public function __toString() : string {
            $l = $this->nom;
            $n = $this->categorie;
            return "Serie : $l, $n \n";
          }

        ?>
    </body>
</html>