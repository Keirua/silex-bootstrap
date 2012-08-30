<?php
ini_set('display_errors', 0);

// Load the libraries
require_once __DIR__.'/../vendor/autoload.php';

// Create the application
$app = require __DIR__.'/../app/bootstrap.php';

// Load the controllers
require __DIR__.'/../src/app.php';

$app['http_cache']->run();
