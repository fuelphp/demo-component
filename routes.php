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
 * Route definitions for this package
 */

// CHECKME temporary until the route engine has been sorted out!
$this->add('root')->match('/')->to('Welcome/Index')->methods('GET', 'POST');

// and finish off with a default route to all existing routeable controllers
$this->add('__default')->match('(.*)')->to('$1');
