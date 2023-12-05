        <?php
            require_once("objet.php");
            class Etat extends objet{
                protected static string $identifiant = "numEtat";
                protected static string $classe = "etat";
                protected $numEtat;
                protected $nomEtat;
                
                function __construct($num=NULL, $nom=NULL)
                {
                    if(!is_null($num)){
                    	$this->numEtat = $num;
                        $this->nomEtat = $nom;
                    }
                }

                function __toString() : string {
                    $l = $this->nomEtat;
                    return "Etat : $l";
                } 

            }
        ?>