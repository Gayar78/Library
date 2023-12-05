        <?php
            require("./config/connexion.php");
            class objet {
                public function getattribut($attribut){
                    return $this->$attribut;
                }
                public function setattribut($attribut, $valeur){
                    $this->$attribut = $valeur;
                }
                public static function getAll(){
                    $classeRecuperee = static::$classe;
                    $requete = "SELECT * FROM $classeRecuperee;";
                    $resultat = connexion::pdo()->query($requete);
                    $resultat->setFetchmode(PDO::FETCH_CLASS, $classeRecuperee);
                    $tableau = $resultat->fetchAll();
                    return $tableau;
                }
                public static function getOne($id){
                    $classeRecuperee = static::$classe;
                    $identifiant = static::$identifiant;
                    $requetePreparee = "SELECT * FROM $classeRecuperee WHERE $identifiant = :id_tag;";
                    $resultat = connexion::pdo()->prepare($requetePreparee);
                    $tags = array("id_tag" => $id);
                    try{
                        $resultat->execute($tags);
                        $resultat->setFetchmode(PDO::FETCH_CLASS, $classeRecuperee);
                        $element = $resultat->fetch();
                        return $element;
                    } catch(PDOException $e){
                        echo $e->getMessage();
                    }
                }
                public static function delete($id){
                    $classeRecuperee = static::$classe;
                    $identifiant = static::$identifiant;
                    $requetePreparee = "DELETE FROM $classeRecuperee WHERE $identifiant = :id_tag;";
                    $resultat = connexion::pdo()->prepare($requetePreparee);
                    $tags = array("id_tag" => $id);
                    try{
                        $resultat->execute($tags);
                    } catch(PDOException $e){
                        echo $e->getMessage();
                    }
                }
            }
        ?>