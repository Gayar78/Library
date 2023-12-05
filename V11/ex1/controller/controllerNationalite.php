<?php
    require_once("model/nationalite.php");

    class controllerNationalite extends controllerObjet {
        protected static string $classe = "nationalite";
        protected static string $identifiant = "nomAbrege";
        public static $champs = array(
            "nomNationalite" => ["text", "nomNationalite"],
            "nomAbrege" => ["text", "nomAbrege"]
        );
    }
?>