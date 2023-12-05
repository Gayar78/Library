<?php
    require_once("controller/controllerAdherent.php");
    require_once("config/connexion.php");
    connexion::connect();
    controllerAdherent::displayAll();
?>