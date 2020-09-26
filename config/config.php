<?php


try {
    $pdo = new PDO
    (
        "mysql:host=localhost;dbname=ags;charset=utf8;port=3308",
        "root",
        ""
    );
    $pdo-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo-> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);


} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
    die();
}



