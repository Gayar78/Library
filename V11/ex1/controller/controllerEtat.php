<?php
    require_once("model/etat.php");

    class controllerEtat extends controllerObjet {
        protected static string $classe = "etat";
        protected static string $identifiant = "numEtat";
        public static $champs = array(
            "nomEtat" => ["text", "nomEtat"]
        );
    }
?>