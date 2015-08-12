<?php

// configure your app for the production environment

use Silex\Provider\MonologServiceProvider;

$app['twig.path'] = array(__DIR__.'/../../src/views');
$app['twig.options'] = array('cache' => __DIR__.'/../cache/twig');

$app->register(new MonologServiceProvider(), array(
    'monolog.logfile' => __DIR__.'/../logs/silex.log',
));
