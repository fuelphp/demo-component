<?php
/**
 * @package    demo-application
 * @version    2.0
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2013 Fuel Development Team
 * @link       http://fuelphp.com
 */

/**
 * NOTICE:
 *
 * This is the route configuration for this FuelPHP application.
 * It contains configuration which is for this application only.
 */

/**
 * Variables passed:
 * $router - This applications Router instance
 *
 * You can finish the routing configuration by returning a Fuel v1.x style
 * route array, which will be parsed and converted to v2 route definitions
 */

// 404 route
$router->all(null, 'welcome/404', '404');

// homepage route
$router->all('/', 'welcome/index', 'root');

// named GET route with a parameter
$router->get('hello/{name}', 'welcome/hello', 'hello');

// inline route
$router->all('inline', function() { return \Response::forge('html', 'welcome/index'); });

/*
 * We support old v1.x style routes too when you have the Compatibility package loaded!
 */

 /*
return array(
    'blog/(:any)'      => 'blog/entry/$1', // Routes /blog/entry_name to /blog/entry/entry_name
    '(:segment)/about' => 'site/about/$1', // Routes /en/about to /site/about/en
    '(\d{2})/about'    => 'site/about/$1', // Routes /12/about to /site/about/12
    'blog/:year/:month/:id' => 'blog/entry', // Routes /blog/2010/11/entry_name to /blog/entry
    // Routes GET /blog to /blog/all and POST /blog to /blog/create
    'blog' => array(array('GET', new Route('blog/all')), array('POST', new Route('blog/create'))),
    'blog/(:any)' => array(array('GET', new Route('blog/show/$1'))),
    'blog/(:any)' => array(array('GET', new Route('blog/show/$1'), true)),
);
*/
