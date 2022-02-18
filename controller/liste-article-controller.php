<?php

require_once model('article');
$articles = article::all();

include __DIR__ . '/../views/liste-article.php';

