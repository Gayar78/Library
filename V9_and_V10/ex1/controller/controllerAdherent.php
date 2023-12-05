<?php
    require_once("model/adherent.php");

    class controllerAdherent extends controllerObjet {
        protected static string $classe = "adherent";
        protected static string $identifiant = "login";
        public static $champs = array(
            "login" => ["test", "identifiant"],
            "mdp" => ["password", "mot de passe"],
            "nom" => ["text", "nom"],
            "prenom" => ["text", "prénom"],
            "email" => ["email", "email"],
            "telephone" => ["text", "téléphone"]
        );
    }
?>