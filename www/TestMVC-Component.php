<?php
$pathToBootstrap = dirname(dirname(__FILE__)) .
	DIRECTORY_SEPARATOR . 'src' .
	DIRECTORY_SEPARATOR . 'com' .
	DIRECTORY_SEPARATOR . 'uvwebs' .
	DIRECTORY_SEPARATOR . 'nc' .
	DIRECTORY_SEPARATOR . 'bootstrap.php';

require_once $pathToBootstrap;

$context = new ncom_Context;

$controller = new ncom_test_Controller($context);
$controller->setRequest(new ncom_test_Request($_REQUEST));

