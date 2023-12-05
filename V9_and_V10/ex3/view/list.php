<main>
    <button><a href='router.php?objet=<?php echo $valclass; ?>&action=displayCreationForm'>Créer</a></button>
    <ul>
        <?php
            foreach($tableau as $unElement){
                $ID = $unElement->getattribut($id);
                $lienDetails = "<a href='router.php?objet=$valclass&action=displayOne&$id=$ID' class='detailler'>Détails</a>";
                $lienSupprimer = "<a href='router.php?objet=$valclass&action=delete&$id=$ID' class='supprimer'>Supprimer</a>";
                echo "<li>";
                echo "$valclass {$unElement->getattribut($id)} | $lienDetails | $lienSupprimer";
                echo "</li>";
            }
        ?>
    </ul>
</main>