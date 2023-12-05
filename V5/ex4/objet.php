<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>TP5 - ex3</title>
  </head>
    <body>
        <?php
            include("connexion.php");
            class objet {
                public function getattribut($attribut){
                    return $this->$attribut;
                }
                public function setattribut($attribut, $valeur){
                    $this->$attribut = $valeur;
                }
                public static function getAll(){
                    $classeRecuperee = static::$classe;
                    $requete = "SELECT * FROM $classeRecuperee;";
                    $resultat = connexion::pdo()->query($requete);
                    $resultat->setFetchmode(PDO::FETCH_CLASS, $classeRecuperee);
                    $tableau = $resultat->fetchAll();
                    return $tableau;
                }
            }
        ?>
    </body>
</html>