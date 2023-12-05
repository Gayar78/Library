<main>
    <form action="routeur.php" methode="get">
        <input type="hidden" name="objet" value="<?php echo $valclass; ?>">
        <input type="hidden" name="controller" value="adherent">
        <?php
            foreach ($valchamps as $champ => $details) {
                echo "<div>";
                echo "<label for=\"$champ\">$details[1]</label>";
                echo "<input type=\"$details[0]\" name=\"$champ\" placeholder=\"$details[1]\" required>";
                echo "</div>";
            }
        ?>
        <button type="submit">Créer</button>
    </form>
</main>