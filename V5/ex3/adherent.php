<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>TP5 - ex3</title>
  </head>
    <body>
        <?php
            require_once("objet.php");
            class Adherent extends objet
            {
                protected $login;
                protected $mdp;
                protected $nomAdherent;
                protected $prenomAdherent;
                protected $email;
                protected $telephone;

                function __construct($login=NULL, $mdp=NULL, $nomAdherent=NULL, $prenomAdherent=NULL, $email=NULL, $telephone=NULL)
                {
                    if(!is_null($login)){   
                        $this->login = $login;
                        $this->mdp = $mdp;
                        $this->nomAdherent = $nomAdherent;
                        $this->prenomAdherent = $prenomAdherent;
                        $this->email = $email;
                        $this->telephone = $telephone;
                    }
                }

                function __toString() : string {
                    $l = $this->login;
                    $n = $this->nomAdherent;
                    return "$l($n)";
                }
                
                public static function getAll(){
                    $requete = "SELECT * FROM adherent;";

                    $resultat = connexion::pdo()->query($requete);

                    $resultat->setFetchmode(PDO::FETCH_CLASS, "adherent");

                    $tableau = $resultat->fetchAll();

                    return $tableau;
                }
            }
        ?>
    </body>
</html>

