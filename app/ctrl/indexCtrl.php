<?php
namespace app\ctrl;

use \core\lib\conf;
class indexCtrl extends \core\imooc
{

	public function index($data)
	{
//		p('index contr');
//		$model = new \core\lib\model();
//		$sql = "SELECT * FROM items";
//		$ret = $model->query($sql);
//		p($ret->fetchAll());

		// \core\lib\conf::get('CTRL');
		$temp = conf::get('CTRL');
		$temp = conf::get('ACTION');


		$data = "hello world";
		$title = 'title file ';
		$this->assign('title', $title);
		$this->assign('data', $data);
		$this->display('index.html');
	}
}
