<?php
require "../models/config.php";
var_dump($article);

if(!adminconnect())
{
    header("location:../view/connexion.php");
}
if(!empty($_POST))
{  debug($_POST).
  $photo="";
  if(!empty($_FILES['photo']['name']))
    debug($_FILES);
  {

  }
}

$query = $pdo -> prepare('INSERT idArt, title, comment, category, photo FROM article ');


$query->execute(array(
    "idArt" => $article ["idArt"],  //=name
    "title" => $article ["title"],
    "comment" => $article ["comment"],
    "category"=> $category ["category"],
    "photo" => $photo ["photo"]
));

header("location: article.php?id=" . $article['idArt']);
exit();



// executer le requete passer la valeur donneee protegée
$query-> execute(array($_GET["id"]) );
//stocker dans un tableau
$article = $query->fetch();
//fermer la requete
$query -> closeCursor();

/*$query->execute( array($_GET['id']) );*/

// Compter le nombre de commentaires
$countComment = $query->rowCount();

$view="post";
include "./template/" . $view . ".phtml";


$pdo = new PDO('mysql:host=localhost;dbname=entreprise', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
//-----------------------------------------------------------------
// Insertion (INSERT) :
$result = $pdo->exec("INSERT INTO employes (prenom, nom, sexe, service, date_embauche, salaire) VALUES ('prenom', 'nom', 'm', 'informatique', '2015-07-30', 5000),");
echo $result . ' enregistrement(s) affecté(s) par la requête INSERT<br>';
//-----------------------------------------------------------------
// Modification (UPDATE) :
$result = $pdo->exec("UPDATE employes SET salaire = 2500 WHERE id_employes = 802");
echo $result . ' enregistrement(s) affecté(s) par la requête UPDATE<br>';
//-----------------------------------------------------------------
// Suppression (DELETE) :
$result = $pdo->exec("DELETE FROM employes WHERE id_employes = 388");
echo $result . ' enregistrement(s) affecté(s) par la requête DELETE<br>';
//-----------------------------------------------------------------
// Affichage (SELECT) :
$result = $pdo->query("SELECT * FROM employes WHERE prenom='julien'");
$employe = $result->fetch(PDO::FETCH_ASSOC);
echo "<pre>";
print_r($employe);
echo "</pre>";
echo "Bonjour je suis $employe[prenom] $employe[nom] du service $employe[service]<br>";