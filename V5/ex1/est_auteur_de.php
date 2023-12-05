<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>TP5 - ex1</title>
  </head>
    <body>
        <?php
            class Est_auteur_de{
              $bd;
              $auteur;
            }

              function __constructeur($bd, $auteur){
                $this->bd = $bd;
                $this->auteur = $auteur;
              }

              function __toString() : string{
                $l = $this->bd;
                $n = $this->auteur;
                return "$n est auteur de $l.\n";
              }
        ?>
    </body>
</html>