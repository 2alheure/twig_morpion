<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Jeu;

session_start();

if (empty($_SESSION['jeu'])) {
    // On s'assure qu'il y a toujours un jeu dans la session
    $_SESSION['jeu'] = new Jeu;
}

$jeu = $_SESSION['jeu'];

if (isset($_GET['x']) && isset($_GET['y'])) {
    $jeu->placerCoup($_GET['x'], $_GET['y']);
}

$jeu->sAfficher();
