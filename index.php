<?php

require_once __DIR__ . '/function.php';
require_once __DIR__ . '/model/SimpleOrm.class.php';


$conn = new mysqli('localhost', 'root', 'root');

if ($conn->connect_error)
    die(sprintf('Unable to connect to the database. %s', $conn->connect_error));


SimpleOrm::useConnection($conn, 'projet_php');

if (!empty($_GET['route'])) $route = $_GET['route'];
else $route = 'liste';




switch ($route) {
    case 'accueil':
        require_once controller('accueil-controller');
        break;

        case 'article':
            require_once controller('liste-article-controller');
            break;


    }
