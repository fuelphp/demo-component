<?php
/**
 * @package    Fuel
 * @version    2.0
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2013 Fuel Development Team
 * @link       http://fuelphp.com
 */

/**
 * NOTICE:
 *
 * This is the global configuration for the FuelPHP framework. It contains
 * configuration which is global for all installed applications.
 */

return array(

	/**
	 * A couple of named patterns that are often used. Use the formats defined
	 * for strftime: http://php.net/manual/en/function.strftime.php
	 */
	'patterns' => array(
		'local'		 => '%c',

		'mysql'		 => '%Y-%m-%d %H:%M:%S',
		'mysql_date' => '%Y-%m-%d',

		'us'		 => '%m/%d/%Y',
		'us_short'	 => '%m/%d',
		'us_named'	 => '%B %d %Y',
		'us_full'	 => '%I:%M %p, %B %d %Y',
		'eu'		 => '%d/%m/%Y',
		'eu_short'	 => '%d/%m',
		'eu_named'	 => '%d %B %Y',
		'eu_full'	 => '%H:%M, %d %B %Y',

		'24h'		 => '%H:%M',
		'12h'		 => '%I:%M %p'
	)
);
