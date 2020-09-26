<?php
ob_start();
?>

<section class="adminArticle">
    <div class="tab-content" id="tab2">
        <form action="" enctype="multipart/form-data" method="post">

            <fieldset>
                <p>
                    <label for="titre">Titre</label>
                    <input type="text" id="titre" name="titre" placeholder="le titre du produit"> <br>
                </p>

                <p>
                <label for="titre">Titre</label>
                <input type="text" id="titre" name="title" placeholder="le titre du produit"> <br>
                </p>

                <p>
                    <label>Catégories</label>
                    <select name="category" class="small-input">
                        <option value="option1">Menuiserie</option>
                        <option value="option2">Cloisonnage</option>
                        <option value="option3">Pergola-Vérandas</option>
                        <option value="option4">Store intérieur</option>
                        <option value="option4">Store extérieur</option>
                        <option value="option4">Fermeture</option>
                    </select>
                </p>

                <p>
                    <label>Description</label>
                    <textarea class="text-input textarea wysiwyg" id="textarea" name="comment" cols="79" rows="15"></textarea>
                </p>

                <p>
                    <label>Photo</label>
                    <input type="file" id="photo" name="photo"><br>
                </p>

                <p>
                    <input class="button" type="submit" value="Valider">
                </p>

            </fieldset>

            <div class="clear"></div><!-- End .clear -->
        </form>
    </div>
</section>



<?php
$content= ob_get_clean();?>

<?php require_once "layout.php" ?>
