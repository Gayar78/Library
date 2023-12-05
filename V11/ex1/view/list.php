<main>
    <button><a href='router.php?objet=<?php echo $valclass; ?>&action=displayCreationForm'>Créer <?php echo $valclass; ?></a></button>
    <table>
        <?php
        foreach ($tableau as $unElement) {
            $ID = $unElement->getattribut($id);
            $lienDetails = "<a href='router.php?objet=$valclass&action=displayOne&$id=$ID' class='detailler'>Détails</a>";
            $lienSupprimer = "<a href='router.php?objet=$valclass&action=delete&$id=$ID' class='supprimer'>Supprimer</a>";
            $lienModifier = "<a href='router.php?objet=$valclass&action=displayModificationForm&$id=$ID' class='modifier'>Modifier</a>";

            echo "<tr>";
            echo "<td>{$unElement->getattribut($id)}</td>";
            echo "<td>$lienDetails</td>";
            echo "<td>$lienSupprimer</td>";
            echo "<td>$lienModifier</td>";
            echo "</tr>";
        }
        ?>
    </table>
</main>
