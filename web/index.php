<?php
// On charge les librairies
require_once __DIR__.'/../vendor/autoload.php';

// On crée l'application
$app = require __DIR__.'/../app/bootstrap.php';
// On charge les contrôleurs
require __DIR__.'/../src/app.php';

$app->run();
