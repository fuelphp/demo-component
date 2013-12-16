<?php
/**
 * @package    demo-application
 * @version    2.0
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2013 Fuel Development Team
 * @link       http://fuelphp.com
 */

namespace Demo\Controller\Helpers;

use Fuel\Foundation\InjectionFactory;

/**
 * base class test
 */
class Base extends \Fuel\Controller\Base
{
	public function __construct(InjectionFactory $factory)
	{
		parent::__construct($factory);
	}
}
