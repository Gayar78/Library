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
                public static function creat($donnees) {
                    $classeRecuperee = static::$classe;
                    $requetePreparee = "INSERT INTO $classeRecuperee (";
                    $valeurs = "VALUES (";
                    foreach ($donnees as $champ => $valeur) {
                        $requetePreparee .= "$champ, ";
                        $valeurs .= ":$champ, ";
                    }
                    $requetePreparee = substr($requetePreparee, 0, -2);
                    $valeurs = substr($valeurs, 0, -2);
                    $requetePreparee .= ") ";
                    $valeurs .= ");";
                    $requetePreparee .= $valeurs;
                    $resultat = connexion::pdo()->prepare($requetePreparee);
                    try{
                        $resultat->execute($donnees);
                    } catch(PDOException $e){
                        echo $e->getMessage();
                    }
                }
                public static function update($donnees) {
                    $classeRecuperee = static::$classe;
                    $requetePreparee2 = "DELETE FROM $classeRecuperee WHERE $id = $valGet;"; 
                    $requetePreparee2 = "UPDATE $classeRecuperee SET";
                    foreach($donnees as $champ => $valeur) {
                        $requetePreparee .= " $champ = $valeur,";
                    }
                    $requetePreparee = substr($requetePreparee, 0, -1);
                    $requetePreparee .= "WHERE $id = $valGet;";
                    $resultat1 = connexion::pdo()->prepare($requetePreparee2);
                    $resultat2 = connexion::pdo()->prepare($requetePreparee);
                    try{
                        $resultat1->execute($donnees);
                    } catch(PDOException $e){
                        echo $e->getMessage();
                    }
                    try{
                        $resultat2->execute($donnees);
                    } catch(PDOException $e){
                        echo $e->getMessage();
                    }
                }                                             
            }
        ?>