<?php 
use Symfony\Component\HttpFoundation\Response;


$app->match('/', function() use ($app) {
    // return new Response ("yeah ");
    return $app['twig']->render ('index.html.twig');
})->bind('kp_homepage');


$app->match('/hello/{name}', function($name) use ($app) {
   $content = $app['twig']->render ('hello.html.twig', array ('name' => $name));

    return new Response ($content);
})->bind('kp_hello')
->value('name', 'plop')
;
