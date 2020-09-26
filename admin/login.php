<?php
require_once '../models/config.php';
require_once("../models/function.php");


adminconnect();
$errors = null;

if (!empty($_POST['pseudo']) && !empty($_POST['password']))
{
       if ($_POST['pseudo'] === 'admin' && $_POST['password'] === 'admin' )
       {
           session_start();
           $_SESSION['connecte']=1;
           header('Location: ../view/admin.php');

       }
       else
           {
               $errors = "Identifiants incorrects";
           }


};

if (isconnected())
{
    header('location: ../view/admin.php');
    exit();
}
/*

    $req = $pdo->prepare('SELECT * FROM user WHERE (username = :username ) AND confirmed_at IS NOT NULL');
    $req->execute(['username' => $_POST['pseudo']]);
    $user = $req->fetch();
    if($user == null){
        $_SESSION['flash']['danger'] = 'Identifiant ou mot de passe incorrecte';
    }elseif(password_verify($_POST['password'], $user->password)){
        $_SESSION['auth'] = $user;
        $_SESSION['flash']['success'] = 'Vous êtes maintenant connecté';
        header('Location: ../view/admin.php');
        exit();
    }else{
        $_SESSION['flash']['danger'] = 'Identifiant ou mot de passe incorrecte';
    }
}
*/




