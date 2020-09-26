<?php
ob_start();
?>
<section class="banner bannerCoffre">
    <h2><strong>Stores</strong> extérieurs </h2>
</section>

<div class="contact">
    <a  href="contact.php">Nous contacter</a>
</div>


<aside>
    <header class="titles">
        <div class="titleStore">
            <a href="#banne">
                <h3><strong>Store banne</strong></h3>
            </a>
        </div>
        <div class="titleStore">
            <a href="#corbeille">
                <h3><strong>Store corbeille</strong></h3>
            </a>
        </div>
        <div class="titleStore">
            <a href="#soleil">
                <h3><strong>Brise-soleil orientable</strong></h3>
            </a>
        </div>
        <div class="titleStore">
            <a href="#fenetre"><h3><strong>Store bannette</strong></h3>
            </a>
        </div>
        <div class="titleStore">
            <a href="#moustiquaire"><h3><strong>Moustiquaire</strong></h3>
            </a>
        </div>
    </header>
</aside>

<section class=" wrapper style1">
    <div class="inner">
        <article id="banne" class="feature left">
            <span class="images">
                <img src="../src/img/product/storeExterieur/banne.jpg " alt="store exterieure banne">
            </span>
            <div class="content">
                <h3 ><strong>Store banne</strong></h3>
                <p>Ce store peut être adapté pour différents besoins, propice aux petits comme aux  grands espaces, il sait se montrer discret quand il est refermé et efficace lorsqu’il est déployé. 
                Sa toile se projette vers l’extérieur jusqu’à 90°, 120° ou 180°, et vous permet une configuration optimale. 
                </p>
            </div>
        </article>

        <article id="corbeille" class="feature right">
            <span class="images">
                <img src="../src/img/product/storeExterieur/corbeille.jpg " alt="store corbeille">
            </span>
            <div class="content">
                <h3 >Store corbeille</h3>
                <p><strong>Store corbeille ou Parisien</strong>. Stores pour terrasses, balcons ou loggias. Résistance au vent, protection solaire maximum.
                </p>
            </div>
        </article>

        <article class="feature left">
            <span id="soleil" class="images">
                <img src="../src/img/product/storeExterieur/soleil.jpg" alt="Store brise soleil orientable">
            </span>
            <div class="content">
                <h3 ><strong>Brise-soleil orientable</strong></h3>
                <p>Alliance du confort et de l’esthétique. Avec le Brise Soleil, profitez de la lumière naturelle tout en vous protégeant de la chaleur. 
                Les lames horizontales s’orientent à la manière d’un gros store vénitien.
                </p>
            </div>
        </article>

        <article id="fenetre" class="feature right">
            <span class="images">
                <img src="../src/img/product/storeExterieur/bannette.jpg" alt="store bannette">
            </span>
            <div class="content">
                <h3 ><strong>Store bannette</strong></h3>
                <p>Store d’extérieur très efficace pour lutter contre la chaleur. Son principal avantage est de pouvoir garder la lumière à l’intérieur de la maison tout en se protégeant des rayons du soleil. 
                </p>
            </div>
        </article>

        <article id="moustiquaire" class="feature left">
            <span class="images">
                <img src="../src/img/product/storeExterieur/moustiquaire.jpg" alt="Moustiquaire">
            </span>
            <div class="content">
                <h3><strong>Moustiquaire</strong></h3>
                <p>Marre des moustiques ? Découvrez la moustiquaire enroulable et aérez votre maison sans risquer une invasion d’insectes. La toile transparente s’enroule dans un coffre aluminium et se manœuvre à la main.
                </p>
            </div>
        </article>
    </div>
</section>
<?php
$content= ob_get_clean();?>

<?php require_once "layout.php"?>