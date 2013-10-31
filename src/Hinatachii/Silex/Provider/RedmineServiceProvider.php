<?php

namespace Hinatachii\Silex\Provider;

use Silex\Application;
use Silex\ServiceProviderInterface;

class RedmineServiceProvider implements ServiceProviderInterface
{
    public function register(Application $app)
    {
       
        $app['redmine'] = $app->share(function () use ($app) {
           
              return new \Redmine\Client($app['redmine.options']['url'], $app['redmine.options']['apikey']);
        });
    }

    public function boot(Application $app)
    {
    }
}
