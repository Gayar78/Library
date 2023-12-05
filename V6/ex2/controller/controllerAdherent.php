<?php
    require_once("model/adherent.php");

    class controllerAdherent {
        public static function displayAll() {
            $tableauAdherents = adherent::getAll();
            include("view/adherent/list.php");
        }
    }
?>