
<?php
ob_start();
?>
<section class=" banner bannerPrestation">
    <h2>Nos réalisations</h2>
</section>

<div class="contact">
    <a  href="contact.php">Nous contacter</a>
</div>


<aside>
    <header class="titles">
        <div class="titleStore">
            <a href="menuiserie.php">
                <h3><strong>Menuiserie</strong></h3>
            </a>
        </div>
        <div class="titleStore">
            <a href="storeExt.php">
                <h3><strong>Store extérieur</strong> </h3>
            </a>
        </div>
        <div class="titleStore">
            <a href="store.php">
                <h3><strong>Store intérieur</strong></h3>
            </a>
        </div>
        <div class="titleStore">
            <a href="pergola.php">
                <h3><strong>Pergol-Véranda</strong></h3>
            </a>
        </div>
        <div class="titleStore">
            <a href="fermeture.php">
                <h3><strong>Fermeture</strong></h3>
            </a>
        </div>
        <div class="titleStore">
            <a href="cloisonnage.php">
                <h3><strong>Cloisonnage</strong></h3>
            </a>
        </div>
    </header>
</aside>
<section class=" wrapper special">
    <div class="inner">
        <!--Une liste des photos miniatures -->
        <ul class="zoom-list" data-zoom="#zoom">
            <!--data-toto permet de stocker l'image agrandie-->
            <li class="zoom-list-item ">
                <img
                        alt="volet"
                        class="selected zoom-thumbnail"
                        data-target="../src/img/product/prestation/volet.jpg"
                        src="../src/img/product/prestation/thumbnails/volet.jpg"
                        title ="zoom sur l'image">
            </li>
            <li class="zoom-list-item">
                <img
                        alt="store banne"
                        class="zoom-thumbnail"
                        data-target="../src/img/product/prestation/banne.jpg"
                        src="../src/img/product/prestation/thumbnails/banne.jpg"
                        title ="zoom sur l'image">
            </li>
            <li class="zoom-list-item">
                <img
                        alt="store"
                        class="zoom-thumbnail"
                        data-target="../src/img/product/prestation/store.jpg"
                        src="../src/img/product/prestation/thumbnails/store.jpg"
                        title="Zoom sur l'image">
            </li>
            <li class="zoom-list-item">
                <img
                        alt="véranda"
                        class="zoom-thumbnail"
                        data-target="../src/img/product/prestation/veranda.jpg"
                        src="../src/img/product/prestation/thumbnails/veranda.jpg"
                        title="Zoom sur l'image">
            </li>
            <li class="zoom-list-item">
                <img
                        alt="porte"
                        class="zoom-thumbnail"
                        data-target="../src/img/product/prestation/porte.jpg"
                        src ="../src/img/product/prestation/thumbnails/porte.jpg"
                        title="Zoom sur l'image">
            </li>
        </ul>

        <div class="slide"> 
        <!--Une seule figure pour présenter la version agrandie (la première étant chargée au démarrage ) -->
            <figure class="zoom wrapper special" id="zoom" >
                <figcaption class="zoom-legend">
                    Photo 1
                </figcaption>
                <img 
                        alt="Volet"
                        class="zoom-picture slider"
                        src=../src/img/product/prestation/volet.jpg>
            </figure>
        </div>
    </div>
</section>

<script src="../src/js/prestation.js"></script>


<?php
$content= ob_get_clean();?>

<?php require_once "layout.php"?>
