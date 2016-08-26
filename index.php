<?php
define('IMOOC', realpath(' /'));
define('CORE', IMOOC . '/core');
define('APP', IMOOC . '/app');

define('DEBUG', true);

if(DEBUG){
	ini_set('display_error', 'On');
}
else{
	ini_set('display_error', 'Off');
}
