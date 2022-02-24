<?php

require_once __DIR__ . '/SimpleOrm.class.php';

class commentaire extends SimpleOrm { 
    public $id, $id_utilisateur, $id_article, $contenu, $date_publication; 
}