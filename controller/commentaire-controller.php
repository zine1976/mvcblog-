<?php
include __DIR__ . '/../model/commentaire.php';



function commenter()
{
    if (empty($_SESSION['identifiant'])  ) die('Erreur 403');


    if (
        !empty($_POST['contenu'])
        // && !empty($_POST['id_utilisateur'])
        // && !empty($_POST['contenu'])
        // && !empty($_POST['id_article'])
        // && !empty($_POST['date_de_publication'])
       
        

    ) {


        require_once model('commentaire');
        $commentaire = new commentaire;

        // $commentaire->id_utilisateur = $_POST['id_utilisateur'];
        // $commentaire->id_article = $_POST['id_article'];
        $commentaire->contenu = $_POST['contenu'];
        // $commentaire->commentaire = $_POST['commentaire'];



        $commentaire->save();

        redirection('article');
    } 
    include __DIR__ . '/../views/detail-article.php';

}