<?php
    class controllerObjet {
        public static function displayAll() {
            $valclass = static::$classe;
            $id = static::$identifiant;
            $title = "$valclass";
            include("view/debut.php");
            include("view/menu.html");
            $tableau = $valclass::getAll();
            include("view/list.php");
            include("view/fin.php");
        }
        public static function displayOne() {
            $valclass = static::$classe;
            $title = "un(e) $valclass";
            $id = static::$identifiant;
            $nomId = "$id";
            $valGet = $_GET[$nomId];
            include("view/debut.php");
            include("view/menu.html");
            $element = $valclass::getOne($valGet);
            include("view/details.php");
            include("view/fin.php");
        }
        public static function delete(){
            $valclass = static::$classe;
            $id = static::$identifiant;
            $nomId = "$id";
            $valGet = $_GET[$nomId];
            $valclass::delete($valGet);
            self::displayAll();
        }
        public static function displayCreationForm() {
            $valchamps = static::$champs;
            $valclass = static::$classe;
            $id = static::$identifiant;
            $title = "Création d'un(e)".$valclass;
            include("view/debut.php");
            include("view/menu.html");
            include("view/formulaireCreation.php");
            include("view/fin.php");
        }
        public static function creat(){
            $valclass = static::$classe;
            $valchamps = static::$champs;
            $donnees = array();
            foreach ($_GET as $champ => $valeur) {
                // Vérification pour exclure "objet" et "action"
                if ($champ !== "objet" && $champ !== "action") {
                    // Ajout de la paire clé / valeur dans $donnees
                    $donnees[$champ] = $valeur;
                }
            }
            $valclass::creat($donnees);
            self::displayAll();
        }        
    }
?>