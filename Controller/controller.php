<?php

require("Model/model.php");

function loginPage(){
    require('View/connexion.php');
}

function loginCheck()
{
    $emailcheck = emailCheck($_POST["email"]);
    if($emailcheck){
        if(password_verify($_POST['password'], $emailcheck['password']))
            $apercu = "Bienvenue " . $emailcheck['username'] . " !!";
        else
            $apercu = "Mot de passe incorrect !!!";
    }
    else
        $apercu = "Ce compte n'existe pas !!";


    require('View/connexion.php');
}

function signUpPage(){
    require('View/inscription.php');
}

function signUpCheck(){
    $emailcheck = emailCheck($_POST["email"]);

    if($emailcheck)
    {
        $apercu = "Ce mail existe déjà !!";
    }
    else
    {
        $username = $_POST["user"];
        $mail = $_POST["email"];
        $pass = password_hash($_POST['password'],  PASSWORD_DEFAULT);
        $inscription = inscription($username, $mail, $pass);
        if($inscription)
            $apercu = "Inscription effectué !!";
        else
            $apercu = "Inscription non effectué !!";
    }
    require('View/inscription.php');
}

?>