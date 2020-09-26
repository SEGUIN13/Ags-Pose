<?php
ob_start();
?>
<?php 
if(!empty($_POST)){
// var_dump($_POST);

    //securiser les données du formulaire

    function valid_donnees($donnees)
    {
        $donnees = trim($donnees);
        $donnees = stripslashes($donnees);
        $donnees = htmlspecialchars($donnees);
        return $donnees;
    }

    $nom = valid_donnees($_POST["nom"]);
    $prenom = valid_donnees($_POST["prenom"]);
    $email = valid_donnees($_POST["email"]);
    $telephone = valid_donnees($_POST["telephone"]);
    $sujet = valid_donnees($_POST["sujet"]);
    $message = valid_donnees($_POST["message"]);


    
    // Création d'une connexion à la BDD
    $dsn = 'mysql:host=localhost:3308;dbname=ags;charset=utf8';
    $pdo = new PDO($dsn, 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);



    // Ecriture de la requête SQL d'insertion
    $sql = 'INSERT INTO contact (nom, prenom, telephone, email, sujet,message)
            VALUES (?, ?, ?, ?, ?, ? )';

    // Préparation de la requête (indispensable pour la sécurité quand on insère des données dans la requête)
    $query = $pdo->prepare($sql);

    // Exécution de la requête 
    $query->execute([$nom, $prenom, $telephone, $email, $sujet, $message]);
   
}
?>


    <section>
        <section class="bannerContact major narrow">
            <h2 class="titleForm" >Contact</h2>
        </section>

        <article class="form">
            <form id="contact-form" method="post" action="">
                <p>Compléter le formulaire. Les champs marqués par <em>*</em> sont obligatoires</p>
                <fieldset>
                    <lobel class="label">Coordonnées</lobel> <br>

                    <label for="nom">Nom</label><br>
                    <input name="nom" id="nom" placeholder= "* nom" type="text" autofocus="" maxlength="50" size="50" pattern="[a-zA-ZÀ-ÿ]+" required><br>

                    <label for="prenom">Prenom</label><br>
                    <input name="prenom" id="prenom" placeholder="prenom" type="text" maxlength="50" size="50" > <br>

                    <label for="telephone">Téléphone</label><br>
                    <input name="telephone" id="telephone" placeholder="* 00 xx xx xx xx " type="tel" maxlength="15" size="15" pattern="[0-9]+" required><br>

                    <label for="email">Email</label><br>
                        <input type="email" name="email" id="email" placeholder="nomdomaine@gmail.com"   size="30" required> <br>
                </fieldset>
                <fieldset>
                    <lobel>Messagerie</lobel> <br>

                    <label for="sujet">Sujet</label><br>
                    <input type="text" name="sujet" id="sujet" placeholder="* Titre" maxlength="150" size="150" pattern="[a-zA-ZÀ-ÿ]+" required><br>

                    <label for="message">Message</label><br>
                    <textarea type="text" name="message"  id="message" maxlength="500" size="500" placeholder="Ecrivez votre message" pattern="[a-zA-ZÀ-ÿ]+"></textarea><br>

                </fieldset>
                <input type="submit" value="Envoyer l'email">
            </form>
        </article>
    </section>

<?php
$content= ob_get_clean();?>

<?php require_once "layout.php"?>
