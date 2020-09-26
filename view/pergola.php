<?php
ob_start();
?>
<section class="banner bannerPergola">
    <h2>pergolas & vérandas</h2>
</section>

<div class="contact">
    <a  href="contact.php">Nous contacter</a>
</div>


<aside>
    <header class="titles">
        <div class="titleStore">
            <a href="#isole">
                <h3><strong>Pergola isolée</strong></h3>
            </a>
        </div>
        <div class="titleStore">
            <a href="#adosse">
                <h3><strong>Pergola adossée</strong></h3>
            </a>
        </div>
        <div class="titleStore">
            <a href="#bio">
                <h3><strong>Pergola bio-climatique</strong></h3>
            </a>
        </div>
        <div class="titleStore">
            <a href="#cuisine">
                <h3><strong>Véranda - coin cuisine</strong></h3>
            </a>
        </div>
        <div class="titleStore">
            <a href="#salon">
                <h3><strong>Véranda - coin salon</strong></h3>
            </a>
        </div>
        <div class="titleStore">
            <a href="#extension">
                <h3><strong>Véranda - extensions</strong></h3>
            </a>
        </div>
    </header>
</aside>

<section class=" wrapper style1">
    <div class="inner">
        <article class="feature left">
            <span class="images">
                <img src="../src/img/product/pergola/isole.jpg " alt="pergola isolée">
            </span>
            <div class="content">
                <h3 id="isole">Pergola isolée</h3>
                <p> La pergola qu'elle soit autoportante ou indépendante prend facilement sa place dans le jardin. Elle est adaptable à tous les types de sol.
                     En revanche, son installation demande un certain savoir-faire. 
                     C’est la meilleure solution si vous avez besoin de créer un endroit convivial et chaleureux au beau milieu de votre jardin ou à côté de votre piscine.                    
                </p>
            </div>
        </article>

        <article id="adosse" class="feature right">
            <span class="images">
                <img src="../src/img/product/pergola/adosse.jpg " alt="pergola adossée">
            </span>
            <div class="content">
                <h3 >Pergola adossée</h3>
                <p>  Cette construction est parfaite pour aménager un espace détente sur une terrasse. Elle se fixe sur la façade de la maison.
                   L’installation ne nécessite que peu de travaux. Si vous avez besoin de réaliser un projet d’extension de maison, ce modèle est fait pour vous.
                </p>
            </div>
        </article>

        <article id="bio" class="feature left">
            <span class="images">
                <img src="../src/img/product/pergola/lame.jpg" alt="pergola bio climatique">
            </span>
            <div class="content">
                <h3 >Pergola bioclimatique</h3>
                <p>En région fortement ensoleillée, la pergola bioclimatique est la meilleure solution pour profiter d'une avancée vers l'extérieur toute l'année. 
                    Une pergola bioclimatique est une pergola à lame orientables et réglables et des parois amovibles. 
                    C'est un produit polylavent qui vous ravira, sans vitre et sans lame c'est une pergola avec vitres et lames c'est une véranda.
                </p>
            </div>
        </article>

        <article id="cuisine" class="feature right">
            <span class="images">
                <img src="../src/img/product/pergola/cuisine.jpg" alt="Cuisine dans une pergola">
            </span>
            <div class="content">
                <h3 >Véranda coin-cuisine</h3>
                <p>La vérande se décline au pluriel, c'est une pièce supplémentaire pour augmenter la surface de son domincile et utiliser les moindres espaces. Elle apporte cachet et sophitication.
                </p>
            </div>
        </article>

        <article id="salon" class="feature left">
            <span class="images">
                <img src="../src/img/product/pergola/salon.jpg" alt="Coin salon dans une véranda">
            </span>
            <div class="content">
                <h3 >Vérandas coin-salon</h3>
                <p>Véritable extension sur l'xtérieur. La véranda peut être entièrement vitrée ou s'appuyée sur des murs existants.Une seule limite votre imagination</p>
            </div>
        </article>
        <article id="extension" class="feature right">
            <span class="images">
                <img src="../src/img/product/pergola/repas.jpg" alt="Coin repas dans une véranda étroite">
            </span>
            <div class="content">
                <h3 >Vérandas petite largeur </h3>
                <p>La véranda peut être une surface intéressante pour exploiter au mieux un petit espace. Elles permettent d'exploiter toute l'année des parties jusqu'à lors utilisables uniquement en bonne saison.
                </p>
            </div>
        </article>
    </div>
</section>
<?php
$content= ob_get_clean();?>

<?php require_once "layout.php"?>