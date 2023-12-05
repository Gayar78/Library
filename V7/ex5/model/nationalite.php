        <?php
            require_once("objet.php");
            class Nationalite extends objet{
                protected static string $identifiant = "nomAbrege";
                protected static string $classe = "nationalite";
                protected $numNationalite;
                protected $nomNationalite;
                protected $nomAbrege;
            

                function __construct($num=NULL, $nom=NULL, $nomAbrege=NULL){
                    if(!is_null($num)){
                        $this->numNationalite = $num;
                        $this->nomNationalite = $nom;
                        $this->nomAbrege = $nomAbrege;
                    }
                }

                function __toString() : string {
                    $l = $this->nomNationalite;
                    $n = $this->nomAbrege;
                    return "$l = $n";
                }
            }
        ?>