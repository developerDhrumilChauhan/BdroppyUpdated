<?php

namespace Bdoppy\Providers;

use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;

/**
 * Class BdoppyRouteServiceProvider
 * @package Bdoppy\Providers
 */
class BdoppyRouteServiceProvider extends RouteServiceProvider
{
    /**
     * @param Router $router
     */
    public function map(Router $router)
    {
        $router->get('hello-world','Bdoppy\Controllers\BdoppyController@getHelloWorldPage');
    }
}