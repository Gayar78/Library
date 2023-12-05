<?php
    class controllerObjet {
        public static function displayAll() {
            $val = static::$classe;
            $title = "$val";
            include("view/debut.php");
            include("view/menu.html");
            $tableau = $val::getAll();
            include("view/list.php");
            include("view/fin.php");
        }
    }
?>