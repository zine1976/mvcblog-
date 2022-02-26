<?php


function redirection($route)
{
    header('Location: index.php?route=' . $route);
    die;
}


function model(string $nom): string
{
    return __DIR__ . '/model/' . $nom . '.php';
}

function controller(string $nom): string
{
    return __DIR__ . '/controller/' . $nom . '.php';
}

function url(string $route = 'liste'): string
{
    return 'index.php?route=' . $route;
}


// function erreur(int $code = 500)
// {
//     echo 'Erreur ' . $code;
//     die();
// }
function view(string $nom) {
    return __DIR__ . '/views/' . $nom . '.php';
}

function erreur(int $code = 500) {
    if (file_exists(view('erreurs/' . $code))) require_once view('erreurs/' . $code);
    else require_once view('erreurs/500');

    die();
}
