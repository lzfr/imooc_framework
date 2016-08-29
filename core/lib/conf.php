<?php
namespace core\lib;

class conf
{
	static public $conf = [];
	static function get($name, $file)
	{
		/**
		 * 1. check file exist
		 * 2. check existing config
		 * 3. cache config
		 */
		// fi already cache config file
		p(self::$conf[$file]);
		p(1);
		if(isset(self::$conf[$file])){
			return self::$conf[$file];
		}
		else{
			$path = IMOOC . '/core/config/' . $file . '.php';
			if(is_file($path)){
				$conf = include $path;
				if(isset($conf[$name]))
				{
					self::$conf[$file] = $conf;
					return $conf[$name];
				}
				else{
//					throw new \Exception('pas ce config');
				}
			}
			else{
//				throw new \Exception('file not found');
			}
		}

	}

}
