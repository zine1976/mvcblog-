<?php


function redirection(string $route) {
    header('Location: ' . url($route));
    die;
}