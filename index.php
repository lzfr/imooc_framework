<?php
/**
 *  entry file
 * 1. define var
 * 2. include lib func
 * 3. run framework
 */
//1
define('IMOOC', realpath('./'));
define('CORE', IMOOC . '/core');
define('APP', IMOOC . '/app');
define('MODULE', 'app');
define('DEBUG', true);

if(DEBUG){
	ini_set('display_error', 'On');
}
else{
	ini_set('display_error', 'Off');
}
//2
include CORE . '/common/function.php';
include CORE . '/imooc.php';

spl_autoload_register('\core\imooc::load');
//3.
// namespace to run core imooc run function
\core\imooc::run();
