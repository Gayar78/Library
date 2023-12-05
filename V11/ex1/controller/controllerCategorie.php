<?php
    require_once("model/categorie.php");

    class controllerCategorie extends controllerObjet {
        protected static string $classe = "categorie";
        protected static string $identifiant = "nomCategorie";
        public static $champs = array(
            "nomCategorie" => ["text", "nomCategorie"],
            "descriptif" => ["text", "descriptif"]
        );
    }
?>