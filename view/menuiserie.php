<?php
ob_start();
?>


<section class="banner bannerMenuiserie">
    <h2 class="titleProduct">Menuiseries exterieures PVC & Alu</h2>
</section>

<div class="contact">
    <a  href="contact.php">Nous contacter</a>
</div>


<aside>
    <header class="titles">
        <div class="titleStore">
            <a href="#volet">
                <h3><strong>Volet</strong></h3>
            </a>
        </div>
        <div class="titleStore">
            <a href="#porte">
                <h3><strong>Porte</strong></h3>
            </a>
        </div>
        <div class="titleStore">
            <a href="#fenetre">
                <h3><strong>Fenêtre</strong></h3>
            </a>
        </div>
        <div class="titleStore">
            <a href="#baie">
                <h3><strong>Baie vitrée</strong></h3>
            </a>
        </div>
    </header>
</aside>

<section class=" wrapper style1">
    <div class="inner">
        <article class="feature left">
            <span class="images">
                <img src="../src/img/product/menuiserie/volet.jpg " alt="volet">
            </span>
            <div class="content">
                <h3 id="volet">Volet</h3>
                <p>Les volets se déclinent  de 1 à 3 vantaux. Nous vous proposant des ménuisieries  en PVC et en aluminium, tous nos modèles sont  disponibles en plusieurs coloris.
                 Vous trouverez des volets battants ou ouvrant à la Française. A vous d'inventez ce qui va avec.
                </p>
            </div>
        </article>

        <article class="feature right">
            <span id="porte" class="images">
                <img src="../src/img/product/menuiserie/porte.jpg " alt="Porte">
            </span>
            <div class="content">
                <h3 >Porte</h3>
                <p>Un grand choix de porte en PVC et en aluminium. Nous vous proposons  nos servides d'installation sur projet en construction mais également en rénovation.
                   Il existe de nombreux coloris. Une belle porte apporte du cachet à votre maison ou à votre appartement.
                </p>
            </div>
        </article>

        <article id="fenetre" class="feature left">
            <span class="images">
                <img src="../src/img/product/menuiserie/fenetre.jpg" alt="Fenetre">
            </span>
            <div class="content">
                <h3 >Fenêtre</h3>
                <p>Les fenêtres s'adaptent à vos besoins. Nous installons des produits sur mésure ou aux  dimensions standards,  en PVC ou aluminium.  Pour chaque ouverture, existe une solution.
                </p>
            </div>
        </article>

        <article id="baie" class="feature right">
            <span class="images">
                <img src="../src/img/product/menuiserie/bbc.jpg" alt="baie vitrée">
            </span>
            <div class="content">
                <h3 >Baie vitrée</h3>
                <p>Les baies vitrées  jouent sur l'esthétisme en laissant entrer l'extérieur dans nos habitats, elles apportent une luminosité supérieure. Il faut néanmoins prendre en considération l'apport thermique, 
                    l'isolation ou encore l'étanchéïté.
                </p>
            </div>
        </article>
    </div>
</section>
<?php
$content= ob_get_clean();?>

<?php require_once "layout.php"?>
