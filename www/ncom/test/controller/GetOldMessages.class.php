<?php
class ncom_test_controller_GetOldMessages
{
	private $controller = null;

	public function __construct($controller)
	{
		$this->controller = $controller;
	}

	public function execute()
	{
		if($this->validate())
			$this->controller->getOldMessage();
		else
			return false;
	}

	private function validate()
	{
		return false;
	}
}

