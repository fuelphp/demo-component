<?php

namespace Controller;

class Welcome extends \Controller\Base
{
	public function actionIndex()
	{
		return 'From Welcome::index, we say: Hello World!'.
			'<hr>Exec time: {exec_time} - Mem usage: {mem_usage} - Mem peak usage: {mem_peak_usage}';
	}

	public function actionView()
	{
		return 'From Welcome::view, we say: Hello World!';
	}
}
