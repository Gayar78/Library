<?php
    require_once("model/serie.php");

    class controllerSerie extends controllerObjet {
        protected static string $classe = "serie";
        protected static string $identifiant = "nomSerie";
        public static $champs = array(
            "nomSerie" => ["text", "nomSerie"],
            "categorie" => ["number", "categorie"]
        );
    }
?>