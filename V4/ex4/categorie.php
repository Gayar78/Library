<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>TP4 - ex4</title>
  </head>
    <body>
        <?php
            require_once("objet.php");
            class Categorie extends objet
            {
                protected $numCategorie;
                protected $nomCategorie;
                protected $descriptif;

                function __construct($num, $nom, $descriptif)
                {
                    $this->numCategorie = $num;
                    $this->nomCategorie = $nom;
                    $this->descriptif = $descriptif;
                }

                function __toString() : string {
                    $n = $this->nomCategorie;
                    $d = $this->descriptif;
                    return "Categorie : $n, \nDescriptif : $d\n";
                }
            }
        ?>
    </body>
</html>