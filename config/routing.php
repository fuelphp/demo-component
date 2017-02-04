<?php
/**
 * @package    demo-component
 * @version    2.0
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2014 Fuel Development Team
 * @link       http://fuelphp.com
 */

/**
 * NOTICE:
 *
 * This is the route configuration for this FuelPHP application.
 * It contains configuration which is for this application only.
 */

return [
	'/' =>[
		'controller' => 'Fuel\Demo\Controller\WelcomeController',
		'action' => 'actionIndex'
	],
	'/hello/(string:name)' => [
		'controller' => 'Fuel\Demo\Controller\WelcomeController',
		'action' => 'actionHello'
	]
];
