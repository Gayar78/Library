<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>TP2 - ex1d</title>
  </head>
  <body>
    <h2>Palmarès de la coupe du monde de football depuis 2002</h2>
    <?php
      $palmares = array(
        2022 => "Argentine",
        2018 => "France",
        2014 => "Allemagne",
        2010 => "Espagne",
        2006 => "Italie",
        2002 => "Brésil",
        1998 => "France",
        1994 => "Brésil",
        1990 => "Allemagne",
        1986 => "Argentine",
        1982 => "Italie",
        1978 => "Argentine",
        1974 => "Allemagne",
        1970 => "Brésil",
        1966 => "Angleterre",
        1962 => "Brésil",
        1958 => "Brésil",
        1954 => "Allemagne",
        1950 => "Uruguay",
        1938 => "Italie",
        1934 => "Italie",
        1930 => "Uruguay",
      );
      echo "<pre>";
      print_r($palmares);
      echo "</pre>";
//############################################################################################################
      $vainqueurs = array(); // tableau vide
      foreach ($palmares as $annee => $equipe) { // pour chaque élément du tableau
          if (!in_array($equipe, $vainqueurs)) { // si l'équipe n'est pas dans le tableau
              $vainqueurs[] = $equipe; // on ajoute l'équipe au tableau
          }
      }
      echo "<pre>";
      print_r($vainqueurs);
      echo "</pre>";
//############################################################################################################
      $nb_victoires = array(); // tableau vide
      foreach($palmares as $annee => $equipe) { // pour chaque élément du tableau
          if (!isset($nb_victoires[$equipe])) { // si l'équipe n'est pas dans le tableau
              $nb_victoires[$equipe] = 1; // on ajoute l'équipe au tableau
          } else {
              $nb_victoires[$equipe]++; // sinon on incrémente le nombre de victoires
          }
      }
      echo "<pre>";
      print_r($nb_victoires);
      echo "</pre>";
      ?>
  </body>
</html>
