<?php
$pathToBootstrap = dirname(dirname(__FILE__)) .
	DIRECTORY_SEPARATOR . 'src' .
	DIRECTORY_SEPARATOR . 'com' .
	DIRECTORY_SEPARATOR . 'uvwebs' .
	DIRECTORY_SEPARATOR . 'nc' .
	DIRECTORY_SEPARATOR . 'bootstrap.php';

require_once $pathToBootstrap;

$view = new ncom_test_View();
$context = new ncom_Context();

$controller = new nc_lib_controller(
	$_REQUEST, $context
);

$controller->dispatch();

