<?php
    require_once("model/serie.php");

    class controllerSerie {
        public static function displayAll() {
            $tableauSeries = serie::getAll();
            include("view/serie/list.php");
        }
    }
?>