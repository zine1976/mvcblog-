<?php

function modifier() {
    // if (empty($_SESSION['pseudo']) || $_SESSION['pseudo'] != 'admin') die('Erreur 403');
    if (empty($_GET['id'])) erreur(404);

    require_once model('article');
    $article = article::retrieveByPK($_GET['id']);
    
    if (empty($article)) erreur(404);
    
    include __DIR__ . '/../views/modif-article.php';
}

function modifier_handler() {
if (empty($_GET['id'])) erreur(404);

require_once model('article');
$article = article::retrieveByPK($_GET['id']);

if (empty($article)) erreur(404);

if (!empty($_POST)) {
    

    if (
        !empty($_POST['titre'])
        && !empty($_POST['auteur'])
        && !empty($_POST['contenu'])
        && !empty($_POST['image'])
        && filter_var($_POST['image'], FILTER_VALIDATE_URL) !== false

        
    ) {
        

        // require_once model('article');
        // $article = new article;

        $article->image = $_POST['image'];
        $article->contenu = $_POST['contenu'];
        $article->auteur = $_POST['auteur'];

        $article->titre = $_POST['titre'];

        $article->save(); 

        redirection('article'); 
    }  else redirection('modif');
}

}
//  include __DIR__ . '/../views/modif-article.php';