<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>TP5 - ex3</title>
</head>
<body>
    <?php
    require_once("adherent.php");

    $login = isset($_GET['login']) ? $_GET['login'] : null;
    $mdp = isset($_GET['mdp']) ? $_GET['mdp'] : null;
    $nom = isset($_GET['nom']) ? $_GET['nom'] : null;
    $prenom = isset($_GET['prenom']) ? $_GET['prenom'] : null;
    $email = isset($_GET['email']) ? $_GET['email'] : null;
    $telephone = isset($_GET['telephone']) ? $_GET['telephone'] : null;

    $adherent = new Adherent($login, $mdp, $nom, $prenom, $email, $telephone);

    echo "<h2>Affichage du contenu \$_GET</h2>";
    if(isset($_GET)) {
        echo "<pre>" . print_r($_GET, true) . "</pre>";
    }
    echo "<h2>Affichage de l'adhérent</h2>";
    echo "<p> adhérent " . $adherent->getAttribut('login') . "(" . $adherent->getAttribut('nomAdherent') . " " . $adherent->getAttribut('prenomAdherent') . ")</p>";
    echo "<ul><li> login : " . $adherent->getAttribut('login') . ".</li>";
    echo "<li> email : " . $adherent->getAttribut('email') . ".</li>";
    echo "<li> telephone : " . $adherent->getAttribut('telephone') . ".</li></ul>";
    echo "<a href='formulaireCreationAdherent.html'>Retour au formulaire</a>";
    ?>
</body>
</html>
