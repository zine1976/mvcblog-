<?php

function connexion() {
    // On appelle la vue
    include __DIR__ . '/../views/connexion.php';

}
function connexion_handler() {
        if (!empty($_POST['password']) && !empty($_POST['login'])) {
    
            
            include __DIR__ . '/../model/Utilisateur.php';
            $utilisateur = Utilisateur::retrieveByField('pseudo', $_POST['login'], SimpleOrm::FETCH_ONE);
    
            if (!empty($utilisateur)) {
              
                if (password_verify($_POST['password'], $utilisateur->mot_de_passe)) {
                    
    
                    $_SESSION['pseudo'] = $utilisateur->pseudo;
                    $_SESSION['id'] = $utilisateur->id;
    
                   
                    if (!empty( $_POST['remember_me']))
                    setcookie("remember_me", $utilisateur->id, time() + 2592000);
                    
    
                    redirection('liste');
                } else die('Erreur de mot de passe');
            }
        }
    
        redirection('connexion');
        
    }
function deconnexion() {
    session_destroy();
    redirection('accueil');
}