<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Jeu;

session_start();

if (!empty($_SESSION['jeu'])) {
    $_SESSION['historique'][] = $_SESSION['jeu'];
}

$_SESSION['jeu'] = new Jeu;

header('location: index.php');