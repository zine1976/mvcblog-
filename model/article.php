<?php

require_once __DIR__ . '/SimpleOrm.class.php';

class Article extends SimpleOrm { 
    public $id, $auteur, $image, $titre, $contenu, $date_de_publication; 
}