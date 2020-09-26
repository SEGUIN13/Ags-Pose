<?php
ob_start();
?>
<section class="banner bannerStore">
    <h2>Stores intérieurs</h2>
</section>

<div class="contact">
    <a  href="contact.php">Nous contacter</a>
</div>


<aside>
    <header class="titles">
        <div class="titleStore">
            <a href="#venitien">
                <h3><strong>Store vénitien</strong></h3>
            </a>
        </div>
        <div class="titleStore">
            <a href="#enrouleur">
                <h3><strong>Store enrouleur</strong></h3>
            </a>
        </div>
        <div class="titleStore">
            <a href="#bateau">
                <h3><strong>Store bateau</strong></h3>
            </a>
        </div>
        <div class="titleStore">
            <a href="#japonais">
                <h3><strong>Store japonais</strong></h3>
            </a>
        </div>
        <div class="titleStore">
            <a href="#californien">
                <h3><strong>Store californien ou à bandes latérales</strong></h3>
            </a>
        </div>
    </header>
</aside>

<section class=" wrapper style1">
    <div class="inner">
        <article id="venitien" class="feature left">
            <span class="images">
                <img src="../src/img/product/storeIntérieur/venitien.jpg " alt="Store vénitien">
            </span>
            <div class="content">
                <h3 >Store venitien</h3>
                <p>Le store vénitien est sans aucun doute le store le plus répandu.
                    Il est constitué de fines lamelles horizontales, plus généralement en PVC ou en alu mais l'on peut trouver
                    d'autres matières telles que le bois, le bambou...
                    La commande peut être manuelle ou électrique.
                    Grace à un frein, l'ouverture.
                    Disponible dans plusieurs largeurs.
                </p>
            </div>
        </article>

        <article id="enrouleur" class="feature right">
            <span class="images">
                <img src="../src/img/product/storeIntérieur/enrouleur.jpg " alt="store enrouleur">
            </span>
            <div class="content">
                <h3 >Store enrouleur</h3>
                <p>Le store enrouleur est constitué de panneau de tissu.
                Un large choix de tissu permet soit de personnaliser son intérieur, soit avec des tissus
                plus techniques de tamiser la lumière mais également d'isoler thermiquement.
                Disponible dans plusieurs largeurs, se pose au plafond, sur un mur, sur l'ouvrant de la fenêtre.
                </p>
            </div>
        </article>

        <article id="bateau" class="feature left">
            <span class="images">
                <img src="../src/img/product/storeIntérieur/bateau.jpg" alt="store bateau">
            </span>
            <div class="content">
                <h3 >Store bateau</h3>
                <p>Loft ou maison de caractère, en ville ou à la campagne, chic ou bohème les stores bateaux se plient à vos envies.La douceur d’un rideau et le confort d’un store... Choisissez le store bateau pour sa touche Déco intemporelle et naturelle. Profitez d’une lumière naturelle et tamisée. Ses pans de tissus se remontent à l’aide d’un cordon ou d’une chaînette
                </p>
            </div>
        </article>

        <article id="japonais" class="feature right">
            <span class="images">
                <img src="../src/img/product/storeIntérieur/japonais.png" alt="store japonais">
            </span>
            <div class="content">
                <h3 >Store japonais</h3>
                <p>
                Design innovant, les panneaux japonais sont excellents pour couvrir de larges baies vitrées, séparer des pièces ou masquer un dressing. 
                Les larges bandes de tissus coulissent sous un rail aluminium. Possibilité de panacher les coloris.
                </p>
            </div>
        </article>

        <article id="californien" class="feature left">
            <span class="images">
                <img src="../src/img/product/storeIntérieur/californien.jpg" alt="store californien">
            </span>
            <div class="content">
                <h3 >Store califormien ou à bandes latérales</h3>
                <p>Le store est constitué de larges bandes verticales en tissu.
                La douceur d’un rideau et le confort d’un store... Choisissez le store bateau pour sa touche Déco intemporelle et naturelle. Profitez d’une lumière naturelle et tamisée. Ses pans de tissus se remontent à l’aide d’un cordon ou d’une chaînette
                </p>
            </div>
        </article>
    </div>
</section>
<?php
$content= ob_get_clean();?>

<?php require_once "layout.php"?>