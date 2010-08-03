<?php

abstract class nc_lib_Controller()
{
	protected $reqeust = array();
	protected $context = null;
	protected $view = null;

	public function __construct($context, $request)
	{
		$this->context = $context;
		$this->request = $request;
	}

	public function dispatch()
	{
		$this->view->render();
	}
}

