<?php


function seConnecter() {
    require_once __DIR__ . '/model/SimpleOrm.class.php';

   
    $conn = new mysqli('localhost', 'root', 'root');

    if ($conn->connect_error)
        die(sprintf('Unable to connect to the database. %s', $conn->connect_error));

    
    SimpleOrm::useConnection($conn, 'projet_php');
}

function redirection(string $route) {
    header('Location: ' . url($route));
    die;
}