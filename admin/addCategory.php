<?php

require "../models/config.php";

//Requête en deux temps preparer - executer

// Récupération les 10 derniers articles par ordre chronologique inversé
//Recuperer les articles du blog par une requete préparée
$query = $pdo -> prepare(
   'SELECT
    idCat,
    nomCat
    FROM categories
      ORDER by nomCat DESC'
);

// executer le requete
$query-> execute();

// recuperer les données fetchAll recupère toutes les données sous forme de tableau
$categories= $query -> fetchAll();
//var_dump($articles);

$title = 'Gestion des catégories';
$description = 'La page de gestion des catégories';

$template="categorie";
$view="layout";
