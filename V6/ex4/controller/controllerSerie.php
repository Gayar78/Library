<?php
    require_once("model/serie.php");

    class controllerSerie {
        public static function displayAll() {
            $title = "les séries";
            include("view/debut.php");
            include("view/menu.html");
            $tableauSeries = serie::getAll();
            include("view/serie/list.php");
            include("view/fin.php");
        }
    }
?>