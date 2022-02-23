<?php
include __DIR__ . '/../model/commentaire.php';
include __DIR__ . '/../model/article.php';



function commenter()
{
    if (empty($_SESSION['identifiant'])) die('Erreur 403');
   
    if (
        !empty($_POST['contenu'])
        

    ) {
        

        require_once model('commentaire');
        $commentaire = new commentaire;

        
        $commentaire->contenu = $_POST['contenu'];
        $commentaire->id_utilisateur = $_SESSION['id'];
        

        $commentaire->id_article =  $_GET['id'];


        $commentaire->save();

        redirection('article');
    }
    include __DIR__ . '/../views/detail-article.php';
}
