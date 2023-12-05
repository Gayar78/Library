        <?php
            class Est_auteur_de{
              protected $bd;
              protected $auteur;

              function __construct($bd, $auteur){
                  $this->bd = $bd;
                  $this->auteur = $auteur;
              }

              function __toString() : string{
                  $l = $this->bd;
                  $n = $this->auteur;
                  return "$n est auteur de $l.\n";
              }
            }
        ?>