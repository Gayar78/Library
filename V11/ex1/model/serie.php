        <?php
          require_once("objet.php");
          class Serie extends objet{
            protected static string $identifiant = "nomSerie";
            protected static string $classe = "serie";
            protected $numSerie;
            protected $nomSerie;
            protected $categorie;
          
            function __construct($num=NULL, $nom=NULL, $categorie=NULL){
              if(!is_null($num)){
                $this->numSerie = $num;
                $this->nomSerie = $nom;
                $this->categorie = $categorie;
              }
            }

            function __toString() : string {
              $n = $this->nomSerie;
              $c = $this->categorie;
              return "$n de categorie $c \n";
            }
          }

        ?>