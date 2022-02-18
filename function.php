<?php


function redirection(string $route) {
    header('Location: ' . url($route));
    die;
}


function model(string $nom): string {
    return __DIR__ . '/model/' . $nom . '.php';
}

function controller(string $nom): string {
    return __DIR__ . '/controller/' . $nom . '.php';}

    function url(string $route = 'liste'): string {
        return 'index.php?route=' . $route;
    }
    
    function nom(object $article): string {
        return ucfirst($article->titre) ;
    }
