<?php

use Classes\Services\Provinces;
use Predis\Client;
use Classes\Library\Redis;

$app['redis_service'] = function () {
    return new Client();
};

$app['silexRedis_service'] = function ($app) {
    return new Redis($app['redis_service']);
};

$app['provinces_service'] = function ($app) {
    return new Provinces($app['db']);
};


