        <?php
            require_once("objet.php");
              class Auteur extends objet {
                protected static string $identifiant = "nomAuteur";
                protected static string $classe = "auteur";
                protected $numAuteur;
                protected $nomAuteur;
                protected $prenomAuteur;
                protected $nationalite;

                function __construct($num=NULL, $nom=NULL, $prenom=NULL, $nationalite=NULL) {
                  if(!is_null($num)){
                    $this->numAuteur = $num;
                    $this->nomAuteur = $nom;
                    $this->prenomAuteur = $prenom;
                    $this->nationalite = $nationalite;
                  }
                }

                function __toString() : string {
                  $l = $this->nomAuteur;
                  $p = $this->prenomAuteur;
                  $n = $this->nationalite;
                  return "Auteur $l $p est de nationalité $n";
                }
              }
        ?>