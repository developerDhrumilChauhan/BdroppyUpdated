<?php

namespace Bdoppy\Providers;

use Plenty\Plugin\ServiceProvider;

/**
 * Class BdoppyServiceProvider
 * @package Bdoppy\Providers
 */
class BdoppyServiceProvider extends ServiceProvider
{
    /**
    * Register the route service provider
    */
    public function register()
    {
        $this->getApplication()->register(BdoppyRouteServiceProvider::class);
    }
}