<?php
class ncom_form_OperationController
extends nc_lib_Controller
{
	protected function execute()
	{
		if($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			$this->post();
		}
	}

	private function post()
	{
		$h = new ncom_form_operation_command_Validate();
		$h->execute();
	}
}

