<?php

namespace Controller;

class Welcome extends \Controller\Base
{
	/**
	 * The basic welcome message
	 *
	 * @access  public
	 * @return  Response
	 */
	public function actionIndex()
	{
		return $this->app->getViewManager()->forge('welcome/index');
	}

	public function actionView()
	{
		return 'From Welcome::view, we say: Hello World!'.
			'<hr>Exec time: {exec_time} - Mem usage: {mem_usage} - Mem peak usage: {mem_peak_usage}';
	}
}
