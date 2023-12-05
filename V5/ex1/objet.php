<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>TP5 - ex1</title>
  </head>
    <body>
        <?php
            class objet {
                public function getattribut($attribut){
                    return $this->$attribut;
                }
                public function setattribut($attribut, $valeur){
                    $this->$attribut = $valeur;
                }
            }
        ?>
    </body>
</html>