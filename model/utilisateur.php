<?php

include_once __DIR__ . '/SimpleOrm.class.php';

class utilisateur extends SimpleOrm {
    public $id, $pseudo, $identifiant, $role, $avatar, $mot_de_passe;
}