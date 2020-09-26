<?php
ob_start();
?>
<section class=" banner bannerVolet">
    <h2>Fermeture exterieure motorisée</h2>
</section>

<div class="contact">
    <a  href="contact.php">Nous contacter</a>
</div>


<aside>
    <header class="titles">
        <div class="titleStore">
            <a href="#roulant">
                <h3><strong>Volet-coffre bloc</strong></h3>
            </a>
        </div>
        <div class="titleStore">
            <a href="#coulissant">
                <h3><strong>Volet coulissant</strong></h3>
           </a>
        </div>
        <div class="titleStore">
            <a href="#bascule">
                <h3><strong>Porte de garage à bascule</strong></h3>
            </a>
        </div>
        <div class="titleStore">
            <a href="#coffre">
                <h3><strong>Porte de garage coffre</strong></h3>
            </a>
        </div>
         <div class="titleStore">
            <a href="#sectionnelle">
                <h3><strong>Porte de garage sectionnelle</strong></h3>
            </a>
        </div>
    </header>
</aside>

<section class=" wrapper style1">
    <div class="inner">
        <article id="roulant" class="feature left">
            <span class="images">
                <img src="../src/img/product/fermeture/bloc.jpg " alt="Volet coffre bloc">
            </span>
            <div class="content">
                <h3 >Volet-coffre bloc</h3>
                <p>Le coffre peut être fixé directement à la fenêtre en usine et n’est donc pas apparent de l’extérieur. Adapté pour les construction neuves et pour certains cas de la rénovation.

                </p>
            </div>
        </article>

        <article id="coulissant" class="feature right">
            <span class="images">
                <img src="../src/img/product/fermeture/coulissant.jpg" alt="volet coulissant">
            </span>
            <div class="content">
                <h3 >Volet coulissant</h3>
                <p>Système d'ouverture moderne du volet coulissant donne du style à la façade extérieure  Design résolument moderne dans l'air du temps.
                </p>
            </div>
        </article>

        <article id="bascule" class="feature left">
            <span class="images">
                <img src="../src/img/product/fermeture/bascule.jpg" alt="porte de garage à bascule">
            </span>
            <div class="content">
                <h3 >Porte de garage à bascule</h3>
                <p>Système de fermeture de garage classique. Vous trouverez certainement la porte de garage idéale pour votre maison.
                </p>
            </div>
        </article>

        <article id="coffre" class="feature right">
            <span class="images">
                <img src="../src/img/product/fermeture/enroulable.jpg" alt="porte de garage coffre">
            </span>
            <div class="content">
                <h3 >Porte de garage coffre</h3>
                <p>Pas d'encombrement du plafond et des côtés du garage, coffre monobloc aluminium pour vous garantir une longévité de votre porte de garage.
                </p>
            </div>
        </article>

        <article id="sectionnelle" class="feature left">
            <span class="images">
                <img src="../src/img/product/fermeture/sectionnelle.jpg" alt="porte de garage sectionnelle">
            </span>
            <div class="content">
                <h3 >Porte de garage sectionnelle</h3>
                <p>En mesure de valoriser votre habitation, une porte de garage sur mesurevous permettra également d’associer facilité d’utilisation et robustesse.
                     Parce que vous l’utilisez probablement jour après jour, votre porte de garage se doit aussi de s’adapter à votre mode de vie. 
                </p>
            </div>

        </article>
    </div>
</section>
<?php
$content= ob_get_clean();?>

<?php require_once "layout.php"?>
