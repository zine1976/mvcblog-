<?php

include __DIR__ . '/../model/utilisateur.php';


function creer_compte_handler()
{


    if (
        !empty($_POST['pseudo'])
        && !empty($_POST['identifiant'])

        && !empty($_POST['password'])
        && !empty($_POST['confirmpassword'])
        && ($_POST['password'] === $_POST['confirmpassword'])

        && !empty($_POST['avatar'])

        && filter_var($_POST['avatar'], FILTER_VALIDATE_URL) !== false

    ) {


        require_once model('utilisateur');
        $utilisateur = new utilisateur;

        $utilisateur->avatar = $_POST['avatar'];
        $utilisateur->identifiant = $_POST['identifiant'];
        $utilisateur->pseudo = $_POST['pseudo'];
        $utilisateur->mot_de_passe = password_hash($_POST['password'], PASSWORD_BCRYPT);




        $utilisateur->save();

    

        redirection('connexion');
    } 
    include __DIR__ . '/../views/creation-compte.php';

}
