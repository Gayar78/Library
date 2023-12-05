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

        public static function displayOne(){
            $val = static::$classe;
            $title = "un(e) $val";
            $identifiant = $val::getPrimary();
            include("view/debut.php");
            include("view/menu.html");
            $element = $val::getOne($_GET[$identifiant]);
            include("view/details.php");
            include("view/fin.php");
        }
    }
?>