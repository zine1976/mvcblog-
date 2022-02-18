<?php

require_once model('article');
$articles = article::all();

require_once views('liste-article');