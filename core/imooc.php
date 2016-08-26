<?php
namespace core;
class imooc
{
	public static $classMap = array();
	public static function run()
	{
		// new a class route
		/**
		 * @param \core\lib\route
		 */
		$route = new \core\lib\route();

		$ctrlClass = $route->ctrl;
		$action = $route->action;

	}

	static public function load($class)
	{
		// auto load lib
		// new \core\route();
//		$class = '\core\route';
//		IMOOC . '/core/route.php';
		// replace / par \
		p($class);
		p(IMOOC .$class . '.php');
		if(isset($classMap[$class])){
			return true;
		}
		else{
			$class = str_replace('\\', '/', $class);
			$file = IMOOC . '/' . $class . '.php';
			if(is_file($file)){
				include $file;
				self::$classMap[$class] = $class;
			}
			else{
				return false;
			}
		}

	}
}
