<main>
    <ul>
        <?php
            foreach($tableau as $unElement){
                $ID = $unElement->getattribut($id);
                $lienDetails = "<a href='router.php?objet=$valclass&action=displayOne&$id=$ID'>Détails</a>";
                echo "<li>";
                echo "$valclass {$unElement->getattribut($id)} | $lienDetails";
                echo "</li>";
            }
        ?>
    </ul>
</main>