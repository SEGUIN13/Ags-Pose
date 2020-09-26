<?php

function debug($variable){
    echo '<pre>' . print_r($variable, true) . '</pre>';
}


function isconnected(): bool
{
    if(session_status()===PHP_SESSION_NONE){
        session_start();
    }
    return !empty($_SESSION['connecté']);
}

function adminconnect(): void
{
    if(!isconnected())
    {
        header('Location: ../view/connexion.php');
        exit();
    }
}

