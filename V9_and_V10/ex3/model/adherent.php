        <?php
            require_once("objet.php");
            class Adherent extends objet
            {
                protected static string $identifiant = "login";
                protected static string $classe = "adherent";
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
                    $p = $this->prenomAdherent;
                    return "$l($p $n)";
                }
            }
        ?>

