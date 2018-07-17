<?php

use Silex\Provider\DoctrineServiceProvider;
use Symfony\Component\Yaml\Yaml;

echo 2;
$app['twig.path']    = [__DIR__ . '/../templates'];
$app['twig.options'] = ['cache' => __DIR__ . '/../var/cache/twig'];

/** @var Yaml $yaml */
$parameters = Yaml::parseFile(__DIR__ . '/../config/parameters.yml');
if (!empty($parameters['db_conn'])) {
    foreach ($parameters['db_conn'] as $key => $value) {
        $app[$key] = $value;
    }
    try {
        $app->register(new DoctrineServiceProvider(), [
            'db.options' => [
                'driver'   => $app['db_driver'],
                'host'     => $app['db_host'],
                'dbname'   => $app['db_schema'],
                'user'     => $app['db_user'],
                'password' => $app['db_pass'],
            ],
        ]);
    } catch (\Throwable $e) {
        throw new \Exception('Unable to configure db connection. Check if all parameters set');
    }

}
