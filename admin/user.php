<?php

require_once "../models/config.php";

$query = $pdo->prepare('SELECT* FROM user');
$query->execute();
$datas = $query->fetchAll(PDO::FETCH_OBJ);

var_dump($datas);

