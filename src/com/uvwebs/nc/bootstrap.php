<?php
// Initial entrance configuration point
error_reporting(E_ALL | E_STRICT);

set_include_path(
	get_include_path()
	. PATH_SEPARATOR . dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR
  	. PATH_SEPARATOR . '/home/g2/project/org/local/php/nicecomponent/www/'
);

require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'lib/AutoLoad.class.php';

nc_lib_AutoLoad::getInstance();
nc_lib_ExceptionAndErrorHandler::getInstance();

// static loads
$srcPath = dirname(__FILE__);
for($i = 0; $i < 3; $i++)
{
	$srcPath = dirname($srcPath);
}

require_once $srcPath . DIRECTORY_SEPARATOR . 'net'
	. DIRECTORY_SEPARATOR . 'smarty'
	. DIRECTORY_SEPARATOR . 'Smarty.class.php';

