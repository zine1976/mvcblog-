<?php

if (empty($_GET['id'])) erreur(404);


require_once model('article');
$article = article::retrieveByPK($_GET['id']);

if (empty($article)) erreur(404);

require_once model('commentaire');

$commentaire = commentaire::retrieveByField('id_article', $_GET['id']);




include __DIR__ . '/../views/detail-article.php';
