<?php
$pathToBootstrap = dirname(dirname(__FILE__)) .
	DIRECTORY_SEPARATOR . 'src' .
	DIRECTORY_SEPARATOR . 'com' .
	DIRECTORY_SEPARATOR . 'uvwebs' .
	DIRECTORY_SEPARATOR . 'nc' .
	DIRECTORY_SEPARATOR . 'bootstrap.php';

require_once $pathToBootstrap;

// initialize content in this way, because we need to use its global instance everywhere
$context = nc_lib_LazyInitilization::init('ncom_Context');

$view = new ncom_form_ViewController($context);

// initialize component
$controller = new ncom_form_OperationController($context);
$controller->setView($view);
$controller->dispatch();

