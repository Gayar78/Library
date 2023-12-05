<?php
    require_once("model/adherent.php");

    class controllerAdherent {
        public static function displayAll() {
            $title = "les adhérents";
            include("view/debut.php");
            include("view/menu.html");
            $tableauAdherents = adherent::getAll();
            include("view/adherent/list.php");
            include("view/fin.php");
        }
    }
?>