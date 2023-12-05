<?php
    require_once("model/adherent.php");

    class controllerAdherent {
        public static function displayAll() {
            $title = "les adhérents";
            include("view/debut.php");
            include("view/menu.html");
            $tableau = adherent::getAll();
            include("view/list.php");
            include("view/fin.php");
        }
    }
?>