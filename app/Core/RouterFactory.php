<?php

declare(strict_types=1);

namespace App\Core;

use Nette;
use Nette\Application\Routers\RouteList;

final class RouterFactory
{
    use Nette\StaticClass;

    public static function createRouter(): RouteList
    {
        $router = new RouteList;

        // Specific routes
        $router->addRoute('about', 'Home:about');
        $router->addRoute('kontakt', 'Home:contact');
        $router->addRoute('susenky', 'Home:cookies');
        $router->addRoute('cenik', 'Home:pricelist');

        // Default route (keep this last)
        $router->addRoute('<presenter>/<action>[/<id>]', 'Home:default');

        return $router;
    }
}