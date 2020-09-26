<?php
ob_start();
?>

<section class="banner bannerCloisonnage">
    <h2>Cloisonnage vitrée</h2>
</section>

<div class="contact">
    <a  href="contact.php">Nous contacter</a>
</div>


<aside>
    <header class="titles">
        <div class="titleStore">
            <a href="#rambarde">
                <h3><strong>Garde corps</strong></h3>
            </a>
        </div>
        <div class="titleStore">
            <a href="#vitrage">
                <h3><strong>Vitrage intérieur</strong></h3>
            </a>
        </div>
        <div class="titleStore">
            <a href="#mur">
                <h3><strong>Parois séparatives vitrées</strong></h3>
            </a>
        </div>
    </header>
</aside>

<section class=" wrapper style1">
    <div class="inner">
        <article id="rambarde" class="feature left">
            <span class="images">
                <img src="../src/img/product/cloison/balcon.jpg " alt="rambarde vitrée" id="rambarde">
            </span>
            <div class="content">
                <h3 >Garde corps</h3>
                <p>Le garde-corps vitré s'adapte parfaitement à de nombreuses applications : balustrade de balcon, barrière de sécurité pour terrasse, protection pour piscine...
                </p>
            </div>
        </article>

        <article id="vitrage" class="feature right">
            <span class="images">
                <img src="../src/img/product/cloison/vitre.jpg " alt="Vitrage intérieur" id="vitrage" >
            </span>
            <div class="content">
                <h3 >Vitrage intérieur</h3>
                <p>Les panneaux vitrées intérieurs ajoutent du caractère et de l'élégance aux façades trop ordinaires ou trop présentes et apportent luminosité et clarté dans des pièces sombres.
                </p>
            </div>
        </article>

        <article id="mur" class="feature left">
            <span class="images">
                <img src="../src/img/product/cloison/vitreEntreprise.jpg" alt="Parois séparatives vitrées" id="mur">
            </span>
            <div class="content">
                <h3 >Parois séparatives vitrées</h3>
                <p>La cloison de bureau vitrée toute hauteur réunit transparence et esthétisme. Simple ou double vitrage, stores intégré ou film de vitrophanie. A vous de choisir.
                </p>
            </div>
        </article>
    </div>
</section>
<?php
$content= ob_get_clean();?>

<?php require_once "layout.php"?>