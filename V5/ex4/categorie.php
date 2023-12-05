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
                protected static string $classe = "categorie";
                protected $numCategorie;
                protected $nomCategorie;
                protected $descriptif;

                function __construct($num=NULL, $nom=NULL, $descriptif=NULL)
                {
                    if(!is_null($num)){
                        $this->numCategorie = $num;
                        $this->nomCategorie = $nom;
                        $this->descriptif = $descriptif;
                    }
                }

                function __toString() : string {
                    $n = $this->nomCategorie;
                    $d = $this->descriptif;
                    return "Categorie : $n\n($d)\n";
                }
            }
        ?>
    </body>
</html>