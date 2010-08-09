<?php

abstract class nc_lib_Controller
{
	protected $reqeust = array();
	protected $context = null;

	public function __construct(nc_lib_Context $context)
	{
		$this->overrideSuper();

		$this->context = $context;
	}

	public function setRequest(nc_lib_request $request)
	{
		$this->request = $request;
	}

	/**
	 * Extending constructor from child
	 *
	 * @return Mixed
	 */
	protected function overrideSuper() {}
}

