<?php
/**
 * Part of the FuelPHP framework.
 *
 * @package    Application
 * @version    2.0
 * @license    MIT License
 * @copyright  2010 - 2013 Fuel Development Team
 */

/**
 * Generate a Package object for this package and return it
 */
return $this->env->forge('FuelPHP\Foundation\Package')
	->setRoutable(true)
	->setPath(__DIR__)
	->setNamespace('');
