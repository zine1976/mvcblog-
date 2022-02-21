<?php


function supprimer() {
if (empty($_GET['id'])) erreur(404);

require_once model('article');
$article = article::retrieveByPK($_GET['id']);

if (empty($article)) erreur(404);

$article->delete();

redirection('liste-article');

}

    