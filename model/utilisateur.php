<?php

include_once __DIR__ . '/SimpleOrm.class.php';

class Utilisateur extends SimpleOrm {
    public $id, $pseudo, $email, $role, $avatar, $mot_de_passe;
}