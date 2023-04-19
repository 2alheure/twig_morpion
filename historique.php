<?php

use Twig\Environment;
use Twig\Loader\FilesystemLoader;
use Twig\Extension\DebugExtension;

require_once __DIR__ . '/vendor/autoload.php';

session_start();

$loader = new FilesystemLoader(__DIR__ . '/templates');
$twig = new Environment($loader, [
    'debug' => true,
    'cache' => false
]);
$twig->addExtension(new DebugExtension);

try {
    echo $twig->render('historique.html', [
        'sess' => $_SESSION,
    ]);
} catch (Exception $e) {
    echo $e->getMessage();
}
