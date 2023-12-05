<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>TP5 - ex3</title>
  </head>
    <body>
        <?php
            require_once("objet.php");
            class Categorie extends objet
            {
                protected $num;
                protected $nom;
                protected $descriptif;

                public function __construct($num, $nom, $descriptif)
                {
                    $this->num = $num;
                    $this->nom = $nom;
                    $this->descriptif = $descriptif;
                }

                public function __toString() : string {
                    $n = $this->nom;
                    $d = $this->descriptif;
                    return "Categorie : $n, \nDescriptif : $d\n";
                }
            }
        ?>
    </body>
</html>