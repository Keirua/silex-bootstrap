<?php
use Silex\Provider\MonologServiceProvider, 
    Silex\Provider\TwigServiceProvider,
    Silex\Provider\UrlGeneratorServiceProvider;

$app = new Silex\Application();

$app->register(new MonologServiceProvider(), array(
    'monolog.logfile'       => __DIR__.'/log/app.log',
    'monolog.name'          => 'kp_app',
    'monolog.level'         => 300 // = Logger::WARNING
));

$app->register(new TwigServiceProvider(), array(
    'twig.path'             => array(__DIR__ . '/../src/views')
));

 $app->register(new UrlGeneratorServiceProvider());

return $app;
