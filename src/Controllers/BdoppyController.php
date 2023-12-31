<?php

namespace Bdoppy\Controllers;

use Plenty\Plugin\Controller;
use Plenty\Plugin\Templates\Twig;

class BdoppyController extends Controller
{
    /**
     * @param Twig $twig
     * @return string
     */
    public function getHelloWorldPage(Twig $twig):string
    {
        return $twig->render('Bdoppy::Index');
    }
}