<?php
/*
 * Pienancial
 *
 * Copyright Matt Light <matt.light@lightdatasys.com>
 *
 * For copyright and licensing information, please view the LICENSE
 * that is distributed with this source code.
 */

namespace Pienancial\Application\Service;

use Lstr\Silex\Database\DatabaseService;
use Silex\Application;
use Silex\ServiceProviderInterface;

class Provider implements ServiceProviderInterface
{
    public function register(Application $app)
    {
        $app['config'] = $app->share(function ($app) {
            return $app['lstr.config']->load([
                __DIR__ . '/../../../../config/autoload/*.global.php',
                __DIR__ . '/../../../../config/autoload/*.local.php',
            ]);
        });

        $app['db'] = $app->share(function ($app) {
            return new DatabaseService($app, $app['config']['db']);
        });
    }

    public function boot(Application $app)
    {
    }
}
