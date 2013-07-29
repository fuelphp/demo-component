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

// homepage route
$router->all('/', 'welcome/index', 'root');

// named GET route with a parameter
$router->get('hello/{name}', 'welcome/hello', 'hello');

/*
 * We support old v1.x style routes too!
 */
return array(
	'_404_'   => 'welcome/404',    // The main 404 route
);
