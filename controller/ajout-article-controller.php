<?php


if (!empty($_POST)) {
    

    if (
        !empty($_POST['titre'])
        && !empty($_POST['auteur'])
        && !empty($_POST['contenu'])
        && !empty($_POST['image'])

        
    ) {
        
        
        require_once model('article');
        $article = new article;

        $article->image = $_POST['image'];
        $article->contenu = $_POST['contenu'];
        $article->auteur = $_POST['auteur'];

        $article->titre = $_POST['titre'];
        
        

        $article->save(); 

        redirection('liste'); 
    } else $error = true;
}


include __DIR__ . '/../views/ajout-article.php';
