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
 * You can finish the routing configuration by returning a Fuel v1.x style
 * route array, which will be parsed and converted to v2 route definitions
 */

// module default route
$this->router->all($this->uri, $this->uri.'/welcome/index', $this->uri.'-module');

// named GET route with a parameter
$this->router->get('moda/hello/{name}', 'moda/welcome/hello', 'moda-hello');
