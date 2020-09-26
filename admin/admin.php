<?php
require "app/connect.php";

//Recuperer les articles du blog par une requete préparée
$query = $pdo -> prepare(
//'SELECT * FROM articles'
    'SELECT
    IdArt AS id,
    NomCat AS cat,
    TitreArt AS tit,
    ContenuArt AS cnt,
    NomUser AS usr
  FROM articles
    inner join utilisateur on articles.IdUser =utilisateur.IdUser
    inner join categories on articles.IdCat = categories.IdCat
      ORDER by NomUser
      DESC limit 10'
);

// executer le requete
$query-> execute();

// recuperer les données
$articles = $query -> fetchAll();
//var_dump($articles);


$view="admin";
include "./template/" . $view . ".phtml";