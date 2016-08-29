<?php
namespace core\lib;

class conf
{
	static function get($name, $file)
	{
		/**
		 * 1. check file exist
		 * 2. check existing config
		 * 3. cache config
		 */
		$file = IMOOC . '\core\config\\' . $file . '.php';
		if(is_file($file)){
			$conf = include $file;
			isset($conf[$name]);
		}
		else{
			throw new \Exception('file not found');
		}
	}

}
