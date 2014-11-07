<?php
/*
 * Pienancial
 *
 * Copyright Matt Light <matt.light@lightdatasys.com>
 *
 * For copyright and licensing information, please view the LICENSE
 * that is distributed with this source code.
 */

require_once __DIR__ . '/../vendor/autoload.php';

use Pienancial\Application\Service\Provider as AppServiceProvider;

use Lstr\Silex\Asset\AssetServiceProvider;
use Lstr\Silex\Config\ConfigServiceProvider;
use Lstr\Silex\Database\DatabaseServiceProvider;
use Lstr\Silex\Template\TemplateServiceProvider;
use Silex\Application;

$app = new Application();

$app->register(new AppServiceProvider());
$app->register(new AssetServiceProvider());
$app->register(new ConfigServiceProvider());
$app->register(new DatabaseServiceProvider());

$app['debug'] = false;
if (isset($app['config']['debug'])) {
    $app['debug'] = $app['config']['debug'];
}

$app->get('/', function (Application $app) {
    return '';
});


$app->run();
