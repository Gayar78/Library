<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>TP4 - ex1</title>
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

                function __construct($login, $mdp, $nomAdherent, $prenomAdherent, $email, $telephone)
                {
                    $this->login = $login;
                    $this->mdp = $mdp;
                    $this->nomAdherent = $nomAdherent;
                    $this->prenomAdherent = $prenomAdherent;
                    $this->email = $email;
                    $this->telephone = $telephone;
                }

                function __toString() : string {
                    $l = $this->login;
                    $n = $this->nomAdherent;
                    $p = $this->prenomAdherent;
                    return "Adherent : $l, \nNom : $n, \nPrenom : $p\n";
                }                
            }
        ?>
    </body>
</html>

