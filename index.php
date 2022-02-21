<?php

session_start();

include_once 'config.php';

require_once __DIR__ . '/function.php';
require_once __DIR__ . '/model/SimpleOrm.class.php';


$conn = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD);

if ($conn->connect_error)
    die(sprintf('Unable to connect to the database. %s', $conn->connect_error));


SimpleOrm::useConnection($conn, DATABASE_NAME);

if (!empty($_GET['route'])) $route = $_GET['route'];
else $route = 'accueil';




switch ($route) {
    case 'accueil':
        require_once controller('accueil-controller');
        break;

    case 'article':
        require_once controller('liste-article-controller');
        break;

    case 'detail':
        require_once controller('detail-article-controller');
        break;

    case 'ajout':
        require_once controller('ajout-article-controller');
        ajouter();
        break;

    case 'sup-article':
        include __DIR__ . '/controller/sup-article-controller.php';
        supprimer();
        break;

    case 'ajout-article-handler':
        include __DIR__ . '/controller/ajout-article-controller.php';
        ajouter_handler();
        break;

    case 'connexion':
        include __DIR__ . '/controller/article-handler-controller.php';
        connexion();
        break;

    case 'connexion-handler':
        include __DIR__ . '/controller/article-handler-controller.php';
        connexion_handler();
        break;

    case 'deconnexion':
        include __DIR__ . '/controller/article-handler-controller.php';
        deconnexion();
        break;

        case 'modif':
            
            require_once controller('modif-article-controller');
            modifier();
            break;

            case 'modif-article-handler':
                include __DIR__ . '/controller/modif-article-controller.php';
                modifier_handler();
                break;


    default:
        erreur(404);
        break;
}
