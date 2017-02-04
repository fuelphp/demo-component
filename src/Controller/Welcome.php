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
	 * @return string
	 */
	public function actionIndex()
	{
		return $this->getView('welcome/index.php')->render([]);
	}

	/**
	 * A typical "Hello, Bob!" type example.  This uses named parameters in
	 * the route, and a Presenter to show you how to use them.
	 *
	 * @return string
	 */
	public function actionHello()
	{
		return $this->getView(
			'welcome/hello',
			[
				'name' => $this->getRouteParam('name', 'World'),
			]
		)
			->render();
	}

	/**
	 * The 404 action for the application.
	 *
	 * @return string
	 */
	public function action404()
	{
		return $this->getView('welcome/error404')->render();
	}

}
