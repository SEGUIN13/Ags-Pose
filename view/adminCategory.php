<?php
ob_start();
?>


<section class="connect">


        <label>
            <select name="dropdown" class="small-input">
                <option value="option1">Menuiserie</option>
                <option value="option2">Cloisonnage</option>
                <option value="option3">Pergola-Vérandas</option>
                <option value="option4">Store intérieur</option>
                <option value="option4">Store extérieur</option>
                <option value="option4">Fermeture</option>
            </select>
        </label>

</section>


<?php
$content= ob_get_clean();?>

<?php require_once "layout.php" ?>
