
<?php
ob_start();
?>

<section class="banner bannerAccueil">
    <h2><strong>Menuiserie</strong> PVC & ALU<br>  </h2>
    <h3 class="h3-accueil"><strong>Fourniture - Pose - réparation</strong></h3>
</section>

<div class="contact">
    <a  href="contact.php">Nous contacter</a>
</div>


<section class="product">

    <div class="div-image">
        <h2 class="title">Menuiseries PVC & Alu</h2>
        <a href="menuiserie.php"><img class="zoom" src="../src/img/accueil/volet.png" alt="volet"></a>
    </div>

    <div class="div-image">
        <h2 class="title"><strong>Fermetures</strong> motorisées</h2>
        <a href="fermeture.php"><img class="zoom" src="../src/img/accueil/storeCoffre.jpg" alt="store coffre"></a>
    </div>

    <div class="div-image" >
        <h2 class="title"><strong>Cloisonnage</strong></h2>
        <a href="cloisonnage.php"><img class="zoom" src="../src/img/accueil/cloison.jpg" alt="Cloisonnage"></a>
    </div>

    <div class="div-image">
        <h2 class="title"><strong>Stores</strong> intérieurs </h2>
        <a href="store.php"><img class="zoom" src="../src/img/accueil/store.jpg" alt="Stores intérieurs"></a>
    </div>

    <div class="div-image">
        <h2 class="title"><strong>Stores</strong> extérieurs</h2>
        <a href="storeExt.php"><img class="zoom" src="../src/img/accueil/storeBanne.jpg" alt="Stores extérieurs"></a>
    </div>

    <div class="div-image">
        <h2 class="title"><srong>Pergolas & Vérandas</strong></h2>
        <a href="pergola.php"><img class="zoom" src="../src/img/accueil/pergola.jpg" alt="Pergola et vérandas"></a>
    </div>

</section>
<?php
$content= ob_get_clean();?>

<?php require_once "layout.php"?>
