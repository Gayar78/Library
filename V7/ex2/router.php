<?php
    require_once("controller/controllerObjet.php");
    $objet = "adherent";
    $objets = ["adherent", "auteur", "bd", "categorie", "etat", "nationalite", "serie"];
    if(isset($_GET["objet"]) && in_array($_GET["objet"], $objets)){
        $objet = $_GET["objet"];
    }
    $controller = "controller".ucfirst($objet);
    //ucfirst() retourne la chaîne string avec son premier caractère en majuscule.
    require_once("controller/$controller.php");
    require_once("config/connexion.php");
    connexion::connect();
    $controller::displayAll();
?>