<?php
    require_once("model/auteur.php");

    class controllerAuteur extends controllerObjet {
        protected static string $classe = "auteur";
        protected static string $identifiant = "nomAuteur";
        public static $champs = array(
            "nomAuteur" => ["text", "nomAuteur"],
            "prenomAuteur" => ["text", "prenomAuteur"],
            "nationalite" => ["number", "nationalite"]
        );
    }
?>