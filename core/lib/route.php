<?php
namespace core\lib;

class route
{

	public $ctrl;
	public $action;

	public function __construct()
	{
		// index/index => indecontroller->index()
		/**
		 * hide index.php
		 * get url param
		 * return controller et action
		 */
		if(isset($_SERVER['REQUEST_URI']) && $_SERVER['REQUEST_URI'] != '/'){
			// /index/index
			$path= $_SERVER['REQUEST_URI'];
			$patharr = explode('/', trim($path, '/'));

			if(isset($patharr[0])){
				$this->ctrl = $patharr[0];
				unset($patharr[0]);
			}
			if(isset($patharr[1])){
				$this->action = $patharr[1];
				unset($patharr[1]);
			}
			else{
				$this->action = 'index';
			}

			// url transform reste of elem to get var
			// like id/123325/str/3/test/4
			// to Get change to id=12322 str=3 test=4
			$count = count($patharr) + 2;
			$i = 2;
			while($i < $count)
			{
				if(isset($patharr[$i + 1])){
					$_GET[$patharr[$i]] = $patharr[$i + 1];
					$i = $i + 2;
				}
			}
			p($_GET);

		}
		else{
			$this->ctrl=  'index';
			$this->acton = 'index';
		}
		p($patharr);
	}


}
