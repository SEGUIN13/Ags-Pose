<?php
ob_start();
?>

    <section class="connect">
        <header class="major narrow">
            <h2 class="titleForm">Connexion</h2>          
        </header> 
        <article class="form">   
            <form action="../view/admin.php" method="post">

                <label for="pseudo">Pseudo</label><br>
                <input type="text" id="pseudo" name="pseudo" placeholder="Nom d'utilisateur"><br>

                <label for="password">Mot de passe</label><br>
                <input type="password" id="password" name="password" placeholder="Votre mot de passe"><br>

                <input type="submit" name="submit" value="Se connecter">
            </form>
        </article>
    </section>
<?php
$content= ob_get_clean();?>

<?php require_once "layout.php"?>