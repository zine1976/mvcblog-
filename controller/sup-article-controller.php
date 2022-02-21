<?php


function supprimer() {
    // if (empty($_SESSION['pseudo']) || $_SESSION['pseudo'] != 'admin') die('Erreur 403');

if (empty($_GET['id'])) erreur(404);

require_once model('article');

$article = article::retrieveByPK($_GET['id']);

if (empty($article)) erreur(404);

$article->delete();

redirection('article');

}



    

    