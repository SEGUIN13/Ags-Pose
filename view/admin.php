<?php
ob_start();
?>
<aside>
    <div>
        <div class="sidebar">
            <div class="profile">
                <p> Bonjour, admin<?php ?></p>
                <p>Vous avez <?php  ?> 0 messages</p>
            </div>

            <article class="main-nav">
                <h3>Dasboard</h3>
                <h4>Articles</h4>
                <ul>
                    <li>Créer</li>
                    <li>Modifier</li>
                    <li>Supprimer</li>
                </ul>
                <h4>Catégories</h4>
                <ul>
                    <li>Créer </li>
                    <li>Modifier</li>
                    <li>Supprimer</li>
                </ul>
                <h4>Administrateur</h4>
                <ul>
                    <li>Créer </li>
                    <li>Modifier</li>
                    <li>Supprimer</li>
                </ul>
            </article>
        </div>
    </div>
</aside>

<section>
    <div class="main-content">
        <h3>Bonjour AGS-Pose</h3>
        <p>Que désirez-vous faire?</p>
        <ul class="shortcut-buttons-set">
            <li>
                <a class="shortcut-button" href="adminArticle.php">
                    <span>
                        <img src="https://img.icons8.com/nolan/64/book-and-pencil.png" alt="Icone de création d'article"/>Ecrire un article
                    </span>
                </a>
            </li>
            <li>
                <a class="shortcut-button" href="adminCategory.php">
                    <span>
                        <img src="https://img.icons8.com/dusk/64/000000/add-property.png" alt="Icone de création d'une nouvelle catégorie"/>
                        Créer une nouvelle catégorie
                    </span>
                </a>
            </li>
            <li>
                <a class="shortcut-button" href="#">
                    <span>
                        <img src="https://img.icons8.com/cute-clipart/64/000000/image-file.png" alt="Icone de téléchargement d'image"/>Télécharger une image
                    </span>
                </a>
            </li>
            <li>
                <a class="shortcut-button" href="adminMessage.php">
                    <span>
                        <img src="https://img.icons8.com/nolan/64/new-message.png"/>Emails
                    </span>
                </a>
            </li>
        </ul>
    </div>
</section>

<section class="content-box">
    <div class="content-box clear">
        <ul class="content-box-tabs">
            <li><a href="adminCategory.php" class="default-tab current">Categorie</a></li>
            <li><a href="adminArticle.php" class="default-tab current">Article</a></li>
        </ul>
    </div>

    <table>
        <thead>
            <tr>
                <th><input class="check-all" type="checkbox"/></th>
                <th>Image</th>
                <th>Titre</th>
                <th>Description</th>
                <th>Catégorie</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td><input type="checkbox" /></td>
                <td> <img src=""> </td>
                <td>Store vénitien</td>
                <td>Le store vénitien est sans aucun doute le store le plus répandu.
                    Il est constitué de fines lamelles horizontales, plus généralement en PVC ou en alu mais l'on peut trouver
                    d'autres matières telles que le bois, le bambou...
                    La commande peut être manuelle ou électrique.
                    Grace à un frein, l'ouverture.
                    Disponible dans plusieurs largeurs.</td>
                <td>Store intérieur</td>
                <td>
                <td><input type="checkbox" /></td>
                <td><input type="checkbox" /></td>
            </tr>

            <tr>
                <td><input type="checkbox" /></td>
                <td> <img src=""> </td>
                <td>Store vénitien</td>
                <td>Le store vénitien est sans aucun doute le store le plus répandu.
                    Il est constitué de fines lamelles horizontales, plus généralement en PVC ou en alu mais l'on peut trouver
                    d'autres matières telles que le bois, le bambou...
                    La commande peut être manuelle ou électrique.
                    Grace à un frein, l'ouverture.
                    Disponible dans plusieurs largeurs.</td>
                <td>Store intérieur</td>
                <td>
                <td><input type="checkbox" /></td>
                <td><input type="checkbox" /></td>
            </tr>

            <tr>
                <td><input type="checkbox" /></td>
                <td> <img src=""> </td>
                <td>Store vénitien</td>
                <td>Le store vénitien est sans aucun doute le store le plus répandu.
                    Il est constitué de fines lamelles horizontales, plus généralement en PVC ou en alu mais l'on peut trouver
                    d'autres matières telles que le bois, le bambou...
                    La commande peut être manuelle ou électrique.
                    Grace à un frein, l'ouverture.
                    Disponible dans plusieurs largeurs.</td>
                <td>Store intérieur</td>
                <td>
                <td><input type="checkbox" /></td>
                <td><input type="checkbox" /></td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="6">
                    <div class="bulk-actions align-left">
                        <select name="dropdown">
                            <option value="option1">Choissisez votre action</option>
                            <option value="option2">Valider</option>
                            <option value="option3">Supprimer</option>
                        </select>

                        <a class="button" href="#">Validez</a>
                    </div>

                    <div class="pagination">
                        <a href="#" title="Previous Page">&laquo; Précédent</a>
                        <a href="#" class="number current"" title="1">1</a>
                        <a href="#" class="number" title="2">2</a>
                        <a href="#" class="number  title="3">3</a>
                        <a href="#" class="number" title="4">4</a>
                        <a href="#" title="Last Page">Suivant &raquo;</a>
                    </div>
                    <div class="clear"></div>
                </td>
            </tr>
        </tfoot>

    </table>
</section>


    </div>

</section>


<?php
$content= ob_get_clean();?>

<?php require_once "layout.php" ?>