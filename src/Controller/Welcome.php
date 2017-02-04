<?php
/**
 * @package    demo-application
 * @version    2.0
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2017 Fuel Development Team
 * @link       http://fuelphp.com
 */

namespace Fuel\Demo\Controller;

use Fuel\Demo\Controller\Helpers\Base;
use Fuel\Display\View;

class Welcome extends Base
{
	/**
	 * The basic welcome message
	 *
	 * @return View
	 */
	public function actionIndex()
	{
		return $this->getView('welcome/index');
	}

	/**
	 * A typical "Hello, Bob!" type example.  This uses named parameters in
	 * the route, and a Presenter to show you how to use them.
	 *
	 * @return View
	 */
	public function actionHello()
	{
		return $this->getView(
			'welcome/hello',
			[
				'name' => $this->getRouteParam('name', 'World'),
			]
		);
	}

	/**
	 * The 404 action for the application.
	 *
	 * @return View
	 */
	public function action404()
	{
		return $this->getView('welcome/error404');
	}

}
