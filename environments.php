<?php
/**
 * Part of the FuelPHP framework.
 *
 * @package    FuelPHP\Foundation
 * @version    2.0
 * @license    MIT License
 * @copyright  2010 - 2013 Fuel Development Team
 *
 * @return  array
 */

use FuelPHP\Foundation\Environment;
use FuelPHP\Foundation\Loader;

/**
 * Here you setup your different environments
 * (put all defaults into '__default')
 */
return array(
	/**
	 * Default settings, these are always run first
	 *
	 * @param   FuelPHP\Foundation\Environment $env
	 * @return  void|\Closure
	 */
	'__default' => function(Environment $env)
	{
		// Switch off error display to allow Fuel to handle them
		// ini_set('display_errors', 'Off');

		// Return array with environment config
		$env->locale = null;
		$env->language = 'en';
		$env->timezone = 'UTC';
		$env->encoding = 'UTF-8';

		return function (Environment $env)
		{
			// Include any additional init stuff in here
		};
	},

	/**
	 * Development environment
	 *
	 * @param   FuelPHP\Foundation\Environment $env
	 * @return  void|\Closure
	 */
	'development' => function(Environment $env)
	{
		error_reporting(-1);
	},

	/**
	 * Production environment
	 *
	 * @param   FuelPHP\Foundation\Environment $env
	 * @return  void|\Closure
	 */
	'production' => function(Environment $env)
	{
		error_reporting(0);
	},
);
