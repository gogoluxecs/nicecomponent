<?php

abstract class nc_lib_Controller
{
	protected $reqeust = array();
	protected $view = null;
	protected $context = null;

	public function __construct(nc_lib_Context $context)
	{
		$this->context = $context;

		$this->overrideSuper();
	}

	public function setRequest(nc_lib_request $request)
	{
		$this->request = $request;
	}

	public function setView(nc_lib_view $view)
	{
		$this->view = $view;
	}

	protected function dispatchView()
	{
		if (!method_exists($this->view, 'render'))
			throw new Exception('Render method of the view Controller doesn\'t exist');

		$this->view->render();
	}

	protected function dispatchOperation()
	{
		if (!method_exists($this, 'execute'))
			throw new Exception('Execute method of the Controller doesn\'t exist');

		$this->execute();
	}

	public function dispatch()
	{
		$this->dispatchOperation();
		$this->dispatchView();
	}

	/**
	 * Extending constructor from child
	 *
	 * @return Mixed
	 */
	protected function overrideSuper() {}

	abstract protected function execute();
}

