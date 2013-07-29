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
 * This is the application configuration for this FuelPHP application.
 * It contains configuration which is for this application only.
 */

return array(
	/**
	 * If true, every HTTP request of the type speficied in autoload_methods
	 * will be checked for a CSRF token. If not present or not valid, a
	 * security exception will be thrown.
	 */
	'csrf_autoload'         => false,
	'csrf_autoload_methods' => array('post', 'put', 'delete'),

	/**
	 * Name of the form field that holds the CSRF token.
	 */
	'csrf_token_key'        => 'fuel_csrf_token',

	/**
	 * Expiry of the token in seconds. If zero, the token remains the same
	 * for the entire user session.
	 */
	'csrf_expiration'       => 0,

	/**
	 * A salt to make sure the generated security tokens are not predictable
	 */
	'token_salt'            => 'put your salt value here to make the token more secure',

	/**
	 * Allow the Input class to use X headers when present
	 *
	 * Examples of these are HTTP_X_FORWARDED_FOR and HTTP_X_FORWARDED_PROTO, which
	 * can be faked which could have security implications
	 */
	'allow_x_headers'       => false,

	/**
	 * This input filter can be any normal PHP function as well as 'xss_clean'
	 *
	 * WARNING: Using xss_clean will cause a performance hit.
	 * How much is dependant on how much input data there is.
	 */
	'uri_filter'       => array(
		'HtmlEntities'
	),

	/**
	 * This input filter can be any normal PHP function as well as 'xss_clean'
	 *
	 * WARNING: Using xss_clean will cause a performance hit.
	 * How much is dependant on how much input data there is.
	 */
	'input_filter'  => array(),

	/**
	 * This output filter can be any normal PHP function as well as 'xss_clean'
	 *
	 * WARNING: Using xss_clean will cause a performance hit.
	 * How much is dependant on how much input data there is.
	 */
	'output_filter'  => array(
		'htmlentities'
	),

	/**
	 * Encoding mechanism to use on htmlentities()
	 */
	'htmlentities_flags' => ENT_QUOTES,

	/**
	 * Wether to encode HTML entities as well
	 */
	'htmlentities_double_encode' => false,

	/**
	 * Whether to automatically filter view data
	 */
	'auto_filter_output'  => true,

	/**
	 * With output encoding switched on all objects passed will be converted to strings or
	 * throw exceptions unless they are instances of the classes in this array.
	 */
	'whitelisted_classes' => array(),
);
