<?php

require_once model('article');
$articles = article::all();


require_once __DIR__ .'/../views/article.php';
