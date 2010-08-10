<?php
/**
 * The Command invoker class
 *
 */
class ncom_test_OperationController
extends nc_lib_Controller
{
	// call the commands depending on request
	// and sets the view per each command
	// commands can share one or different views

	private $s = null;

	protected function overrideSuper()
	{
		$this->s = $this->context->getSmarty();
	}

	/**
	 * Invoke the commands
	 *
	 * @return Void
	 */
	protected function execute()
	{
		$operation = isset($_REQUEST['operation']) ? $_REQUEST['operation'] : null;

		switch($operation)
		{
			case 'get_all':
				$o = new ncom_test_operation_command_GetNewMessages($this->context);
				$rs = $o->execute();
				break;

			case 'get_single':
				$o = new ncom_test_operation_command_GetOldMessages();
				$rs = $o->execute();
				break;
		}
	}
}

