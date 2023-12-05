<?php
    require_once("model/bd.php");

    class controllerBD extends controllerObjet {
        protected static string $classe = "bd";
        protected static string $identifiant = "titre";
        public static $champs = array(
            "titre" => ["text", "titre"],
            "anneeParution" => ["date", "anneeParution"],
            "serie" => ["number", "serie"],
            "rang" => ["number", "rang"],
            "etat" => ["number", "etat"],
            "emprunteur" => ["text", "emprunteur"]
        );
    }
?>