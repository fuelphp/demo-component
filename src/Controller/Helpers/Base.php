<?php
/**
 * @package    demo-application
 * @version    2.0
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2017 Fuel Development Team
 * @link       http://fuelphp.com
 */

namespace Fuel\Demo\Controller\Helpers;

use Fuel\Display\View;
use Fuel\Display\ViewManager;
use Fuel\FileSystem\Finder;
use Fuel\Foundation\Controller\AbstractController;

/**
 * base class test
 */
class Base extends AbstractController
{
	protected $viewManager;

	public function __construct()
	{
		// TODO: Move this to the dependency container in fuelphp/foundation package
		$this->viewManager = new ViewManager(new Finder(realpath(__DIR__.'/../../../views')));
	}

	protected function getView(string $name, array $data = []): View
	{
		return $this->viewManager->forge($name, $data);
	}
}
